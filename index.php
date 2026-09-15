
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Abdulloh Asqarov — Full-Stack Developer</title>

    <meta name="description"
          content="Abdulloh Asqarov — Web saytlar, Telegram botlar va raqamli yechimlar ishlab chiquvchi Full-Stack Developer.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap"
          rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #080a09;
            --surface: #0d100f;
            --surface-2: #121613;
            --border: rgba(255,255,255,.09);

            --green: #b8ff35;
            --green-dark: #8dcc19;

            --white: #f5f7f5;
            --gray: #929b94;
            --gray2: #68716b;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--bg);
            color: var(--white);
            font-family: "DM Sans", sans-serif;
            overflow-x: hidden;
        }

        body::selection {
            background: var(--green);
            color: #050805;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            width: 100%;
        }

        .container {
            width: min(1160px, 90%);
            margin: auto;
        }

        /* ================= HEADER ================= */

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

            background: rgba(8,10,9,.78);
            backdrop-filter: blur(20px);

            border-bottom: 1px solid rgba(255,255,255,.06);
        }

        .nav {
            height: 76px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-family: "Space Grotesk", sans-serif;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: -.5px;
        }

        .brand span {
            color: var(--green);
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .menu a {
            color: #adb5af;
            font-size: 14px;
            font-weight: 500;
            transition: .25s;
        }

        .menu a:hover {
            color: var(--white);
        }

        .header-contact {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            border: 1px solid rgba(184,255,53,.3);
            padding: 10px 15px;
            border-radius: 7px;

            color: var(--green);
            font-size: 13px;
            font-weight: 600;

            transition: .25s;
        }

        .header-contact:hover {
            background: var(--green);
            color: #080a09;
        }

        /* ================= HERO ================= */

        .hero {
            min-height: 100vh;
            padding-top: 76px;

            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 80px;
        }

        .hero-content {
            padding: 80px 0;
        }

        .available {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            color: var(--gray);
            font-size: 13px;
            margin-bottom: 26px;
        }

        .available-dot {
            width: 8px;
            height: 8px;

            background: var(--green);
            border-radius: 50%;

            box-shadow: 0 0 13px rgba(184,255,53,.8);
        }

        .hero h1 {
            font-family: "Space Grotesk", sans-serif;

            font-size: clamp(46px, 6vw, 76px);
            line-height: .98;

            letter-spacing: -4px;
            font-weight: 700;
        }

        .hero h1 span {
            color: var(--green);
        }

        .hero-description {
            color: var(--gray);
            font-size: 17px;
            line-height: 1.7;

            max-width: 560px;
            margin-top: 28px;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            margin-top: 34px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 13px 20px;
            border-radius: 7px;

            font-size: 14px;
            font-weight: 600;

            transition: .25s;
        }

        .button-primary {
            background: var(--green);
            color: #071006;
        }

        .button-primary:hover {
            background: #d0ff72;
            transform: translateY(-2px);
        }

        .button-outline {
            border: 1px solid var(--border);
            color: var(--white);
        }

        .button-outline:hover {
            border-color: rgba(184,255,53,.4);
            color: var(--green);
        }

        /* ================= HERO IMAGE ================= */

        .hero-visual {
            position: relative;
        }

        .hero-image {
            position: relative;

            height: 570px;

            overflow: hidden;
            border-radius: 14px;

            border: 1px solid var(--border);

            background: var(--surface);
        }

        .hero-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            filter: brightness(.72) saturate(.78);
        }

        .hero-image::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    to top,
                    rgba(5,8,6,.88),
                    transparent 55%
                );
        }

        .image-caption {
            position: absolute;
            z-index: 2;

            left: 25px;
            right: 25px;
            bottom: 25px;

            display: flex;
            align-items: end;
            justify-content: space-between;
        }

        .image-caption small {
            color: #aab3ac;
            display: block;
            margin-bottom: 5px;
        }

        .image-caption strong {
            font-family: "Space Grotesk";
            font-size: 22px;
        }

        .image-number {
            width: 43px;
            height: 43px;

            display: grid;
            place-items: center;

            border: 1px solid rgba(184,255,53,.4);
            color: var(--green);

            border-radius: 50%;
        }

        /* ================= GENERAL ================= */

        section {
            padding: 110px 0;
        }

        .section-top {
            display: flex;
            justify-content: space-between;
            align-items: end;

            margin-bottom: 42px;
        }

        .section-label {
            color: var(--green);

            font-size: 12px;
            font-weight: 700;

            text-transform: uppercase;
            letter-spacing: 2px;

            margin-bottom: 10px;
        }

        .section-title {
            font-family: "Space Grotesk";

            font-size: clamp(32px, 4vw, 48px);
            line-height: 1.05;

            letter-spacing: -2px;
        }

        .section-text {
            color: var(--gray);
            max-width: 390px;

            font-size: 14px;
            line-height: 1.7;
        }

        /* ================= ABOUT ================= */

        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;

            padding: 50px;

            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 15px;
        }

        .about-title {
            font-family: "Space Grotesk";
            font-size: 29px;
            line-height: 1.2;
        }

        .about-title span {
            color: var(--green);
        }

        .about-text {
            margin-top: 20px;

            color: var(--gray);
            font-size: 15px;
            line-height: 1.8;
        }

        .about-list {
            display: grid;
            gap: 1px;

            background: var(--border);
        }

        .about-item {
            background: var(--surface);

            display: flex;
            justify-content: space-between;

            padding: 18px 20px;
        }

        .about-item span {
            color: var(--gray2);
            font-size: 13px;
        }

        .about-item strong {
            color: var(--white);
            font-size: 14px;
            font-weight: 600;
        }

        /* ================= PROJECTS ================= */

        .projects {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .project {
            background: var(--surface);

            border: 1px solid var(--border);
            border-radius: 12px;

            overflow: hidden;

            transition: .3s;
        }

        .project:hover {
            transform: translateY(-6px);
            border-color: rgba(184,255,53,.35);
        }

        .project-image {
            height: 240px;
            overflow: hidden;
        }

        .project-image img {
            height: 100%;
            object-fit: cover;

            filter: brightness(.8) saturate(.75);

            transition: .5s;
        }

        .project:hover .project-image img {
            transform: scale(1.05);
            filter: brightness(.9) saturate(.9);
        }

        .project-content {
            padding: 25px;
        }

        .project-category {
            color: var(--green);

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .project h3 {
            font-family: "Space Grotesk";

            font-size: 21px;
            margin: 8px 0;
        }

        .project p {
            color: var(--gray);

            font-size: 14px;
            line-height: 1.65;
        }

        .project-footer {
            margin-top: 20px;

            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .tag {
            color: #b5beb7;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 5px;
            padding: 5px 8px;

            font-size: 11px;
        }

        /* ================= SKILLS ================= */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .skill {
            min-height: 120px;

            padding: 22px;

            background: var(--surface);

            border: 1px solid var(--border);
            border-radius: 10px;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            transition: .25s;
        }

        .skill:hover {
            border-color: rgba(184,255,53,.35);
        }

        .skill-number {
            color: var(--green);
            font-size: 11px;
        }

        .skill-name {
            font-family: "Space Grotesk";
            font-size: 17px;
            font-weight: 600;
        }

        /* ================= CONTACT ================= */

        .contact {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 20px;
        }

        .contact-main {
            min-height: 380px;

            padding: 45px;

            background:
                linear-gradient(
                    135deg,
                    #111811,
                    #0b0e0c
                );

            border: 1px solid var(--border);
            border-radius: 14px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-main h2 {
            font-family: "Space Grotesk";

            font-size: clamp(33px, 4vw, 52px);
            line-height: 1.05;

            letter-spacing: -2px;

            margin-top: 9px;
        }

        .contact-main h2 span {
            color: var(--green);
        }

        .contact-main p {
            color: var(--gray);

            max-width: 600px;

            font-size: 15px;
            line-height: 1.75;

            margin: 20px 0 28px;
        }

        .contact-card {
            padding: 32px;

            background: var(--surface);

            border: 1px solid var(--border);
            border-radius: 14px;
        }

        .contact-card-title {
            font-family: "Space Grotesk";
            font-size: 20px;

            margin-bottom: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;

            padding: 18px 0;

            border-bottom: 1px solid rgba(255,255,255,.07);
        }

        .contact-item:last-child {
            border-bottom: 0;
        }

        .contact-icon {
            width: 45px;
            height: 45px;

            flex: 0 0 45px;

            display: grid;
            place-items: center;

            border-radius: 8px;

            color: var(--green);

            background: rgba(184,255,53,.05);
            border: 1px solid rgba(184,255,53,.15);

            font-size: 12px;
            font-weight: 700;
        }

        .contact-item small {
            display: block;

            color: var(--gray2);

            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;

            margin-bottom: 4px;
        }

        .contact-item strong {
            font-size: 15px;
            font-weight: 600;
        }

        .contact-item.telegram strong {
            color: var(--green);
        }

        /* ================= FOOTER ================= */

        footer {
            border-top: 1px solid var(--border);

            padding: 28px 0;

            color: var(--gray2);
            font-size: 12px;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer-brand {
            color: var(--white);
            font-weight: 600;
        }

        .footer-brand span {
            color: var(--green);
        }

        /* ================= ANIMATION ================= */

        .reveal {
            opacity: 0;
            transform: translateY(20px);

            transition:
                opacity .7s ease,
                transform .7s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* ================= MOBILE ================= */

        @media(max-width: 900px) {

            .menu,
            .header-contact {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero-content {
                padding: 70px 0 20px;
            }

            .hero-image {
                height: 470px;
            }

            .about,
            .contact {
                grid-template-columns: 1fr;
            }

            .projects {
                grid-template-columns: 1fr 1fr;
            }

            .skills-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media(max-width: 600px) {

            .container {
                width: 92%;
            }

            section {
                padding: 75px 0;
            }

            .hero {
                padding-top: 80px;
            }

            .hero h1 {
                font-size: 45px;
                letter-spacing: -2.5px;
            }

            .hero-description {
                font-size: 15px;
            }

            .hero-actions {
                flex-direction: column;
            }

            .button {
                width: 100%;
            }

            .hero-image {
                height: 390px;
            }

            .section-top {
                display: block;
            }

            .section-text {
                margin-top: 14px;
            }

            .about {
                padding: 25px;
            }

            .projects {
                grid-template-columns: 1fr;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .contact-main {
                padding: 30px;
            }

            .footer-inner {
                display: block;
                text-align: center;
            }

            .footer-inner div + div {
                margin-top: 7px;
            }
        }

    </style>
</head>

<body>

<header>

    <div class="container nav">

        <a href="#home" class="brand">
            CYBER <span>ABDULLOH</span>
        </a>

        <nav class="menu">

            <a href="#home">
                Bosh sahifa
            </a>

            <a href="#about">
                Men haqimda
            </a>

            <a href="#projects">
                Loyihalar
            </a>

            <a href="#skills">
                Ko‘nikmalar
            </a>

            <a href="#contact">
                Aloqa
            </a>

        </nav>

        <a
            href="https://t.me/Asqarov_0207"
            target="_blank"
            class="header-contact"
        >
            Telegram →
        </a>

    </div>

</header>


<main>

    <!-- HERO -->

    <section class="container hero" id="home">

        <div class="hero-content reveal">

            <div class="available">
                <span class="available-dot"></span>
                Yangi loyihalar uchun ochiq
            </div>

            <h1>
                MEN <span>RAQAMLI</span><br>
                G‘OYALARNI<br>
                YARATAMAN.
            </h1>

            <p class="hero-description">
                Men web saytlar, Telegram botlar va raqamli
                mahsulotlar ishlab chiqaman. Maqsadim —
                oddiy g‘oyani tushunarli, tezkor va ishlaydigan
                mahsulotga aylantirish.
            </p>

            <div class="hero-actions">

                <a
                    href="#projects"
                    class="button button-primary"
                >
                    Loyihalarni ko‘rish
                </a>

                <a
                    href="https://t.me/Asqarov_0207"
                    target="_blank"
                    class="button button-outline"
                >
                    Telegram orqali yozish
                </a>

            </div>

        </div>


        <div class="hero-visual reveal">

            <div class="hero-image">

                <img
                    src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1400&q=90"
                    alt="Developer workspace"
                >

                <div class="image-caption">

                    <div>
                        <small>Abdulloh Asqarov</small>

                        <strong>
                            Full-Stack Developer
                        </strong>
                    </div>

                    <div class="image-number">
                        01
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ABOUT -->

    <section class="container" id="about">

        <div class="section-top reveal">

            <div>
                <div class="section-label">
                    01 / Men haqimda
                </div>

                <h2 class="section-title">
                    Koddan ko‘ra<br>
                    natija muhim.
                </h2>
            </div>

            <p class="section-text">
                Har bir loyiha faqat chiroyli ko‘rinishi emas,
                foydalanuvchi uchun qulay va amalda ishlashi
                kerak.
            </p>

        </div>


        <div class="about reveal">

            <div>

                <h3 class="about-title">
                    Web. Bot. <span>Digital.</span>
                </h3>

                <p class="about-text">
                    Web dasturlash, Telegram botlar va
                    raqamli avtomatlashtirish yo‘nalishida
                    ishlayman. Loyihaning g‘oyasidan boshlab
                    uning tayyor ishlaydigan holatigacha
                    bo‘lgan jarayonni ishlab chiqishga e’tibor
                    beraman.
                </p>

                <p class="about-text">
                    Har bir interfeysda ortiqcha elementlardan
                    qochib, foydalanuvchiga kerakli narsani
                    aniq ko‘rsatishga harakat qilaman.
                </p>

            </div>


            <div class="about-list">

                <div class="about-item">
                    <span>Yo‘nalish</span>
                    <strong>Full-Stack Development</strong>
                </div>

                <div class="about-item">
                    <span>Asosiy stack</span>
                    <strong>PHP / Python / JS</strong>
                </div>

                <div class="about-item">
                    <span>Botlar</span>
                    <strong>Telegram</strong>
                </div>

                <div class="about-item">
                    <span>Backend</span>
                    <strong>MySQL / PHP</strong>
                </div>

                <div class="about-item">
                    <span>Deployment</span>
                    <strong>Railway</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- PROJECTS -->

    <section id="projects">

        <div class="container">

            <div class="section-top reveal">

                <div>

                    <div class="section-label">
                        02 / Portfolio
                    </div>

                    <h2 class="section-title">
                        Tanlangan loyihalar
                    </h2>

                </div>

                <p class="section-text">
                    Turli yo‘nalishdagi web va Telegram
                    loyihalar.
                </p>

            </div>


            <div class="projects">


                <!-- PROJECT 1 -->

                <article class="project reveal">

                    <div class="project-image">

                        <img
                            src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1200&q=90"
                            alt="Restaurant ordering project"
                        >

                    </div>

                    <div class="project-content">

                        <div class="project-category">
                            Web Platform
                        </div>

                        <h3>
                            SmashBite
                        </h3>

                        <p>
                            Restoran uchun mahsulotlar,
                            kategoriya, savat va buyurtma
                            jarayonlarini birlashtiruvchi
                            web platforma.
                        </p>

                        <div class="project-footer">

                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">JavaScript</span>

                        </div>

                    </div>

                </article>


                <!-- PROJECT 2 -->

                <article class="project reveal">

                    <div class="project-image">

                        <img
                            src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1200&q=90"
                            alt="Artificial intelligence project"
                        >

                    </div>

                    <div class="project-content">

                        <div class="project-category">
                            Automation
                        </div>

                        <h3>
                            Telegram AI Bot
                        </h3>

                        <p>
                            Telegram orqali foydalanuvchi
                            bilan ishlash va AI asosidagi
                            funksiyalarni avtomatlashtirish.
                        </p>

                        <div class="project-footer">

                            <span class="tag">Python</span>
                            <span class="tag">AI</span>
                            <span class="tag">Telegram</span>

                        </div>

                    </div>

                </article>


                <!-- PROJECT 3 -->

                <article class="project reveal">

                    <div class="project-image">

                        <img
                            src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1200&q=90"
                            alt="Social media application"
                        >

                    </div>

                    <div class="project-content">

                        <div class="project-category">
                            Telegram Bot
                        </div>

                        <h3>
                            Video Save UZ
                        </h3>

                        <p>
                            Ijtimoiy tarmoqlardagi media
                            kontentni Telegram orqali olish
                            uchun ishlab chiqilgan bot.
                        </p>

                        <div class="project-footer">

                            <span class="tag">Python</span>
                            <span class="tag">yt-dlp</span>
                            <span class="tag">Railway</span>

                        </div>

                    </div>

                </article>


            </div>

        </div>

    </section>


    <!-- SKILLS -->

    <section id="skills">

        <div class="container">

            <div class="section-top reveal">

                <div>

                    <div class="section-label">
                        03 / Skills
                    </div>

                    <h2 class="section-title">
                        Texnologiyalar
                    </h2>

                </div>

                <p class="section-text">
                    Loyihaga qarab mos texnologiyalarni
                    tanlayman.
                </p>

            </div>


            <div class="skills-grid">

                <div class="skill reveal">
                    <span class="skill-number">01</span>
                    <span class="skill-name">PHP / MySQL</span>
                </div>

                <div class="skill reveal">
                    <span class="skill-number">02</span>
                    <span class="skill-name">Python</span>
                </div>

                <div class="skill reveal">
                    <span class="skill-number">03</span>
                    <span class="skill-name">JavaScript</span>
                </div>

                <div class="skill reveal">
                    <span class="skill-number">04</span>
                    <span class="skill-name">HTML / CSS</span>
                </div>

                <div class="skill reveal">
                    <span class="skill-number">05</span>
                    <span class="skill-name">Telegram Bots</span>
                </div>

                <div class="skill reveal">
                    <span class="skill-number">06</span>
                    <span class="skill-name">WordPress</span>
                </div>

                <div class="skill reveal">
                    <span class="skill-number">07</span>
                    <span class="skill-name">Git / Railway</span>
                </div>

                <div class="skill reveal">
                    <span class="skill-number">08</span>
                    <span class="skill-name">AI Integration</span>
                </div>

            </div>

        </div>

    </section>


    <!-- CONTACT -->

    <section id="contact">

        <div class="container">

            <div class="section-top reveal">

                <div>

                    <div class="section-label">
                        04 / Contact
                    </div>

                    <h2 class="section-title">
                        Aloqa
                    </h2>

                </div>

            </div>


            <div class="contact">


                <div class="contact-main reveal">

                    <div class="section-label">
                        Yangi loyiha
                    </div>

                    <h2>
                        G‘OYANGIZNI
                        <span>REAL</span>
                        MAHSULOTGA
                        AYLANTIRAMIZ.
                    </h2>

                    <p>
                        Web sayt, Telegram bot yoki boshqa
                        raqamli loyiha bo‘yicha bog‘lanishingiz
                        mumkin. Loyiha haqida qisqacha yozing
                        va Telegram orqali murojaat qiling.
                    </p>

                    <div>

                        <a
                            href="https://t.me/Asqarov_0207"
                            target="_blank"
                            class="button button-primary"
                        >
                            Telegramda bog‘lanish →
                        </a>

                    </div>

                </div>


                <div class="contact-card reveal">

                    <div class="contact-card-title">
                        Aloqa ma’lumotlari
                    </div>


                    <a
                        href="https://t.me/Asqarov_0207"
                        target="_blank"
                        class="contact-item telegram"
                    >

                        <div class="contact-icon">
                            TG
                        </div>

                        <div>

                            <small>
                                Telegram
                            </small>

                            <strong>
                                @Asqarov_0207
                            </strong>

                        </div>

                    </a>


                    <div class="contact-item">

                        <div class="contact-icon">
                            UZ
                        </div>

                        <div>

                            <small>
                                Joylashuv
                            </small>

                            <strong>
                                O‘zbekiston
                            </strong>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            DEV
                        </div>

                        <div>

                            <small>
                                Yo‘nalish
                            </small>

                            <strong>
                                Full-Stack Developer
                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>


<footer>

    <div class="container footer-inner">

        <div class="footer-brand">
            CYBER <span>ABDULLOH</span>
        </div>

        <div>
            © <?php echo date("Y"); ?> Abdulloh Asqarov
        </div>

    </div>

</footer>


<script>

    const revealElements =
        document.querySelectorAll(".reveal");

    const observer =
        new IntersectionObserver(
            (entries) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("active");

                    }

                });

            },
            {
                threshold: 0.12
            }
        );


    revealElements.forEach((element) => {

        observer.observe(element);

    });

</script>

</body>
</html>
