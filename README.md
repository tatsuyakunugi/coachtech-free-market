# coachtech-free-market

![image](https://github.com/user-attachments/assets/b82e37d7-bdfd-48e7-abcc-0cbea1ffa674)


## 作成した目的

このアプリは模擬案件の課題として制作しました。

与えられた要件や完成イメージ図をもとに、

テーブル設計・ER図作成・コーディングを行いました。

## アプリケーションURL

## 他のリポジトリ

## 機能一覧

### 機能に関する注釈

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

### Dockerビルド

1．git clone git@github.com:coachtech-material/laravel-docker-template.git

2．docker-compose up -d --build

### laravel環境構築

1．docker-compose exec php bash

2．composer install

3．cp .env.example .env（.env.exampleファイルから.envを作成し、環境変数を変更）

4．php artisan key:generate

5．default.confにclient_max_body_size 100M;、

   php.iniにmemory_limit = 100M、memory_limit = 100M、upload_max_filesize = 100Mを追記したのち

   docker-compose up及びdocker-compose up -d

6．php artisan storage:link

7. composer require livewire/livewire

8.docker-compose.ymlにメールサーバコンテナを追記、.envを編集しdocker-compose build及びdocker-compose up -d

9.composer require stripe/stripe-php

10.php artisan vendor:publish --tag=laravel-pagination

11.php artisan migrate

12.php artisan db:seed

## その他

### テスト用ユーザー

### 機能検証用データ
