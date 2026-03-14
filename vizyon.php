<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>THE MANIFESTO | FOR YOU ARK SOVEREIGN GATEWAY</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --gold-base: #d4af37;
            --gold-bright: #ffdf00;
            --gold-dark: #aa8010;
            --gold-glow: rgba(212, 175, 55, 0.8);
            --velvet-black: #030000;
            --glass-bg: rgba(5, 2, 2, 0.52);
            --rococo-border: linear-gradient(45deg, var(--gold-dark), var(--gold-bright), var(--gold-base), var(--gold-dark));
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Cormorant Garamond', serif;
            overflow: hidden;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            perspective: 2500px;
            position: relative;
            isolation: isolate;
        }

        /* --- 0. GİRİŞ PERDESİ (İNDEX'TEN TAŞINAN ÇİFT TARAFLI PERDE) --- */
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

        /* --- 1. ALTIN MATRIX VERİ YAĞMURU (THE SOVEREIGN CODE RAIN) --- */
        #matrix-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 1;
            pointer-events: none;
            opacity: 1;
        }

        .matrix-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background:
                radial-gradient(circle at center,
                rgba(3, 1, 1, 0.02) 0%,
                rgba(0, 0, 0, 0.34) 55%,
                rgba(0, 0, 0, 0.62) 100%);
            z-index: 2;
            pointer-events: none;
        }

        /* --- 2. 8 DİL KAPSÜLLEME MODÜLÜ --- */
        .lang-selector {
            position: fixed;
            top: 35px;
            right: 45px;
            z-index: 1000;
            background: rgba(0,0,0,0.8);
            border: 2px solid var(--gold-dark);
            color: var(--gold-bright);
            font-family: 'Cinzel Decorative', serif;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            outline: none;
            box-shadow: 0 0 20px rgba(0,0,0,1), inset 0 0 10px var(--gold-dark);
            border-radius: 3px;
            transition: 0.4s;
        }
        .lang-selector:hover { border-color: var(--gold-bright); box-shadow: 0 0 20px var(--gold-glow); }
        .lang-selector option { background: #000; color: var(--gold-base); font-family: 'Montserrat', sans-serif; }

        /* --- 3. ANA SAYFA DÖNÜŞ (KARARGÂH) --- */
        .btn-home { 
            position: fixed;
            top: 35px;
            left: 45px; 
            color: var(--gold-bright);
            text-decoration: none; 
            border: 2px solid var(--gold-dark);
            padding: 10px 25px; 
            font-size: 0.9rem;
            letter-spacing: 3px;
            z-index: 1000; 
            transition: 0.4s;
            background: rgba(0,0,0,0.8); 
            font-family: 'Cinzel Decorative', serif;
            box-shadow: 0 0 20px rgba(0,0,0,1), inset 0 0 10px var(--gold-dark);
        }
        .btn-home:hover { border-color: var(--gold-bright); background: rgba(212,175,55,0.1); box-shadow: 0 0 30px var(--gold-glow); }

        /* --- 4. INDEX MANTIĞI KUSURSUZ ZAMAN AŞIMI PERDESİ --- */
        #idle-curtain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: radial-gradient(circle at center, #0a0505 0%, #000000 100%);
            z-index: 9999; 
            opacity: 0;
            pointer-events: none; 
            transition: opacity 1.6s cubic-bezier(0.4, 0, 0.2, 1);
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
            font-size: 5rem; 
            background: var(--rococo-border);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 30px var(--gold-glow));
            letter-spacing: 20px;
            animation: breatheLogo 4s infinite alternate;
            margin-bottom: 20px;
            text-align: center;
        }
        .curtain-sub { 
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 8px; 
            color: var(--gold-dark);
            font-size: 1rem;
            font-weight: 300; 
            text-shadow: 0 0 10px #000;
            text-align: center;
            padding: 0 20px;
        }

        /* --- 5. SAF CSS 3D KIRILMAZ LOGO (REVİZE EDİLDİ) --- */
        .majestic-logo-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            margin-bottom: 30px; 
            position: relative;
            padding-bottom: 15px;
            z-index: 50;
        }
        .majestic-logo-wrapper::after {
            content: '❖';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--gold-bright);
            font-size: 1.5rem;
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
            width: 75px;
            margin-right: 25px;
            filter: drop-shadow(0 0 15px var(--gold-glow));
        }
        .majestic-logo {
            font-family: 'Cinzel Decorative', serif;
            font-size: 2.8rem;
            font-weight: 900;
            background: var(--rococo-border);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 15px; 
            line-height: 0.8;
            filter: drop-shadow(0px 4px 2px rgba(0,0,0,0.8)) drop-shadow(0 0 20px rgba(212,175,55,0.4));
        }

        /* --- 6. GERÇEK ROCOCO MİMARİSİ (TAM EKRAN MONOLİT) --- */
        .book-monolith {
            position: relative;
            z-index: 20;
            width: 96vw;
            max-width: none;
            height: 96vh;
            max-height: none;
            background: var(--glass-bg);
            border: 1px solid var(--gold-dark);
            box-shadow: 
                0 0 0 8px rgba(0,0,0,0.86),
                0 0 0 12px var(--gold-dark),
                0 0 0 13px var(--gold-bright),
                inset 0 0 42px rgba(0,0,0,0.78), 
                0 32px 70px rgba(0,0,0,0.72);
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transform-style: preserve-3d;
        }

        .book-monolith::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 2px solid rgba(212, 175, 55, 0.3);
            pointer-events: none;
            z-index: 10;
        }

        /* Fleur-de-lis ⚜ Köşe Süslemeleri */
        .rococo-ornament {
            position: absolute;
            color: var(--gold-bright);
            font-size: 2.5rem;
            text-shadow: 0 0 20px var(--gold-glow), 2px 2px 5px #000;
            z-index: 20;
        }
        .top-left { top: -8px; left: -8px; transform: rotate(-45deg); }
        .top-right { top: -8px; right: -8px; transform: rotate(45deg); }
        .bottom-left { bottom: -8px; left: -8px; transform: rotate(-135deg); }
        .bottom-right { bottom: -8px; right: -8px; transform: rotate(135deg); }

        /* --- 7. KİTAP SAYFALARI VE 3D GEÇİŞ --- */
        .book-pages-container {
            position: relative;
            flex-grow: 1;
            width: 100%;
            height: 100%;
            padding: 20px 80px;
            overflow: hidden; 
        }

        .page {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 10px 80px 0 80px;
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
            font-size: 2.6rem; 
            color: var(--gold-bright);
            text-align: center;
            margin-bottom: 25px; 
            letter-spacing: 6px;
            text-shadow: 0 0 20px rgba(212, 175, 55, 0.5);
            text-transform: uppercase;
        }

        /* --- 8. EDEBİ METİN ALANI VE ALTIN KAYDIRMA --- */
        .text-content-area {
            flex-grow: 1;
            overflow-y: auto;
            padding-right: 30px;
            margin-bottom: 20px;
            font-size: 1.45rem;
            line-height: 2.1;
            color: #e8e8e8;
            text-align: justify;
            font-weight: 300;
            scroll-behavior: smooth;
        }
        .text-content-area::-webkit-scrollbar { width: 4px; }
        .text-content-area::-webkit-scrollbar-track { background: rgba(0,0,0,0.8); border-left: 1px solid rgba(212,175,55,0.2); }
        .text-content-area::-webkit-scrollbar-thumb { background: var(--gold-base); border-radius: 10px; box-shadow: 0 0 10px var(--gold-glow); }

        .text-content-area p { margin-bottom: 25px; text-indent: 40px; }
        .text-content-area p:first-letter {
            float: left;
            font-family: 'Cinzel Decorative', serif;
            font-size: 4rem;
            line-height: 0.8;
            margin-right: 15px;
            color: var(--gold-bright);
            text-shadow: 0 0 15px var(--gold-glow);
        }

        .highlight { color: var(--gold-bright); font-weight: 600; text-shadow: 0 0 10px var(--gold-glow); font-style: italic; }
        .cursor { display: inline-block; width: 4px; height: 1em; background: var(--gold-bright); animation: blink 0.9s infinite; vertical-align: baseline; box-shadow: 0 0 10px var(--gold-glow); }

        /* --- 9. YÖNLENDİRME (Pusula) --- */
        .nav-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            border-top: 1px solid rgba(212, 175, 55, 0.2);
            position: relative;
            z-index: 10;
        }
        .nav-btn {
            background: rgba(0,0,0,0.7);
            border: 1px solid var(--gold-dark);
            color: var(--gold-bright);
            padding: 12px 30px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            letter-spacing: 4px;
            cursor: pointer;
            transition: 0.4s;
            text-transform: uppercase;
        }
        .nav-btn:hover { background: rgba(212, 175, 55, 0.15); border-color: var(--gold-bright); box-shadow: 0 0 30px var(--gold-glow); transform: translateY(-2px); }
        .page-indicator { color: rgba(212, 175, 55, 0.5); font-family: 'Cinzel Decorative'; font-size: 1.4rem; letter-spacing: 8px; }

        /* --- 10. YAPAY ZEKA KÜRESİ (İZOLE) --- */
        .ai-orb {
            position: fixed;
            bottom: 40px;
            right: 45px; 
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, #fff 0%, var(--gold-base) 40%, #000 100%);
            box-shadow: 0 0 40px var(--gold-glow), inset -10px -10px 20px rgba(0,0,0,0.8);
            cursor: pointer;
            z-index: 2000;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: floatOrb 4s infinite ease-in-out;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .ai-orb::after { content: 'AI'; font-family: 'Cinzel Decorative', serif; color: #000; font-size: 1.5rem; font-weight: 900; text-shadow: 1px 1px 2px rgba(255,255,255,0.8); }

        .ai-chat-window {
            position: fixed;
            bottom: 130px;
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
        .ai-chat-window.open { display: flex; opacity: 1; transform: translateY(0) scale(1); }
        
        .ai-header { background: linear-gradient(90deg, var(--gold-dark), var(--gold-bright), var(--gold-dark)); color: #000; padding: 18px; text-align: center; font-family: 'Cinzel Decorative', serif; font-weight: bold; font-size: 1.2rem; letter-spacing: 3px; box-shadow: 0 5px 15px rgba(0,0,0,0.5); }
        .ai-body { flex-grow: 1; padding: 20px; overflow-y: auto; color: #e0e0e0; font-size: 1.05rem; line-height: 1.6; }
        .ai-body::-webkit-scrollbar { width: 3px; }
        .ai-body::-webkit-scrollbar-thumb { background: var(--gold-base); }
        .ai-input-area { display: flex; border-top: 1px solid var(--gold-dark); background: rgba(0,0,0,0.5); }
        .ai-input-area input { flex-grow: 1; padding: 18px; background: transparent; border: none; color: #fff; outline: none; font-family: 'Montserrat'; font-size: 1rem; }
        .ai-input-area button { background: var(--gold-base); border: none; padding: 0 25px; cursor: pointer; font-family: 'Montserrat'; font-weight: bold; color: #000; transition: 0.3s; }
        .ai-input-area button:hover { background: var(--gold-bright); }

        /* Animasyonlar */
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }
        @keyframes breatheLogo { 0% { filter: drop-shadow(0 0 20px var(--gold-glow)); transform: scale(1); } 100% { filter: drop-shadow(0 0 50px var(--gold-bright)); transform: scale(1.03); } }
        @keyframes floatOrb { 0%, 100% { transform: translateY(0); box-shadow: 0 0 30px var(--gold-glow); } 50% { transform: translateY(-10px); box-shadow: 0 0 50px var(--gold-bright); } }

        @media (max-width: 768px) {
            .chapter-title { font-size: 1.6rem; letter-spacing: 3px; }
            .text-content-area { font-size: 1.08rem; line-height: 1.75; }
            .book-pages-container,
            .page { padding-left: 24px; padding-right: 24px; }
            .nav-controls { padding: 16px 20px; }
            .lang-selector { top: 15px; right: 15px; padding: 8px 12px; font-size: 0.8rem; }
            .btn-home { top: 15px; left: 15px; padding: 8px 12px; font-size: 0.75rem; letter-spacing: 1px; }
            .curtain-logo { font-size: 2.3rem; letter-spacing: 6px; }
            .curtain-sub { font-size: 0.8rem; letter-spacing: 3px; }
            .ai-chat-window {
                width: calc(100vw - 30px);
                right: 15px;
                bottom: 110px;
            }
        }
    </style>
</head>
<body>

    <div class="curtain-entrance curtain-entrance-left"></div>
    <div class="curtain-entrance curtain-entrance-right"></div>

    <canvas id="matrix-canvas"></canvas>
    <div class="matrix-overlay"></div>

    <div id="idle-curtain" onclick="wakeFromIdle()">
        <div class="curtain-logo">FOR YOU ARK</div>
        <div class="curtain-sub" id="curtain-text">SİSTEM UYKUDA. UYANDIRMAK İÇİN DOKUNUN.</div>
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
            <div class="majestic-logo">FOR YOU ARK</div>
        </div>

        <div class="book-pages-container">
            <div class="page active" id="page-1"><h1 class="chapter-title" id="title-1">FASIL I : KRİSTAL SESSİZLİK</h1><div class="text-content-area" id="tw-1"></div></div>
            <div class="page" id="page-2"><h1 class="chapter-title" id="title-2">FASIL II : MUTLAK HÜKÜMRANLIK</h1><div class="text-content-area" id="tw-2"></div></div>
            <div class="page" id="page-3"><h1 class="chapter-title" id="title-3">FASIL III : SEÇKİNLER EŞİĞİ</h1><div class="text-content-area" id="tw-3"></div></div>
            <div class="page" id="page-4"><h1 class="chapter-title" id="title-4">FASIL IV : GÖLGE MUHAFIZLAR</h1><div class="text-content-area" id="tw-4"></div></div>
            <div class="page" id="page-5"><h1 class="chapter-title" id="title-5">FASIL V : GELECEĞİN MİRASI</h1><div class="text-content-area" id="tw-5"></div></div>
            <div class="page" id="page-6"><h1 class="chapter-title" id="title-6">FASIL VI : SON HÜKÜM</h1><div class="text-content-area" id="tw-6"></div></div>
        </div>

        <div class="nav-controls">
            <button class="nav-btn" id="prev-btn" onclick="turnPage(-1)" style="visibility:hidden;">← ÖNCEKİ FASIL</button>
            <div class="page-indicator" id="page-indicator">I / VI</div>
            <button class="nav-btn" id="next-btn" onclick="turnPage(1)">SONRAKİ FASIL →</button>
        </div>
    </div>

    <div class="ai-orb" id="ai-orb" onclick="openAI()"></div>
    <div class="ai-chat-window" id="ai-chat">
        <div class="ai-header">SOVEREIGN AI</div>
        <div class="ai-body" id="ai-messages"></div>
        <div class="ai-input-area">
            <input type="text" id="ai-text" placeholder="..." onkeypress="if(event.key === 'Enter') sendAIMessage()">
            <button onclick="sendAIMessage()">İLET</button>
        </div>
    </div>

    <script>
        const langData = {
            tr: {
                home: "← ANASAYFA", next: "SONRAKİ FASIL →", prev: "← ÖNCEKİ FASIL", pass: "ANASAYFAYA DÖN →", idle: "SİSTEM UYKUDA. UYANDIRMAK İÇİN DOKUNUN.",
                aiWelcome: "Karargâh anayasasına hoş geldiniz Majesteleri. Zihninizdeki soruları aydınlatmaktan onur duyarım.", aiPlaceholder: "Majestelerinin fermanı...",
                titles: ["FASIL I : KRİSTAL SESSİZLİK", "FASIL II : MUTLAK HÜKÜMRANLIK", "FASIL III : SEÇKİNLER EŞİĞİ", "FASIL IV : GÖLGE MUHAFIZLAR", "FASIL V : GELECEĞİN MİRASI", "FASIL VI : SON HÜKÜM"],
                texts: [
                    "<p>Dünyayı yönettiniz. Kıtaları aştınız, endüstriler kurdunuz ve tarihin akışına yön verdiniz. Ancak sahip olduğunuz güç büyüdükçe, etrafınızdaki gürültü de sağır edici bir kaosa dönüştü. Bizim dünyamızda lüks; daha fazla eşyaya, daha fazla mülke veya daha kalabalık bir maiyete sahip olmak değildir. Bizim için yegane lüks, <span class='highlight'>sahip olduklarınızın varlığını bile düşünmek zorunda kalmayacağınız</span> o mutlak, kristal sessizliktir.</p><p>Sıradan sistemler size asistanlar, şoförler veya kahyalar sunar. Biz ise, o devasa insan kaynağını sizin adınıza yöneten, denetleyen ve kusursuzlaştıran bir 'Hükümran Üst Akıl' sunuyoruz. Bir işin çözülmesi için birine rica etmek, minnet duymak veya borçlu kalmak, özgürlüğün görünmez prangasıdır. FOR YOU ARK olarak biz, insanlık tarihinin en zarif ama en acımasız ağını kurduk: <span class='highlight'>Sıfır Minnet Ağı (Zero Gratitude Network)</span>. İmkansız bir erişim, küresel bir diplomatik kriz veya ailenizi tehdit eden bir risk... Bunlar bizim için ricayla çözülen iyilikler değil, matematiksel bir kesinlikle işleyen standart operasyon prosedürleridir.</p>",
                    "<p>Zaten her şeye sahipsiniz. Paranın satın alamayacağı tek bir şey kaldı: Sarsılmaz bir kafa rahatlığı. Dünyanın en zengin %0.01'lik diliminde yer alıyor olabilirsiniz, peki ama <span class='highlight'>karar verme enerjinizi</span> kim koruyor? Evinizdeki personelin maaşı, yatınızın bakımı, ailenizin sağlık protokolleri veya gizli kalması gereken bir yatırım hamlesi... Tüm bu mikro kararlar, zihninizi işgal eden birer parazittir.</p><p>Biz, sizi kendi hayatınızın 'misafiri' olmaya davet ediyoruz. Bizim mimarisini çizdiğimiz bu zırhın içinde, hiçbir sorunu hissetmezsiniz; çünkü bir sorun size ulaşmadan aylar önce öngörülmüş ve bir satranç ustası zekasıyla yok edilmiştir. Hukuk, bizim için bir kısıtlama değil, sizin özgürlüğünüzü dış dünyadan izole eden altından bir çerçevedir. Tüm sırlar, fısıltılar ve veriler, İsviçre bankacılık standartlarını aşan kriptografik bir mimariyle <span class='highlight'>'The Vault' (Kasa)</span> içinde mühürlenir. Biz, sizin mutlak hükümranlığınızın görünmez muhafızlarıyız.</p>",
                    "<p>Dünyanın en iyi cerrahı, en keskin zekalı hukukçusu veya en vizyoner mimarı olabilirsiniz. Ancak dehanızı sergilediğiniz sahne kusurluysa, ustalığınız sıradanlaşır. FOR YOU ARK <span class='highlight'>'Eşiğinden'</span> geçmeyen hiçbir profesyonel, dünyanın en muktedir hanedanlıklarının merkezine asla tam olarak nüfuz edemez. Burada, eşiğin ardında, referansların bittiği ve mutlak liyakatin başladığı bir evren vardır.</p><p>Bizim dünyamızda partner olmak, sıradan bir taşeronluk veya tedarikçi ilişkisi değildir. Bu, nesiller boyu sürecek bir <span class='highlight'>'Güven Mührü'</span> taşımaktır. Müşterilerimiz, bir iş size delege edildiğinde minnet duymaz; sistemin kusursuz işleyişine saygı duyar. Siz de kendi dehanızı, kimseyi kimseye borçlu bırakmayan, kaprislerden ve bürokrasiden arındırılmış bu 'Tarafsız Bölge'de (Neutral Zone) icra edersiniz. Biz standartları takip etmeyiz, evrensel elitizmin standartlarını biz yazarız.</p>",
                    "<p>FOR YOU ARK bünyesinde yer almak, bir meslek icra etmek, maaş almak veya mesai doldurmak değildir. Bu eşikten içeri adım adım atan her birey, bir hanedanın mahremiyetini ve onurunu omuzlayan bir <span class='highlight'>'Gölge Yönetici' (Shadow Manager)</span> rütbesine yükselir. Siz sıradan bir personel değil; yeri geldiğinde bir devlet başkanının özel kalemi düzeyinde disipline, yeri geldiğinde asil bir diplomatın zarafetine sahip olan nesiller arası bir yaşam stratejistisiniz.</p><p>Gölge Muhafızlar, olayların arkasından sürüklenmez; geleceği tasarlar. Müşterinin bir damla suyu eksilmeden, o suyun kaynağını güvence altına alırlar. Bu sistemde dedikodu, zafiyet veya inisiyatif kaybı yoktur; sadece mutlak sadakat ve İsviçre saatleri gibi işleyen bir operasyonel kusursuzluk vardır. Burası, sadakatin profesyonelliği yendiği, sıradanlığın asla giremediği o kutsal karargâhtır.</p>",
                    "<p>Bir imparatorluk kurmak bir ömür sürer, ancak onu yıkmak liyakatsiz bir veliahtın tek bir anlık hatasına bakar. FOR YOU ARK sadece bugünü koordine etmez; <span class='highlight'>Geleceğin Mirasını</span> da garanti altına alır. Sisteme kabul edilen stajyerlerimiz ve kursiyerlerimiz, ANCORA Akademi'nin tavizsiz asalet, ileri düzey kriz yönetimi ve mutlak gizlilik eğitimlerinden geçerek adeta baştan yaratılırlar.</p><p>Dahası, hizmet verdiğimiz o köklü ailelerin veliahtları... Gücün ve servetin içine doğan bu genç zihinler, akademimizin özel doktrinleriyle tanışır. Onlara sadece parayı değil, o devasa gücü taşımanın psikolojik ağırlığını, cemiyetin yazılmamış kurallarını ve 'Sovereign' (Egemen) olmanın gerektirdiği sessiz asaleti öğretiyoruz. Biz, sadece bugünün krizlerini çözen bir şirket değil, yarının hanedanlıklarını şekillendiren ebedi bir okuluz.</p>",
                    "<p>Gürültünün, kaosun ve sıradanlığın bittiği yerde duruyorsunuz. Karşınızdaki bu dijital defter, sadece bir vaat değil, nesiller boyunca ihlal edilmemiş bir yemin, atılmış bir <span class='highlight'>Güven Mührüdür</span>. Dünyanın en güçlü insanları, kendi hayatlarının seyircisi olma lüksünü tattıklarında, bir daha asla eski kaosa dönmezler.</p><p>Şimdi karar zamanı Majesteleri. Geri dönüp hayatınızdaki o bitmek bilmeyen mikro kararların, personelin, risklerin ve minnet borçlarının içinde boğulmaya devam edebilirsiniz. Ya da aşağıdaki butona dokunarak, sarsılmaz kasamızın (The Vault) kapağını aralar, <span class='highlight'>İlk Temas</span> mülakatına katılır ve kendi hayatınızın mutlak egemeni olursunuz. Seçim sizin, ancak unutmayın: Eşikten sadece seçilmişler geçer.</p>"
                ]
            },
            en: {
                home: "← HOME", next: "NEXT CHAPTER →", prev: "← PREV CHAPTER", pass: "RETURN HOME →", idle: "SYSTEM IDLE. TOUCH TO AWAKEN.",
                aiWelcome: "Welcome to the Sovereign Constitution, Your Majesty. I am honored to illuminate your inquiries.", aiPlaceholder: "Your Majesty's decree...",
                titles: ["CHAPTER I : CRYSTAL SILENCE", "CHAPTER II : ABSOLUTE SOVEREIGNTY", "CHAPTER III : THE ELITE THRESHOLD", "CHAPTER IV : SHADOW GUARDS", "CHAPTER V : LEGACY OF THE FUTURE", "CHAPTER VI : THE FINAL DECREE"],
                texts: [
                    "<p>You have ruled the world. You have crossed continents, built industries, and steered the course of history. But as the power you possess grew, the noise around you turned into a deafening chaos. In our world, luxury is not possessing more items, more estates, or a larger entourage. For us, the ultimate luxury is that absolute, crystal silence where <span class='highlight'>you do not even have to think about the existence of what you own</span>.</p><p>Ordinary systems offer you assistants, drivers, or butlers. We offer a 'Sovereign Intellect' that manages, audits, and perfects that massive human resource on your behalf. Asking someone to solve a problem, feeling gratitude, or being indebted is the invisible shackle of freedom. As FOR YOU ARK, we have established the most elegant yet ruthless network in human history: the <span class='highlight'>Zero Gratitude Network</span>. An impossible access, a global diplomatic crisis, or a risk threatening your family... These are not favors solved by requests for us; they are standard operating procedures executing with mathematical precision.</p>",
                    "<p>You already have everything. There is only one thing left that money cannot buy: Unshakable peace of mind. You may be in the top 0.01% of the world's wealthiest, but who protects your <span class='highlight'>decision-making energy</span>? The salary of your domestic staff, the maintenance of your yacht, the health protocols of your family, or an investment move that must remain secret... All these micro-decisions are parasites occupying your mind.</p><p>We invite you to be a 'guest' in your own life. Within this armor we have architected, you feel no problems; because a problem is foreseen months before it reaches you and destroyed with the intellect of a chess master. Law is not a restriction for us, but a golden frame isolating your freedom from the outside world. All secrets, whispers, and data are sealed within <span class='highlight'>'The Vault'</span> with a cryptographic architecture exceeding Swiss banking standards. We are the invisible guards of your absolute sovereignty.</p>",
                    "<p>You may be the world's best surgeon, the sharpest lawyer, or the most visionary architect. But if the stage where you exhibit your genius is flawed, your mastery becomes ordinary. No professional who has not crossed the FOR YOU ARK <span class='highlight'>'Threshold'</span> can ever fully penetrate the center of the world's most powerful dynasties. Here, beyond the threshold, lies a universe where references end and absolute merit begins.</p><p>Being a partner in our world is not an ordinary subcontracting or supplier relationship. It is carrying a <span class='highlight'>'Seal of Trust'</span> that will last for generations. Our clients do not feel gratitude when a job is delegated to you; they respect the flawless operation of the system. You execute your genius in this 'Neutral Zone', free from whims and bureaucracy, leaving no one indebted to anyone. We do not follow standards; we write the standards of universal elitism.</p>",
                    "<p>Being part of FOR YOU ARK is not practicing a profession, earning a salary, or filling hours. Every individual who steps inside this threshold ascends to the rank of a <span class='highlight'>'Shadow Manager'</span>, shouldering the privacy and honor of a dynasty. You are not an ordinary staff member; you are an intergenerational life strategist possessing the discipline of a head of state's chief of staff when necessary, and the elegance of a noble diplomat.</p><p>Shadow Guards are not dragged behind events; they design the future. They secure the source of water before a single drop of the client's water is depleted. In this system, there is no gossip, vulnerability, or loss of initiative; there is only absolute loyalty and operational perfection ticking like Swiss watches. This is the sacred headquarters where loyalty defeats professionalism, and where mediocrity can never enter.</p>",
                    "<p>Building an empire takes a lifetime, but destroying it takes only a single momentary mistake of an incompetent heir. FOR YOU ARK does not only coordinate today; it also guarantees the <span class='highlight'>Legacy of the Future</span>. Our interns and trainees accepted into the system are practically recreated by undergoing ANCORA Academy's uncompromising nobility, advanced crisis management, and absolute privacy trainings.</p><p>Furthermore, the heirs of those deep-rooted families we serve... These young minds born into power and wealth are introduced to the special doctrines of our academy. We teach them not only about money, but the psychological weight of carrying that massive power, the unwritten rules of society, and the silent nobility required to be a 'Sovereign'. We are not just a company solving today's crises, but an eternal school shaping the dynasties of tomorrow.</p>",
                    "<p>You are standing where the noise, chaos, and mediocrity end. This digital tome before you is not just a promise, but an unviolated oath across generations, a forged <span class='highlight'>Seal of Trust</span>. When the most powerful people in the world taste the luxury of being a spectator of their own lives, they never return to the old chaos.</p><p>Now is the time for decision, Your Majesty. You can turn back and continue to drown in those endless micro-decisions, staff issues, risks, and debts of gratitude in your life. Or, by touching the button below, you can crack open the lid of our unshakable vault, attend the <span class='highlight'>First Contact</span> interview, and become the absolute sovereign of your own life. The choice is yours, but remember: Only the chosen pass through the threshold.</p>"
                ]
            },
            fr: {
                home: "← ACCUEIL", next: "CHAPITRE SUIVANT →", prev: "← CHAPITRE PRÉC.", pass: "RETOUR À L'ACCUEIL →", idle: "SYSTÈME EN VEILLE. TOUCHEZ.",
                aiWelcome: "Bienvenue dans la Constitution Souveraine, Majesté. C'est un honneur de vous éclairer.", aiPlaceholder: "Le décret de Sa Majesté...",
                titles: ["CHAPITRE I : SILENCE DE CRISTAL", "CHAPITRE II : SOUVERAINETÉ ABSOLUE", "CHAPITRE III : LE SEUIL D'ÉLITE", "CHAPITRE IV : GARDES DE L'OMBRE", "CHAPITRE V : L'HÉRITAGE DU FUTUR", "CHAPITRE VI : LE DÉCRET FINAL"],
                texts: [
                    "<p>Vous avez dirigé le monde. Vous avez traversé les continents, bâti des industries et orienté le cours de l'histoire. Mais à mesure que votre pouvoir augmentait, le bruit autour de vous s'est transformé en un chaos assourdissant. Dans notre monde, le luxe n'est pas de posséder plus de biens, plus de domaines ou une suite plus nombreuse. Pour nous, le luxe ultime est ce silence absolu, ce silence de cristal où <span class='highlight'>vous n'avez même pas à penser à l'existence de ce que vous possédez</span>.</p><p>Les systèmes ordinaires vous offrent des assistants, des chauffeurs ou des majordomes. Nous vous offrons une « Intelligence Souveraine » qui gère, audite et perfectionne cette ressource humaine massive en votre nom. Demander à quelqu'un de résoudre un problème, ressentir de la gratitude ou être redevable est l'entrave invisible de la liberté. Chez FOR YOU ARK, nous avons établi le réseau le plus élégant mais le plus impitoyable de l'histoire humaine : le <span class='highlight'>Réseau Zéro Gratitude</span>. Un accès impossible, une crise diplomatique mondiale... Ce ne sont pas des faveurs résolues par des demandes ; ce sont des procédures standard exécutées avec une précision mathématique.</p>",
                    "<p>Vous avez déjà tout. Il ne reste qu'une seule chose que l'argent ne peut acheter : une tranquillité d'esprit inébranlable. Vous faites peut-être partie des 0,01 % les plus riches du monde, mais qui protège votre <span class='highlight'>énergie décisionnelle</span> ? Le salaire de votre personnel de maison, l'entretien de votre yacht, les protocoles de santé de votre famille... Toutes ces micro-décisions sont des parasites qui occupent votre esprit.</p><p>Nous vous invitons à être un « invité » dans votre propre vie. Au sein de cette armure que nous avons conçue, vous ne ressentez aucun problème ; car un problème est prévu des mois avant qu'il ne vous atteigne et détruit avec l'intelligence d'un maître d'échecs. La loi n'est pas une restriction pour nous, mais un cadre d'or isolant votre liberté du monde extérieur. Tous les secrets, murmures et données sont scellés dans <span class='highlight'>« Le Coffre » (The Vault)</span> avec une architecture cryptographique dépassant les normes bancaires suisses.</p>",
                    "<p>Vous êtes peut-être le meilleur chirurgien du monde, l'avocat le plus perspicace ou l'architecte le plus visionnaire. Mais si la scène où vous exposez votre génie est imparfaite, votre maîtrise devient ordinaire. Aucun professionnel n'ayant pas franchi le <span class='highlight'>« Seuil »</span> de FOR YOU ARK ne pourra jamais pénétrer pleinement le centre des dynasties les plus puissantes du monde.</p><p>Être partenaire dans notre monde n'est pas une simple relation de sous-traitance. C'est porter un <span class='highlight'>« Sceau de Confiance »</span> qui durera des générations. Nos clients ne ressentent aucune gratitude lorsqu'un travail vous est délégué ; ils respectent le fonctionnement sans faille du système. Vous exécutez votre génie dans cette « Zone Neutre », sans laisser personne redevable envers quiconque. Nous ne suivons pas les normes ; nous écrivons les normes de l'élitisme universel.</p>",
                    "<p>Faire partie de FOR YOU ARK, ce n'est pas exercer une profession, percevoir un salaire ou remplir des heures. Chaque individu qui franchit ce seuil s'élève au rang de <span class='highlight'>« Gestionnaire de l'Ombre » (Shadow Manager)</span>, endossant l'intimité et l'honneur d'une dynastie. Vous n'êtes pas un employé ordinaire ; vous êtes un stratège de vie intergénérationnel possédant la discipline du chef de cabinet d'un chef d'État et l'élégance d'un noble diplomate.</p><p>Les Gardes de l'Ombre ne sont pas traînés derrière les événements ; ils conçoivent l'avenir. Dans ce système, il n'y a pas de ragots, de vulnérabilité ou de perte d'initiative ; il n'y a qu'une loyauté absolue et une perfection opérationnelle qui tourne comme des montres suisses. C'est le quartier général sacré où la loyauté bat le professionnalisme.</p>",
                    "<p>Bâtir un empire prend toute une vie, mais le détruire ne prend qu'une seule erreur momentanée d'un héritier incompétent. FOR YOU ARK ne coordonne pas seulement le présent ; il garantit également <span class='highlight'>L'Héritage du Futur</span>. Nos stagiaires acceptés dans le système sont recréés en suivant les formations intransigeantes de noblesse, de gestion de crise et de confidentialité absolue de l'Académie ANCORA.</p><p>De plus, les héritiers des familles que nous servons... Ces jeunes esprits nés dans le pouvoir et la richesse sont initiés aux doctrines spéciales de notre académie. Nous ne leur enseignons pas seulement l'argent, mais le poids psychologique de ce pouvoir massif, les règles non écrites de la société, et la noble tranquillité requise pour être un « Souverain ».</p>",
                    "<p>Vous vous tenez là où se terminent le bruit, le chaos et la médiocrité. Ce tome numérique devant vous n'est pas seulement une promesse, c'est un serment inviolé à travers les générations, un <span class='highlight'>Sceau de Confiance</span> forgé. Lorsque les personnes les plus puissantes du monde goûtent au luxe d'être spectateur de leur propre vie, elles ne retournent jamais à l'ancien chaos.</p><p>Il est maintenant temps de décider, Majesté. Vous pouvez faire demi-tour et continuer à vous noyer dans ces micro-décisions interminables. Ou, en touchant le bouton ci-dessous, vous pouvez ouvrir le couvercle de notre coffre inébranlable, assister à l'entretien du <span class='highlight'>Premier Contact</span> et devenir le souverain absolu de votre propre vie. Le choix vous appartient, mais n'oubliez pas : seuls les élus franchissent le seuil.</p>"
                ]
            },
            de: {
                home: "← STARTSEITE", next: "NÄCHSTES KAPITEL →", prev: "← VORHERIGES KAPITEL", pass: "ZURÜCK ZUR STARTSEITE →", idle: "SYSTEM RUHT. BERÜHREN.",
                aiWelcome: "Willkommen in der souveränen Verfassung, Majestät. Es ist mir eine Ehre, Sie zu erleuchten.", aiPlaceholder: "Dekret Eurer Majestät...",
                titles: ["KAPITEL I : KRISTALLSTILLE", "KAPITEL II : ABSOLUTE SOUVERÄNITÄT", "KAPITEL III : DIE ELITE-SCHWELLE", "KAPITEL IV : SCHATTENWACHEN", "KAPITEL V : DAS ERBE DER ZUKUNFT", "KAPITEL VI : DAS FINALE DEKRET"],
                texts: [
                    "<p>Sie haben die Welt regiert. Sie haben Kontinente durchquert, Industrien aufgebaut und den Lauf der Geschichte gelenkt. Doch mit wachsender Macht wurde der Lärm um Sie herum zu einem ohrenbetäubenden Chaos. In unserer Welt ist Luxus nicht, mehr Besitztümer oder ein größeres Gefolge zu haben. Für uns ist der ultimative Luxus jene absolute, kristallklare Stille, in der <span class='highlight'>Sie nicht einmal an die Existenz dessen denken müssen, was Sie besitzen</span>.</p><p>Gewöhnliche Systeme bieten Ihnen Assistenten, Chauffeure oder Butler. Wir bieten einen „Souveränen Intellekt“, der diese gewaltigen menschlichen Ressourcen in Ihrem Namen verwaltet. Jemanden bitten zu müssen, ein Problem zu lösen, Dankbarkeit zu empfinden oder in der Schuld von jemandem zu stehen, ist die unsichtbare Fessel der Freiheit. Mit FOR YOU ARK haben wir das <span class='highlight'>Null-Dankbarkeits-Netzwerk</span> aufgebaut. Eine globale Krise oder ein Risiko für Ihre Familie... Das sind für uns keine Gefälligkeiten, sondern Standardverfahren, die mit mathematischer Präzision ausgeführt werden.</p>",
                    "<p>Sie haben bereits alles. Es bleibt nur eines, das man mit Geld nicht kaufen kann: Unerschütterlicher Seelenfrieden. Sie mögen zu den reichsten 0,01 % der Welt gehören, aber wer schützt <span class='highlight'>Ihre Entscheidungsenergie</span>? Das Gehalt Ihres Hauspersonals, die Wartung Ihrer Yacht, die Gesundheitsprotokolle Ihrer Familie... All diese Mikrozentscheidungen sind Parasiten, die Ihren Geist besetzen.</p><p>Wir laden Sie ein, ein „Gast“ in Ihrem eigenen Leben zu sein. In dieser von uns entworfenen Rüstung spüren Sie keine Probleme; denn ein Problem wird Monate im Voraus vorhergesehen und mit dem Intellekt eines Schachmeisters vernichtet. Das Gesetz ist für uns keine Einschränkung, sondern ein goldener Rahmen, der Ihre Freiheit von der Außenwelt isoliert. Alle Daten werden im <span class='highlight'>„The Vault“ (Tresor)</span> mit einer Architektur versiegelt, die die Schweizer Bankenstandards übertrifft.</p>",
                    "<p>Sie mögen der beste Chirurg, der schärfste Anwalt oder der visionärste Architekt der Welt sein. Aber wenn die Bühne, auf der Sie Ihr Genie präsentieren, fehlerhaft ist, wird Ihre Meisterschaft gewöhnlich. Kein Profi, der nicht die FOR YOU ARK <span class='highlight'>„Schwelle“</span> überschritten hat, kann jemals vollständig in das Zentrum der mächtigsten Dynastien der Welt eindringen.</p><p>Partner in unserer Welt zu sein, ist keine gewöhnliche Lieferantenbeziehung. Es bedeutet, ein <span class='highlight'>„Vertrauenssiegel“</span> zu tragen, das Generationen überdauert. Unsere Kunden empfinden keine Dankbarkeit, wenn Ihnen eine Aufgabe delegiert wird; sie respektieren das fehlerfreie Funktionieren des Systems. Sie entfalten Ihr Genie in dieser „Neutralen Zone“, ohne dass jemand jemandem etwas schuldig ist. Wir folgen keinen Standards; wir schreiben die Standards des universellen Elitismus.</p>",
                    "<p>Ein Teil von FOR YOU ARK zu sein, bedeutet nicht, einen Beruf auszuüben oder Gehalt zu beziehen. Jeder Einzelne, der diese Schwelle überschreitet, steigt in den Rang eines <span class='highlight'>„Schattenmanagers“ (Shadow Manager)</span> auf, der die Privatsphäre und Ehre einer Dynastie auf seinen Schultern trägt. Sie sind ein generationsübergreifender Lebensstratege mit der Disziplin des Stabschefs eines Staatsoberhauptes und der Eleganz eines Diplomaten.</p><p>Schattenwachen werden nicht hinter den Ereignissen hergezogen; sie gestalten die Zukunft. In diesem System gibt es keinen Klatsch, keine Verwundbarkeit oder Verlust an Initiative; es gibt nur absolute Loyalität und operative Perfektion. Dies ist das heilige Hauptquartier, in dem Loyalität über Professionalität siegt.</p>",
                    "<p>Ein Imperium aufzubauen dauert ein Leben lang, aber es zu zerstören erfordert nur einen einzigen Fehler eines inkompetenten Erben. FOR YOU ARK koordiniert nicht nur das Heute; es garantiert auch das <span class='highlight'>Erbe der Zukunft</span>. Unsere in das System aufgenommenen Praktikanten werden durch die kompromisslosen Schulungen der ANCORA Academy in Adel, Krisenmanagement und absoluter Privatsphäre quasi neu erschaffen.</p><p>Darüber hinaus werden die Erben der von uns betreuten Familien... diese jungen Köpfe, die in Macht und Reichtum hineingeboren wurden, in die speziellen Doktrinen unserer Akademie eingeführt. Wir lehren sie nicht nur über Geld, sondern auch über das psychologische Gewicht dieser Macht und den Adel, der erforderlich ist, um ein „Souverän“ zu sein.</p>",
                    "<p>Sie stehen dort, wo Lärm, Chaos und Mittelmäßigkeit enden. Dieser digitale Foliant vor Ihnen ist nicht nur ein Versprechen, sondern ein über Generationen unverletzter Eid, ein geschmiedetes <span class='highlight'>Vertrauenssiegel</span>. Wenn die mächtigsten Menschen der Welt den Luxus kosten, Zuschauer ihres eigenen Lebens zu sein, kehren sie nie wieder in das alte Chaos.</p><p>Nun ist es Zeit für eine Entscheidung, Majestät. Sie können umkehren und in diesen endlosen Mikrozentscheidungen ertrinken. Oder Sie berühren die Schaltfläche unten, öffnen den Deckel unseres unerschütterlichen Tresors, nehmen am <span class='highlight'>Erstkontakt-Interview</span> teil und werden der absolute Souverän Ihres eigenen Lebens. Die Wahl liegt bei Ihnen, aber denken Sie daran: Nur die Auserwählten überschreiten die Schwelle.</p>"
                ]
            },
            ru: {
                home: "← ГЛАВНАЯ", next: "СЛЕДУЮЩАЯ ГЛАВА →", prev: "← ПРЕДЫДУЩАЯ", pass: "ВЕРНУТЬСЯ НА ГЛАВНУЮ →", idle: "СИСТЕМА В ОЖИДАНИИ. КОСНИТЕСЬ.",
                aiWelcome: "Добро пожаловать в Суверенную Конституцию, Ваше Величество.", aiPlaceholder: "Указ Вашего Величества...",
                titles: ["ГЛАВА I : КРИСТАЛЬНАЯ ТИШИНА", "ГЛАВА II : АБСОЛЮТНЫЙ СУВЕРЕНИТЕТ", "ГЛАВА III : ЭЛИТНЫЙ ПОРОГ", "ГЛАВА IV : ТЕНЕВЫЕ СТРАЖИ", "ГЛАВА V : НАСЛЕДИЕ БУДУЩЕГО", "ГЛАВА VI : ПОСЛЕДНИЙ УКАЗ"],
                texts: [
                    "<p>Вы правили миром. Вы пересекали континенты, строили индустрии и направляли ход истории. Но по мере роста вашей власти шум вокруг вас превращался в оглушающий хаос. В нашем мире роскошь — это не обладание бóльшим количеством вещей или поместий. Для нас величайшая роскошь — это та абсолютная, кристальная тишина, где <span class='highlight'>вам даже не нужно думать о существовании того, чем вы владеете</span>.</p><p>Обычные системы предлагают вам ассистентов или водителей. Мы предлагают «Суверенный Интеллект», который управляет, проверяет и совершенствует этот человеческий ресурс от вашего имени. Просить кого-то решить проблему, чувствовать благодарность или быть обязанным — это невидимые оковы свободы. В FOR YOU ARK мы создали <span class='highlight'>Сеть Нулевой Благодарности</span>. Невозможный доступ или глобальный кризис... Для нас это не одолжения, а стандартные процедуры, выполняемые с математической точностью.</p>",
                    "<p>У вас уже есть всё. Осталось лишь одно, что нельзя купить за деньги: Непоколебимое душевное спокойствие. Вы можете входить в 0,01% самых богатых людей мира, но кто защищает вашу <span class='highlight'>энергию принятия решений</span>? Зарплата домашнего персонала, обслуживание яхты, медицинские протоколы... Все эти микро-решения — паразиты, оккупирующие ваш разум.</p><p>Мы приглашаем вас стать «гостем» в собственной жизни. Внутри этой брони вы не чувствуете проблем; потому что проблема предвидится за месяцы до того, как она вас достигнет, и уничтожается с интеллектом шахматного мастера. Право для нас — это золотая рамка, изолирующая вашу свободу от внешнего мира. Все секреты и данные запечатаны в <span class='highlight'>«Хранилище» (The Vault)</span> с криптографической архитектурой, превосходящей стандарты швейцарских банков.</p>",
                    "<p>Вы можете быть лучшим хирургом, юристом или архитектором в мире. Но если сцена, на которой вы демонстрируете свой гений, небезупречна, ваше мастерство становится обычным. Ни один профессионал, не перешагнувший <span class='highlight'>«Порог»</span> FOR YOU ARK, никогда не сможет полностью проникнуть в центр самых могущественных династий мира.</p><p>Быть партнером в нашем мире — это не просто отношения поставщика. Это значит нести <span class='highlight'>«Печать Доверия»</span>, которая сохранится на поколения. Наши клиенты не испытывают благодарности, когда работа делегируется вам; они уважают безупречную работу системы. Вы демонстрируете свой гений в этой «Нейтральной Зоне», где никто никому ничего не должен. Мы не следуем стандартам; мы пишем стандарты универсального элитизма.</p>",
                    "<p>Быть частью FOR YOU ARK — это не просто профессия. Каждый, кто переступает этот порог, возвышается до ранга <span class='highlight'>«Теневого Управляющего» (Shadow Manager)</span>, берущего на свои плечи конфиденциальность и честь династии. Вы — стратег жизни многих поколений, обладающий дисциплиной главы аппарата президента и элегантностью дипломата.</p><p>Теневые Стражи не плетутся позади событий; они проектируют будущее. В этой системе нет сплетен, уязвимостей или потери инициативы; есть только абсолютная преданность и операционное совершенство, работающее как швейцарские часы. Это священная штаб-квартира, где преданность побеждает профессионализм.</p>",
                    "<p>Создание империи занимает всю жизнь, а ее разрушение — лишь одну ошибку некомпетентного наследника. FOR YOU ARK гарантирует <span class='highlight'>Наследие Будущего</span>. Наши стажеры практически пересоздаются заново, проходя бескомпромиссные тренинги Академии ANCORA по благородству, антикризисному управлению и абсолютной конфиденциальности.</p><p>Более того, наследники семей, которым мы служим... Эти молодые умы, рожденные во власти и богатстве, знакомятся со специальными доктринами нашей академии. Мы учим их психологической тяжести этой колоссальной власти и тихому благородству, необходимому для того, чтобы быть «Сувереном».</p>",
                    "<p>Вы стоите там, где заканчиваются шум, хаос и посредственность. Этот цифровой фолиант — не просто обещание, это ненарушенная клятва через поколения, выкованная <span class='highlight'>Печать Доверия</span>. Когда самые могущественные люди мира вкушают роскошь быть зрителем собственной жизни, они никогда не возвращаются к прежнему хаосу.</p><p>Пришло время для решения, Ваше Величество. Вы можете повернуть назад и продолжить тонуть в этих бесконечных микро-решениях. Или, коснувшись кнопки ниже, вы можете приоткрыть крышку нашего непоколебимого хранилища, посетить интервью <span class='highlight'>Первого Контакта</span> и стать абсолютным сувереном своей жизни. Выбор за вами, но помните: Порог переступают только избранные.</p>"
                ]
            },
            es: {
                home: "← INICIO", next: "SIGUIENTE CAPÍTULO →", prev: "← CAPÍTULO ANTERIOR", pass: "VOLVER AL INICIO →", idle: "SISTEMA INACTIVO. TOQUE.",
                aiWelcome: "Bienvenido a la Constitución Soberana, Majestad. Es un honor iluminar sus dudas.", aiPlaceholder: "El decreto de Su Majestad...",
                titles: ["CAPÍTULO I : SILENCIO DE CRISTAL", "CAPÍTULO II : SOBERANÍA ABSOLUTA", "CAPÍTULO III : EL UMBRAL DE ÉLITE", "CAPÍTULO IV : GUARDIAS DE LA SOMBRA", "CAPÍTULO V : LEGADO DEL FUTURO", "CAPÍTULO VI : EL DECRETO FINAL"],
                texts: [
                    "<p>Usted ha gobernado el mundo. Ha cruzado continentes, construido industrias y dirigido el curso de la historia. Pero a medida que su poder crecía, el ruido a su alrededor se convirtió en un caos ensordecedor. En nuestro mundo, el lujo no es poseer más artículos o más fincas. Para nosotros, el máximo lujo es ese silencio absoluto y cristalino en el que <span class='highlight'>ni siquiera tiene que pensar en la existencia de lo que posee</span>.</p><p>Los sistemas ordinarios le ofrecen asistentes, chóferes o mayordomos. Nosotros ofrecemos un 'Intelecto Soberano' que gestiona y perfecciona ese enorme recurso humano en su nombre. Pedir a alguien que resuelva un problema, sentir gratitud o estar en deuda es el grillete invisible de la libertad. En FOR YOU ARK, hemos establecido la <span class='highlight'>Red de Cero Gratitud</span>. Una crisis global o un riesgo para su familia... Para nosotros no son favores resueltos mediante peticiones; son procedimientos operativos estándar que se ejecutan con precisión matemática.</p>",
                    "<p>Usted ya lo tiene todo. Solo queda una cosa que el dinero no puede comprar: una tranquilidad inquebrantable. Puede estar en el 0,01% de los más ricos del mundo, pero ¿quién protege su <span class='highlight'>energía para tomar decisiones</span>? El salario del personal doméstico, el mantenimiento de su yate, los protocolos de salud de su familia... Todas estas micro-decisiones son parásitos que ocupan su mente.</p><p>Le invitamos a ser un 'invitado' en su propia vida. Dentro de esta armadura que hemos diseñado, no siente ningún problema; porque un problema se prevé meses antes de que le alcance y se destruye con el intelecto de un maestro de ajedrez. La ley no es una restricción para nosotros, sino un marco dorado que aísla su libertad del mundo exterior. Todos los secretos y datos están sellados dentro de <span class='highlight'>'La Bóveda' (The Vault)</span> con una arquitectura criptográfica que supera los estándares bancarios suizos.</p>",
                    "<p>Puede ser el mejor cirujano del mundo, el abogado más agudo o el arquitecto más visionario. Pero si el escenario donde exhibe su genio tiene fallas, su maestría se vuelve ordinaria. Ningún profesional que no haya cruzado el <span class='highlight'>'Umbral'</span> de FOR YOU ARK podrá penetrar completamente en el centro de las dinastías más poderosas del mundo.</p><p>Ser socio en nuestro mundo no es una relación ordinaria de proveedores. Es llevar un <span class='highlight'>'Sello de Confianza'</span> que durará por generaciones. Nuestros clientes no sienten gratitud cuando se le delega un trabajo; respetan el funcionamiento impecable del sistema. Usted ejecuta su genio en esta 'Zona Neutral' sin dejar a nadie en deuda con nadie. No seguimos estándares; escribimos los estándares del elitismo universal.</p>",
                    "<p>Ser parte de FOR YOU ARK no es ejercer una profesión o cumplir horas. Cada individuo que entra por este umbral asciende al rango de <span class='highlight'>'Gerente en la Sombra' (Shadow Manager)</span>, asumiendo la privacidad y el honor de una dinastía. No es un empleado ordinario; es un estratega de vida intergeneracional que posee la disciplina del jefe de gabinete de un jefe de estado y la elegancia de un diplomático noble.</p><p>Los Guardias de la Sombra no son arrastrados tras los eventos; diseñan el futuro. En este sistema, no hay chismes, vulnerabilidad o pérdida de iniciativa; solo hay lealtad absoluta y perfección operativa que funciona como relojes suizos. Este es el cuartel general sagrado donde la lealtad derrota al profesionalismo.</p>",
                    "<p>Construir un imperio lleva toda una vida, pero destruirlo solo toma un error momentáneo de un heredero incompetente. FOR YOU ARK no solo coordina el hoy; también garantiza el <span class='highlight'>Legado del Futuro</span>. Nuestros pasantes aceptados en el sistema son prácticamente recreados al someterse a los intransigentes entrenamientos de nobleza, gestión de crisis y privacidad absoluta de la Academia ANCORA.</p><p>Además, los herederos de esas familias profundamente arraigadas a las que servimos... Estas mentes jóvenes nacidas en el poder y la riqueza son introducidas a las doctrinas especiales de nuestra academia. Les enseñamos el peso psicológico de llevar ese poder masivo y la nobleza silenciosa requerida para ser un 'Soberano'.</p>",
                    "<p>Está parado donde terminan el ruido, el caos y la mediocridad. Este tomo digital ante usted no es solo una promesa, sino un juramento no violado a través de generaciones, un <span class='highlight'>Sello de Confianza</span> forjado. Cuando las personas más poderosas del mundo prueban el lujo de ser espectadores de sus propias vidas, nunca regresan al viejo caos.</p><p>Ahora es el momento de decidir, Majestaje. Puede retroceder y continuar ahogándose en esas interminables micro-decisiones. O, al tocar el botón de abajo, puede abrir la tapa de nuestra bóveda inquebrantable, asistir a la entrevista de <span class='highlight'>Primer Contacto</span> y convertirse en el soberano absoluto de su propia vida. La elección es suya, pero recuerde: Solo los elegidos cruzan el umbral.</p>"
                ]
            },
            ar: {
                home: "← الرئيسية", next: "الفصل التالي ←", prev: "→ الفصل السابق", pass: "العودة للرئيسية ←", idle: "النظام في وضع السكون. المس للاستيقاظ.",
                aiWelcome: "مرحباً بجلالتكم في الدستور السيادي. يشرفني توضيح استفساراتكم.", aiPlaceholder: "مرسوم جلالتكم...",
                titles: ["الفصل الأول : صمت الكريستال", "الفصل الثاني : السيادة المطلقة", "الفصل الثالث : عتبة النخبة", "الفصل الرابع : حراس الظل", "الفصل الخامس : إرث المستقبل", "الفصل السادس : المرسوم الأخير"],
                texts: [
                    "<p>لقد حكمتم العالم. وعبرتم القارات، وبنيتم الصناعات، ووجهتم مسار التاريخ. ولكن مع نمو القوة التي تمتلكونها، تحول الضجيج من حولكم إلى فوضى تصم الآذان. في عالمنا، الرفاهية ليست امتلاك المزيد من الأشياء. بالنسبة لنا، الرفاهية المطلقة هي ذلك الصمت الكريستالي المطلق حيث <span class='highlight'>لا تضطر حتى للتفكير في وجود ما تملكه</span>.</p><p>الأنظمة العادية تقدم لكم المساعدين أو السائقين. نحن نقدم 'عقلاً سيادياً' يدير ويدقق ويكمل تلك الموارد البشرية الهائلة نيابة عنكم. أن تطلب من شخص ما حل مشكلة، أو أن تشعر بالامتنان أو تكون مدينًا هو القيد الخفي للحرية. في FOR YOU ARK، أنشأنا الشبكة الأكثر أناقة ولكن الأكثر قسوة في تاريخ البشرية: <span class='highlight'>شبكة انعدام الامتنان (Zero Gratitude Network)</span>. الوصول المستحيل، أو أزمة دبلوماسية عالمية... هذه ليست خدمات يتم حلها عن طريق الطلبات؛ بل هي إجراءات تشغيل قياسية تُنفذ بدقة رياضية.</p>",
                    "<p>أنتم تمتلكون كل شيء بالفعل. لم يتبق سوى شيء واحد لا يمكن للمال شراؤه: راحة البال التي لا تتزعزع. قد تكونون من ضمن أغنى 0.01٪ في العالم، ولكن من يحمي <span class='highlight'>طاقة اتخاذ القرار لديكم</span>؟ راتب طاقمكم المنزلي، صيانة يختكم، البروتوكولات الصحية لعائلتكم... كل هذه القرارات الدقيقة هي طفيليات تحتل عقولكم.</p><p>نحن ندعوكم لتكونوا 'ضيوفاً' في حياتكم الخاصة. داخل هذا الدرع الذي صممناه، لا تشعرون بأي مشاكل؛ لأن المشكلة متوقعة قبل أشهر من وصولها إليكم وتُدمر بذكاء خبير شطرنج. القانون ليس قيداً بالنسبة لنا، بل هو إطار ذهبي يعزل حريتكم عن العالم الخارجي. يتم ختم جميع الأسرار والبيانات داخل <span class='highlight'>'القبو' (The Vault)</span> ببنية تشفير تتجاوز المعايير المصرفية السويسرية.</p>",
                    "<p>قد تكونون أفضل جراح في العالم، أو أذكى محامٍ، أو المهندس المعماري الأكثر رؤية. ولكن إذا كان المسرح الذي تعرض فيه عبقريتك معيباً، فإن براعتك تصبح عادية. لا يمكن لأي محترف لم يتجاوز <span class='highlight'>'عتبة'</span> FOR YOU ARK أن يخترق مركز أقوى السلالات الحاكمة في العالم.</p><p>أن تكون شريكاً في عالمنا ليس علاقة مقاولات عادية. بل هو حمل <span class='highlight'>'ختم الثقة'</span> الذي سيستمر لأجيال. لا يشعر عملاؤنا بالامتنان عندما يتم تفويض مهمة لك؛ بل يحترمون التشغيل الخالي من العيوب للنظام. أنت تنفذ عبقريتك في هذه 'المنطقة المحايدة' الخالية من البيروقراطية، دون ترك أي شخص مدينًا لأي شخص. نحن لا نتبع المعايير؛ نحن نكتب معايير النخبوية العالمية.</p>",
                    "<p>أن تكون جزءاً من FOR YOU ARK ليس ممارسة مهنة أو تلقي راتب. كل فرد يخطو داخل هذه العتبة يرتقي إلى رتبة <span class='highlight'>'المدير في الظل' (Shadow Manager)</span>، ويتحمل خصوصية وشرف سلالة حاكمة. أنت لست موظفاً عادياً؛ أنت استراتيجي حياة يمتلك انضباط رئيس أركان رئيس دولة، وأناقة دبلوماسي نبيل.</p><p>حراس الظل لا يُجرون خلف الأحداث؛ بل يصممون المستقبل. في هذا النظام، لا يوجد ثرثرة، أو ضعف؛ بل هناك ولاء مطلق وكمال تشغيلي يدق مثل الساعات السويسرية. هذا هو المقر المقدس حيث يهزم الولاء الاحتراف، وحيث لا يمكن للرداءة أن تدخل أبداً.</p>",
                    "<p>بناء إمبراطورية يستغرق عمراً، ولكن تدميرها يستغرق خطأً لحظياً واحداً من وريث غير كفء. FOR YOU ARK لا تنسق اليوم فقط؛ بل تضمن أيضاً <span class='highlight'>إرث المستقبل</span>. المتدربون المقبولون في النظام يُعاد تشكيلهم فعلياً من خلال الخضوع لتدريبات النبالة، وإدارة الأزمات المتقدمة، والخصوصية المطلقة في أكاديمية أنكورا.</p><p>علاوة على ذلك، فإن ورثة تلك العائلات... يتم تعريف هذه العقول الشابة التي ولدت في السلطة والثروة بالعقائد الخاصة لأكاديميتنا. نحن لا نعلمهم فقط عن المال، بل عن الوزن النفسي لحمل تلك السلطة الهائلة، والنبالة الصامتة المطلوبة ليكونوا 'سياديين'.</p>",
                    "<p>أنتم تقفون حيث ينتهي الضجيج والفوضى. هذا المجلد الرقمي أمامكم ليس مجرد وعد، بل هو قسم لم يُنتهك عبر الأجيال، و<span class='highlight'>ختم ثقة</span> مصاغ. عندما يتذوق أقوى الأشخاص في العالم رفاهية أن يكونوا متفرجين على حياتهم الخاصة، فإنهم لا يعودون أبداً إلى الفوضى القديمة.</p><p>الآن حان وقت اتخاذ القرار، يا صاحب الجلالة. يمكنكم العودة والاستمرار في الغرق في تلك القرارات الدقيقة التي لا نهاية لها، وقضايا الموظفين، والمخاطر، وديون الامتنان في حياتكم. أو، عن طريق لمس الزر أدناه، يمكنكم فتح غطاء قبوتا الذي لا يتزعزع، وحضور مقابلة <span class='highlight'>الاتصال الأول</span>، وتصبحون السيادي المطلق في حياتكم الخاصة. الخيار لكم، ولكن تذكروا: فقط المختارون يعبرون العتبة.</p>"
                ]
            },
            zh: {
                home: "← 首页", next: "下一章 →", prev: "← 上一章", pass: "返回首页 →", idle: "系统待机中。请触摸唤醒。",
                aiWelcome: "欢迎来到主权宪法，陛下。我很荣幸为您解答疑惑。", aiPlaceholder: "陛下的法令...",
                titles: ["第一章：水晶般的寂静", "第二章：绝对主权", "第三章：精英门槛", "第四章：暗影守卫", "第五章：未来的遗产", "第六章：最终法令"],
                texts: [
                    "<p>您统治了世界。您跨越了大陆，建立并引领了历史的进程。但随着您拥有的权力增长，您周围的噪音变成了震耳欲聋的混乱。在我们的世界里，奢侈不是拥有更多的物品或庄园。对我们来说，终极的奢侈是那种绝对的、水晶般的寂静，在那里<span class='highlight'>您甚至不需要去思考您所拥有的东西的存在</span>。</p><p>普通的系统为您提供助手、司机或管家。我们提供的是一个“主权智囊团”，代表您管理、审计并完善庞大的人力资源。要求别人解决问题、感到感激或是欠人情，是自由无形的枷锁。作为 FOR YOU ARK，我们建立了人类历史上最优雅却最无情的网络：<span class='highlight'>零感激网络 (Zero Gratitude Network)</span>。不可能的访问权限、全球外交危机或是威胁您家族的风险……对我们来说，这些都不是通过请求来解决的恩惠；它们是以数学般的精确度执行的标准操作程序。</p>",
                    "<p>您已经拥有了一切。只剩下一件金钱买不到的东西：不可动摇的内心的平静。您可能处于世界最富有的 0.01% 中，但是谁在保护您的<span class='highlight'>决策能量</span>？您家庭员工的工资、游艇的维护、家庭的健康协议或是一项必须保密的投资举措……所有这些微观决策都是占据您大脑的寄生虫。</p><p>我们邀请您成为自己生活中的“客人”。在我们设计的这层盔甲内，您感觉不到任何问题；因为问题在到达您之前几个月就被预见，并被像国际象棋大师一样的智慧所摧毁。法律对我们来说不是限制，而是将您的自由与外部世界隔离的金色框架。所有的秘密、耳语和数据都被密封在<span class='highlight'>“金库”（The Vault）</span>中，其加密架构超越了瑞士银行的标准。我们是您绝对主权的无形守卫。</p>",
                    "<p>您可能是世界上最好的外科医生、最敏锐的律师或最有远见的建筑师。但是，如果您展示才华的舞台有缺陷，您的精通就会变得平凡。任何没有跨过 FOR YOU ARK <span class='highlight'>“门槛”</span> 的专业人士，永远无法完全渗透到世界上最强大的王朝中心。</p><p>在我们的世界里成为合伙人不是普通的供应商关系。它是承载着将世代相传的<span class='highlight'>“信任印章”</span>。当我们的客户将工作委托给您时，他们不会感到感激；他们尊重系统完美无瑕的运作。您在这个免于反复无常和官僚主义的“中立区”（Neutral Zone）中发挥您的天才，不让任何人欠任何人的情。我们不遵循标准；我们编写普遍精英主义的标准。</p>",
                    "<p>成为 FOR YOU ARK 的一部分不是从事一份职业、赚取薪水或打发时间。每一个跨进这个门槛的人，都晋升为<span class='highlight'>“影子管理者”（Shadow Manager）</span>，肩负着一个王朝的隐私和荣誉。您不是一名普通员工；您是一名跨世代的生活战略家，在必要时拥有国家元首幕僚长的纪律，以及贵族外交官的优雅。</p><p>影子守卫不会被事件拖着走；他们设计未来。在这个系统中，没有闲言碎语、脆弱性或失去主动权；只有绝对的忠诚和像瑞士手表一样滴答作响的操作完美性。这是忠诚战胜专业精神的神圣总部，平庸永远无法进入。</p>",
                    "<p>建立一个帝国需要一生的时间，但摧毁它只需要无能继承人的一瞬间错误。FOR YOU ARK 不仅协调今天；它还保障<span class='highlight'>未来的遗产</span>。我们系统中被接受的实习生和受训者通过经历 ANCORA 学院毫不妥协的贵族精神、高级危机管理和绝对隐私培训，实际上获得了重生。</p><p>此外，我们服务那些根深蒂固家族的继承人……这些生来就拥有权力和财富的年轻头脑被介绍给我们学院的特殊信条。我们不仅教他们关于金钱的知识，还教他们承载这种巨大权力的心理重量、社会不成文的规定，以及成为“主权者”所需的无声的贵族气质。</p>",
                    "<p>您正站在噪音、混乱和平庸结束的地方。您面前的这本数字典籍不仅仅是一个承诺，而是世代未被违反的誓言，是一个铸就的<span class='highlight'>信任印章</span>。当世界上最强大的人尝到成为自己生活旁观者的奢侈时，他们就永远不会再回到过去的混乱中。</p><p>陛下，现在是做决定的时候了。您可以回头，继续在生活中那些无休止的微观决策、员工问题、风险和人情债中淹没。或者，通过触摸下面的按钮，您可以打开我们不可动摇的金库盖子，参加<span class='highlight'>首次接触</span>面试，成为您自己生活的绝对主权者。选择权在您手中，但请记住：只有被选中的人才能跨过门槛。</p>"
                ]
            }
        };

        let currentLang = 'tr';
        let currentPage = 1;
        const totalPages = 6;
        let typeWriterTimers = [];

        let isAutoScrolling = true;
        let autoScrollSpeed = 0.6;

        let idleTimer = null;
        let isIdleActive = false;
        const IDLE_DELAY = 180000;

        const idleCurtain = document.getElementById('idle-curtain');
        const canvas = document.getElementById('matrix-canvas');
        const ctx = canvas.getContext('2d');

        function changeLanguage() {
    currentLang = document.getElementById('lang-select').value;
    const data = langData[currentLang];
    const isRTL = currentLang === 'ar';

    document.getElementById('btn-home').innerText = data.home;
    document.getElementById('curtain-text').innerText = data.idle;
    document.getElementById('ai-messages').innerHTML = `<p><strong style="color:var(--gold-bright);">AI:</strong> ${data.aiWelcome}</p>`;
    document.getElementById('ai-text').placeholder = data.aiPlaceholder;

    document.documentElement.setAttribute('dir', isRTL ? 'rtl' : 'ltr');
    document.body.setAttribute('dir', isRTL ? 'rtl' : 'ltr');

    for (let i = 1; i <= totalPages; i++) {
        document.getElementById(`title-${i}`).innerText = data.titles[i - 1];
    }

        updateNavigation(data);
    typeText(data.texts[currentPage - 1], `tw-${currentPage}`);

    setTimeout(() => {
        document.querySelectorAll('.chapter-title, .text-content-area').forEach(el => {
            el.style.direction = isRTL ? 'rtl' : 'ltr';
            el.style.textAlign = isRTL ? 'right' : 'justify';
        });

        document.querySelectorAll('.text-content-area p').forEach(p => {
            if (isRTL) {
                p.classList.add('rtl-paragraph');
            } else {
                p.classList.remove('rtl-paragraph');
            }

            p.style.textIndent = isRTL ? '0' : '40px';
        });
    }, 50);
}

function updateNavigation(data) {
    document.getElementById('prev-btn').innerText = data.prev;
    if (currentPage === totalPages) {
        document.getElementById('next-btn').innerText = data.pass;
    } else {
        document.getElementById('next-btn').innerText = data.next;
    }
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
                    let char = htmlString.charAt(i);
                    textBuffer += char;
                    if (char === '<') isTag = true;
                    if (char === '>') isTag = false;

                    targetEl.innerHTML = textBuffer + (isTag ? "" : '<span class="cursor"></span>');
                    i++;
                    
                    let speed = isTag ? 0 : Math.random() * 15 + 5;
                    typeWriterTimers.push(setTimeout(type, speed));
                } else {
                    targetEl.innerHTML = textBuffer;
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
            
            const data = langData[currentLang];
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

        const aiOrb = document.getElementById('ai-orb');
        const aiChat = document.getElementById('ai-chat');

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
            chatBody.innerHTML += `<p style="text-align:right; margin-top:10px; color:#fff; font-family:'Montserrat'; font-size:0.95rem;">${msg}</p>`;
            input.value = '';
            
            setTimeout(() => {
                chatBody.innerHTML += `<p style="margin-top:15px; border-left:2px solid var(--gold-bright); padding-left:15px;"><strong style="color:var(--gold-bright); font-family:'Cinzel Decorative';">AI:</strong> Ettiğiniz kelam, sistemimizin sarsılmaz gizlilik protokolleri dahilindedir. Eşikten geçip 'İlk Temas'ı kurduğunuzda, gölge muhafızınız tüm süreci bizzat mühürleyecektir.</p>`;
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 1200);

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

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        resizeCanvas();

        const letters = '01FORYOUARK⚜✦◇◆';
        const fontSize = 20;
        let columns = Math.floor(canvas.width / fontSize);
        let drops = Array(columns).fill(1);

        function resetMatrixRain() {
            columns = Math.floor(canvas.width / fontSize);
            drops = Array(columns).fill(1);
            ctx.setTransform(1, 0, 0, 1, 0, 0);
            ctx.fillStyle = "#000";
            ctx.fillRect(0, 0, canvas.width, canvas.height);
        }

        function drawMatrix() {
    ctx.fillStyle = 'rgba(0, 0, 0, 0.035)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = `${fontSize}px monospace`;
    ctx.textBaseline = 'top';

    for (let i = 0; i < drops.length; i++) {
        const text = letters.charAt(Math.floor(Math.random() * letters.length));
        const x = i * fontSize;
        const y = drops[i] * fontSize;

        ctx.shadowBlur = 18;
        ctx.shadowColor = 'rgba(255, 223, 0, 0.55)';
        ctx.fillStyle = 'rgba(212, 175, 55, 0.98)';
        ctx.fillText(text, x, y);

        if (Math.random() > 0.88) {
            ctx.shadowBlur = 28;
            ctx.shadowColor = 'rgba(255, 240, 170, 0.9)';
            ctx.fillStyle = 'rgba(255, 248, 210, 1)';
            ctx.fillText(text, x, y);
        }

        if (y > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }
        drops[i]++;
    }

    ctx.shadowBlur = 0;
}
        

        function animateMatrix() {
            drawMatrix();
            requestAnimationFrame(animateMatrix);
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
            resizeCanvas();
            resetMatrixRain();
        });

        window.addEventListener('DOMContentLoaded', () => {
            changeLanguage();
        });

        window.addEventListener('load', () => {
            setTimeout(() => {
                document.body.classList.add('loaded');
            }, 500);

            resetIdleTimer();
            resetMatrixRain();
            animateMatrix();
            autoScrollContent();
        });
    </script>
</body>
</html>