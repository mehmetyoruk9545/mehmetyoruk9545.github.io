<?php
declare(strict_types=1);
session_start();

if (empty($_SESSION['fyark_admin'])) {
    header('Location: login.php');
    exit;
}

$dataDir = __DIR__ . '/../data/iletisim';
$files = [];

if (is_dir($dataDir)) {
    $files = glob($dataDir . '/*.json') ?: [];
    rsort($files);
}

$records = [];

foreach ($files as $file) {
    $json = file_get_contents($file);
    $data = json_decode((string)$json, true);

    if (is_array($data)) {
        $data['_file'] = basename($file);
        $records[] = $data;
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Kayıtları | FOR YOU ARK</title>
    <style>
        body{
            margin:0;
            background:#050505;
            color:#fff;
            font-family:Arial, sans-serif;
        }
        .wrap{
            width:min(96vw,1400px);
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
        .tablebox{
            background:#101010;
            border:1px solid rgba(212,175,55,.25);
            border-radius:18px;
            overflow:auto;
        }
        table{
            width:100%;
            border-collapse:collapse;
            min-width:1000px;
        }
        th, td{
            padding:14px 12px;
            border-bottom:1px solid rgba(212,175,55,.12);
            text-align:left;
            vertical-align:top;
        }
        th{
            color:#ffdf86;
            background:#141414;
        }
        td{
            color:#ece6d7;
        }
        .muted{
            color:#cdbf9d;
        }
        .empty{
            padding:28px;
            color:#cdbf9d;
        }
        .detail-link{
            color:#ffdf86;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="topbar">
            <h1>İletişim Kayıtları</h1>
            <a class="btn" href="logout.php">Çıkış Yap</a>
        </div>

        <div class="tablebox">
            <?php if (empty($records)): ?>
                <div class="empty">Henüz kayıt yok.</div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Tarih</th>
                            <th>Referans</th>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Telefon</th>
                            <th>Temas Türü</th>
                            <th>Şehir / Ülke</th>
                            <th>Detay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['created_at'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['reference_id'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['full_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['contact_type'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['city_country'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>
                                    <a class="detail-link" href="iletisim-detay.php?file=<?php echo urlencode($row['_file']); ?>">
                                        Aç
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>