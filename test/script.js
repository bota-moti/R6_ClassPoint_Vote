// ボタンを配置する要素を取得
const container = document.querySelector('.button-container');
const totalButtons = 20; // ボタンの総数

// ボタンを生成して配置
for (let i = 0; i < totalButtons; i++) {
    const button = document.createElement('button');
    if(i == 0){
        button.textContent = `1-1`; // ボタンのテキスト
    }
    
    const angle = (360 / totalButtons) * i; // ボタンの角度を計算
    const radius = 250; // ボタンを配置する円の半径

    // ボタンの位置を計算
    const x = Math.cos((angle * Math.PI) / 180) * radius;
    const y = Math.sin((angle * Math.PI) / 180) * radius;

    // ボタンのスタイルに位置を適用
    button.style.left = `${150 + x}px`; // コンテナの中心を基準に配置
    button.style.top = `${150 + y}px`;

    // ボタンをコンテナに追加
    container.appendChild(button);
}
