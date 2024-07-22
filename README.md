# coachtech-free-market

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

## テーブル設計

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

## その他

### テスト用ユーザー

### 機能検証用データ
