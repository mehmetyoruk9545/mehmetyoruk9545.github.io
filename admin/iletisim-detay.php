<?php
declare(strict_types=1);
session_start();

if (empty($_SESSION['fyark_admin'])) {
    header('Location: login.php');
    exit;
}

$file = basename($_GET['file'] ?? '');
$fullPath = __DIR__ . '/../data/iletisim/' . $file;

if ($file === '' || !is_file($fullPath)) {
    die('Kayıt bulunamadı.');
}

$json = file_get_contents($fullPath);
$data = json_decode((string)$json, true);

if (!is_array($data)) {
    die('Kayıt okunamadı.');
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Detayı | FOR YOU ARK</title>
    <style>
        body{
            margin:0;
            background:#050505;
            color:#fff;
            font-family:Arial, sans-serif;
        }
        .wrap{
            width:min(94vw,900px);
            margin:24px auto;
        }
        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:16px;
            margin-bottom:20px;
        }
        h1{
            margin:0;
            color:#ffdf86;
            font-size:28px;
        }
        .btn{
            text-decoration:none;
            padding:10px 14px;
            border-radius:999px;
            background:linear-gradient(180deg, #e0bf59, #af8a28);
            color:#120d03;
            font-weight:bold;
        }
        .card{
            background:#101010;
            border:1px solid rgba(212,175,55,.25);
            border-radius:18px;
            padding:22px;
        }
        .row{
            margin-bottom:16px;
            padding-bottom:12px;
            border-bottom:1px solid rgba(212,175,55,.10);
        }
        .label{
            color:#cdbf9d;
            font-size:13px;
            margin-bottom:6px;
            text-transform:uppercase;
            letter-spacing:1px;
        }
        .value{
            color:#ece6d7;
            line-height:1.7;
            white-space:pre-wrap;
            word-break:break-word;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="topbar">
            <h1>İletişim Detayı</h1>
            <a class="btn" href="iletisim-listesi.php">Listeye Dön</a>
        </div>

        <div class="card">
            <?php foreach ($data as $key => $value): ?>
                <div class="row">
                    <div class="label"><?php echo htmlspecialchars((string)$key, ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="value"><?php echo htmlspecialchars(is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE) : (string)$value, ENT_QUOTES, 'UTF-8'); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>