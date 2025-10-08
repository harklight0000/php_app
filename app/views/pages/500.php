<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>500 - Lỗi server</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;margin:40px;color:#222}
    .card{max-width:900px;margin:auto;background:#fff;border:1px solid #eee;border-radius:10px;
          padding:20px;box-shadow:0 1px 8px rgba(0,0,0,.05)}
    pre{background:#0f172a;color:#e2e8f0;padding:12px;border-radius:8px;overflow:auto}
    .muted{color:#666}
  </style>
</head>
<body>
  <div class="card">
    <h1>500 - Lỗi server</h1>
    <p>Máy chủ sập rồi, hihi.</p>

    <?php if (!empty($debug)): ?>
      <hr>
      <p class="muted">Chi tiết (chỉ hiện khi APP_DEBUG = true):</p>
      <?php if (!empty($errorMessage)): ?><pre><?= htmlspecialchars($errorMessage) ?></pre><?php endif; ?>
      <?php if (!empty($errorTrace)):   ?><pre><?= htmlspecialchars($errorTrace) ?></pre><?php endif; ?>
    <?php endif; ?>
  </div>
</body>
</html>
