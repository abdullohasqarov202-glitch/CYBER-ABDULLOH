<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CYBER ABDULLOH — Full-stack & AI Developer</title>
<meta name="description" content="Cyber Abdulloh — Full-stack, Telegram bot va AI dasturchi.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<style>
:root{--bg:#050706;--panel:#0a0f0b;--panel2:#0e1610;--line:#19301e;--text:#e7ffe9;--muted:#719879;--green:#00ff55;--green2:#63ff8d}
*{box-sizing:border-box;margin:0;padding:0}html{scroll-behavior:smooth}body{background:var(--bg);color:var(--text);font-family:Inter,sans-serif;overflow-x:hidden}
body:before{content:"";position:fixed;inset:0;background:radial-gradient(circle at 80% 10%,#00ff5514,transparent 30%),radial-gradient(circle at 10% 70%,#00ff5508,transparent 35%);pointer-events:none}
a{text-decoration:none;color:inherit}.wrap{max-width:1120px;margin:auto;padding:0 25px;position:relative;z-index:2}
header{position:sticky;top:0;z-index:100;background:#050706d9;border-bottom:1px solid var(--line);backdrop-filter:blur(18px)}
nav{height:74px;display:flex;align-items:center;justify-content:space-between}.logo{font-family:"JetBrains Mono";font-weight:700;font-size:18px}.logo b{color:var(--green)}
.nav{display:flex;gap:28px;color:var(--muted);font-size:14px}.nav a:hover{color:var(--green)}.menu{display:none;color:var(--green);font-size:26px}
.hero{min-height:700px;display:grid;grid-template-columns:1.1fr .9fr;align-items:center;gap:50px;padding:80px 0}
.badge{display:inline-flex;gap:9px;align-items:center;border:1px solid #1d4b27;background:#08130b;padding:8px 13px;border-radius:999px;color:var(--green2);font:600 12px "JetBrains Mono";margin-bottom:22px}.dot{width:7px;height:7px;background:var(--green);border-radius:50%;box-shadow:0 0 15px var(--green)}
h1{font-size:clamp(48px,7vw,86px);line-height:.92;letter-spacing:-4px;margin-bottom:25px}h1 span{color:var(--green);text-shadow:0 0 30px #00ff5544}
.lead{max-width:650px;color:#8eae94;font-size:17px;line-height:1.8;margin-bottom:32px}.buttons{display:flex;gap:12px;flex-wrap:wrap}.btn{padding:13px 20px;border-radius:8px;border:1px solid var(--line);font-weight:700;font-size:14px}.primary{background:var(--green);color:#031007;border-color:var(--green);box-shadow:0 0 25px #00ff5522}.btn:hover{transform:translateY(-2px)}
.terminal{background:linear-gradient(145deg,#0c140e,#050806);border:1px solid #214727;border-radius:18px;box-shadow:0 25px 80px #000;overflow:hidden}.top{padding:13px 16px;border-bottom:1px solid var(--line);display:flex;gap:7px}.top i{width:9px;height:9px;border-radius:50%;background:#244c2d}.screen{padding:25px;font:13px/2 "JetBrains Mono";color:#79aa81;min-height:310px}.screen .g{color:var(--green)}.screen .w{color:#e4ffe8}
section{padding:95px 0;border-top:1px solid var(--line)}.eyebrow{color:var(--green);font:600 12px "JetBrains Mono";margin-bottom:10px}.title{font-size:38px;letter-spacing:-1.5px;margin-bottom:12px}.sub{color:var(--muted);max-width:650px;line-height:1.7;margin-bottom:40px}
.projects{display:grid;grid-template-columns:repeat(2,1fr);gap:22px}.card{background:linear-gradient(150deg,#0c140e,#070b08);border:1px solid var(--line);border-radius:16px;overflow:hidden;transition:.25s}.card:hover{transform:translateY(-6px);border-color:#2f713b;box-shadow:0 20px 50px #000}.cover{height:190px;background-size:cover;background-position:center;position:relative}.cover:after{content:"";position:absolute;inset:0;background:linear-gradient(0deg,#061009 0%,transparent 70%)}.cardbody{padding:22px}.tag{display:inline-block;color:var(--green);font:600 11px "JetBrains Mono";border:1px solid #24582e;padding:5px 9px;border-radius:5px;margin-bottom:12px}.card h3{font-size:22px;margin-bottom:9px}.card p{color:var(--muted);font-size:14px;line-height:1.7}.stack{display:flex;gap:7px;flex-wrap:wrap;margin-top:17px}.stack span{font:11px "JetBrains Mono";padding:5px 8px;background:#101b12;color:#86aa8c;border-radius:5px}
.skills{display:flex;flex-wrap:wrap;gap:10px}.skill{padding:12px 15px;border:1px solid var(--line);border-radius:8px;background:#09100b;color:#9fc4a4;font:12px "JetBrains Mono"}.skill:hover{border-color:var(--green);color:var(--green)}
.contact{display:grid;grid-template-columns:1fr 1fr;gap:40px}.contactbox{background:var(--panel);border:1px solid var(--line);border-radius:16px;padding:28px}.contactbox p{color:var(--muted);line-height:1.7;margin:15px 0 22px}.links{display:grid;gap:10px}.links a{padding:13px 15px;border:1px solid var(--line);border-radius:8px;color:#9fc4a4}.links a:hover{color:var(--green);border-color:#2e7039}
form{display:grid;gap:13px}input,textarea{width:100%;background:#050806;border:1px solid var(--line);color:white;padding:14px;border-radius:8px;font:14px Inter}input:focus,textarea:focus{outline:0;border-color:var(--green)}textarea{min-height:130px;resize:vertical}
footer{padding:35px 0;color:#55755c;font:12px "JetBrains Mono";display:flex;justify-content:space-between;border-top:1px solid var(--line)}
.reveal{opacity:0;transform:translateY(25px);transition:.7s}.reveal.show{opacity:1;transform:none}
@media(max-width:800px){.nav{display:none}.menu{display:block}.hero{grid-template-columns:1fr;padding:65px 0}.projects,.contact{grid-template-columns:1fr}h1{letter-spacing:-2px}.terminal{display:none}section{padding:70px 0}}
</style>
</head>
<body>
<header><nav class="wrap"><a class="logo" href="#">CYBER_<b>ABDULLOH</b></a><div class="nav"><a href="#loyihalar">Loyihalar</a><a href="#skills">Ko‘nikmalar</a><a href="#aloqa">Aloqa</a></div><div class="menu">☰</div></nav></header>

<main class="wrap">
<section class="hero" style="border:0">
<div class="reveal">
<div class="badge"><span class="dot"></span> AVAILABLE FOR PROJECTS</div>
<h1>Cyber<br><span>Abdulloh.</span></h1>
<p class="lead">Full-stack va AI dasturchi. Telegram botlar, zamonaviy web tizimlar, MySQL bazalar va avtomatlashtirilgan raqamli yechimlar yarataman.</p>
<div class="buttons"><a class="btn primary" href="#loyihalar">Loyihalarni ko‘rish →</a><a class="btn" href="#aloqa">Bog‘lanish</a></div>
</div>
<div class="terminal reveal"><div class="top"><i></i><i></i><i></i></div><div class="screen"><div><span class="g">$</span> whoami</div><div class="w">abdulloh@cyber:~$</div><br><div><span class="g">role</span> = "Full-stack Developer"</div><div><span class="g">focus</span> = ["PHP","AI","Telegram"]</div><div><span class="g">status</span> = "online"</div><div><span class="g">location</span> = "Tashkent, UZ"</div><br><div class="w">⚡ Building useful things.</div><div class="g">_</div></div></div>
</section>

<section id="loyihalar">
<div class="eyebrow">// 01 — PROJECTS</div><h2 class="title">Haqiqiy loyihalar</h2><p class="sub">Portfolio faqat chiroyli ko‘rinish emas — real ishlaydigan tizimlar va amaliy yechimlar.</p>
<div class="projects">
<article class="card reveal"><div class="cover" style="background-image:url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1200&q=90')"></div><div class="cardbody"><span class="tag">LIVE PROJECT</span><h3>SmashBite</h3><p>Ovqat buyurtma qilish web-tizimi. Menyu, savat, buyurtmalar va MySQL bilan ishlash uchun tayyorlangan.</p><div class="stack"><span>PHP</span><span>MySQL</span><span>Railway</span></div></div></article>
<article class="card reveal"><div class="cover" style="background-image:url('https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1200&q=90')"></div><div class="cardbody"><span class="tag">AI / BOT</span><h3>Telegram AI Bot</h3><p>Foydalanuvchilar bilan tabiiy tilda muloqot qiluvchi, AI API bilan integratsiyalangan Telegram bot.</p><div class="stack"><span>Node.js</span><span>Telegraf</span><span>AI API</span></div></div></article>
<article class="card reveal"><div class="cover" style="background-image:url('https://images.unsplash.com/photo-1614680376573-df3480f0c6ff?auto=format&fit=crop&w=1200&q=90')"></div><div class="cardbody"><span class="tag">AUTOMATION</span><h3>Video Save Bot</h3><p>Telegram orqali ijtimoiy tarmoqlardan media yuklashga mo‘ljallangan avtomatlashtirilgan bot.</p><div class="stack"><span>Python</span><span>Telegram</span><span>yt-dlp</span></div></div></article>
<article class="card reveal"><div class="cover" style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=90')"></div><div class="cardbody"><span class="tag">WEB DEVELOPMENT</span><h3>Cyber Portfolio</h3><p>Minimal, tezkor va mobilga mos portfolio sayt. Matrix effekt, terminal UI va zamonaviy dark dizayn.</p><div class="stack"><span>HTML</span><span>CSS</span><span>JavaScript</span></div></div></article>
</div>
</section>

<section id="skills">
<div class="eyebrow">// 02 — STACK</div><h2 class="title">Texnologiyalar</h2><p class="sub">Loyihani vazifaga qarab kerakli texnologiyalar bilan quraman.</p>
<div class="skills reveal">
<span class="skill">PHP</span><span class="skill">Python</span><span class="skill">Node.js</span><span class="skill">JavaScript</span><span class="skill">MySQL</span><span class="skill">Telegram Bot API</span><span class="skill">REST API</span><span class="skill">Git / GitHub</span><span class="skill">Railway</span><span class="skill">Docker</span><span class="skill">AI API</span><span class="skill">Linux</span>
</div>
</section>

<section id="aloqa">
<div class="eyebrow">// 03 — CONTACT</div><h2 class="title">Loyiha bormi?</h2><p class="sub">G‘oyangizni yozing. Birgalikda uni ishlaydigan raqamli mahsulotga aylantiramiz.</p>
<div class="contact">
<div class="contactbox reveal"><h3>To‘g‘ridan-to‘g‘ri bog‘lanish</h3><p>Telegram orqali tezroq javob beraman.</p><div class="links"><a href="https://t.me/Asqarov_0207" target="_blank">✈ Telegram — @Asqarov_0207</a><a href="https://github.com/abdullohasqarov202-glitch" target="_blank">⌘ GitHub — abdullohasqarov202-glitch</a></div></div>
<div class="contactbox reveal"><form onsubmit="sendTelegram(event)"><input id="name" placeholder="Ismingiz" required><input id="contact" placeholder="Telegram / telefon" required><textarea id="message" placeholder="Loyiha haqida yozing..." required></textarea><button class="btn primary" type="submit">Telegram orqali yuborish →</button></form></div>
</div>
</section>
</main>
<footer class="wrap"><span>© 2026 CYBER ABDULLOH</span><span>Built with ⚡ in Tashkent</span></footer>
<script>
const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting)e.target.classList.add('show')}),{threshold:.12});
document.querySelectorAll('.reveal').forEach(e=>io.observe(e));
function sendTelegram(e){
 e.preventDefault();
 const n=document.getElementById('name').value,c=document.getElementById('contact').value,m=document.getElementById('message').value;
 const text=`Salom Abdulloh!%0A%0A👤 Ism: ${encodeURIComponent(n)}%0A📞 Aloqa: ${encodeURIComponent(c)}%0A💬 Xabar: ${encodeURIComponent(m)}`;
 window.open('https://t.me/Asqarov_0207?text='+text,'_blank');
}
</script>
</body>
</html>