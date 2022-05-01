# Docker-PHP-MariaDB

PHP(Apache) + MariaDBの環境がすぐに構築できるDockerテンプレートです。

## How to Use

1. 次のコマンドを実行

```bash
git clone https://github.com/Ablaze-MIRAI/Docker-PHP-MariaDB.git
cd Docker-PHP-MariaDB
docker compose up #コンテナの起動
```

2. [http://localhost:3000](http://localhost:3000) へアクセス

![image](https://user-images.githubusercontent.com/67790884/166112705-44b330f7-5eb6-46b5-af9a-af0b89244de5.png)

3. `index.php`を削除して`src`内にスクリプトを入れる

## Description

PHP(Apache)が `3000`, MariaDBが `3306` で起動します

### MariaDB設定情報

Database Address: `database`

Database Name: `docker`

User Name: `docker`

User Pass: `docker`

Root Pass: `root`
