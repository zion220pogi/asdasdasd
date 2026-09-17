<?php
// Start the session before any HTML output.
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'httponly' => true,
    'samesite' => 'Lax'
]);
session_start();

// If already logged in, do not show the login page again.
if (!empty($_SESSION['admin_logged_in'])) {
    header('Location: dashboard.php');
    exit;
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin123') {
        session_regenerate_id(true);
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; display: grid; place-items: center; padding: 20px; font-family: Arial, sans-serif; background: linear-gradient(#0009, #0009), url('https://images.unsplash.com/photo-1562774053-701939374585') center/cover no-repeat; }
        .login { width: 100%; max-width: 360px; background: white; border-radius: 18px; overflow: hidden; box-shadow: 0 20px 60px #0006; }
        .login::before { content: ''; display: block; height: 6px; background: #ff6500; }
        .content { padding: 28px 25px; }
        .icon { width: 58px; height: 58px; margin: 0 auto 12px; border-radius: 50%; display: grid; place-items: center; background: #ff6500; color: white; font-size: 28px; }
        h1 { margin: 0 0 6px; text-align: center; color: #b94614; font-size: 18px; }
        .subtitle { margin: 0 0 24px; text-align: center; color: #9ca3af; font-size: 12px; }
        label { display: block; margin: 13px 0 6px; color: #b94614; font-size: 11px; font-weight: bold; text-transform: uppercase; }
        input { width: 100%; height: 40px; padding: 0 12px; border: 1px solid #e5e7eb; border-radius: 10px; }
        button { width: 100%; height: 40px; margin-top: 20px; border: 0; border-radius: 10px; background: #ff6500; color: white; font-weight: bold; cursor: pointer; }
        .message { margin-bottom: 12px; text-align: center; color: #dc2626; font-size: 12px; }
        .back { display: block; margin-top: 20px; text-align: center; color: #9ca3af; font-size: 12px; text-decoration: none; }
    </style>
</head>
<body>
    <main class="login">
        <div class="content">
            <div class="icon">🛡</div>
            <h1>Administrator Login</h1>
            <p class="subtitle">Enter your credentials to continue</p>

            <?php if ($message !== ''): ?>
                <div class="message"><?= htmlspecialchars($message) ?></div>
            <?php endif; ?>

            <form method="post" action="admin-login.php">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" required>

                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>

                <button type="submit">Login</button>
            </form>

            <a class="back" href="portal.php">← Back to portal selection</a>
        </div>
    </main>
</body>
</html>
