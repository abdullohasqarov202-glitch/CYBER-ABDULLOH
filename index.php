from pathlib import Path
import zipfile, textwrap, os

out = Path("/mnt/data/CYBER-ABDULLOH-REAL-SITE")
out.mkdir(exist_ok=True)

html = r'''<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CYBER ABDULLOH — Full-Stack Developer</title>
<meta name="description" content="Abdulloh Asqarov — Full-Stack Developer. Web saytlar, Telegram botlar va raqamli loyihalar.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800&family=Orbitron:wght@500;600;700;800&display=swap" rel="stylesheet">
<style>
*{box-sizing:border-box;margin:0;padding:0}
:root{--bg:#070a08;--panel:#0e1410;--panel2:#121a14;--green:#b7ff2a;--green2:#78d400;--text:#f3f7f2;--muted:#9aa59d;--line:rgba(183,255,42,.16)}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:"Barlow Condensed",sans-serif;overflow-x:hidden}
body:before{content:"";position:fixed;inset:0;pointer-events:none;background:radial-gradient(circle at 80% 10%,rgba(183,255,42,.09),transparent 25%),radial-gradient(circle at 10% 80%,rgba(80,160,0,.06),transparent 28%)}
a{text-decoration:none;color:inherit}
.container{width:min(1180px,92%);margin:auto}
.topline{height:3px;background:var(--green)}
header{position:fixed;z-index:99;top:3px;left:0;width:100%;background:rgba(7,10,8,.9);backdrop-filter:blur(18px);border-bottom:1px solid var(--line)}
.nav{height:80px;display:flex;align-items:center;justify-content:space-between}
.logo{font-family:Orbitron;font-size:21px;font-weight:800;letter-spacing:2px}.logo span{color:var(--green)}
nav{display:flex;gap:30px}nav a{font-size:16px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#dce2dc;transition:.2s}nav a:hover{color:var(--green)}
.nav-cta{border:1px solid var(--green);padding:11px 19px;color:var(--green);font-weight:800;text-transform:uppercase}
.mobile{display:none;color:var(--green);font-size:25px}
.hero{min-height:100vh;padding:145px 0 80px;display:grid;grid-template-columns:1.03fr .97fr;gap:65px;align-items:center}
.eyebrow,.kicker{color:var(--green);font-weight:800;letter-spacing:4px;text-transform:uppercase}
.eyebrow{font-size:14px;margin-bottom:20px}
h1{font-family:Orbitron;font-size:clamp(43px,6.8vw,82px);line-height:1;letter-spacing:-3px}
h1 span{color:var(--green)}
.hero-text{font-size:21px;line-height:1.55;color:var(--muted);max-width:620px;margin:25px 0 32px}
.buttons{display:flex;gap:12px;flex-wrap:wrap}.btn{display:inline-flex;align-items:center;justify-content:center;padding:15px 25px;border:1px solid var(--green);font-weight:800;text-transform:uppercase;letter-spacing:1px;transition:.25s}.btn.primary{background:var(--green);color:#071000}.btn.dark{color:var(--green)}.btn:hover{transform:translateY(-3px);box-shadow:0 12px 30px rgba(183,255,42,.16)}
.hero-card{height:540px;position:relative;overflow:hidden;border:1px solid var(--line);background:#101611}
.hero-card img{width:100%;height:100%;object-fit:cover;filter:saturate(.72) contrast(1.1)}
.hero-card:after{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(5,8,6,.86),transparent 70%),linear-gradient(0deg,rgba(5,8,6,.9),transparent 55%)}
.profile-box{position:absolute;z-index:2;left:25px;right:25px;bottom:25px;background:rgba(5,9,7,.86);border:1px solid rgba(183,255,42,.3);padding:22px;backdrop-filter:blur(10px)}
.profile-box .line{display:flex;justify-content:space-between;padding:8px 0;border-bottom:1px solid rgba(255,255,255,.07);font:14px monospace}.profile-box .line:last-child{border:0}.ok{color:var(--green);font-weight:bold}
.section{padding:105px 0}.section-head{display:flex;justify-content:space-between;align-items:end;border-bottom:1px solid var(--line);padding-bottom:18px;margin-bottom:38px}.section h2{font-family:Orbitron;font-size:clamp(29px,5vw,50px);margin-top:7px}
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--line);border:1px solid var(--line)}.stat{background:var(--panel);padding:28px}.stat strong{display:block;font:800 34px Orbitron;color:var(--green)}.stat span{color:var(--muted);text-transform:uppercase;letter-spacing:1px}
.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}.card{background:var(--panel);border:1px solid rgba(255,255,255,.07);overflow:hidden;transition:.3s}.card:hover{transform:translateY(-7px);border-color:rgba(183,255,42,.42)}.card-img{height:225px;overflow:hidden}.card-img img{width:100%;height:100%;object-fit:cover;transition:.5s}.card:hover img{transform:scale(1.06)}.card-body{padding:24px}.card h3{font:700 20px Orbitron;margin-bottom:10px}.card p{font-size:17px;line-height:1.45;color:var(--muted)}.tags{display:flex;gap:7px;flex-wrap:wrap;margin-top:17px}.tag{border:1px solid var(--line);padding:5px 9px;color:var(--green);font-size:13px}
.skills{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}.skill{background:var(--panel);padding:22px;border-left:3px solid var(--green);font-size:19px;font-weight:700}
.contact-wrap{display:grid;grid-template-columns:1.1fr .9fr;gap:22px}.contact-main,.contact-card{background:linear-gradient(145deg,#111912,#0a0e0b);border:1px solid var(--line)}.contact-main{padding:45px}.contact-main h2{font:700 clamp(28px,4vw,47px) Orbitron;margin-top:8px}.contact-main p{color:var(--muted);font-size:19px;line-height:1.5;margin:15px 0 27px}.contact-card{padding:27px}.contact-card h3{font:700 21px Orbitron;margin-bottom:18px}.contact-item{display:flex;gap:15px;align-items:center;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.07)}.contact-item:last-child{border:0}.contact-icon{width:43px;height:43px;display:grid;place-items:center;border:1px solid var(--line);color:var(--green);font-weight:800}.contact-item small{display:block;color:#748078;text-transform:uppercase;letter-spacing:1px}.contact-item strong{display:block;font-size:18px;margin-top:3px}
footer{padding:30px 0;border-top:1px solid var(--line);color:#737d76;text-align:center}
.reveal{opacity:0;transform:translateY(22px);transition:.7s}.reveal.show{opacity:1;transform:none}
@media(max-width:850px){nav,.nav-cta{display:none}.mobile{display:block}.hero{grid-template-columns:1fr;padding-top:125px}.hero-card{height:430px}.grid{grid-template-columns:1fr}.stats{grid-template-columns:repeat(2,1fr)}.skills{grid-template-columns:repeat(2,1fr)}.contact-wrap{grid-template-columns:1fr}.contact-main{padding:30px}}
@media(max-width:480px){.stats,.skills{grid-template-columns:1fr}.hero{padding-top:115px}.hero-card{height:360px}.profile-box{left:14px;right:14px;bottom:14px}.section{padding:75px 0}}
</style>
</head>
<body>
<div class="topline"></div>
<header>
<div class="container nav">
<a class="logo" href="#home">CYBER <span>ABDULLOH</span></a>
<nav>
<a href="#home">Bosh sahifa</a>
<a href="#about">Men haqimda</a>
<a href="#projects">Loyihalar</a>
<a href="#skills">Ko‘nikmalar</a>
<a href="#contact">Aloqa</a>
</nav>
<a class="nav-cta" href="https://t.me/Asqarov_0207" target="_blank">Bog‘lanish</a>
<div class="mobile">☰</div>
</div>
</header>

<main>
<section class="container hero" id="home">
<div class="reveal">
<div class="eyebrow">Full-Stack Developer • Cyber Creator</div>
<h1>MEN <span>RAQAMLI</span><br>G‘OYALARNI<br>YARATAMAN.</h1>
<p class="hero-text">Web saytlar, Telegram botlar va zamonaviy raqamli mahsulotlarni yarataman. Oddiy g‘oyani toza kod, kuchli dizayn va ishlaydigan real mahsulotga aylantiraman.</p>
<div class="buttons">
<a class="btn primary" href="#projects">Loyihalarni ko‘rish</a>
<a class="btn dark" href="https://t.me/Asqarov_0207" target="_blank">Telegram orqali yozish</a>
</div>
</div>
<div class="hero-card reveal">
<img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1400&q=90" alt="Professional technology">
<div class="profile-box">
<div class="line"><span>DEVELOPER</span><b class="ok">ONLINE</b></div>
<div class="line"><span>WEB DEVELOPMENT</span><b class="ok">READY</b></div>
<div class="line"><span>TELEGRAM BOTS</span><b class="ok">READY</b></div>
<div class="line"><span>AI / DIGITAL</span><b class="ok">ACTIVE</b></div>
</div>
</div>
</section>

<section class="container section" id="about">
<div class="stats reveal">
<div class="stat"><strong>15+</strong><span>Loyihalar</span></div>
<div class="stat"><strong>3+</strong><span>Yillik tajriba</span></div>
<div class="stat"><strong>24/7</strong><span>Yordam</span></div>
<div class="stat"><strong>100%</strong><span>Mas'uliyat</span></div>
</div>
</section>

<section class="section" id="projects">
<div class="container">
<div class="section-head reveal"><div><div class="kicker">Portfolio</div><h2>Asosiy loyihalar</h2></div><div class="kicker">01 — 04</div></div>
<div class="grid">
<article class="card reveal"><div class="card-img"><img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1000&q=90" alt="SmashBite"></div><div class="card-body"><h3>SmashBite</h3><p>Fast-food biznesi uchun mahsulotlar, savat, buyurtma va zamonaviy web interfeysga ega platforma.</p><div class="tags"><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">JavaScript</span></div></div></article>
<article class="card reveal"><div class="card-img"><img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1000&q=90" alt="AI project"></div><div class="card-body"><h3>Telegram AI Bot</h3><p>Telegram foydalanuvchilari uchun AI asosidagi aqlli yordamchi va avtomatlashtirilgan xizmatlar.</p><div class="tags"><span class="tag">Python</span><span class="tag">AI</span><span class="tag">Telegram</span></div></div></article>
<article class="card reveal"><div class="card-img"><img src="https://images.unsplash.com/photo-1614680376573-df3480f0c6ff?auto=format&fit=crop&w=1000&q=90" alt="Video Save UZ"></div><div class="card-body"><h3>Video Save UZ</h3><p>Instagram va TikTok kabi platformalardan media yuklashga mo‘ljallangan Telegram bot.</p><div class="tags"><span class="tag">Python</span><span class="tag">yt-dlp</span><span class="tag">Railway</span></div></div></article>
</div>
</div>
</section>

<section class="section" id="skills">
<div class="container">
<div class="section-head reveal"><div><div class="kicker">Technology</div><h2>Men ishlaydigan texnologiyalar</h2></div></div>
<div class="skills">
<div class="skill reveal">PHP / MySQL</div><div class="skill reveal">Python</div><div class="skill reveal">JavaScript</div><div class="skill reveal">HTML / CSS</div>
<div class="skill reveal">Telegram Bots</div><div class="skill reveal">WordPress</div><div class="skill reveal">Git / Railway</div><div class="skill reveal">AI Integration</div>
</div>
</div>
</section>

<section class="section" id="contact">
<div class="container">
<div class="section-head reveal"><div><div class="kicker">Contact</div><h2>Bog‘lanish</h2></div></div>
<div class="contact-wrap">
<div class="contact-main reveal">
<div class="kicker">Loyiha boshlaymizmi?</div>
<h2>G‘OYANGIZNI<br>REAL MAHSULOTGA<br>AYLANTIRAMIZ.</h2>
<p>Sayt, Telegram bot yoki boshqa raqamli loyiha kerak bo‘lsa, bevosita Telegram orqali yozing. Loyiha haqida qisqacha ma’lumot yuboring — bog‘lanib, keyingi qadamlarni kelishamiz.</p>
<a class="btn primary" href="https://t.me/Asqarov_0207" target="_blank">Telegramda bog‘lanish →</a>
</div>
<div class="contact-card reveal">
<h3>Aloqa ma’lumotlari</h3>
<a class="contact-item" href="https://t.me/Asqarov_0207" target="_blank">
<div class="contact-icon">TG</div><div><small>Telegram</small><strong>@Asqarov_0207</strong></div>
</a>
<div class="contact-item">
<div class="contact-icon">UZ</div><div><small>Joylashuv</small><strong>O‘zbekiston</strong></div>
</div>
<div class="contact-item">
<div class="contact-icon">DEV</div><div><small>Yo‘nalish</small><strong>Full-Stack Developer</strong></div>
</div>
</div>
</div>
</div>
</section>
</main>

<footer>© 2026 CYBER ABDULLOH — Full-Stack Developer</footer>

<script>
const items=document.querySelectorAll('.reveal');
const observer=new IntersectionObserver(entries=>{
 entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('show')});
},{threshold:.12});
items.forEach(i=>observer.observe(i));
</script>
</body>
</html>'''

(out/"index.php").write_text(html, encoding="utf-8")
(out/"README.md").write_text("""# CYBER ABDULLOH

Railway uchun tayyor PHP portfolio.

## GitHub
Repo root ichida `index.php` bo‘lishi kerak.

## Aloqa
Telegram: @Asqarov_0207

GitHub havolasi sayt dizayniga qo‘shilmagan.
""", encoding="utf-8")

zip_path=Path("/mnt/data/CYBER-ABDULLOH-REAL-SITE.zip")
with zipfile.ZipFile(zip_path,"w",zipfile.ZIP_DEFLATED) as z:
    z.write(out/"index.php","index.php")
    z.write(out/"README.md","README.md")

print(zip_path)
