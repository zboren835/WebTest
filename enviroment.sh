#!/bin/bash
# ===============================================
# Python uv 開發環境初始化腳本（多套件版）
# ===============================================

set -e

# 要安裝的套件清單
PACKAGES=(
    flask
    mysql-connector-python
    requests       # 這邊示範可以加其他套件
    fastapi        # 可以繼續加
)

echo "正在安裝 uv..."
curl -LsSf https://astral.sh/uv/install.sh | sh

# 確保 uv 可以用
export PATH="$HOME/.local/bin:$PATH"

echo "建立虛擬環境..."
uv venv

echo "啟用虛擬環境..."
source .venv/bin/activate

echo "初始化 uv 專案..."
uv init

echo "安裝套件..."
for pkg in "${PACKAGES[@]}"; do
    echo "安裝 $pkg ..."
    uv add "$pkg"
done

echo "✅ Python uv 環境初始化完成！"
