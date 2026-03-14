<?php
session_start();
$isSecure = true;
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>THE STANDARDS | FOR YOU ARK SOVEREIGN GATEWAY</title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --gold-base: #d4af37;
            --gold-bright: #ffe08a;
            --gold-dark: #8f6714;
            --gold-glow: rgba(212, 175, 55, 0.82);
            --glass-bg: rgba(8, 5, 5, 0.01);
            --text-soft: #ece4d2;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body { width: 100%; height: 100%; }

        body {
            background: #000;
            color: #fff;
            font-family: 'Cormorant Garamond', serif;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            perspective: 2500px;
            position: relative;
            isolation: isolate;
        }

        .curtain-entrance {
            position: fixed;
            top: 0;
            width: 50vw;
            height: 100vh;
            background: #000;
            z-index: 99999;
            transition: transform 2.5s cubic-bezier(0.7, 0, 0.3, 1);
        }
        .curtain-entrance-left { left: 0; border-right: 1px solid var(--gold-dark); }
        .curtain-entrance-right { right: 0; border-left: 1px solid var(--gold-dark); }
        body.loaded .curtain-entrance-left { transform: translateX(-100%); }
        body.loaded .curtain-entrance-right { transform: translateX(100%); }

        #gear-canvas, #lux-canvas {
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
        }
        #gear-canvas { z-index: 1; opacity: 0.34; }
        #lux-canvas { z-index: 2; opacity: 1; }

        .background-overlay {
    position: fixed;
    inset: 0;
    z-index: 3;
    pointer-events: none;
    background:
        radial-gradient(circle at center, rgba(0,0,0,0.01) 0%, rgba(0,0,0,0.08) 58%, rgba(0,0,0,0.18) 100%),
        linear-gradient(180deg, rgba(0,0,0,0.02), rgba(0,0,0,0.06) 36%, rgba(0,0,0,0.12));
}

        .lang-selector {
            position: fixed;
            top: 35px;
            right: 45px;
            z-index: 1000;
            background: rgba(0,0,0,0.86);
            border: 2px solid var(--gold-dark);
            color: var(--gold-bright);
            font-family: 'Cinzel Decorative', serif;
            padding: 10px 18px;
            font-size: 0.95rem;
            cursor: pointer;
            outline: none;
            box-shadow: 0 0 20px rgba(0,0,0,1), inset 0 0 10px var(--gold-dark);
            border-radius: 3px;
            transition: 0.4s;
        }
        .lang-selector:hover {
            border-color: var(--gold-bright);
            box-shadow: 0 0 20px var(--gold-glow);
        }
        .lang-selector option {
            background: #000;
            color: var(--gold-base);
            font-family: 'Montserrat', sans-serif;
        }

        .btn-home {
            position: fixed;
            top: 35px;
            left: 45px;
            color: var(--gold-bright);
            text-decoration: none;
            border: 2px solid var(--gold-dark);
            padding: 10px 24px;
            font-size: 0.9rem;
            letter-spacing: 3px;
            z-index: 1000;
            transition: 0.4s;
            background: rgba(0,0,0,0.86);
            font-family: 'Cinzel Decorative', serif;
            box-shadow: 0 0 20px rgba(0,0,0,1), inset 0 0 10px var(--gold-dark);
        }
        .btn-home:hover {
            border-color: var(--gold-bright);
            background: rgba(212,175,55,0.12);
            box-shadow: 0 0 30px var(--gold-glow);
        }

        #idle-curtain {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at center, rgba(18,10,10,0.55) 0%, rgba(0,0,0,0.92) 100%);
            z-index: 9999;
            opacity: 0;
            pointer-events: none;
            transition: opacity 1.2s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #idle-curtain.active {
            opacity: 1;
            pointer-events: all;
            cursor: pointer;
        }

        .curtain-logo {
            font-family: 'Cinzel Decorative', serif;
            font-size: 4.5rem;
            background: linear-gradient(45deg, var(--gold-dark), var(--gold-bright), var(--gold-base), var(--gold-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 30px var(--gold-glow));
            letter-spacing: 14px;
            animation: breatheLogo 4s infinite alternate;
            margin-bottom: 18px;
            text-align: center;
            direction: ltr !important;
            unicode-bidi: isolate !important;
        }

        .curtain-sub {
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 4px;
            color: var(--gold-dark);
            font-size: 0.95rem;
            font-weight: 300;
            text-shadow: 0 0 10px #000;
            text-align: center;
            padding: 0 20px;
            max-width: 900px;
            line-height: 1.7;
        }

        .book-monolith {
            position: relative;
            z-index: 20;
            width: 96vw;
            height: 96vh;
            background: var(--glass-bg);
            border: 1px solid var(--gold-dark);
            box-shadow:
                0 0 0 8px rgba(0,0,0,0.86),
                0 0 0 12px rgba(143,103,20,0.95),
                0 0 0 13px var(--gold-bright),
                inset 0 0 42px rgba(0,0,0,0.78),
                0 32px 70px rgba(0,0,0,0.72);
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            overflow: hidden;
        }

        .book-monolith::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 2px solid rgba(212,175,55,0.24);
            pointer-events: none;
            z-index: 10;
        }

        .rococo-ornament {
            position: absolute;
            color: var(--gold-bright);
            font-size: 2.4rem;
            text-shadow: 0 0 20px var(--gold-glow), 2px 2px 5px #000;
            z-index: 20;
        }
        .top-left { top: -8px; left: -8px; transform: rotate(-45deg); }
        .top-right { top: -8px; right: -8px; transform: rotate(45deg); }
        .bottom-left { bottom: -8px; left: -8px; transform: rotate(-135deg); }
        .bottom-right { bottom: -8px; right: -8px; transform: rotate(135deg); }

        .majestic-logo-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 18px;
            margin-top: 42px;
            margin-bottom: 22px;
            position: relative;
            padding-bottom: 15px;
            z-index: 50;
            direction: ltr !important;
            unicode-bidi: isolate !important;
        }
        .majestic-logo-wrapper::after {
            content: '❖';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--gold-bright);
            font-size: 1.4rem;
            text-shadow: 0 0 15px var(--gold-glow);
        }
        .majestic-logo-wrapper::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 10%;
            width: 80%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold-bright), transparent);
        }

        .main-logo-img {
            width: 72px;
            height: 72px;
            object-fit: contain;
            filter: drop-shadow(0 0 14px var(--gold-glow));
            flex: 0 0 auto;
            border-radius: 50%;
            background: rgba(0,0,0,0.45);
            padding: 4px;
        }

        .majestic-logo {
            font-family: 'Cinzel Decorative', serif;
            font-size: 2.45rem;
            font-weight: 900;
            background: linear-gradient(45deg, var(--gold-dark), var(--gold-bright), var(--gold-base), var(--gold-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 10px;
            line-height: 0.9;
            filter: drop-shadow(0px 4px 2px rgba(0,0,0,0.8)) drop-shadow(0 0 20px rgba(212,175,55,0.4));
            text-align: center;
            direction: ltr !important;
            unicode-bidi: isolate !important;
            white-space: nowrap;
        }

        .book-pages-container {
            position: relative;
            flex-grow: 1;
            width: 100%;
            height: 100%;
            padding: 16px 72px;
            overflow: hidden;
            z-index: 12;
        }

        .page {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 8px 72px 0 72px;
            opacity: 0;
            visibility: hidden;
            transform: rotateY(20deg) scale(0.95);
            transform-origin: left center;
            transition: all 1.2s cubic-bezier(0.645, 0.045, 0.355, 1);
        }
        .page.active {
            opacity: 1;
            visibility: visible;
            transform: rotateY(0deg) scale(1);
            z-index: 5;
        }
        .page.flipped-prev {
            transform: rotateY(-20deg) scale(0.95);
            opacity: 0;
            visibility: hidden;
        }

        .chapter-title {
            font-family: 'Cinzel Decorative', serif;
            font-size: 2.2rem;
            color: var(--gold-bright);
            text-align: center;
            margin-bottom: 22px;
            letter-spacing: 4px;
            text-shadow: 0 0 20px rgba(212,175,55,0.5);
            text-transform: uppercase;
        }

        .text-content-area {
            flex-grow: 1;
            overflow-y: auto;
            padding-right: 22px;
            margin-bottom: 16px;
            font-size: 1.19rem;
            line-height: 1.9;
            color: var(--text-soft);
            text-align: justify;
            font-weight: 300;
            scroll-behavior: smooth;
        }

        .text-content-area::-webkit-scrollbar { width: 4px; }
        .text-content-area::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.8);
            border-left: 1px solid rgba(212,175,55,0.2);
        }
        .text-content-area::-webkit-scrollbar-thumb {
            background: var(--gold-base);
            border-radius: 10px;
            box-shadow: 0 0 10px var(--gold-glow);
        }

        .text-content-area p {
            margin-bottom: 20px;
            text-indent: 34px;
        }
        .text-content-area p:first-letter {
            float: left;
            font-family: 'Cinzel Decorative', serif;
            font-size: 3.6rem;
            line-height: 0.84;
            margin-right: 12px;
            color: var(--gold-bright);
            text-shadow: 0 0 15px var(--gold-glow);
        }

        .text-content-area ul {
            margin: 12px 0 24px 24px;
            padding-left: 10px;
        }
        .text-content-area li {
            margin-bottom: 10px;
            line-height: 1.75;
        }

        .signal-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 10px 0 24px;
        }

        .signal-pill {
            border: 1px solid rgba(212,175,55,0.24);
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(212,175,55,0.10);
            color: var(--gold-bright);
            font-size: 0.85rem;
            letter-spacing: 1px;
            font-family: 'Montserrat', sans-serif;
        }

        .panel-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin: 18px 0 26px;
        }

        .panel-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(212,175,55,0.18);
            border-radius: 14px;
            padding: 18px;
            box-shadow: inset 0 0 20px rgba(0,0,0,0.24);
        }

        .panel-card h4 {
            color: var(--gold-bright);
            font-family: 'Cinzel Decorative', serif;
            font-size: 0.95rem;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .panel-card p, .panel-card li {
            font-size: 1rem;
            line-height: 1.8;
            color: #e4e4e4;
        }

        .highlight {
            color: var(--gold-bright);
            font-weight: 600;
            text-shadow: 0 0 10px rgba(212,175,55,0.34);
            font-style: italic;
        }

        .blue-highlight {
            color: #c9dcff;
            text-shadow: 0 0 10px rgba(139,183,255,0.25);
        }

        .cursor {
            display: inline-block;
            width: 4px;
            height: 1em;
            background: var(--gold-bright);
            animation: blink 0.9s infinite;
            vertical-align: baseline;
            box-shadow: 0 0 10px var(--gold-glow);
        }

        .nav-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 54px;
            border-top: 1px solid rgba(212,175,55,0.18);
            position: relative;
            z-index: 14;
        }

        .nav-btn {
            background: rgba(0,0,0,0.72);
            border: 1px solid var(--gold-dark);
            color: var(--gold-bright);
            padding: 12px 26px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.86rem;
            letter-spacing: 3px;
            cursor: pointer;
            transition: 0.4s;
            text-transform: uppercase;
        }
        .nav-btn:hover {
            background: rgba(212,175,55,0.15);
            border-color: var(--gold-bright);
            box-shadow: 0 0 30px var(--gold-glow);
            transform: translateY(-2px);
        }

        .page-indicator {
            color: rgba(212,175,55,0.6);
            font-family: 'Cinzel Decorative';
            font-size: 1.25rem;
            letter-spacing: 6px;
        }

        .ai-orb {
            position: fixed;
            bottom: 38px;
            right: 45px;
            width: 74px;
            height: 74px;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, #fff6dc 0%, var(--gold-base) 38%, #000 100%);
            box-shadow: 0 0 40px var(--gold-glow), inset -10px -10px 20px rgba(0,0,0,0.8);
            cursor: pointer;
            z-index: 2000;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: floatOrb 4s infinite ease-in-out;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .ai-orb::after {
            content: 'AI';
            font-family: 'Cinzel Decorative', serif;
            color: #000;
            font-size: 1.45rem;
            font-weight: 900;
            text-shadow: 1px 1px 2px rgba(255,255,255,0.7);
        }

        .ai-chat-window {
            position: fixed;
            bottom: 126px;
            right: 45px;
            width: 400px;
            height: 500px;
            background: rgba(5, 0, 0, 0.96);
            border: 2px solid var(--gold-base);
            box-shadow: 0 20px 50px rgba(0,0,0,1), 0 0 30px var(--gold-glow);
            z-index: 2000;
            display: none;
            flex-direction: column;
            border-radius: 8px;
            opacity: 0;
            transform: translateY(30px) scale(0.95);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
        }
        .ai-chat-window.open {
            display: flex;
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .ai-header {
            background: linear-gradient(90deg, var(--gold-dark), var(--gold-bright), var(--gold-dark));
            color: #000;
            padding: 16px;
            text-align: center;
            font-family: 'Cinzel Decorative', serif;
            font-weight: bold;
            font-size: 1.08rem;
            letter-spacing: 3px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }

        .ai-body {
            flex-grow: 1;
            padding: 18px;
            overflow-y: auto;
            color: #e0e0e0;
            font-size: 1rem;
            line-height: 1.65;
            background: linear-gradient(180deg, rgba(7,3,3,0.92), rgba(8,4,4,0.98));
        }
        .ai-body p { margin-bottom: 12px; }
        .ai-body::-webkit-scrollbar { width: 3px; }
        .ai-body::-webkit-scrollbar-thumb { background: var(--gold-base); }

        .ai-input-area {
            display: flex;
            border-top: 1px solid var(--gold-dark);
            background: rgba(0,0,0,0.55);
        }

        .ai-input-area input {
            flex-grow: 1;
            padding: 16px;
            background: transparent;
            border: none;
            color: #fff;
            outline: none;
            font-family: 'Montserrat';
            font-size: 0.95rem;
        }

        .ai-input-area button {
            background: var(--gold-base);
            border: none;
            padding: 0 22px;
            cursor: pointer;
            font-family: 'Montserrat';
            font-weight: bold;
            color: #000;
            transition: 0.3s;
        }
        .ai-input-area button:hover { background: var(--gold-bright); }

        .rtl-paragraph:first-letter {
            float: none !important;
            margin-right: 0 !important;
            font-size: inherit !important;
            line-height: inherit !important;
            font-family: inherit !important;
            color: inherit !important;
            text-shadow: none !important;
        }

        .brand-ltr {
            direction: ltr !important;
            unicode-bidi: isolate !important;
            display: inline-block;
            white-space: nowrap;
        }

        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }
        @keyframes breatheLogo {
            0% { filter: drop-shadow(0 0 20px var(--gold-glow)); transform: scale(1); }
            100% { filter: drop-shadow(0 0 44px var(--gold-bright)); transform: scale(1.03); }
        }
        @keyframes floatOrb {
            0%, 100% { transform: translateY(0); box-shadow: 0 0 30px var(--gold-glow); }
            50% { transform: translateY(-10px); box-shadow: 0 0 50px var(--gold-bright); }
        }

        @media (max-width: 1024px) {
            .panel-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .chapter-title { font-size: 1.45rem; letter-spacing: 2px; }
            .text-content-area { font-size: 1.02rem; line-height: 1.72; }
            .book-pages-container, .page { padding-left: 22px; padding-right: 22px; }
            .nav-controls { padding: 15px 18px; }
            .lang-selector { top: 15px; right: 15px; padding: 8px 12px; font-size: 0.78rem; }
            .btn-home { top: 15px; left: 15px; padding: 8px 12px; font-size: 0.72rem; letter-spacing: 1px; }
            .curtain-logo { font-size: 2rem; letter-spacing: 5px; }
            .curtain-sub { font-size: 0.78rem; letter-spacing: 2px; }
            .majestic-logo { font-size: 1.45rem; letter-spacing: 5px; }
            .main-logo-img { width: 54px; height: 54px; }
            .ai-chat-window { width: calc(100vw - 30px); right: 15px; bottom: 108px; }
            .nav-btn { padding: 10px 14px; font-size: 0.72rem; letter-spacing: 1px; }
            .page-indicator { font-size: 1rem; letter-spacing: 3px; }
        }
    </style>
</head>
<body>

    <div class="curtain-entrance curtain-entrance-left"></div>
    <div class="curtain-entrance curtain-entrance-right"></div>

    <canvas id="gear-canvas"></canvas>
    <canvas id="lux-canvas"></canvas>
    <div class="background-overlay"></div>

    <div id="idle-curtain" onclick="wakeFromIdle()">
        <div class="curtain-logo brand-ltr">FOR YOU ARK</div>
        <div class="curtain-sub" id="curtain-text">SİSTEM STANDART MODUNDA BEKLİYOR. DEVAM ETMEK İÇİN DOKUNUN.</div>
    </div>

    <select class="lang-selector" id="lang-select" onchange="changeLanguage()">
        <option value="tr">TR - TÜRKÇE</option>
        <option value="en">EN - ENGLISH</option>
        <option value="fr">FR - FRANÇAIS</option>
        <option value="de">DE - DEUTSCH</option>
        <option value="ru">RU - РУССКИЙ</option>
        <option value="es">ES - ESPAÑOL</option>
        <option value="ar">AR - العربية</option>
        <option value="zh">ZH - 中文</option>
    </select>

    <a href="index.php" class="btn-home" id="btn-home">← ANASAYFA</a>

    <div class="book-monolith">
        <div class="rococo-ornament top-left">⚜</div>
        <div class="rococo-ornament top-right">⚜</div>
        <div class="rococo-ornament bottom-left">⚜</div>
        <div class="rococo-ornament bottom-right">⚜</div>

        <div class="majestic-logo-wrapper">
            <img src="images/foryou-logo.png" alt="FOR YOU ARK" class="main-logo-img" onerror="this.style.display='none';">
            <div class="majestic-logo brand-ltr">FOR YOU ARK</div>
        </div>

        <div class="book-pages-container">
            <div class="page active" id="page-1"><h1 class="chapter-title" id="title-1"></h1><div class="text-content-area" id="tw-1"></div></div>
            <div class="page" id="page-2"><h1 class="chapter-title" id="title-2"></h1><div class="text-content-area" id="tw-2"></div></div>
            <div class="page" id="page-3"><h1 class="chapter-title" id="title-3"></h1><div class="text-content-area" id="tw-3"></div></div>
            <div class="page" id="page-4"><h1 class="chapter-title" id="title-4"></h1><div class="text-content-area" id="tw-4"></div></div>
            <div class="page" id="page-5"><h1 class="chapter-title" id="title-5"></h1><div class="text-content-area" id="tw-5"></div></div>
            <div class="page" id="page-6"><h1 class="chapter-title" id="title-6"></h1><div class="text-content-area" id="tw-6"></div></div>
        </div>

        <div class="nav-controls">
            <button class="nav-btn" id="prev-btn" onclick="turnPage(-1)" style="visibility:hidden;">← ÖNCEKİ FASIL</button>
            <div class="page-indicator" id="page-indicator">I / VI</div>
            <button class="nav-btn" id="next-btn" onclick="turnPage(1)">SONRAKİ FASIL →</button>
        </div>
    </div>

    <div class="ai-orb" id="ai-orb" onclick="openAI()"></div>
    <div class="ai-chat-window" id="ai-chat">
        <div class="ai-header" id="ai-header">SOVEREIGN AI</div>
        <div class="ai-body" id="ai-messages"></div>
        <div class="ai-input-area">
            <input type="text" id="ai-text" placeholder="..." onkeypress="if(event.key === 'Enter') sendAIMessage()">
            <button onclick="sendAIMessage()" id="ai-send-btn">İLET</button>
        </div>
    </div>

    <script>
        const content = {
            tr: {
                home: "← ANASAYFA",
                next: "SONRAKİ FASIL →",
                prev: "← ÖNCEKİ FASIL",
                pass: "ANASAYFAYA DÖN →",
                idle: "SİSTEM STANDART MODUNDA BEKLİYOR. DEVAM ETMEK İÇİN DOKUNUN.",
                aiHeader: "SOVEREIGN AI",
                aiSend: "İLET",
                aiWelcome: "Standartlar salonuna hoş geldiniz Majesteleri. Mahremiyet, denetim, öngörü, temsil ve dijital ayna rejimini açıklamaktan onur duyarım.",
                aiPlaceholder: "Majestelerinin emri...",
                aiReply: "Standartlarımız yalnızca söz değil, uygulanabilir düzendir. Her ilke saha disiplini, dijital hafıza ve görünürlük sınırı ile korunur.",
                titles: [
                    "FASIL I : STANDARTLAR MANİFESTOSU",
                    "FASIL II : KURUCU ZEMİN",
                    "FASIL III : İLK İKİ STANDART",
                    "FASIL IV : ÜÇÜNCÜ VE DÖRDÜNCÜ STANDART",
                    "FASIL V : DİJİTAL AYNA VE PROTOKOLLER",
                    "FASIL VI : YAPAY ZEKA VE SON HÜKÜM"
                ],
                texts: [
                    `<p>FOR YOU ARK, talep karşılayan sıradan bir yapı değildir. O, hayatın dağınık katmanlarını tek bir disiplin altında toplayan görünmez iradedir. Mahremiyetinizi korur, kusuru sizden önce görür, dışarıdan gelen her teması filtreler, düzeni bozan ayrıntıları sessizce ortadan kaldırır ve tüm süreci asil bir netlikle size geri yansıtır.</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Mahremiyet Rejimi</h4><p><span class="highlight">The Vault</span>. İçeri giren hiçbir detay dış dünyanın konusu hâline gelmez.</p></div>
                        <div class="panel-card"><h4>Operasyon Otoritesi</h4><p><span class="highlight">The Auditor</span>. Sisteme dokunan her aktör ölçülür, doğrulanır ve izlenir.</p></div>
                        <div class="panel-card"><h4>Öngörü Motoru</h4><p><span class="highlight">The Navigator</span>. Kriz, oluştuğunda değil; sinyal verdiğinde yönetilir.</p></div>
                        <div class="panel-card"><h4>Manifesto</h4><p>Biz yalnızca hayatı kolaylaştırmıyoruz. <span class="highlight">Hayatın dağınık yüzeyini yeniden düzenliyoruz.</span></p></div>
                    </div>
                    <p>Concierge yaklaşımı, talep geldiğinde hareket eder. FOR YOU ARK ise talepten önce düşünür, dışarıdan gelen etkileri filtreler, kusuru önceden teşhis eder ve sistemin tamamını sizin adınıza yönetir. Bu yüzden bizim için lüks, yalnızca estetik değil; sessiz kontrol, görünmez emniyet ve tavizsiz düzen disiplinidir.</p>`,
                    `<p>FOR YOU ARK’ın temelinde iki basit ama sarsılmaz kabul yatar: İlki, <span class="highlight">mahremiyetin pazarlık konusu olamayacağıdır.</span> İkincisi ise güvenin kör inançla değil, denetlenebilir netlikle kurulacağıdır. Bu yüzden sistemimiz, yalnızca görünürde zarif değil; içeride son derece disiplinli çalışır.</p>
                    <p>Buradaki bütün yapı; aileyi, mülkü, zamanı, operasyonu, teması ve veriyi tek bir mimari içinde ele alır. Saha, panel, rapor, partner ağı, yetki sınırı ve yapay zekâ destekli içgörü katmanı birbirinden kopuk değil; aynı düzenin parçalarıdır.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>Gösterişli değil, ağır. Parlak değil, güven veren. Dışarıdan sade, içeriden kusursuz.</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>AI burada dekor değildir. Riski erkenden görür, veriyi anlamlandırır ve karar zeminini güçlendirir.</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>Her temas, her süreç, her dış aktör ve her kayıt tek bir standart rejimine bağlıdır.</p></div>
                        <div class="panel-card"><h4>Kurucu Cümle</h4><p><span class="highlight">Lüks, görünür gösteri değil; görünmez kusursuzluktur.</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. Mutlak Mahremiyet | THE VAULT</span><br>İçeri giren hiçbir detay, dış dünyanın konusu hâline gelmez. FOR YOU ARK için gizlilik, bir prosedür başlığı değil; yapının varlık sebebidir. Aile içi ritim, sağlık detayı, finansal akış, günlük alışkanlık ve operasyonel bilgi yalnızca gerekli erişim seviyesinde kalır.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Sistem Vaadi</h4><p>Kameralardan, fazlalıklardan, meraklı gözlerden ve kurumsuz temaslardan uzak; kapalı devre bir güven alanı.</p></div>
                        <div class="panel-card"><h4>Dijital Karşılık</h4><p>Access Integrity, Secure Memory Layer, Silent Encryption Logic ve kontrollü görünürlük rejimi.</p></div>
                    </div>
                    <p><span class="highlight">02. Tavizsiz Denetim | THE AUDITOR</span><br>İçeri giren herkes görev yapmaz. Önce ölçülür, doğrulanır ve izlenir. FOR YOU ARK sistemi uygulamakla yetinmez; standardı sizin adınıza dayatır. Sağlık, teknik, güvenlik, lojistik veya idari temas fark etmeksizin, yaşam alanına dokunan bütün dış aktörler denetim süzgecinden geçer.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Sistem Vaadi</h4><p>Kontrolün bir his değil, ölçülebilir ve doğrulanabilir bir gerçek olarak her an sizin elinizde kalması.</p></div>
                        <div class="panel-card"><h4>Dijital Karşılık</h4><p>Audit Trace Engine, Compliance Scan, Partner Verification ve zaman damgalı teslim kontrolü.</p></div>
                    </div>`,
                    `<p><span class="highlight">03. Proaktif Çözüm ve Öngörü | THE NAVIGATOR</span><br>Kriz, bizim için bir olay değil; geç oluşmuş bir sinyaldir. FOR YOU ARK gecikerek parlayan bir sistem değildir. Ritim bozulmadan önce dalgayı okur, risk büyümeden önce yönlendirir ve kullanıcıyı detayların yükünden kurtarır.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Sistem Vaadi</h4><p>Sıfır gecikme, düşük karar yorgunluğu, görünmez destek ve bozulmadan korunan akış.</p></div>
                        <div class="panel-card"><h4>Dijital Karşılık</h4><p>Predictive Alerts, Pattern Reading, Silent Escalation, Operational Foresight ve önleyici sinyal katmanı.</p></div>
                    </div>
                    <p><span class="highlight">04. Entelektüel Refakat ve Temsil | THE COMPANION</span><br>Temsil zayıfsa, hizmet ne kadar düzgün olursa olsun sistem eksiktir. FOR YOU ARK sahaya yalnızca iş yapan bir profil çıkarmaz. Zarafet, protokol bilgisi, sosyal zemin okuması ve marka ağırlığı burada birlikte çalışır.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Sistem Vaadi</h4><p>Yanınızda yalnızca uygulayıcı değil; statünüze ve zevkinize uyumlu bir refakat katmanı.</p></div>
                        <div class="panel-card"><h4>Dijital Karşılık</h4><p>Context Support, Preference Memory, Protocol Guidance ve insan merkezli bağlam desteği.</p></div>
                    </div>`,
                    `<p><span class="highlight">05. Şeffaf Hakimiyet ve Dijital Ayna | THE MIRROR</span><br>Sistem görünmez çalışır. Ama dileyen için izleri eksiksiz görünür. FOR YOU ARK’ın dijital aynası; haftalık yaşam koordinasyon raporları, mali özetler, operasyonel durum görünümü ve yaklaşan riskleri berrak bir panel diliyle sunar.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Sistem Vaadi</h4><p>Görünmezce işleyen bir düzenin, istenildiği anda denetlenebilir bir netlik ile size açılması.</p></div>
                        <div class="panel-card"><h4>Dijital Karşılık</h4><p>Executive Mirror Interface, Weekly Synthesis, Dashboard Intelligence ve görsel karar desteği.</p></div>
                    </div>
                    <p><span class="highlight">Bu düzeni taşıyan uygulama protokolleri</span></p>
                    <ul>
                        <li>Partner Akreditasyon Filtresi</li>
                        <li>Davranış Kodu</li>
                        <li>Yetki ve Sınır Disiplini</li>
                        <li>Dijital Kasa ve Hafıza</li>
                        <li>Kriz Protokolü</li>
                        <li>Haftalık Yaşam İstihbaratı</li>
                    </ul>
                    <p>Beş ana standart, tek başına bir vitrin metni değildir. Onları hayata bağlayan ikinci halka; partner filtresi, davranış kodu, yetki sınırı, dijital hafıza rejimi ve kriz zinciridir.</p>`,
                    `<p><span class="blue-highlight">AI & Systems Layer</span><br>FOR YOU ARK’ın yazılım katmanı yalnızca ekran üretmez. Riski okur, kayıt tutar, görünürlük sınırlarını yönetir, raporu rafine eder ve operasyonel ritmi bozulmadan koruyacak içgörüyü üretir.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>Gecikme, tekrar eden kusur ve yaklaşan risk sinyallerini erkenden üretir.</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>Kim neyi görebilir, hangi veri hangi derinlikte saklanır sorusunu yönetir.</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>Partner, işlem, onay ve zaman damgalı kontrolleri sistematik biçimde izler.</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>Haftalık özetleri ve karar destek görünümünü estetik bir panel yapısına dönüştürür.</p></div>
                    </div>
                    <p>FOR YOU ARK bir hizmet modeli değil, <span class="highlight">düzen kurma biçimidir.</span> Mahremiyet, denetim, öngörü, temsil ve şeffaflık aynı mimarinin beş yüzüdür.</p>`
                ]
            },

            en: {
                home: "← HOME",
                next: "NEXT CHAPTER →",
                prev: "← PREV CHAPTER",
                pass: "RETURN HOME →",
                idle: "SYSTEM IS WAITING IN STANDARD MODE. TOUCH TO CONTINUE.",
                aiHeader: "SOVEREIGN AI",
                aiSend: "SEND",
                aiWelcome: "Welcome to the Standards Hall, Your Majesty. I am honored to explain the regime of privacy, audit, foresight, representation, and the digital mirror.",
                aiPlaceholder: "Your Majesty's command...",
                aiReply: "Our standards are not decorative phrases. Each principle is protected by field conduct, digital memory, and visibility discipline.",
                titles: [
                    "CHAPTER I : THE STANDARDS MANIFESTO",
                    "CHAPTER II : THE FOUNDING GROUND",
                    "CHAPTER III : THE FIRST TWO STANDARDS",
                    "CHAPTER IV : THE THIRD AND FOURTH STANDARDS",
                    "CHAPTER V : THE DIGITAL MIRROR AND PROTOCOLS",
                    "CHAPTER VI : AI AND THE FINAL DECREE"
                ],
                texts: [
                    `<p>FOR YOU ARK is not an ordinary structure that merely responds to requests. It is the invisible will that gathers the scattered layers of life under a single discipline. It protects your privacy, detects flaws before you do, filters every outside contact, silently removes the details that disturb order, and reflects the entire process back to you with noble clarity.</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Privacy Regime</h4><p><span class="highlight">The Vault</span>. No detail that enters becomes the subject of the outside world.</p></div>
                        <div class="panel-card"><h4>Operational Authority</h4><p><span class="highlight">The Auditor</span>. Every actor touching the system is measured, verified, and monitored.</p></div>
                        <div class="panel-card"><h4>Foresight Engine</h4><p><span class="highlight">The Navigator</span>. Crisis is managed when it signals, not when it explodes.</p></div>
                        <div class="panel-card"><h4>Manifesto</h4><p>We do not merely make life easier. <span class="highlight">We reorder the scattered surface of life.</span></p></div>
                    </div>
                    <p>The ordinary concierge moves when demand arrives. FOR YOU ARK thinks before demand, filters outside influence, diagnoses flaws in advance, and governs the system on your behalf. Luxury for us is silent control, invisible safety, and uncompromising order.</p>`,
                    `<p>At the foundation of FOR YOU ARK lie two simple yet unshakable assumptions. The first is that <span class="highlight">privacy is never negotiable.</span> The second is that trust must be built not through blind faith, but through auditable clarity. That is why our system is not only elegant in appearance, but rigorously disciplined within.</p>
                    <p>The entire structure embraces family, property, time, operation, contact, and data within a single architecture. Field activity, reports, partner networks, authority boundaries, and AI-supported insight are all parts of the same order.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>Not flashy, but weighty. Not loud, but reassuring. Simple on the outside, flawless within.</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>AI here is not decoration. It sees risk early, interprets data, and strengthens decision ground.</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>Every contact, process, outside actor, and record belongs to one standard regime.</p></div>
                        <div class="panel-card"><h4>Founding Sentence</h4><p><span class="highlight">Luxury is not visible spectacle; it is invisible perfection.</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. Absolute Privacy | THE VAULT</span><br>No detail that enters becomes the subject of the outside world. For FOR YOU ARK, confidentiality is not a procedural heading but the reason for existence. Family rhythm, health details, financial flow, daily habits, and operational information remain only at the necessary access level.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>System Promise</h4><p>A closed-loop sphere of trust, far from cameras, excess, curious eyes, and unstructured contact.</p></div>
                        <div class="panel-card"><h4>Digital Counterpart</h4><p>Access Integrity, Secure Memory Layer, Silent Encryption Logic, and controlled visibility.</p></div>
                    </div>
                    <p><span class="highlight">02. Uncompromising Audit | THE AUDITOR</span><br>Not everyone who enters is allowed to act. They are first measured, verified, and monitored. Whether health, security, logistics, or administration, every outside actor touching the living sphere passes through a strict accreditation and audit filter.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>System Promise</h4><p>Control remains in your hands not as a feeling, but as a measurable and verifiable reality.</p></div>
                        <div class="panel-card"><h4>Digital Counterpart</h4><p>Audit Trace Engine, Compliance Scan, Partner Verification, and time-stamped control.</p></div>
                    </div>`,
                    `<p><span class="highlight">03. Proactive Resolution and Foresight | THE NAVIGATOR</span><br>For us, crisis is not an event but a signal detected too late. FOR YOU ARK reads the wave before rhythm breaks, redirects before risk grows, and frees the user from the burden of detail.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>System Promise</h4><p>Zero delay, low decision fatigue, invisible support, and a flow preserved before it breaks.</p></div>
                        <div class="panel-card"><h4>Digital Counterpart</h4><p>Predictive Alerts, Pattern Reading, Silent Escalation, Operational Foresight, and preventive signals.</p></div>
                    </div>
                    <p><span class="highlight">04. Intellectual Companionship and Representation | THE COMPANION</span><br>If representation is weak, the system remains incomplete even when service is technically proper. FOR YOU ARK deploys not a mere executor, but a refined presence with protocol knowledge, social reading, and elegant bearing.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>System Promise</h4><p>At your side stands not only an operator, but a layer of companionship aligned with your status and taste.</p></div>
                        <div class="panel-card"><h4>Digital Counterpart</h4><p>Context Support, Preference Memory, Protocol Guidance, and human-centered support.</p></div>
                    </div>`,
                    `<p><span class="highlight">05. Transparent Command and the Digital Mirror | THE MIRROR</span><br>The system works invisibly. Yet when desired, its traces become fully visible. The digital mirror of FOR YOU ARK presents weekly coordination reports, financial summaries, operational views, and approaching risks in a lucid panel language.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>System Promise</h4><p>An invisible order that may be opened to you with auditable clarity whenever desired.</p></div>
                        <div class="panel-card"><h4>Digital Counterpart</h4><p>Executive Mirror Interface, Weekly Synthesis, Dashboard Intelligence, and visual decision support.</p></div>
                    </div>
                    <p><span class="highlight">Operational Protocols sustaining this order</span></p>
                    <ul>
                        <li>Partner Accreditation Filter</li>
                        <li>Behavior Code</li>
                        <li>Authority and Boundary Discipline</li>
                        <li>Digital Vault and Memory</li>
                        <li>Crisis Protocol</li>
                        <li>Weekly Life Intelligence</li>
                    </ul>
                    <p>The five standards are not a showcase text. They are operational layers tied to real life through audit, behavior, memory, protocol, and crisis chain.</p>`,
                    `<p><span class="blue-highlight">AI & Systems Layer</span><br>The software layer of FOR YOU ARK does not merely produce screens. It reads risk, preserves trace, governs visibility limits, refines reporting, and generates insight that protects rhythm without disruption.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>Produces early signals for delay, repetitive defect, and approaching operational risk.</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>Determines who can see what, at what depth data is stored, and how access traces are preserved.</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>Systematically monitors partners, approvals, deliveries, and time-stamped controls.</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>Transforms summaries and decision support into an elegant and lucid panel.</p></div>
                    </div>
                    <p>FOR YOU ARK is not a service model, but <span class="highlight">a method of establishing order.</span> Privacy, audit, foresight, representation, and transparency are the five faces of one architecture.</p>`
                ]
            },

            fr: {
                home: "← ACCUEIL",
                next: "CHAPITRE SUIVANT →",
                prev: "← CHAPITRE PRÉCÉDENT",
                pass: "RETOUR À L'ACCUEIL →",
                idle: "LE SYSTÈME ATTEND EN MODE STANDARD. TOUCHEZ POUR CONTINUER.",
                aiHeader: "SOVEREIGN AI",
                aiSend: "ENVOYER",
                aiWelcome: "Bienvenue dans la salle des standards, Majesté. Je suis honoré d'expliquer la confidentialité, l'audit, l'anticipation, la représentation et le miroir numérique.",
                aiPlaceholder: "Décret de Sa Majesté...",
                aiReply: "Nos standards ne sont pas décoratifs. Chaque principe est protégé par le comportement terrain, la mémoire numérique et la discipline de visibilité.",
                titles: [
                    "CHAPITRE I : LE MANIFESTE DES STANDARDS",
                    "CHAPITRE II : LE SOL FONDATEUR",
                    "CHAPITRE III : LES DEUX PREMIERS STANDARDS",
                    "CHAPITRE IV : LE TROISIÈME ET LE QUATRIÈME STANDARD",
                    "CHAPITRE V : LE MIROIR NUMÉRIQUE ET LES PROTOCOLES",
                    "CHAPITRE VI : IA ET DÉCRET FINAL"
                ],
                texts: [
                    `<p>FOR YOU ARK n'est pas une structure ordinaire qui répond simplement aux demandes. C'est une volonté invisible qui rassemble les couches dispersées de la vie sous une seule discipline. Elle protège votre confidentialité, voit la faille avant vous, filtre chaque contact extérieur, élimine en silence les détails qui troublent l'ordre et vous renvoie l'ensemble du processus avec une clarté noble.</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <p><span class="highlight">Nous ne faisons pas que faciliter la vie. Nous réorganisons sa surface dispersée.</span></p>
                    <p>Pour nous, le luxe n'est pas seulement esthétique. Il est contrôle silencieux, sécurité invisible et discipline d'ordre sans compromis.</p>`,
                    `<p>FOR YOU ARK repose sur deux principes simples mais inébranlables. Le premier est que <span class="highlight">la confidentialité n'est jamais négociable.</span> Le second est que la confiance ne doit pas reposer sur une foi aveugle, mais sur une clarté vérifiable. C'est pourquoi notre système n'est pas seulement élégant en apparence, mais rigoureusement discipliné à l'intérieur.</p>
                    <p>Toute la structure réunit la famille, le patrimoine, le temps, l'opération, le contact et la donnée dans une seule architecture.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>Pas tapageur, mais dense. Pas bruyant, mais rassurant. Sobre à l'extérieur, parfait à l'intérieur.</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>L'IA n'est pas un décor. Elle voit le risque tôt, interprète la donnée et renforce la décision.</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>Chaque contact, chaque processus et chaque acteur extérieur obéissent au même régime standard.</p></div>
                        <div class="panel-card"><h4>Phrase fondatrice</h4><p><span class="highlight">Le luxe n'est pas le spectacle visible, mais la perfection invisible.</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. Confidentialité absolue | THE VAULT</span><br>Aucun détail qui entre ne devient un sujet du monde extérieur. Le rythme familial, les données de santé, le flux financier, les habitudes quotidiennes et l'information opérationnelle restent au seul niveau d'accès nécessaire.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesse système</h4><p>Une sphère de confiance fermée, loin des caméras, des excès, des regards curieux et des contacts désordonnés.</p></div>
                        <div class="panel-card"><h4>Contrepartie numérique</h4><p>Access Integrity, Secure Memory Layer, Silent Encryption Logic et régime de visibilité contrôlée.</p></div>
                    </div>
                    <p><span class="highlight">02. Audit sans compromis | THE AUDITOR</span><br>Toute personne qui entre n'agit pas immédiatement. Elle est d'abord mesurée, vérifiée et suivie. Tout acteur extérieur touchant la sphère de vie passe par un filtre strict d'accréditation et d'audit.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesse système</h4><p>Le contrôle reste entre vos mains non comme une impression, mais comme une réalité mesurable et vérifiable.</p></div>
                        <div class="panel-card"><h4>Contrepartie numérique</h4><p>Audit Trace Engine, Compliance Scan, Partner Verification et contrôle horodaté.</p></div>
                    </div>`,
                    `<p><span class="highlight">03. Résolution proactive et anticipation | THE NAVIGATOR</span><br>Pour nous, la crise n'est pas un événement, mais un signal détecté trop tard. FOR YOU ARK lit la vague avant que le rythme ne se rompe, redirige avant que le risque n'augmente et libère l'utilisateur du poids du détail.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesse système</h4><p>Zéro retard, faible fatigue décisionnelle, soutien invisible et flux préservé avant la rupture.</p></div>
                        <div class="panel-card"><h4>Contrepartie numérique</h4><p>Predictive Alerts, Pattern Reading, Silent Escalation, Operational Foresight et signaux préventifs.</p></div>
                    </div>
                    <p><span class="highlight">04. Accompagnement intellectuel et représentation | THE COMPANION</span><br>Si la représentation est faible, le système reste incomplet même si l'exécution est techniquement correcte. FOR YOU ARK ne déploie pas un simple exécutant, mais une présence raffinée connaissant le protocole, le terrain social et la tenue juste.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesse système</h4><p>À vos côtés se tient non seulement un opérateur, mais une présence alignée à votre statut et à votre goût.</p></div>
                        <div class="panel-card"><h4>Contrepartie numérique</h4><p>Context Support, Preference Memory, Protocol Guidance et soutien contextuel humain.</p></div>
                    </div>`,
                    `<p><span class="highlight">05. Maîtrise transparente et miroir numérique | THE MIRROR</span><br>Le système fonctionne de manière invisible. Pourtant, pour qui le souhaite, ses traces deviennent entièrement visibles. Le miroir numérique de FOR YOU ARK présente les rapports hebdomadaires, les résumés financiers, la vue opérationnelle et les risques à venir dans un langage limpide.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesse système</h4><p>Un ordre invisible qui peut, à volonté, s'ouvrir à vous avec une clarté contrôlable.</p></div>
                        <div class="panel-card"><h4>Contrepartie numérique</h4><p>Executive Mirror Interface, Weekly Synthesis, Dashboard Intelligence et soutien visuel à la décision.</p></div>
                    </div>
                    <p><span class="highlight">Protocoles opérationnels</span></p>
                    <ul>
                        <li>Filtre d'accréditation des partenaires</li>
                        <li>Code de comportement</li>
                        <li>Discipline d'autorité et de limite</li>
                        <li>Coffre numérique et mémoire</li>
                        <li>Protocole de crise</li>
                        <li>Intelligence de vie hebdomadaire</li>
                    </ul>
                    <p>Les cinq standards ne sont pas un simple texte vitrine. Ils deviennent réels par l'audit, la mémoire, le protocole et la chaîne de crise.</p>`,
                    `<p><span class="blue-highlight">Couche IA & systèmes</span><br>La couche logicielle de FOR YOU ARK ne produit pas seulement des écrans. Elle lit le risque, conserve les traces, gouverne les limites de visibilité, affine les rapports et produit l'intuition qui protège le rythme sans rupture.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>Produit en amont les signaux de retard, d'anomalie répétée et de risque opérationnel.</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>Détermine qui voit quoi, à quelle profondeur la donnée est stockée et comment la trace d'accès est protégée.</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>Suit de manière systématique les partenaires, validations, livraisons et contrôles horodatés.</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>Transforme les résumés hebdomadaires et le soutien à la décision en un panneau élégant et clair.</p></div>
                    </div>
                    <p>FOR YOU ARK n'est pas un modèle de service, mais <span class="highlight">une manière d'établir l'ordre.</span> La confidentialité, l'audit, l'anticipation, la représentation et la transparence sont les cinq faces d'une même architecture.</p>`
                ]
            },

            de: {
                home: "← STARTSEITE",
                next: "NÄCHSTES KAPITEL →",
                prev: "← VORHERIGES KAPITEL",
                pass: "ZUR STARTSEITE →",
                idle: "DAS SYSTEM WARTET IM STANDARDMODUS. BERÜHREN SIE, UM FORTZUFAHREN.",
                aiHeader: "SOVEREIGN AI",
                aiSend: "SENDEN",
                aiWelcome: "Willkommen im Saal der Standards, Majestät. Ich erläutere Ihnen gern Privatsphäre, Audit, Voraussicht, Repräsentation und den digitalen Spiegel.",
                aiPlaceholder: "Befehl Eurer Majestät...",
                aiReply: "Unsere Standards sind keine Dekoration. Jedes Prinzip wird durch Feldverhalten, digitales Gedächtnis und Sichtbarkeitsdisziplin geschützt.",
                titles: [
                    "KAPITEL I : DAS MANIFEST DER STANDARDS",
                    "KAPITEL II : DAS GRÜNDUNGSFUNDAMENT",
                    "KAPITEL III : DIE ERSTEN ZWEI STANDARDS",
                    "KAPITEL IV : DER DRITTE UND VIERTE STANDARD",
                    "KAPITEL V : DER DIGITALE SPIEGEL UND DIE PROTOKOLLE",
                    "KAPITEL VI : KI UND DAS LETZTE DEKRET"
                ],
                texts: [
                    `<p>FOR YOU ARK ist keine gewöhnliche Struktur, die lediglich auf Anfragen reagiert. Es ist der unsichtbare Wille, der die zerstreuten Schichten des Lebens unter einer einzigen Disziplin sammelt. Es schützt Ihre Privatsphäre, erkennt Fehler vor Ihnen, filtert jeden äußeren Kontakt, beseitigt störende Details lautlos und reflektiert den gesamten Prozess mit edler Klarheit zu Ihnen zurück.</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <p><span class="highlight">Wir erleichtern das Leben nicht nur. Wir ordnen seine zerstreute Oberfläche neu.</span></p>
                    <p>Luxus ist für uns stille Kontrolle, unsichtbare Sicherheit und kompromisslose Ordnungsdisziplin.</p>`,
                    `<p>Im Fundament von FOR YOU ARK liegen zwei einfache, aber unerschütterliche Annahmen. Erstens: <span class="highlight">Privatsphäre ist niemals verhandelbar.</span> Zweitens: Vertrauen darf nicht auf blindem Glauben beruhen, sondern auf überprüfbarer Klarheit. Deshalb wirkt unser System nicht nur elegant nach außen, sondern streng diszipliniert im Inneren.</p>
                    <p>Die gesamte Struktur umfasst Familie, Eigentum, Zeit, Betrieb, Kontakt und Daten in einer einzigen Architektur.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>Nicht laut, sondern gewichtig. Nicht grell, sondern vertrauenerweckend. Außen schlicht, innen makellos.</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>KI ist hier kein Schmuck. Sie erkennt Risiken früh, deutet Daten und stärkt die Entscheidung.</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>Jeder Kontakt, jeder Prozess und jeder externe Akteur gehören zu einem Standardregime.</p></div>
                        <div class="panel-card"><h4>Gründungssatz</h4><p><span class="highlight">Luxus ist kein sichtbares Schauspiel, sondern unsichtbare Perfektion.</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. Absolute Privatsphäre | THE VAULT</span><br>Kein Detail, das eintritt, wird zum Gegenstand der Außenwelt. Familienrhythmus, Gesundheitsdaten, Finanzfluss, tägliche Gewohnheiten und operative Informationen bleiben ausschließlich auf der notwendigen Zugriffsebene.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Systemversprechen</h4><p>Eine geschlossene Sphäre des Vertrauens, fern von Kameras, Übermaß, neugierigen Blicken und ungeordnetem Kontakt.</p></div>
                        <div class="panel-card"><h4>Digitale Entsprechung</h4><p>Access Integrity, Secure Memory Layer, Silent Encryption Logic und kontrollierte Sichtbarkeit.</p></div>
                    </div>
                    <p><span class="highlight">02. Kompromisslose Prüfung | THE AUDITOR</span><br>Nicht jeder, der eintritt, handelt sofort. Zuerst wird er gemessen, verifiziert und überwacht. Jeder externe Akteur, der den Lebensraum berührt, durchläuft einen strengen Akkreditierungs- und Prüfungsfilter.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Systemversprechen</h4><p>Kontrolle bleibt in Ihrer Hand, nicht als Gefühl, sondern als messbare und überprüfbare Realität.</p></div>
                        <div class="panel-card"><h4>Digitale Entsprechung</h4><p>Audit Trace Engine, Compliance Scan, Partner Verification und zeitgestempelte Kontrolle.</p></div>
                    </div>`,
                    `<p><span class="highlight">03. Proaktive Lösung und Voraussicht | THE NAVIGATOR</span><br>Für uns ist die Krise kein Ereignis, sondern ein zu spät entdecktes Signal. FOR YOU ARK liest die Welle, bevor der Rhythmus bricht, lenkt um, bevor das Risiko wächst, und befreit den Nutzer von der Last des Details.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Systemversprechen</h4><p>Keine Verzögerung, geringe Entscheidungserschöpfung, unsichtbare Unterstützung und ein geschützter Fluss.</p></div>
                        <div class="panel-card"><h4>Digitale Entsprechung</h4><p>Predictive Alerts, Pattern Reading, Silent Escalation, Operational Foresight und präventive Signale.</p></div>
                    </div>
                    <p><span class="highlight">04. Intellektuelle Begleitung und Repräsentation | THE COMPANION</span><br>Wenn die Repräsentation schwach ist, bleibt das System unvollständig, selbst wenn die Ausführung korrekt ist. FOR YOU ARK entsendet keine bloßen Ausführenden, sondern eine Haltung mit Protokollwissen, sozialem Takt und eleganter Präsenz.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Systemversprechen</h4><p>An Ihrer Seite steht nicht nur ein Operator, sondern eine Begleitschicht, die zu Status und Geschmack passt.</p></div>
                        <div class="panel-card"><h4>Digitale Entsprechung</h4><p>Context Support, Preference Memory, Protocol Guidance und menschenzentrierte Unterstützung.</p></div>
                    </div>`,
                    `<p><span class="highlight">05. Transparente Herrschaft und digitaler Spiegel | THE MIRROR</span><br>Das System arbeitet unsichtbar. Doch für den, der es wünscht, werden seine Spuren vollständig sichtbar. Der digitale Spiegel von FOR YOU ARK zeigt wöchentliche Koordinationsberichte, finanzielle Zusammenfassungen, operative Ansichten und kommende Risiken in klarer Panelsprache.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Systemversprechen</h4><p>Eine unsichtbare Ordnung, die sich bei Bedarf mit überprüfbarer Klarheit für Sie öffnet.</p></div>
                        <div class="panel-card"><h4>Digitale Entsprechung</h4><p>Executive Mirror Interface, Weekly Synthesis, Dashboard Intelligence und visuelle Entscheidungshilfe.</p></div>
                    </div>
                    <p><span class="highlight">Operative Protokolle</span></p>
                    <ul>
                        <li>Partner-Akkreditierungsfilter</li>
                        <li>Verhaltenskodex</li>
                        <li>Autoritäts- und Grenzdisziplin</li>
                        <li>Digitaler Tresor und Gedächtnis</li>
                        <li>Krisenprotokoll</li>
                        <li>Wöchentliche Lebensintelligenz</li>
                    </ul>
                    <p>Die fünf Standards sind kein Schaufenstertext. Sie werden durch Audit, Gedächtnis, Protokoll und Krisenkette real.</p>`,
                    `<p><span class="blue-highlight">KI- und Systemschicht</span><br>Die Softwareebene von FOR YOU ARK erzeugt nicht nur Bildschirme. Sie liest Risiken, bewahrt Spuren, regiert Sichtbarkeitsgrenzen, verfeinert Berichte und erzeugt jene Einsicht, die den Rhythmus ohne Bruch schützt.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>Erzeugt frühzeitig Signale für Verzögerung, wiederholte Anomalie und operatives Risiko.</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>Bestimmt, wer was sehen darf, in welcher Tiefe Daten gespeichert sind und wie Zugriffs-Spuren geschützt werden.</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>Überwacht systematisch Partner, Freigaben, Lieferungen und zeitgestempelte Kontrollen.</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>Verwandelt wöchentliche Zusammenfassungen und Entscheidungshilfe in ein elegantes, klares Panel.</p></div>
                    </div>
                    <p>FOR YOU ARK ist kein Dienstleistungsmodell, sondern <span class="highlight">eine Art, Ordnung zu errichten.</span> Privatsphäre, Audit, Voraussicht, Repräsentation und Transparenz sind die fünf Gesichter derselben Architektur.</p>`
                ]
            },

            es: {
                home: "← INICIO",
                next: "SIGUIENTE CAPÍTULO →",
                prev: "← CAPÍTULO ANTERIOR",
                pass: "VOLVER AL INICIO →",
                idle: "EL SISTEMA ESPERA EN MODO ESTÁNDAR. TOQUE PARA CONTINUAR.",
                aiHeader: "SOVEREIGN AI",
                aiSend: "ENVIAR",
                aiWelcome: "Bienvenido al Salón de los Estándares, Majestad. Es un honor explicar privacidad, auditoría, previsión, representación y espejo digital.",
                aiPlaceholder: "Mandato de Su Majestad...",
                aiReply: "Nuestros estándares no son adornos. Cada principio está protegido por conducta operativa, memoria digital y disciplina de visibilidad.",
                titles: [
                    "CAPÍTULO I : EL MANIFIESTO DE LOS ESTÁNDARES",
                    "CAPÍTULO II : EL FUNDAMENTO",
                    "CAPÍTULO III : LOS DOS PRIMEROS ESTÁNDARES",
                    "CAPÍTULO IV : EL TERCER Y CUARTO ESTÁNDAR",
                    "CAPÍTULO V : EL ESPEJO DIGITAL Y LOS PROTOCOLOS",
                    "CAPÍTULO VI : IA Y EL DECRETO FINAL"
                ],
                texts: [
                    `<p>FOR YOU ARK no es una estructura común que solo responde a solicitudes. Es la voluntad invisible que reúne las capas dispersas de la vida bajo una sola disciplina. Protege su privacidad, detecta la falla antes que usted, filtra cada contacto externo, elimina en silencio los detalles que alteran el orden y le devuelve el proceso completo con claridad noble.</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <p><span class="highlight">No solo facilitamos la vida. Reordenamos su superficie dispersa.</span></p>
                    <p>Para nosotros, el lujo es control silencioso, seguridad invisible y disciplina absoluta del orden.</p>`,
                    `<p>FOR YOU ARK se apoya en dos principios simples e inquebrantables. El primero es que <span class="highlight">la privacidad no es negociable.</span> El segundo es que la confianza no debe construirse con fe ciega, sino con claridad verificable. Por eso nuestro sistema no solo es elegante por fuera, sino rigurosamente disciplinado por dentro.</p>
                    <p>Toda la estructura integra familia, patrimonio, tiempo, operación, contacto y datos dentro de una misma arquitectura.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>No llamativo, sino sólido. No estridente, sino confiable. Sobrio por fuera, impecable por dentro.</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>La IA aquí no es decoración. Ve el riesgo temprano, interpreta los datos y fortalece la decisión.</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>Cada contacto, proceso y actor externo pertenece a un mismo régimen de estándares.</p></div>
                        <div class="panel-card"><h4>Frase fundadora</h4><p><span class="highlight">El lujo no es espectáculo visible, sino perfección invisible.</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. Privacidad absoluta | THE VAULT</span><br>Ningún detalle que entra se convierte en asunto del exterior. El ritmo familiar, la información de salud, el flujo financiero, los hábitos cotidianos y los datos operativos permanecen solo en el nivel de acceso necesario.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesa del sistema</h4><p>Una esfera cerrada de confianza, lejos de cámaras, excesos, miradas curiosas y contactos desordenados.</p></div>
                        <div class="panel-card"><h4>Contraparte digital</h4><p>Access Integrity, Secure Memory Layer, Silent Encryption Logic y visibilidad controlada.</p></div>
                    </div>
                    <p><span class="highlight">02. Auditoría sin concesiones | THE AUDITOR</span><br>No todos los que entran actúan de inmediato. Primero son medidos, verificados y monitoreados. Todo actor externo que toque la esfera vital pasa por un filtro estricto de acreditación y auditoría.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesa del sistema</h4><p>El control permanece en sus manos no como sensación, sino como realidad medible y verificable.</p></div>
                        <div class="panel-card"><h4>Contraparte digital</h4><p>Audit Trace Engine, Compliance Scan, Partner Verification y control con sello temporal.</p></div>
                    </div>`,
                    `<p><span class="highlight">03. Solución proactiva y previsión | THE NAVIGATOR</span><br>Para nosotros la crisis no es un evento, sino una señal detectada demasiado tarde. FOR YOU ARK lee la ola antes de que se rompa el ritmo, redirige antes de que crezca el riesgo y libera al usuario del peso del detalle.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesa del sistema</h4><p>Cero retraso, baja fatiga de decisión, apoyo invisible y flujo protegido antes de romperse.</p></div>
                        <div class="panel-card"><h4>Contraparte digital</h4><p>Predictive Alerts, Pattern Reading, Silent Escalation, Operational Foresight y señales preventivas.</p></div>
                    </div>
                    <p><span class="highlight">04. Acompañamiento intelectual y representación | THE COMPANION</span><br>Si la representación es débil, el sistema queda incompleto aunque la ejecución sea correcta. FOR YOU ARK no despliega un simple ejecutor, sino una presencia refinada con conocimiento de protocolo, lectura social y porte elegante.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesa del sistema</h4><p>A su lado no solo hay un operador, sino una capa de acompañamiento alineada con su estatus y gusto.</p></div>
                        <div class="panel-card"><h4>Contraparte digital</h4><p>Context Support, Preference Memory, Protocol Guidance y apoyo humano contextual.</p></div>
                    </div>`,
                    `<p><span class="highlight">05. Dominio transparente y espejo digital | THE MIRROR</span><br>El sistema funciona de forma invisible. Sin embargo, para quien lo desee, sus huellas se vuelven plenamente visibles. El espejo digital de FOR YOU ARK presenta reportes semanales, resúmenes financieros, vista operativa y riesgos próximos en un lenguaje claro de panel.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Promesa del sistema</h4><p>Un orden invisible que puede abrirse ante usted con claridad auditable cuando lo desee.</p></div>
                        <div class="panel-card"><h4>Contraparte digital</h4><p>Executive Mirror Interface, Weekly Synthesis, Dashboard Intelligence y apoyo visual a la decisión.</p></div>
                    </div>
                    <p><span class="highlight">Protocolos operativos</span></p>
                    <ul>
                        <li>Filtro de acreditación de socios</li>
                        <li>Código de conducta</li>
                        <li>Disciplina de autoridad y límites</li>
                        <li>Bóveda digital y memoria</li>
                        <li>Protocolo de crisis</li>
                        <li>Inteligencia semanal de vida</li>
                    </ul>
                    <p>Los cinco estándares no son texto de vitrina. Se vuelven reales mediante auditoría, memoria, protocolo y cadena de crisis.</p>`,
                    `<p><span class="blue-highlight">Capa de IA y sistemas</span><br>La capa de software de FOR YOU ARK no solo crea pantallas. Lee el riesgo, conserva trazas, gobierna la visibilidad, refina el informe y genera la intuición que protege el ritmo sin ruptura.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>Produce de forma temprana señales de retraso, anomalía repetida y riesgo operativo.</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>Determina quién puede ver qué, a qué profundidad se guarda la información y cómo se protege el rastro de acceso.</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>Supervisa sistemáticamente socios, aprobaciones, entregas y controles con sello temporal.</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>Transforma los resúmenes semanales y el apoyo a la decisión en un panel claro y elegante.</p></div>
                    </div>
                    <p>FOR YOU ARK no es un modelo de servicio, sino <span class="highlight">una forma de construir orden.</span> Privacidad, auditoría, previsión, representación y transparencia son los cinco rostros de una misma arquitectura.</p>`
                ]
            },

            ru: {
                home: "← ГЛАВНАЯ",
                next: "СЛЕДУЮЩАЯ ГЛАВА →",
                prev: "← ПРЕДЫДУЩАЯ ГЛАВА",
                pass: "ВЕРНУТЬСЯ НА ГЛАВНУЮ →",
                idle: "СИСТЕМА ОЖИДАЕТ В РЕЖИМЕ СТАНДАРТА. КОСНИТЕСЬ, ЧТОБЫ ПРОДОЛЖИТЬ.",
                aiHeader: "SOVEREIGN AI",
                aiSend: "ОТПРАВИТЬ",
                aiWelcome: "Добро пожаловать в Зал Стандартов, Ваше Величество. Для меня честь объяснить конфиденциальность, аудит, предвидение, представительство и цифровое зеркало.",
                aiPlaceholder: "Повеление Вашего Величества...",
                aiReply: "Наши стандарты не являются украшением. Каждый принцип защищён полевым поведением, цифровой памятью и дисциплиной видимости.",
                titles: [
                    "ГЛАВА I : МАНИФЕСТ СТАНДАРТОВ",
                    "ГЛАВА II : ОСНОВАНИЕ",
                    "ГЛАВА III : ПЕРВЫЕ ДВА СТАНДАРТА",
                    "ГЛАВА IV : ТРЕТИЙ И ЧЕТВЁРТЫЙ СТАНДАРТ",
                    "ГЛАВА V : ЦИФРОВОЕ ЗЕРКАЛО И ПРОТОКОЛЫ",
                    "ГЛАВА VI : ИИ И ПОСЛЕДНИЙ УКАЗ"
                ],
                texts: [
                    `<p>FOR YOU ARK — это не обычная структура, которая просто отвечает на запросы. Это невидимая воля, собирающая рассеянные слои жизни под единой дисциплиной. Она защищает вашу приватность, видит ошибку раньше вас, фильтрует каждый внешний контакт, бесшумно устраняет детали, нарушающие порядок, и возвращает вам весь процесс с благородной ясностью.</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <p><span class="highlight">Мы не просто облегчаем жизнь. Мы заново упорядочиваем её рассеянную поверхность.</span></p>
                    <p>Роскошь для нас — это тихий контроль, невидимая безопасность и бескомпромиссная дисциплина порядка.</p>`,
                    `<p>В основании FOR YOU ARK лежат два простых, но несокрушимых принципа. Первый: <span class="highlight">конфиденциальность не подлежит торгу.</span> Второй: доверие должно строиться не на слепой вере, а на проверяемой ясности. Именно поэтому система не только элегантна снаружи, но и строго дисциплинирована внутри.</p>
                    <p>Вся структура объединяет семью, имущество, время, операцию, контакт и данные в единой архитектуре.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>Не шумная, а весомая. Не яркая, а внушающая доверие. Сдержанная снаружи, безупречная внутри.</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>ИИ здесь не декор. Он рано видит риск, интерпретирует данные и усиливает решение.</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>Каждый контакт, каждый процесс и каждый внешний актор принадлежат одному режиму стандартов.</p></div>
                        <div class="panel-card"><h4>Учредительная формула</h4><p><span class="highlight">Роскошь — не видимое зрелище, а невидимое совершенство.</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. Абсолютная конфиденциальность | THE VAULT</span><br>Ни одна деталь, попавшая внутрь, не становится темой внешнего мира. Семейный ритм, сведения о здоровье, финансовый поток, ежедневные привычки и операционная информация остаются только на необходимом уровне доступа.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Системное обещание</h4><p>Замкнутая сфера доверия, вдали от камер, излишества, любопытных взглядов и беспорядочного контакта.</p></div>
                        <div class="panel-card"><h4>Цифровой эквивалент</h4><p>Access Integrity, Secure Memory Layer, Silent Encryption Logic и контролируемая видимость.</p></div>
                    </div>
                    <p><span class="highlight">02. Бескомпромиссный аудит | THE AUDITOR</span><br>Не каждый вошедший сразу действует. Сначала его измеряют, проверяют и отслеживают. Любой внешний актор, касающийся жизненной сферы, проходит строгий фильтр аккредитации и аудита.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Системное обещание</h4><p>Контроль остаётся в ваших руках не как чувство, а как измеримая и проверяемая реальность.</p></div>
                        <div class="panel-card"><h4>Цифровой эквивалент</h4><p>Audit Trace Engine, Compliance Scan, Partner Verification и контроль с отметкой времени.</p></div>
                    </div>`,
                    `<p><span class="highlight">03. Проактивное решение и предвидение | THE NAVIGATOR</span><br>Для нас кризис — не событие, а сигнал, замеченный слишком поздно. FOR YOU ARK читает волну до разрыва ритма, перенаправляет до роста риска и освобождает пользователя от тяжести деталей.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Системное обещание</h4><p>Нулевая задержка, низкая усталость от решений, невидимая поддержка и сохранённый поток.</p></div>
                        <div class="panel-card"><h4>Цифровой эквивалент</h4><p>Predictive Alerts, Pattern Reading, Silent Escalation, Operational Foresight и превентивные сигналы.</p></div>
                    </div>
                    <p><span class="highlight">04. Интеллектуальное сопровождение и представительство | THE COMPANION</span><br>Если представительство слабо, система остаётся неполной, даже если исполнение технически корректно. FOR YOU ARK выводит не простого исполнителя, а утончённое присутствие с протокольным знанием, социальной чуткостью и элегантной осанкой.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Системное обещание</h4><p>Рядом с вами не просто оператор, а слой сопровождения, соразмерный вашему статусу и вкусу.</p></div>
                        <div class="panel-card"><h4>Цифровой эквивалент</h4><p>Context Support, Preference Memory, Protocol Guidance и контекстная поддержка.</p></div>
                    </div>`,
                    `<p><span class="highlight">05. Прозрачное господство и цифровое зеркало | THE MIRROR</span><br>Система работает незримо. Однако для желающего её следы становятся полностью видимыми. Цифровое зеркало FOR YOU ARK показывает еженедельные координационные отчёты, финансовые сводки, операционный обзор и приближающиеся риски в ясном панельном языке.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Системное обещание</h4><p>Невидимый порядок, который по желанию открывается вам с проверяемой ясностью.</p></div>
                        <div class="panel-card"><h4>Цифровой эквивалент</h4><p>Executive Mirror Interface, Weekly Synthesis, Dashboard Intelligence и визуальная поддержка решений.</p></div>
                    </div>
                    <p><span class="highlight">Операционные протоколы</span></p>
                    <ul>
                        <li>Фильтр аккредитации партнёров</li>
                        <li>Код поведения</li>
                        <li>Дисциплина полномочий и границ</li>
                        <li>Цифровое хранилище и память</li>
                        <li>Кризисный протокол</li>
                        <li>Еженедельная жизненная аналитика</li>
                    </ul>
                    <p>Пять стандартов — не витринный текст. Они становятся реальными через аудит, память, протокол и кризисную цепь.</p>`,
                    `<p><span class="blue-highlight">Слой ИИ и систем</span><br>Программный слой FOR YOU ARK не просто создаёт экраны. Он читает риск, сохраняет следы, управляет границами видимости, уточняет отчётность и производит интуицию, которая сохраняет ритм без разрыва.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>Заранее создаёт сигналы задержки, повторяющейся аномалии и операционного риска.</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>Определяет, кто что может видеть, на какой глубине хранятся данные и как защищён след доступа.</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>Системно отслеживает партнёров, согласования, доставки и проверки с отметкой времени.</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>Преобразует еженедельные сводки и поддержку решений в ясную и элегантную панель.</p></div>
                    </div>
                    <p>FOR YOU ARK — не модель услуги, а <span class="highlight">способ устанавливать порядок.</span> Конфиденциальность, аудит, предвидение, представительство и прозрачность — пять лиц одной архитектуры.</p>`
                ]
            },

            ar: {
                home: "← الرئيسية",
                next: "الفصل التالي ←",
                prev: "→ الفصل السابق",
                pass: "العودة للرئيسية ←",
                idle: "النظام ينتظر في وضع المعايير. المس للمتابعة.",
                aiHeader: "SOVEREIGN AI",
                aiSend: "إرسال",
                aiWelcome: "مرحباً بكم في قاعة المعايير يا صاحب الجلالة. يشرفني شرح الخصوصية والتدقيق والاستباق والتمثيل والمرآة الرقمية.",
                aiPlaceholder: "أمر جلالتكم...",
                aiReply: "معاييرنا ليست زينة لفظية. كل مبدأ محمي بالسلوك الميداني والذاكرة الرقمية وانضباط الرؤية.",
                titles: [
                    "الفصل الأول : ميثاق المعايير",
                    "الفصل الثاني : الأرضية المؤسسة",
                    "الفصل الثالث : أول معيارين",
                    "الفصل الرابع : المعيار الثالث والرابع",
                    "الفصل الخامس : المرآة الرقمية والبروتوكولات",
                    "الفصل السادس : الذكاء الاصطناعي والحكم الأخير"
                ],
                texts: [
                    `<p>FOR YOU ARK ليست بنية عادية تستجيب للطلبات فقط. إنها الإرادة الخفية التي تجمع طبقات الحياة المتناثرة تحت انضباط واحد. إنها تحمي خصوصيتكم، وترى الخلل قبلكم، وتفلتر كل اتصال خارجي، وتزيل بصمت التفاصيل التي تفسد النظام، ثم تعكس العملية كلها إليكم بوضوح نبيل.</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <p><span class="highlight">نحن لا نسهّل الحياة فقط، بل نعيد ترتيب سطحها المبعثر.</span></p>
                    <p>الترف عندنا هو التحكم الصامت، والأمان غير المرئي، وانضباط النظام بلا مساومة.</p>`,
                    `<p>تقوم FOR YOU ARK على مبدئين بسيطين ولكنهما راسخان. الأول أن <span class="highlight">الخصوصية ليست موضوعاً للتفاوض.</span> والثاني أن الثقة لا تُبنى على الإيمان الأعمى، بل على الوضوح القابل للتدقيق. لذلك فالنظام ليس أنيقاً في مظهره فقط، بل شديد الانضباط في داخله.</p>
                    <p>تجمع هذه البنية العائلة، والملكية، والوقت، والعملية، والاتصال، والبيانات ضمن معمارية واحدة.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>ليس صاخباً بل راسخاً. ليس لامعاً بل باعثاً على الطمأنينة. بسيط في الخارج، كامل في الداخل.</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>الذكاء الاصطناعي هنا ليس زينة. إنه يرى الخطر مبكراً ويفسر البيانات ويقوي أرضية القرار.</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>كل اتصال، وكل عملية، وكل فاعل خارجي يخضع لنظام معياري واحد.</p></div>
                        <div class="panel-card"><h4>الجملة المؤسسة</h4><p><span class="highlight">الترف ليس عرضاً مرئياً، بل كمالاً غير مرئي.</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. الخصوصية المطلقة | THE VAULT</span><br>لا تتحول أي تفصيلة تدخل إلى الداخل إلى موضوع للعالم الخارجي. يبقى إيقاع العائلة، وتفاصيل الصحة، وتدفق المال، والعادات اليومية، والمعلومات التشغيلية في مستوى الوصول الضروري فقط.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>وعد النظام</h4><p>دائرة ثقة مغلقة بعيداً عن الكاميرات، والفضول، والمبالغة، والاتصالات غير المنضبطة.</p></div>
                        <div class="panel-card"><h4>المقابل الرقمي</h4><p>Access Integrity و Secure Memory Layer و Silent Encryption Logic مع رؤية مضبوطة.</p></div>
                    </div>
                    <p><span class="highlight">02. التدقيق غير القابل للتنازل | THE AUDITOR</span><br>ليس كل من يدخل يُسمح له بالتصرف فوراً. بل يُقاس أولاً، ويُتحقق منه، ويُراقب. وكل فاعل خارجي يمس المجال الحياتي يمر عبر مرشح اعتماد وتدقيق صارم.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>وعد النظام</h4><p>يبقى التحكم في أيديكم لا كإحساس، بل كواقع قابل للقياس والتحقق.</p></div>
                        <div class="panel-card"><h4>المقابل الرقمي</h4><p>Audit Trace Engine و Compliance Scan و Partner Verification مع ضبط زمني.</p></div>
                    </div>`,
                    `<p><span class="highlight">03. الحل الاستباقي والاستشراف | THE NAVIGATOR</span><br>الأزمة بالنسبة لنا ليست حدثاً، بل إشارة تم اكتشافها متأخراً. تقرأ FOR YOU ARK الموجة قبل انكسار الإيقاع، وتعيد التوجيه قبل تضخم الخطر، وتحرر المستخدم من عبء التفاصيل.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>وعد النظام</h4><p>صفر تأخير، وانخفاض في إرهاق القرار، ودعم غير مرئي، وتدفق محمي قبل الانكسار.</p></div>
                        <div class="panel-card"><h4>المقابل الرقمي</h4><p>Predictive Alerts و Pattern Reading و Silent Escalation و Operational Foresight مع إشارات وقائية.</p></div>
                    </div>
                    <p><span class="highlight">04. الرفقة الفكرية والتمثيل | THE COMPANION</span><br>إذا كان التمثيل ضعيفاً، يبقى النظام ناقصاً حتى لو كان التنفيذ سليماً من الناحية التقنية. لا ترسل FOR YOU ARK مجرد منفذ، بل حضوراً راقياً يعرف البروتوكول ويقرأ البيئة الاجتماعية ويحمل أناقة الوقوف الصحيح.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>وعد النظام</h4><p>إلى جواركم لا يوجد مجرد منفذ، بل طبقة مرافقة منسجمة مع مكانتكم وذوقكم.</p></div>
                        <div class="panel-card"><h4>المقابل الرقمي</h4><p>Context Support و Preference Memory و Protocol Guidance مع دعم بشري سياقي.</p></div>
                    </div>`,
                    `<p><span class="highlight">05. السيطرة الشفافة والمرآة الرقمية | THE MIRROR</span><br>يعمل النظام بشكل غير مرئي. لكن آثاره تصبح كاملة الوضوح لمن يرغب. تعرض المرآة الرقمية في FOR YOU ARK تقارير التنسيق الأسبوعي، والملخصات المالية، والرؤية التشغيلية، والمخاطر القادمة بلغة لوحة واضحة.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>وعد النظام</h4><p>نظام غير مرئي يمكن أن ينفتح أمامكم بوضوح قابل للتدقيق عند الحاجة.</p></div>
                        <div class="panel-card"><h4>المقابل الرقمي</h4><p>Executive Mirror Interface و Weekly Synthesis و Dashboard Intelligence مع دعم بصري للقرار.</p></div>
                    </div>
                    <p><span class="highlight">البروتوكولات التشغيلية</span></p>
                    <ul>
                        <li>مرشح اعتماد الشركاء</li>
                        <li>مدونة السلوك</li>
                        <li>انضباط الصلاحيات والحدود</li>
                        <li>الخزنة الرقمية والذاكرة</li>
                        <li>بروتوكول الأزمات</li>
                        <li>استخبارات الحياة الأسبوعية</li>
                    </ul>
                    <p>المعايير الخمسة ليست نصاً للعرض فقط، بل تصبح حقيقية عبر التدقيق والذاكرة والبروتوكول وسلسلة الأزمات.</p>`,
                    `<p><span class="blue-highlight">طبقة الذكاء الاصطناعي والأنظمة</span><br>لا تنتج طبقة البرمجيات في FOR YOU ARK مجرد شاشات. بل تقرأ المخاطر، وتحفظ الأثر، وتدير حدود الرؤية، وتهذب التقارير، وتنتج البصيرة التي تحمي الإيقاع من الانكسار.</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>تنتج مبكراً إشارات التأخير، والتكرار الشاذ، والمخاطر التشغيلية القادمة.</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>تحدد من يرى ماذا، وعلى أي عمق تحفظ البيانات، وكيف تُحمى آثار الوصول.</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>تراقب بشكل منهجي الشركاء والموافقات والتسليمات والضبط الزمني.</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>تحول الملخصات الأسبوعية ودعم القرار إلى لوحة أنيقة وواضحة.</p></div>
                    </div>
                    <p>FOR YOU ARK ليست نموذج خدمة، بل <span class="highlight">طريقة لبناء النظام.</span> الخصوصية والتدقيق والاستباق والتمثيل والشفافية هي الوجوه الخمسة لبنية واحدة.</p>`
                ]
            },

            zh: {
                home: "← 首页",
                next: "下一章 →",
                prev: "← 上一章",
                pass: "返回首页 →",
                idle: "系统正在标准模式中等待。请触摸继续。",
                aiHeader: "SOVEREIGN AI",
                aiSend: "发送",
                aiWelcome: "欢迎来到标准大厅，陛下。能够为您解释隐私、审计、前瞻、代表性与数字镜像体系，是我的荣幸。",
                aiPlaceholder: "陛下的命令...",
                aiReply: "我们的标准不是装饰性语言。每一项原则都由现场行为、数字记忆和可见性纪律保护。",
                titles: [
                    "第一章：标准宣言",
                    "第二章：奠基之地",
                    "第三章：前两项标准",
                    "第四章：第三与第四项标准",
                    "第五章：数字镜像与协议",
                    "第六章：人工智能与最终法令"
                ],
                texts: [
                    `<p>FOR YOU ARK 并不是一个只对需求作出反应的普通结构。它是一种无形意志，将人生分散的层面置于统一纪律之下。它保护您的隐私，在您之前看见瑕疵，过滤每一次外部联系，悄然移除破坏秩序的细节，并以高贵而清晰的方式将整个过程呈现给您。</p>
                    <div class="signal-strip">
                        <span class="signal-pill">THE VAULT</span><span class="signal-pill">THE AUDITOR</span><span class="signal-pill">THE NAVIGATOR</span><span class="signal-pill">THE COMPANION</span><span class="signal-pill">THE MIRROR</span>
                    </div>
                    <p><span class="highlight">我们不仅让生活更容易，我们重新整理生活零散的表面。</span></p>
                    <p>对我们而言，奢侈是安静的掌控、无形的安全，以及毫不妥协的秩序纪律。</p>`,
                    `<p>FOR YOU ARK 建立在两个简单却不可动摇的前提之上。第一，<span class="highlight">隐私绝不可谈判。</span> 第二，信任不应建立在盲目相信之上，而应建立在可审计的清晰之上。因此，这一系统不仅外表优雅，内部也同样严格自律。</p>
                    <p>这一结构将家庭、资产、时间、运营、联系与数据纳入同一架构之中。</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Quiet Luxury</h4><p>不张扬，却厚重。不喧闹，却令人安心。外部克制，内部完美。</p></div>
                        <div class="panel-card"><h4>Visible Intelligence</h4><p>人工智能在这里不是装饰。它更早发现风险，解释数据，并强化决策基础。</p></div>
                        <div class="panel-card"><h4>Operational Sovereignty</h4><p>每一次接触、每一个流程、每一个外部角色都属于同一标准体系。</p></div>
                        <div class="panel-card"><h4>奠基语句</h4><p><span class="highlight">奢侈不是可见的展示，而是不可见的完美。</span></p></div>
                    </div>`,
                    `<p><span class="highlight">01. 绝对隐私 | THE VAULT</span><br>任何进入系统的细节都不会成为外部世界的话题。家庭节奏、健康信息、资金流动、日常习惯与运营信息只保留在必要的访问层级中。</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>系统承诺</h4><p>一个封闭的信任领域，远离摄像头、过度暴露、好奇目光与无序接触。</p></div>
                        <div class="panel-card"><h4>数字对应</h4><p>Access Integrity、Secure Memory Layer、Silent Encryption Logic 与受控可见性。</p></div>
                    </div>
                    <p><span class="highlight">02. 不妥协审计 | THE AUDITOR</span><br>并非每个进入者都能立刻行动，他们首先会被衡量、验证并被追踪。任何触及生活领域的外部角色都必须通过严格的认证与审计过滤。</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>系统承诺</h4><p>控制权留在您手中，不是一种感觉，而是一种可衡量、可验证的现实。</p></div>
                        <div class="panel-card"><h4>数字对应</h4><p>Audit Trace Engine、Compliance Scan、Partner Verification 与带时间戳的控制链。</p></div>
                    </div>`,
                    `<p><span class="highlight">03. 主动解决与前瞻 | THE NAVIGATOR</span><br>对我们来说，危机不是事件，而是一个被发现得太晚的信号。FOR YOU ARK 在节奏被打断之前读懂波动，在风险放大之前重新引导，并将用户从细节负担中解放出来。</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>系统承诺</h4><p>零延迟、较低决策疲劳、无形支持，以及在破裂之前被保护的流程。</p></div>
                        <div class="panel-card"><h4>数字对应</h4><p>Predictive Alerts、Pattern Reading、Silent Escalation、Operational Foresight 与预防性信号。</p></div>
                    </div>
                    <p><span class="highlight">04. 智性陪伴与代表性 | THE COMPANION</span><br>如果代表性不足，即便执行技术上正确，系统仍然不完整。FOR YOU ARK 派出的不是单纯执行者，而是一种懂得礼仪、理解社交环境、并拥有优雅姿态的存在。</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>系统承诺</h4><p>在您身边的不只是操作者，而是一层与您的身份和品味相匹配的陪伴。</p></div>
                        <div class="panel-card"><h4>数字对应</h4><p>Context Support、Preference Memory、Protocol Guidance 与以人为中心的支持。</p></div>
                    </div>`,
                    `<p><span class="highlight">05. 透明掌控与数字镜像 | THE MIRROR</span><br>系统在无形中运作，但其痕迹会在需要时完整显现。FOR YOU ARK 的数字镜像以清晰的面板语言呈现每周协调报告、财务摘要、运营视图与即将到来的风险。</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>系统承诺</h4><p>一种无形秩序，可在需要时以可审计的清晰方式向您展开。</p></div>
                        <div class="panel-card"><h4>数字对应</h4><p>Executive Mirror Interface、Weekly Synthesis、Dashboard Intelligence 与视觉决策支持。</p></div>
                    </div>
                    <p><span class="highlight">支撑这一秩序的运营协议</span></p>
                    <ul>
                        <li>合作伙伴认证过滤</li>
                        <li>行为准则</li>
                        <li>权限与边界纪律</li>
                        <li>数字金库与记忆</li>
                        <li>危机协议</li>
                        <li>每周生活情报</li>
                    </ul>
                    <p>这五项标准并不是展示文本，而是通过审计、记忆、协议和危机链条进入现实的实际层。</p>`,
                    `<p><span class="blue-highlight">AI 与系统层</span><br>FOR YOU ARK 的软件层不仅生成界面。它读取风险、保存痕迹、管理可见性边界、优化报告，并生成维持节奏不被打断所需的洞察。</p>
                    <div class="panel-grid">
                        <div class="panel-card"><h4>Predictive Signal Layer</h4><p>提前产生延迟、重复异常与运营风险的信号。</p></div>
                        <div class="panel-card"><h4>Integrity & Access Layer</h4><p>决定谁能看到什么、数据以何种深度存储，以及访问痕迹如何被保护。</p></div>
                        <div class="panel-card"><h4>Audit Trace Engine</h4><p>系统性监控合作方、批准、交付与带时间戳的控制流程。</p></div>
                        <div class="panel-card"><h4>Executive Mirror Interface</h4><p>将每周摘要与决策支持转化为优雅且清晰的面板。</p></div>
                    </div>
                    <p>FOR YOU ARK 不是一种服务模型，而是<span class="highlight">建立秩序的一种方式。</span> 隐私、审计、前瞻、代表性与透明度，是同一架构的五张面孔。</p>`
                ]
            }
        };

        let currentLang = 'tr';
        let currentPage = 1;
        const totalPages = 6;
        let typeWriterTimers = [];
        let isAutoScrolling = true;
        let autoScrollSpeed = 0.5;
        let idleTimer = null;
        let isIdleActive = false;
        const IDLE_DELAY = 180000;

        const idleCurtain = document.getElementById('idle-curtain');
        const luxCanvas = document.getElementById('lux-canvas');
        const luxCtx = luxCanvas.getContext('2d');
        const gearCanvas = document.getElementById('gear-canvas');
        const gearCtx = gearCanvas.getContext('2d');
        const aiOrb = document.getElementById('ai-orb');
        const aiChat = document.getElementById('ai-chat');

        function updateNavigation(data) {
            document.getElementById('prev-btn').innerText = data.prev;
            if (currentPage === totalPages) {
                document.getElementById('next-btn').innerText = data.pass;
            } else {
                document.getElementById('next-btn').innerText = data.next;
            }
        }

        function applyDirection() {
            const isRTL = currentLang === 'ar';
            document.documentElement.setAttribute('dir', isRTL ? 'rtl' : 'ltr');
            document.body.setAttribute('dir', isRTL ? 'rtl' : 'ltr');

            document.querySelectorAll('.brand-ltr, .majestic-logo-wrapper, .curtain-logo, .majestic-logo').forEach(el => {
                el.setAttribute('dir', 'ltr');
                el.style.direction = 'ltr';
                el.style.unicodeBidi = 'isolate';
            });

            setTimeout(() => {
                document.querySelectorAll('.chapter-title, .text-content-area').forEach(el => {
                    el.style.direction = isRTL ? 'rtl' : 'ltr';
                    el.style.textAlign = isRTL ? 'right' : 'justify';
                });

                document.querySelectorAll('.text-content-area p').forEach(p => {
                    if (isRTL) {
                        p.classList.add('rtl-paragraph');
                        p.style.textIndent = '0';
                    } else {
                        p.classList.remove('rtl-paragraph');
                        p.style.textIndent = '34px';
                    }
                });

                document.querySelectorAll('.text-content-area ul').forEach(ul => {
                    ul.style.direction = isRTL ? 'rtl' : 'ltr';
                    ul.style.textAlign = isRTL ? 'right' : 'left';
                    ul.style.marginRight = isRTL ? '24px' : '0';
                    ul.style.marginLeft = isRTL ? '0' : '24px';
                });
            }, 60);
        }

        function changeLanguage() {
            currentLang = document.getElementById('lang-select').value;
            const data = content[currentLang];

            document.getElementById('btn-home').innerText = data.home;
            document.getElementById('curtain-text').innerText = data.idle;
            document.getElementById('ai-header').innerText = data.aiHeader;
            document.getElementById('ai-send-btn').innerText = data.aiSend;
            document.getElementById('ai-messages').innerHTML = `<p><strong style="color:var(--gold-bright);">AI:</strong> ${data.aiWelcome}</p>`;
            document.getElementById('ai-text').placeholder = data.aiPlaceholder;

            for (let i = 1; i <= totalPages; i++) {
                document.getElementById(`title-${i}`).innerText = data.titles[i - 1];
            }

            updateNavigation(data);
            typeText(data.texts[currentPage - 1], `tw-${currentPage}`);
            applyDirection();
        }

        function typeText(htmlString, targetId) {
            typeWriterTimers.forEach(timer => clearTimeout(timer));
            typeWriterTimers = [];

            const targetEl = document.getElementById(targetId);
            if (!targetEl) return;

            targetEl.innerHTML = "";
            targetEl.scrollTop = 0;

            let i = 0;
            let isTag = false;
            let textBuffer = "";

            function type() {
                if (i < htmlString.length) {
                    const char = htmlString.charAt(i);
                    textBuffer += char;
                    if (char === '<') isTag = true;
                    if (char === '>') isTag = false;
                    targetEl.innerHTML = textBuffer + (isTag ? "" : '<span class="cursor"></span>');
                    i++;
                    let speed = isTag ? 0 : Math.random() * 8 + 4;
                    typeWriterTimers.push(setTimeout(type, speed));
                } else {
                    targetEl.innerHTML = textBuffer;
                    applyDirection();
                }
            }
            type();
        }

        function turnPage(direction) {
            const oldPage = document.getElementById(`page-${currentPage}`);

            if (direction === 1) {
                oldPage.classList.remove('active');
                oldPage.classList.add('flipped-prev');
            } else {
                oldPage.classList.remove('active');
            }

            currentPage += direction;
            const newPage = document.getElementById(`page-${currentPage}`);

            newPage.classList.remove('flipped-prev');
            newPage.classList.add('active');

            const romanNums = ["I", "II", "III", "IV", "V", "VI"];
            document.getElementById('page-indicator').innerText = `${romanNums[currentPage - 1]} / VI`;
            document.getElementById('prev-btn').style.visibility = currentPage === 1 ? 'hidden' : 'visible';

            const data = content[currentLang];
            const nextBtn = document.getElementById('next-btn');

            if (currentPage === totalPages) {
                nextBtn.innerText = data.pass;
                nextBtn.style.background = "rgba(212,175,55,0.2)";
                nextBtn.setAttribute('onclick', "window.location.href='index.php'");
            } else {
                nextBtn.innerText = data.next;
                nextBtn.style.background = "rgba(0,0,0,0.7)";
                nextBtn.setAttribute('onclick', "turnPage(1)");
            }

            typeText(data.texts[currentPage - 1], `tw-${currentPage}`);
            resetIdleTimer();
        }

        function openAI() {
            aiChat.classList.add('open');
            aiOrb.style.display = 'none';
            resetIdleTimer();
        }

        document.addEventListener('click', function(event) {
            const isClickInsideChat = aiChat.contains(event.target);
            const isClickOnOrb = aiOrb.contains(event.target);
            if (!isClickInsideChat && !isClickOnOrb && aiChat.classList.contains('open')) {
                aiChat.classList.remove('open');
                aiOrb.style.display = 'flex';
            }
        });

        function sendAIMessage() {
            const input = document.getElementById('ai-text');
            const msg = input.value.trim();
            if (!msg) return;

            const chatBody = document.getElementById('ai-messages');
            const p = document.createElement('p');
            p.style.textAlign = currentLang === 'ar' ? 'left' : 'right';
            p.style.fontFamily = "'Montserrat'";
            p.style.fontSize = '0.94rem';
            p.textContent = msg;
            chatBody.appendChild(p);
            input.value = '';

            setTimeout(() => {
                const aiMsg = document.createElement('p');
                aiMsg.style.marginTop = '12px';
                aiMsg.style.borderLeft = '2px solid var(--gold-bright)';
                aiMsg.style.paddingLeft = '15px';
                aiMsg.innerHTML = `<strong style="color:var(--gold-bright); font-family:'Cinzel Decorative';">AI:</strong> ${content[currentLang].aiReply}`;
                chatBody.appendChild(aiMsg);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 850);

            resetIdleTimer();
        }

        function goIdleMode() {
            idleCurtain.classList.add('active');
            isIdleActive = true;
            isAutoScrolling = false;
        }

        function wakeFromIdle() {
            idleCurtain.classList.remove('active');
            isIdleActive = false;
            isAutoScrolling = true;
            resetIdleTimer();
        }

        function resetIdleTimer() {
            clearTimeout(idleTimer);
            if (isIdleActive) {
                idleCurtain.classList.remove('active');
                isIdleActive = false;
                isAutoScrolling = true;
            }
            idleTimer = setTimeout(goIdleMode, IDLE_DELAY);
        }

        function resizeCanvases() {
            luxCanvas.width = window.innerWidth;
            luxCanvas.height = window.innerHeight;
            gearCanvas.width = window.innerWidth;
            gearCanvas.height = window.innerHeight;
        }

        const droplets = [];
        function initDroplets() {
            droplets.length = 0;
            const count = Math.max(90, Math.floor(window.innerWidth / 14));
            for (let i = 0; i < count; i++) {
                droplets.push({
                    x: Math.random() * luxCanvas.width,
                    y: Math.random() * luxCanvas.height,
                    len: 40 + Math.random() * 160,
                    speed: 1.1 + Math.random() * 3.8,
                    width: 1.4 + Math.random() * 2.8,
                    alpha: 0.22 + Math.random() * 0.42
                });
            }
        }

        const gears = [
            { xRatio: 0.18, yRatio: 0.26, r: 110, teeth: 16, speed: 0.0016, angle: 0 },
            { xRatio: 0.82, yRatio: 0.22, r: 150, teeth: 18, speed: -0.0012, angle: 0 },
            { xRatio: 0.76, yRatio: 0.76, r: 130, teeth: 14, speed: 0.0014, angle: 0 },
            { xRatio: 0.20, yRatio: 0.78, r: 90, teeth: 12, speed: -0.0018, angle: 0 }
        ];

        function drawSingleGear(ctx, cx, cy, r, teeth, angle) {
            ctx.save();
            ctx.translate(cx, cy);
            ctx.rotate(angle);

            ctx.strokeStyle = 'rgba(212,175,55,0.24)';
            ctx.lineWidth = 1.5;
            ctx.beginPath();

            const outer = r;
            const inner = r * 0.82;
            const toothDepth = r * 0.10;
            const steps = teeth * 2;

            for (let i = 0; i <= steps; i++) {
                const a = (Math.PI * 2 / steps) * i;
                const rr = i % 2 === 0 ? outer : outer - toothDepth;
                const x = Math.cos(a) * rr;
                const y = Math.sin(a) * rr;
                if (i === 0) ctx.moveTo(x, y);
                else ctx.lineTo(x, y);
            }
            ctx.closePath();
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(0, 0, inner, 0, Math.PI * 2);
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(0, 0, r * 0.20, 0, Math.PI * 2);
            ctx.stroke();

            for (let i = 0; i < 6; i++) {
                const a = (Math.PI * 2 / 6) * i;
                ctx.beginPath();
                ctx.moveTo(Math.cos(a) * r * 0.22, Math.sin(a) * r * 0.22);
                ctx.lineTo(Math.cos(a) * r * 0.68, Math.sin(a) * r * 0.68);
                ctx.stroke();
            }

            ctx.restore();
        }

        function drawGearField() {
            gearCtx.clearRect(0, 0, gearCanvas.width, gearCanvas.height);
            gears.forEach(g => {
                g.angle += g.speed;
                const cx = gearCanvas.width * g.xRatio;
                const cy = gearCanvas.height * g.yRatio;
                drawSingleGear(gearCtx, cx, cy, g.r, g.teeth, g.angle);
            });
        }

        function drawLuxuryDrops() {
            luxCtx.clearRect(0, 0, luxCanvas.width, luxCanvas.height);

            droplets.forEach(d => {
                const grad = luxCtx.createLinearGradient(d.x, d.y, d.x, d.y + d.len);
                grad.addColorStop(0, `rgba(255,240,190,0)`);
                grad.addColorStop(0.18, `rgba(255,232,150,${d.alpha})`);
                grad.addColorStop(0.55, `rgba(255,210,90,${Math.min(d.alpha + 0.15, 0.95)})`);
                grad.addColorStop(1, `rgba(212,175,55,0)`);

                luxCtx.strokeStyle = grad;
                luxCtx.lineWidth = d.width;
                luxCtx.shadowBlur = 12;
                luxCtx.shadowColor = 'rgba(255,220,120,0.35)';
                luxCtx.beginPath();
                luxCtx.moveTo(d.x, d.y);
                luxCtx.lineTo(d.x, d.y + d.len);
                luxCtx.stroke();

                d.y += d.speed;
                if (d.y > luxCanvas.height + d.len) {
                    d.y = -d.len - Math.random() * 240;
                    d.x = Math.random() * luxCanvas.width;
                }
            });

            luxCtx.shadowBlur = 0;
        }

        function animateBackground() {
            drawGearField();
            drawLuxuryDrops();
            requestAnimationFrame(animateBackground);
        }

        function autoScrollContent() {
            if (isAutoScrolling && !isIdleActive) {
                const activeText = document.querySelector('.page.active .text-content-area');
                if (activeText) {
                    const maxScroll = activeText.scrollHeight - activeText.clientHeight;
                    if (activeText.scrollTop < maxScroll) {
                        activeText.scrollTop += autoScrollSpeed;
                    }
                }
            }
            requestAnimationFrame(autoScrollContent);
        }

        const stopScrollTemporarily = () => {
            isAutoScrolling = false;
            clearTimeout(window.scrollTimeout);
            window.scrollTimeout = setTimeout(() => {
                if (!isIdleActive) isAutoScrolling = true;
            }, 5000);
            resetIdleTimer();
        };

        ['mousemove', 'mousedown', 'keydown', 'touchstart', 'wheel', 'scroll'].forEach(evt => {
            document.addEventListener(evt, resetIdleTimer, { passive: true });
        });

        document.addEventListener('wheel', stopScrollTemporarily, { passive: true });
        document.addEventListener('touchstart', stopScrollTemporarily, { passive: true });
        document.addEventListener('mousedown', stopScrollTemporarily);

        window.addEventListener('resize', () => {
            resizeCanvases();
            initDroplets();
        });

        window.addEventListener('DOMContentLoaded', () => {
            changeLanguage();
        });

        window.addEventListener('load', () => {
            resizeCanvases();
            initDroplets();
            animateBackground();
            autoScrollContent();

            setTimeout(() => {
                document.body.classList.add('loaded');
            }, 500);

            resetIdleTimer();
        });
    </script>
</body>
</html>