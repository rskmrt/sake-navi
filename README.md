## アプリケーション名  
SAKE-NAVI  


## 概要
カクテルの情報サイト。  
「カクテルの一覧を表示・検索」、「カクテルをお気に入り」、「自分の持っている材料から作れるカクテルの表示」、「オリジナルカクテルの登録」ができるwebサイトです。


## 工夫した点  
- 見やすくシンプルなデザイン
- レスポンシブデザインでタブレットに対応
- bladeテンプレートを活用して、レイアウトを共通化
- 管理者と一般ユーザーでアクセス方法を分けるマルチログイン機能の実装
- 複数のControllerに分離しFat Controllerの防止


## 苦労した点  
- DB設計
- DBのリレーションの考え方
- レスポンシブデザインなど見やすくするためのデザイン設計


## サイトURL  
一般　　http://www.sake-navi.jp  
管理者　http://www.sake-navi.jp/admin


## テスト用アカウント
一般ユーザー
メールアドレス | パスワード
-|-
test1@test | 12345678
test2@test | 12345678
test3@test | 12345678

管理者
メールアドレス | パスワード
-|-
admin@test | 12345678


## 使用技術
- フロントエンド  
 HTML/CSS  
 bootstrap

- バックエンド  
PHP 7.4.29  
Laravel Framework 6.20.44

- DB  
 mysql

- その他使用技術  
 git(gitHub) / Visual Studio Code / Tera Term / PHPMyAdmin / XAMPP


## 機能一覧
- 認証機能  
-ユーザー登録  
-ログイン  
-ログアウト  
-マルチログイン  

- 一般ユーザー
-カクテル一覧表示  
-カクテル詳細表示  
-カクテル検索  
-カクテルをお気に入りに追加/削除  
-自分の持っている材料の登録  
-登録した材料から作れるカクテルを一覧表示  
-オリジナルカクテルの登録/編集/削除  

- 管理者  
-全体で表示するカクテルの登録/編集/削除  
-ベースの一覧表示/登録/編集/削除  
-材料の一覧表示/登録/編集/削除  
-ユーザーの一覧表示/編集/削除  


## データベース設計
![Database ER diagram (crow's foot)](https://user-images.githubusercontent.com/87703969/169865277-59ff4f1a-8337-42f7-a055-718a52a5f72e.svg)


## 利用方法
#### 一般ユーザー
- 一覧/詳細表示
    - カクテルの一覧を五十音順に表示する
    - ページネーションにより複数のページに分割
    - viewボタンをクリックすると、カクテルの詳細ページに遷移する

![一覧表示](https://user-images.githubusercontent.com/87703969/169858020-2d3998b5-faf1-4e65-ae9c-c1ef006f3006.gif)  

- 検索
    - 虫眼鏡ボタンをクリックすると検索用のページが表示される
    - 条件を指定して検索ボタンをクリックすると、条件に当てはまるカクテルが一覧表示される
    - 検索結果に当てはまるカクテルが無ければ、「表示できるカクテルはありません」と表示される
    - テキストフォームに入力した検索結果は、「カクテル名」「ベース名」「材料名」のいずれかに当てはまるものが一覧表示される


![検索](https://user-images.githubusercontent.com/87703969/169859204-661961af-e440-4a33-8669-9ae9ec0f9c4e.gif)  

- ログイン・ログアウト
    - 未ログイン状態で「オリジナルカクテル」「お気に入り」「作れるカクテル」をクリックすると、ログイン画面に遷移する
    - 未ログイン状態ではページ右上のアカウント名に「guest」が表示され、クリックするとユーザー登録・ログインすることができる
    - ログインすると、ページ右上に登録したユーザー名が表示される
    - ログイン状態であれば「オリジナルカクテル」「お気に入り」「作れるカクテル」をクリックするとそれぞれのページに遷移できる
    - ログイン状態でページ右上のユーザー名をクリックしlogoutを選択すると、ログアウトする

![ログイン・ログアウト](https://user-images.githubusercontent.com/87703969/169859911-1a9f220d-61b9-4c50-af53-5a6207bcbc12.gif)  

- オリジナルカクテル
    - オリジナルカクテルページで登録したカクテルはカクテル一覧ページでは表示されず、ログインしているユーザーのみに表示される
    - オリジナルカクテルを登録ボタンクリックすると登録画面に遷移し、各項目を記入して登録できる
    - カクテルの編集ボタンをクリックすると登録されている情報を保持して編集画面が表示され、更新することができる
    - カクテルのゴミ箱アイコンをクリックするとポップアップが表示され、OKボタンをクリックすると削除される

![オリジナル](https://user-images.githubusercontent.com/87703969/169860334-9ac10ec7-b27c-4230-abd0-1d48a31125c4.gif)  

- お気に入り
    - カクテルのハートアイコンをクリックするとハートの色が変わりお気に入りに追加され、カクテル右下のおいしいよねの数が+1される
    - お気に入りをクリックすると、自分がお気に入りしたカクテルの一覧が表示される
    - 他ユーザーでログインしてみても、それぞれのカクテルが全体でどれだけの数お気に入りされているか確認できる

![お気に入り](https://user-images.githubusercontent.com/87703969/169861393-37eaa12a-1ad3-41fc-a017-7706f244f870.gif)  

- 作れるカクテル
    - 自分が所有しているベース/材料を登録することで、いま作れるカクテルを一覧表示する
    - 材料の登録をクリックすると材料登録ページに遷移し、ページ左側に未登録のベース/材料・右側に登録済のベース/材料が表示される
    - ベース/材料を登録すると作れるカクテル一覧ページに遷移し、いま作れるカクテルが一覧表示される
    - 登録済みのベース/材料から作れるカクテルが存在しなければ、「表示できるカクテルはありません」と表示される

![作れるカクテル](https://user-images.githubusercontent.com/87703969/169861844-2190815e-a7d0-45c5-be1b-eeb7714bd797.gif)  

___

#### 管理者
- ログイン/ログアウト  
    - 管理者専用のURLを使用する
    - 管理者用のメールアドレス、パスワードを入力する
    - ログインが完了すると更新日順でカクテルの一覧が表示される
    - ログアウトをクリックすると、ログアウトが完了し一般ページに遷移する

![ログイン](https://user-images.githubusercontent.com/87703969/169964239-95a8916c-4996-4726-9df9-1ab309b57a13.gif)  

- カクテル管理
    - 管理者のみが、すべてのユーザーに表示されるカクテルを登録/編集/削除することができる
    - カクテル一覧ページのカクテル登録をクリックすると、カクテル登録のページに遷移する
    - 編集をクリックすると、カクテルの情報を保持した状態でカクテル編集ページに遷移する
    - カクテルを登録したあと一般ページを表示すると、管理者で登録したカクテルが表示され詳細も見ることができる
    - ゴミ箱アイコンをクリックするとポップアップが表示され、OKをクリックするとカクテルを削除する

![カクテル登録](https://user-images.githubusercontent.com/87703969/169964704-a35b96e8-d905-4a94-b053-469f319b5ae3.gif)

- ベース/材料管理
    - カクテル登録や検索で使用するベース・材料を登録/編集/削除することができる
    - 表の材料名やベース名等をクリックすると並び替えをすることができる

![ベース・材料管理](https://user-images.githubusercontent.com/87703969/169964751-5f0ab005-6825-4b48-806d-2f324d790a46.gif)

- ユーザー管理
    - 登録されているユーザーの名前とメールアドレスを編集/削除することができる
    - 表の名前やemail等をクリックすると並び替えをすることができる

![ユーザー管理](https://user-images.githubusercontent.com/87703969/169964807-d5c6ef2b-85f3-4551-a8e8-27bcf592b064.gif)


