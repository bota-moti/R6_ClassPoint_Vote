
## R6沖縄高専祭高専祭でのクラス杯投票システム

### プロジェクトについて
令和6年度沖縄高専祭にてクラス杯投票を行うシステムとして開発した。
<br>本番環境ではタッチモニターを使用した投票を一般来場者に行ってもらった。

２０のクラスに対し、クラスを一つ選択
<br>↓
<br>選択したクラスに対して五段階評価を行う
<br>➡この投票を行うことでクラス杯の優勝クラスを決める

まずスタート状態の画面としては下記の画像になる
クラス２０個分の画像と投票ボタンを横４列、縦５列に配置
![Image](https://github.com/user-attachments/assets/6869d0f1-1a77-4da5-9ee0-5700bbcff8e5)
*背景イラスト：令和６年度沖縄高専祭でのポスターより引用<br>
本作品は作者の○○様より掲載許可をいただいております。無断転載・二次利用を禁じます。

ボタンを押すと画面遷移を行い、下記の画像の通りになり、確認画面へ
![Image](https://github.com/user-attachments/assets/39d574a5-f5d9-47a4-a2a2-a56e5255a248)

☆選ぶと下記の画面へ遷移
![Image](https://github.com/user-attachments/assets/f7ca711d-622b-4cdb-afb0-46c2896f85ef)

２秒後にスタート状態の画面へ

### プロジェクトの背景について
今年の高専祭では色々な新しいことに挑戦するという実行委員のテーマだったため

今までFormsなどを使っていたクラス杯投票を高専っぽいシステムにしたいという話から始まった。

来場者には学生の親や兄弟といったPCなどに疎い可能性があるため、作成するならタッチモニターでの実施となった。

### 環境

<!-- 言語、フレームワーク、ミドルウェア、インフラの一覧とバージョンを記載 -->
動作環境としてwin10、XMAPPを使用。

| 言語・フレームワーク・サーバ　　| バージョン |
| --------------------- | ---------- |
| PHP                   | 8.2.12    |
| HTML                  | 4.2.1      |
| CSS                   | 3.14.0     |
| MariaDB                | 10.0\4.32        |
| Apache                | 2.4.58    |


### ディレクトリ構成
<pre>
.
├── css
  ├── kousen.png
  ├── thank.php
  ├── class_check.php
  └── style_index.css
├── class_check.php
├── index_.php
└── thank.php
</pre>

### DBテーブル設計

##### 学級情報テーブル(classes)
| カラム名  | 型 | 属性   | 説明 |
| --------------------- | ----------  |----------   |----------   |
| class_id              | INT         | PRIMARY KEY | 学級ID      | 
| class_name            | VARCHAR(50) | NOT NULL    | 学級名      |

##### 評価テーブル(ratings)
| カラム名  | 型 | 属性   | 説明 |
| --------------------- | ----------  |----------   |----------   |
| rating_id              | INT         | PRIMARY KEY | 学級ID      | 
| class_id               | INT         | FOREIGN KEY    | 評価対象の学級ID(classes)      |
| class_name            | TINYINT | NOT NULL CHECK (rating BETWEEN 1 AND 5)    | 評価(1~5)      |

![Image](https://github.com/user-attachments/assets/ac242ff6-02c6-4a79-aafd-8e8c31219d48)

