#!/usr/bin/env bash

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
ANTLR_VERSION="4.13.2"
ANTLR_JAR="${ANTLR_JAR:-${ROOT_DIR}/.tools/antlr-${ANTLR_VERSION}-complete.jar}"
TMP_DIR="$(mktemp -d)"

cleanup() {
  rm -rf "${TMP_DIR}"
}
trap cleanup EXIT

mkdir -p "$(dirname "${ANTLR_JAR}")"

if [[ ! -f "${ANTLR_JAR}" ]]; then
  curl -fsSL "https://www.antlr.org/download/antlr-${ANTLR_VERSION}-complete.jar" -o "${ANTLR_JAR}"
fi

(
  cd "${ROOT_DIR}"
  java -jar "${ANTLR_JAR}" -Dlanguage=PHP -visitor -listener -o "${TMP_DIR}" Lua.g4
)

perl -0pi -e 's/^namespace \{/namespace Raudius\\Luar\\Parser {/m' "${TMP_DIR}/LuaLexer.php"

perl -0pi -e 's/^namespace \{/namespace Raudius\\Luar\\Parser {/m' "${TMP_DIR}/LuaParser.php"
perl -0pi -e 's/^namespace Context \{/namespace Raudius\\Luar\\Parser\\Context {/m' "${TMP_DIR}/LuaParser.php"
perl -0pi -e 's/^\s*use LuaParser;$/\tuse Raudius\\Luar\\Parser\\LuaParser;/m' "${TMP_DIR}/LuaParser.php"
perl -0pi -e 's/^\s*use LuaVisitor;$/\tuse Raudius\\Luar\\Parser\\LuaVisitor;/m' "${TMP_DIR}/LuaParser.php"
perl -0pi -e 's/^\s*use LuaListener;$/\tuse Raudius\\Luar\\Parser\\LuaListener;/m' "${TMP_DIR}/LuaParser.php"

for file in LuaBaseVisitor.php LuaVisitor.php LuaListener.php LuaBaseListener.php; do
  python3 - "${TMP_DIR}/${file}" <<'PY'
import sys
from pathlib import Path

path = Path(sys.argv[1])
text = path.read_text()

if "namespace Raudius\\Luar\\Parser;" in text:
    raise SystemExit(0)

needle = "*/\n"
idx = text.find(needle)
if idx == -1:
    raise SystemExit(f"Could not find file header in {path}")

insert_at = idx + len(needle)
updated = text[:insert_at] + "\nnamespace Raudius\\Luar\\Parser;\n" + text[insert_at:]
path.write_text(updated)
PY
done

for file in \
  LuaLexer.php \
  LuaParser.php \
  LuaVisitor.php \
  LuaBaseVisitor.php \
  LuaListener.php \
  LuaBaseListener.php \
  Lua.tokens \
  Lua.interp \
  LuaLexer.tokens \
  LuaLexer.interp
do
  cp "${TMP_DIR}/${file}" "${ROOT_DIR}/src/Parser/${file}"
done

echo "Parser regenerated into src/Parser with ANTLR ${ANTLR_VERSION}."
