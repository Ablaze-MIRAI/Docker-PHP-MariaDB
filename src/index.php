<?php
try {
  $db  = new PDO("mysql:host=database;dbname=docker", "docker", "docker");
  $msg = "MariaDBへ接続しました";
} catch (PDOException $e) {
  $msg = "MariaDBへ接続できませんでした<br/>{$e->getMessage()}";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <title>Docker-PHP-MariaDB</title>
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <h1>Docker-PHP-MariaDB</h1>
        <p>ようこそ。このファイルを削除してアプリケーションを構築してください</p>
        <p><a href="https://github.com/Ablaze-MIRAI/Docker-PHP-MariaDB/" style="color: #333"><i class="bi bi-github"></i> Github</a></p>
        <h2>MariaDB接続確認</h2>
        <p><?=$msg?></p>
        <button class="btn btn-primary" onclick="OpenINFO()">PHP INFOを表示する</button>
    </div>
    <script>
        const OpenINFO = () =>{
            const blob = new Blob([`<?=phpinfo()?>`], {type: "text/html"});
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.click();
            URL.revokeObjectURL(link.href);
            return;
        }

    </script>
</body>
</html>
