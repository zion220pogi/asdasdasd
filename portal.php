<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Select Your Portal</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}body{font-family:Arial,sans-serif;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px;background:linear-gradient(#0009,#0009),url('https://images.unsplash.com/photo-1562774053-701939374585') center/cover no-repeat}.modal{width:100%;max-width:550px;background:#fff;border-radius:20px;overflow:hidden;box-shadow:0 20px 60px #0006}.modal:before{content:'';display:block;height:6px;background:#ff6500}.content{padding:32px 26px}.heading{text-align:center;margin-bottom:28px}.heading h1{color:#c94813;font-size:22px;margin-bottom:8px}.heading p{color:#64748b;font-size:14px}.portals{display:grid;grid-template-columns:1fr 1fr;gap:18px}.portal{border:1px solid #f6dfc8;background:#fffaf4;border-radius:16px;min-height:230px;padding:25px 18px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;text-decoration:none;transition:.2s}.portal:hover{transform:translateY(-5px);border-color:#ff6500;box-shadow:0 10px 25px #ff650026}.icon{width:80px;height:80px;border-radius:50%;background:#ff6500;display:grid;place-items:center;margin-bottom:20px;color:#fff;font-size:38px}.portal h2{color:#c94813;font-size:18px;margin-bottom:10px}.portal p{color:#64748b;font-size:13px;line-height:1.5}@media(max-width:600px){.portals{grid-template-columns:1fr}.portal{min-height:190px}}
</style>
</head>
<body>
<div class="modal">
  <div class="content">
    <div class="heading"><h1>Select Your Portal</h1><p>Choose your role to continue</p></div>
    <div class="portals">
      <a class="portal" href="admin-login.php"><div class="icon">🛡</div><h2>Administrator</h2><p>Full control over assets, users, and reports</p></a>
      <a class="portal" href="login.php"><div class="icon">🎓</div><h2>Faculty / Professor /<br>Other Department</h2><p>Borrow, return, and manage your assets</p></a>
    </div>
    <p style="text-align:center;margin-top:22px"><a href="index.php" style="color:#c94813">← Back to landing page</a></p>
  </div>
</div>
</body>
</html>
