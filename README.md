# coachtech-free-market

![image](https://github.com/user-attachments/assets/b82e37d7-bdfd-48e7-abcc-0cbea1ffa674)


## 作成した目的

このアプリは模擬案件の課題として制作しました。

与えられた要件や完成イメージ図をもとに、

テーブル設計・ER図作成・コーディングを行いました。

追加実装項目、及びイメージ図には無いが追加したページに関しては

こちらからコーチに「この様な形にしたい」「こういう画面遷移はどうか」といったアイデアを出し、

面接毎にアドバイスや許可をもらい実装しました。

## アプリケーションURL

今回はデプロイをしていないのでアプリケーションURLはありません。

## 他のリポジトリ

ありません。

## 機能一覧

### ユーザー側

・会員登録機能(入力項目はメールアドレスとパスワード)

・ログイン機能(メールアドレスとパスワードで認証)

・ログアウト機能

・会員のプロフィール情報変更、更新機能(入力項目はアバター画像、名前、郵便番号、住所、建物名)

・商品検索機能

・商品一覧取得機能

・商品詳細取得機能

・商品お気に入り一覧取得機能

・ユーザー購入商品一覧取得機能

・ユーザ出品商品一覧取得機能

・商品お気に入り追加機能

・商品お気に入り削除機能

・商品コメント追加機能

・商品コメント削除機能

・商品コメントに対するリプライ追加機能

・リプライを含む商品コメント一覧取得機能

・商品出品機能

・stripeを利用した商品購入機能

・配送先住所変更、更新機能

### 管理者側

・管理者ログイン機能(ログインIDとパスワードで認証)

・管理者ログアウト機能

・ユーザー一覧取得機能

・ユーザー詳細取得機能

・ユーザー検索機能

・指定したユーザーの削除機能

・ユーザーのコメント詳細取得機能

・ユーザーの特定のコメント削除機能

・管理者側からユーザーへメール送信機能(入力項目は名前とメッセージ)

### 機能に関する注釈

・購入された商品は再度購入することは出来ません。商品一覧からも閲覧できなくなります。
(出品者はマイページから商品詳細にアクセス出来ますが、「販売は終了しました」のメッセージが表示されます)

・プロフィールが作成されていない状態では商品の購入は出来ません。(出品者が発送する際に必要な購入者の氏名と送り先が存在しないため)

・コメント一覧はコメント作成画面の吹き出しアイコンをクリックすることで閲覧可能。

・メールはmailhogにアクセスすることで確認できます。(http://localhost:8025)

## 使用技術

・php 8.3.1

・laravel 8.83.27

・nginx:1.21.1

・MYSQL:8.0.26

・mailhog

・stripe

## テーブル設計

![image](https://github.com/user-attachments/assets/5c786325-89ca-418d-9e52-5f337d57bf34)
![image](https://github.com/user-attachments/assets/0f5ab473-5b79-4f14-ad82-f5a57c2f9c2e)
![image](https://github.com/user-attachments/assets/a4457bc5-ac0f-41b3-a667-c3b29e4cfc26)
![image](https://github.com/user-attachments/assets/f2febc2d-0557-4538-897d-d7a29af9fe4d)
![image](https://github.com/user-attachments/assets/594c044b-6ad5-44a2-82c9-a9dba8c89b29)
![image](https://github.com/user-attachments/assets/62a61cbc-b04b-4149-9547-112787d9618a)
![image](https://github.com/user-attachments/assets/4bc09126-546e-4fab-b55a-da1236e9cd83)
![image](https://github.com/user-attachments/assets/eb777901-0c86-4466-88ff-f0afb8f10105)
![image](https://github.com/user-attachments/assets/157b7a74-1aee-4966-b84a-bf8b1df2bcb4)
![image](https://github.com/user-attachments/assets/c4d24bd6-6981-46a6-88a8-0f408589067d)
![image](https://github.com/user-attachments/assets/5c7503c1-a120-4d36-b1a7-eb1230121ffa)
![image](https://github.com/user-attachments/assets/7f2ee1df-06a2-45b8-8f2b-43944ceba3d8)

## ER図

![image](https://github.com/user-attachments/assets/ae8e073e-a739-4979-8204-6bb5322ba625)


### Dockerビルド

1．git clone git@github.com:coachtech-material/laravel-docker-template.git

2．docker-compose up -d --build

### laravel環境構築

1．docker-compose exec php bash

2．composer install

3．cp .env.example .env（.env.exampleファイルから.envを作成し、環境変数を変更）

4．php artisan key:generate

5．default.confにclient_max_body_size 100M;、php.iniにmemory_limit = 100M、memory_limit = 100M、upload_max_filesize = 100Mを追記したのちdocker-compose up及びdocker-compose up -d

6.php artisan storage:link

7.composer require livewire/livewire

8.docker-compose.ymlにメールサーバコンテナを追記、.envを編集しdocker-compose build及びdocker-compose up -d

9.stripeにアカウントを作成、公開キーとシークレットキーを.envに追記してcomposer require stripe/stripe-php

10.php artisan vendor:publish --tag=laravel-pagination

11.php artisan migrate

12.php artisan db:seed

## その他

### テスト用ユーザー

・名前：test太郎

・メールアドレス：test@example.co.jp

・パスワード：testpass

・決済時のカードはカード番号：4242424242424242　セキュリティーコード：000　日付：01/30を利用してください。

### 管理者

・ログインID：admin0001

・パスワード：adminpass

### 機能検証用データ

・seederを利用してプロフィールを含むユーザー情報を10件(テスト用ユーザーを含む)、商品情報を20件、管理者を1件作成してあります。
