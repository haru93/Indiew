# Indiew

![image](https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/20201007051004_indiew_github.jpeg)

## 概要

　Laravel で個人製作したポートフォリオです。  
　NintendoSwitchやPS4を保有するユーザー向けのインディーズゲームの紹介・情報共有サービスとなります。

## URL

[https://indiew.com/](https://indiew.com/)

ボタンひとつでログインが可能です。  
ぜひご利用ください。

## なぜ作成したか

　コロナ禍で外出の機会が減っている中、インディーズゲームはハイクオリティかつ低価格な作品が多いため、コスパ良く有意義な時間を過ごすには最適ではないかと考えておりました。  
　そこで、各ゲームの魅力的な場面を共有し作品を紹介できるサービスがあれば、自宅での過ごし方の可能性の幅を増やすきっかけになるとともに、制作会社への貢献にもなると考え作成にいたりました。

## 使用技術

- PHP 7.3.22
- Laravel 6.18.37
- Bootstrap
- Vue.js
- AWS (EC2, RDS for PostgreSQL, S3, VPC, Route53)
- Docker/docker-compose
- CircleCI (CI/CD)
- Nginx
- Git, GitHub
- Google Analytics

## サービス構成図

![サービス構成図](https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/20201007035453_indiew_back.png)

## ER図

![ER図](https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/202010071704_indiew_erd.png)

## 機能一覧

- ユーザーログイン・登録機能

- ユーザーパスワード再設定機能(SendGridによるメール送信)

- GoogleによるOAuthログイン機能

- 管理者マルチログイン機能

- 投稿に対するCRUD機能

- 投稿に対するコメント登録・削除機能

- 投稿に対するいいね登録・解除機能(Ajaxによる非同期通信)

- 投稿に対するタグ付け機能(タグに関連する投稿一覧表示)

- 投稿に対するカテゴリー機能(ゲーム別に関連する投稿一覧表示)

- 画像投稿機能(InterventionImageによる画像のリサイズ処理)

## 制作で意識した点

- 実際にサービスを公開し、使っていただくことを想定して作ったため、ポリシーの追加・SSL化などセキュリティ強化を意識しました。

- サイズが大きい画像は軽量化(リサイズ)される仕組みとし、訪れたユーザーがストレスなくサイトを閲覧できるよう意識しました。

- マネタイズまで想定し、GoogleAnalyticsを導入の上、アクセス数を管理できるようにしました。

- 実務を想定し、作業用ブランチの作成・リモートへのプッシュを意識してGit運用をしておりました。

## 法的関係性への配慮

- プライバシーポリシーを追加しました。