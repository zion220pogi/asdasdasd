<?php
$pageTitle = 'CCGC Asset Management System';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <style>
    *{box-sizing:border-box}body{margin:0;font-family:Arial,sans-serif;color:#263746;background:linear-gradient(rgba(190,225,238,.75),rgba(255,255,255,.9)),url('images/school.jpg') center/cover fixed}.overlay{min-height:100vh;padding:24px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center}.logos{position:absolute;top:18px;left:22px;right:22px;display:flex;justify-content:space-between}.logos img{width:110px;height:auto}nav{position:absolute;top:20px;display:flex;gap:6px;flex-wrap:wrap;justify-content:center}nav a{color:#003b5c;text-decoration:none;padding:8px 11px;border-radius:7px;font-size:.85rem;font-weight:bold}nav a:hover,nav a.active{background:#ff6600;color:#fff}main{max-width:760px;margin-top:55px}h1{color:#ff6600;font-size:clamp(2rem,5vw,3rem)}main>p{line-height:1.7}.buttons{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin:25px 0}.btn{display:inline-block;padding:12px 25px;border-radius:6px;text-decoration:none;font-weight:bold;border:2px solid #ff6600}.btn-start{background:#ff6600;color:white}.btn-login{background:white;color:#ff6600}.features{display:flex;justify-content:center;flex-wrap:wrap;gap:16px}.feature{width:210px;padding:18px;border-radius:10px;background:#ffffffe8;box-shadow:0 4px 12px #0002}.feature h2{color:#0077cc;font-size:1.05rem}.feature p{font-size:.9rem}footer{margin-top:28px;color:#555;font-size:.85rem}@media(max-width:600px){nav{top:82px}.logos img{width:70px}main{margin-top:120px}}
  </style>
</head>
<body>
  <div class="overlay">
    <div class="logos"><img src="images/420194127_225174307316299_8846372044862882459_n-removebg-preview.png" alt="CCGC logo"><img src="images/471140397_441322752368119_3177289969522042052_n-removebg-preview.png" alt="City Government logo"></div>
    <nav><a class="active" href="index.php">Landing</a><a href="home.php">Welcome</a><a href="features.php">Features</a><a href="homepage.php">Homepage</a><a href="login.php">Login</a></nav>
    <main><h1><?= htmlspecialchars($pageTitle) ?></h1><p>Efficiently manage and track assets for Calaca City Global College and the City Government of Calaca with our streamlined asset management system.</p><div class="buttons"><a class="btn btn-start" href="home.php">Get Started</a><a class="btn btn-login" href="login.php">Log In</a></div><section class="features"><article class="feature"><h2>Asset Tracking</h2><p>Monitor and track assets in real time.</p></article><article class="feature"><h2>Inventory Management</h2><p>Organize and manage inventory efficiently.</p></article><article class="feature"><h2>Maintenance Scheduling</h2><p>Schedule and track maintenance activities.</p></article></section></main><footer>Powered by Calaca City Global College &amp; City Government of Calaca</footer>
  </div>
</body>
</html>
