<?php
session_start();
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    // Simple demo login. Replace with db.php authentication later.
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = 'Administrator';
        header('Location: dashboard.php');
        exit;
    }
    $message = 'Invalid username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Administrator Login</title><style>
*{box-sizing:border-box}body{margin:0;min-height:100vh;display:grid;place-items:center;padding:20px;font-family:Arial,sans-serif;background:linear-gradient(#0009,#0009),url('https://images.unsplash.com/photo-1562774053-701939374585') center/cover no-repeat}.login{width:100%;max-width:360px;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 20px 60px #0006}.login:before{content:'';display:block;height:6px;background:#ff6500}.content{padding:28px 25px}.icon{width:58px;height:58px;margin:0 auto 12px;border-radius:50%;display:grid;place-items:center;background:#ff6500;color:#fff;font-size:28px}.title{text-align:center;margin-bottom:25px}.title h1{font-size:18px;color:#b94614;margin:0 0 6px}.title p{font-size:12px;color:#9ca3af}.group{margin-bottom:17px}.group label{display:block;margin-bottom:6px;font-size:11px;font-weight:bold;color:#b94614;text-transform:uppercase}.group input{width:100%;height:40px;padding:0 12px;border:1px solid #e5e7eb;border-radius:10px;background:#fafafa}.button{width:100%;height:40px;border:0;border-radius:10px;background:#ff6500;color:#fff;font-weight:bold;cursor:pointer}.button:hover{background:#e95700}.message{margin-bottom:15px;text-align:center;color:#dc2626;font-size:12px}.back{display:block;text-align:center;margin-top:20px;color:#9ca3af;font-size:12px;text-decoration:none}
</style></head>
<body><main class="login"><div class="content"><div class="icon">🛡</div><div class="title"><h1>Administrator Login</h1><p>Enter your credentials to continue</p></div><?php if ($message): ?><div class="message"><?= htmlspecialchars($message) ?></div><?php endif; ?><form method="post" action="admin-login.php"><div class="group"><label for="username">Username</label><input id="username" name="username" required></div><div class="group"><label for="password">Password</label><input id="password" name="password" type="password" required></div><button class="button" type="submit">Login</button></form><a class="back" href="portal.php">← Back to portal selection</a></div></main></body>
</html>
