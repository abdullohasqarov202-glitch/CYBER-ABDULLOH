<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CYBER ABDULLOH</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800&family=Orbitron:wght@500;600;700;800&display=swap" rel="stylesheet">
<style>
*{box-sizing:border-box;margin:0;padding:0}
:root{--bg:#090d0b;--panel:#101713;--green:#b7ff2a;--green2:#72d600;--text:#f4f7f2;--muted:#9aa59d;--line:rgba(183,255,42,.15)}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:"Barlow Condensed",sans-serif;overflow-x:hidden}
a{text-decoration:none;color:inherit}
body:before{content:"";position:fixed;inset:0;background:radial-gradient(circle at 78% 15%,rgba(183,255,42,.08),transparent 28%),radial-gradient(circle at 10% 80%,rgba(72,160,0,.06),transparent 25%);pointer-events:none}
.container{width:min(1180px,92%);margin:auto}
.topline{height:4px;background:var(--green)}
header{position:fixed;z-index:100;top:4px;left:0;width:100%;background:rgba(9,13,11,.88);backdrop-filter:blur(16px);border-bottom:1px solid var(--line)}
.nav{height:82px;display:flex;align-items:center;justify-content:space-between}
.logo{font-family:Orbitron;font-weight:800;font-size:22px;letter-spacing:2px}
.logo span{color:var(--green)}
nav{display:flex;gap:32px}
nav a{font-size:17px;font-weight:600;text-transform:uppercase;letter-spacing:1px;color:#dce2dc;transition:.25s}
nav a:hover{color:var(--green)}
.nav-btn{padding:12px 20px;border:1px solid var(--green);color:var(--green);font-weight:700;text-transform:uppercase;letter-spacing:1px}
.hero{min-height:100vh;padding:160px 0 90px;display:grid;grid-template-columns:1.05fr .95fr;gap:60px;align-items:center;position:relative}
.eyebrow{color:var(--green);font-weight:700;letter-spacing:4px;text-transform:uppercase;font-size:15px;margin-bottom:18px}
h1{font-family:Orbitron;font-size:clamp(45px,7vw,86px);line-height:.98;letter-spacing:-3px}
h1 span{color:var(--green)}
.hero p{color:var(--muted);font-size:21px;line-height:1.5;max-width:610px;margin:25px 0 32px}
.buttons{display:flex;gap:14px;flex-wrap:wrap}
.btn{padding:15px 27px;font-weight:800;text-transform:uppercase;letter-spacing:1px;border:1px solid var(--green);transition:.25s}
.btn.primary{background:var(--green);color:#071000}
.btn:hover{transform:translateY(-3px);box-shadow:0 10px 30px rgba(183,255,42,.18)}
.btn.dark{background:transparent;color:var(--green)}
.visual{position:relative}
.visual-card{min-height:500px;border:1px solid var(--line);background:linear-gradient(145deg,#111a15,#0b100d);position:relative;overflow:hidden}
.visual-card img{width:100%;height:100%;min-height:500px;object-fit:cover;opacity:.62;filter:saturate(.7) contrast(1.1)}
.visual-card:after{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(9,13,11,.88),transparent 65%),linear-gradient(0deg,rgba(9,13,11,.8),transparent 50%)}
.terminal{position:absolute;z-index:2;left:28px;bottom:28px;width:calc(100% - 56px);padding:22px;background:rgba(5,9,7,.83);border:1px solid rgba(183,255,42,.28);backdrop-filter:blur(10px)}
.terminal b{color:var(--green);font-family:monospace}.terminal p{font:14px/1.8 monospace;color:#d4ddd4;margin:0}.cursor{display:inline-block;width:8px;height:15px;background:var(--green);vertical-align:middle}
.section{padding:110px 0}
.section-head{display:flex;justify-content:space-between;align-items:end;margin-bottom:45px;border-bottom:1px solid var(--line);padding-bottom:20px}
.kicker{color:var(--green);letter-spacing:3px;text-transform:uppercase;font-weight:700}
.section h2{font-family:Orbitron;font-size:clamp(30px,5vw,52px);margin-top:8px}
.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.card{background:var(--panel);border:1px solid rgba(255,255,255,.07);overflow:hidden;transition:.3s}
.card:hover{transform:translateY(-8px);border-color:rgba(183,255,42,.4)}
.card-img{height:220px;overflow:hidden}.card-img img{width:100%;height:100%;object-fit:cover;transition:.5s}.card:hover img{transform:scale(1.06)}
.card-body{padding:25px}.card-body h3{font-family:Orbitron;font-size:20px;margin-bottom:10px}.card-body p{color:var(--muted);font-size:17px;line-height:1.4}.tags{display:flex;gap:7px;flex-wrap:wrap;margin-top:18px}.tag{border:1px solid var(--line);padding:5px 9px;color:var(--green);font-size:13px}
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--line);border:1px solid var(--line)}
.stat{background:var(--panel);padding:28px}.stat strong{font-family:Orbitron;color:var(--green);font-size:34px;display:block}.stat span{color:var(--muted);text-transform:uppercase;letter-spacing:1px}
.skills{display:grid;grid-template-columns:repeat(4,1fr);gap:15px}.skill{padding:22px;background:var(--panel);border-left:3px solid var(--green);font-size:19px;font-weight:700}
.contact{background:linear-gradient(135deg,#111a14,#0a0f0c);border:1px solid var(--line);padding:55px;display:flex;justify-content:space-between;gap:40px;align-items:center}.contact h2{font-family:Orbitron;font-size:clamp(28px,4vw,48px)}.contact p{color:var(--muted);font-size:19px;margin-top:10px}
footer{padding:30px 0;border-top:1px solid var(--line);color:#768078;text-align:center}
.mobile{display:none}
@media(max-width:850px){nav,.nav-btn{display:none}.mobile{display:block;color:var(--green);font-size:25px}.hero{grid-template-columns:1fr;padding-top:135px}.visual-card,.visual-card img{min-height:400px}.grid{grid-template-columns:1fr}.stats{grid-template-columns:repeat(2,1fr)}.skills{grid-template-columns:repeat(2,1fr)}.contact{padding:32px;display:block}.contact .btn{margin-top:25px}}
</style>
</head>
<body>
<div class="topline"></div>
<header><div class="container nav">
<a class="logo" href="#home">CYBER <span>ABDULLOH</span></a>
<nav><a href="#home">Bosh sahifa</a><a href="#projects">Loyihalar</a><a href="#skills">Ko'nikmalar</a><a href="#contact">Aloqa</a></nav>
<a class="nav-btn" href="https://t.me/Asqarov_0207">Bog'lanish</a><div class="mobile">☰</div>
</div></header>

<main>
<section class="container hero" id="home">
<div>
<div class="eyebrow">Full-Stack Developer / Cyber Creator</div>
<h1>MEN <span>RAQAMLI</span><br>G'oyalarni<br>YARATAMAN.</h1>
<p>Professional web saytlar, Telegram botlar va zamonaviy raqamli loyihalarni yarataman. G'oya — kodga, kod esa real mahsulotga aylanadi.</p>
<div class="buttons"><a class="btn primary" href="#projects">Loyihalarni ko'rish</a><a class="btn dark" href="https://t.me/Asqarov_0207">Telegram orqali yozish</a></div>
</div>
<div class="visual">
<div class="visual-card">
<img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=85" alt="Cyber technology">
<div class="terminal">
<p><b>root@cyber-abdulloh:~$</b> system.start()</p>
<p>Web development ........ <b>ONLINE</b></p>
<p>Telegram bots .......... <b>ONLINE</b></p>
<p>AI projects ............ <b>ONLINE</b></p>
<p>status: <b>READY</b> <span class="cursor"></span></p>
</div></div></div>
</section>

<section class="container section">
<div class="stats"><div class="stat"><strong>15+</strong><span>Loyihalar</span></div><div class="stat"><strong>3+</strong><span>Yillik tajriba</span></div><div class="stat"><strong>24/7</strong><span>Support</span></div><div class="stat"><strong>100%</strong><span>Dedication</span></div></div>
</section>

<section class="section" id="projects"><div class="container">
<div class="section-head"><div><div class="kicker">Portfolio</div><h2>Asosiy loyihalar</h2></div><div class="kicker">01 / 04</div></div>
<div class="grid">
<article class="card"><div class="card-img"><img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=900&q=85" alt="SmashBite"></div><div class="card-body"><h3>SmashBite</h3><p>Fast-food uchun zamonaviy web platforma, mahsulotlar, savat va buyurtma tizimi.</p><div class="tags"><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">JS</span></div></div></article>
<article class="card"><div class="card-img"><img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=900&q=85" alt="AI Bot"></div><div class="card-body"><h3>Telegram AI Bot</h3><p>Telegram ichida foydalanuvchi bilan ishlaydigan aqlli AI yordamchi.</p><div class="tags"><span class="tag">Python</span><span class="tag">AI</span><span class="tag">Telegram</span></div></div></article>
<article class="card"><div class="card-img"><img src="https://images.unsplash.com/photo-1614680376573-df3480f0c6ff?auto=format&fit=crop&w=900&q=85" alt="Video bot"></div><div class="card-body"><h3>Video Save UZ</h3><p>Instagram, TikTok va boshqa platformalardan media yuklash uchun Telegram bot.</p><div class="tags"><span class="tag">Python</span><span class="tag">yt-dlp</span><span class="tag">Railway</span></div></div></article>
</div></div></section>

<section class="section" id="skills"><div class="container">
<div class="section-head"><div><div class="kicker">Technology</div><h2>Ko'nikmalar</h2></div></div>
<div class="skills"><div class="skill">PHP / MySQL</div><div class="skill">Python</div><div class="skill">JavaScript</div><div class="skill">HTML / CSS</div><div class="skill">Telegram Bots</div><div class="skill">WordPress</div><div class="skill">Git & Railway</div><div class="skill">AI Integration</div></div>
</div></section>

<section class="section" id="contact"><div class="container"><div class="contact"><div><div class="kicker">Let's work</div><h2>LOYIHA BORMI?</h2><p>G'oyangizni birga professional mahsulotga aylantiramiz.</p></div><a class="btn primary" href="https://t.me/Asqarov_0207">Telegramda bog'lanish →</a></div></div></section>
</main>
<footer>© 2026 CYBER ABDULLOH — Full-Stack Developer</footer>
</body>
</html>
