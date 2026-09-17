<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: admin-login.php');
    exit;
}

$adminName = $_SESSION['admin_name'] ?? 'Administrator';

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: portal.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administrator Dashboard</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}body{font-family:Arial,sans-serif;background:#f7f5f1;color:#374151}.app{display:flex;min-height:100vh}.sidebar{width:190px;min-height:100vh;background:linear-gradient(180deg,#f45b08,#d94408);color:#fff;position:fixed;left:0;top:0;bottom:0;display:flex;flex-direction:column}.logo-area{text-align:center;padding:22px 10px 15px;border-bottom:1px solid #ffffff1f}.logo{width:65px;height:65px;margin:0 auto 8px;border-radius:50%;background:#fff;color:#f45b08;display:grid;place-items:center;font-weight:bold}.admin-label{font-size:11px;font-weight:bold}.system-name{font-size:10px;margin-top:5px}.navigation{margin-top:15px}.nav-item,.logout{display:block;padding:12px 18px;color:#fff;text-decoration:none;font-size:12px;font-weight:bold}.nav-item:hover,.nav-item.active{background:#ffffff18}.logout{margin-top:auto;margin-bottom:12px}.main{margin-left:190px;width:calc(100% - 190px)}.topbar{height:60px;background:#fff;border-bottom:1px solid #eee;display:flex;align-items:center;justify-content:space-between;padding:0 25px}.page-title{color:#a9471b;font-size:20px}.profile{color:#a9471b;font-weight:bold}.content{padding:25px}.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:15px;margin-bottom:22px}.stat-card{background:#fff;border-left:4px solid #f45b08;border-radius:12px;padding:18px;box-shadow:0 2px 8px #0000000f}.stat-card h3{color:#9ca3af;text-transform:uppercase;font-size:11px;margin-bottom:8px}.stat-number{font-size:28px;font-weight:bold}.activity-card{background:#fff;border-radius:12px;padding:20px;box-shadow:0 2px 8px #0000000f}.activity-card h2{color:#b54a1c;margin-bottom:12px}.activity{padding:12px;background:#fafafa;border-radius:8px;margin:8px 0;font-size:13px}.borrow-button{display:inline-block;margin-top:18px;padding:11px 16px;background:#ff6500;color:#fff;text-decoration:none;border-radius:6px;font-size:12px;font-weight:bold}@media(max-width:800px){.sidebar{width:150px}.main{margin-left:150px;width:calc(100% - 150px)}.stats{grid-template-columns:repeat(2,1fr)}}@media(max-width:600px){.app{display:block}.sidebar{position:static;width:100%;min-height:auto}.main{margin-left:0;width:100%}.stats{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="app">
    <aside class="sidebar">
        <div class="logo-area">
            <div class="logo">CCGC</div>
            <div class="admin-label"><?= htmlspecialchars($adminName) ?></div>
            <div class="system-name">CCGC Asset System</div>
        </div>
        <nav class="navigation">
            <a class="nav-item active" href="dashboard.php">Dashboard</a>
            <a class="nav-item" href="borrow.php">Borrow an Asset</a>
        </nav>
        <a class="logout" href="dashboard.php?logout=1">← Logout</a>
    </aside>

    <main class="main">
        <header class="topbar">
            <h1 class="page-title">Dashboard</h1>
            <div class="profile">♙ <?= htmlspecialchars($adminName) ?></div>
        </header>

        <section class="content">
            <div class="stats">
                <div class="stat-card"><h3>Total Assets</h3><div class="stat-number">8</div></div>
                <div class="stat-card"><h3>Active Users</h3><div class="stat-number">4</div></div>
                <div class="stat-card"><h3>Assets Borrowed</h3><div class="stat-number">3</div></div>
                <div class="stat-card"><h3>Under Repair</h3><div class="stat-number">1</div></div>
            </div>

            <div class="activity-card">
                <h2>Recent Activity</h2>
                <div class="activity">Projector PRJ-002 borrowed by Juan dela Cruz</div>
                <div class="activity">Computer CMP-001 returned by Ana Gomez</div>
                <div class="activity">Chair CHR-021 marked as Disposed</div>
                <a class="borrow-button" href="borrow.php">Borrow an Asset</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>
