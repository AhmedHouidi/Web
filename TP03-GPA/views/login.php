<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login — GPA System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body { background: #f5f5f5; font-family: sans-serif; }
    .login-card { max-width: 360px; margin: 100px auto; background: #fff; border: 1px solid #e0e0e0; border-radius: 6px; padding: 32px; }
    h5 { font-weight: 700; margin-bottom: 24px; }
    .btn-dark { width: 100%; }
  </style>
</head>
<body>
<div class="login-card">
  <h5>GPA System</h5>

  <?php $flash = getFlash(); if ($flash): ?>
  <div class="alert alert-danger py-2 small"><?= h($flash['msg']) ?></div>
  <?php endif; ?>

  <form method="POST" action="index.php?page=login">
    <div class="mb-3">
      <label class="form-label small fw-semibold">Email</label>
      <input type="email" name="email" class="form-control form-control-sm" required autofocus>
    </div>
    <div class="mb-4">
      <label class="form-label small fw-semibold">Password</label>
      <input type="password" name="password" class="form-control form-control-sm" required>
    </div>
    <button type="submit" class="btn btn-dark btn-sm">Login</button>
  </form>

  <hr class="my-3">
  <small class="text-muted">
    admin@test.com · prof@test.com · stud@test.com<br>
    password: <code>password</code>
  </small>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
