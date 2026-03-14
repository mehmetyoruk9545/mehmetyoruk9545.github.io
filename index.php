<?php
    // PHP MOTORU VE GÜVENLİK
    session_start();
    $isSecure = true; 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ANCORA / FOR YOU | Sovereign Gateway</title>
    <style>
        /* --- RENK VE GENEL AYARLAR --- */
        :root { 
            --gold: #d4af37; 
            --gold-glow: rgba(212, 175, 55, 0.8); 
            --bg-dark: #020202;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body, html { height: 100%; overflow: hidden; background-color: transparent; font-family: 'Garamond', serif; color: white; touch-action: none; }

        /* --- ARKA PLAN (DENİZ VİDEOSU) --- */
        #bg-video { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; object-fit: cover; z-index: -100; transition: all 2s; }
        .overlay { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.2); z-index: -99; pointer-events: none; }

        /* --- TİYATRO PERDESİ --- */
        .curtain { position: fixed; top: 0; width: 50vw; height: 100vh; z-index: 10000; background: repeating-linear-gradient(to right, #110000 0%, #2a0000 5%, #4a0000 10%, #2a0000 15%, #110000 20%); box-shadow: inset 0 0 150px rgba(0,0,0,1); pointer-events: none; }
        .curtain-left { left: 0; transform: translateX(-100%); border-right: 12px solid var(--gold); transition: transform 1.5s cubic-bezier(0.4, 0, 0.2, 1); }
        .curtain-right { right: 0; transform: translateX(100%); border-left: 12px solid var(--gold); transition: transform 1.5s cubic-bezier(0.4, 0, 0.2, 1); }
        .curtain.closed { transform: translateX(0); transition: transform 15s ease-in-out; }

        /* --- LOGO --- */
        .logo-container { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 500px; z-index: 20000; transition: all 1.5s cubic-bezier(0.68, -0.55, 0.265, 1.55); cursor: pointer; display: flex; align-items: center; justify-content: center; }
        .logo-container.cornered { top: 35px; left: 35px; transform: translate(0, 0); width: 75px; height: 75px; }
        
        .main-logo { width: 100%; height: 100%; border: 2px solid var(--gold); border-radius: 50%; padding: 5%; background: rgba(0,0,0,0.85); box-shadow: 0 0 35px var(--gold-glow); animation: heartbeat 2.5s infinite ease-in-out; object-fit: contain; }
        @keyframes heartbeat { 0%, 100% { transform: scale(1); box-shadow: 0 0 35px var(--gold-glow); } 50% { transform: scale(1.05); box-shadow: 0 0 60px var(--gold-glow); } }

        /* --- 8 KÜRESEL DİL DESTEĞİ --- */
        .lang-menu { position: fixed; top: 40px; right: 40px; z-index: 2500; font-size: 0.85rem; letter-spacing: 2px; color: var(--gold); opacity: 0; transition: 1s; pointer-events: none; }
        .lang-menu.visible { opacity: 1; pointer-events: auto; }
        .lang-current { border-bottom: 1px solid var(--gold); padding-bottom: 5px; cursor: pointer; text-align: right; }
        .lang-dropdown { display: none; position: absolute; top: 30px; right: 0; background: rgba(0,0,0,0.95); border: 1px solid var(--gold); padding: 15px; width: 140px; text-align: right; line-height: 2.2; }
        .lang-menu:hover .lang-dropdown { display: block; }
        .lang-dropdown span { display: block; color: #ccc; cursor: pointer; transition: 0.3s; }
        .lang-dropdown span:hover { color: var(--gold); transform: translateX(-5px); }

        /* --- 3 BOYUTLU SAHNE VE KUTULAR --- */
        .scene { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; perspective: 2500px; display: flex; align-items: center; justify-content: center; z-index: 100; opacity: 0; transition: opacity 1.5s; pointer-events: none; }
        .scene.visible { opacity: 1; pointer-events: auto; }
        .carousel { width: 100%; height: 100%; position: absolute; transform-style: preserve-3d; transition: transform 1.2s cubic-bezier(0.25, 1, 0.5, 1); }

        .phone-box {
            position: absolute; width: 380px; height: 560px; 
            left: calc(50% - 190px); top: calc(50% - 280px);
            background: rgba(5, 5, 5, 0.85); backdrop-filter: blur(10px);
            border: 2px solid var(--gold) !important; 
            box-shadow: 0 0 30px var(--gold-glow) !important;
            border-radius: 15px; 
            display: flex; flex-direction: column; align-items: center; justify-content: space-between; padding: 40px 20px;
            transition: all 0.8s ease-out; backface-visibility: hidden;
        }
        
        .phone-box.active-box { transform: scale(1.1); background: #000; }
        .box-number { font-size: 4rem; color: rgba(212, 175, 55, 0.2); font-weight: bold; margin-bottom: -30px; }
        .phone-box h2 { color: var(--gold); font-size: 1.8rem; letter-spacing: 3px; text-align: center; text-transform: uppercase; margin-bottom: 20px; }
        
        .phone-box p { 
            color: #ddd; 
            font-size: 0.95rem; 
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; 
            text-align: center; 
            letter-spacing: 1px; 
            line-height: 1.6; 
        }
        
        .box-btn { background: transparent; border: 1px solid var(--gold); color: var(--gold); padding: 12px 25px; border-radius: 25px; cursor: pointer; letter-spacing: 2px; transition: 0.4s; font-family: 'Garamond', serif; font-size: 0.8rem; }
        .box-btn:hover { background: var(--gold); color: #000; box-shadow: 0 0 20px var(--gold); }

    </style>
</head>
<body>

    <video autoplay muted loop playsinline id="bg-video">
        <source src="images/deniz.mp4" type="video/mp4">
    </video>
    
    <div class="overlay"></div>

    <div class="curtain curtain-left closed" id="curtain-l"></div>
    <div class="curtain curtain-right closed" id="curtain-r"></div>

    <div class="lang-menu" id="lang-menu">
        <div class="lang-current">TR | TÜRKÇE</div>
        <div class="lang-dropdown">
            <span data-lang="TR">TR | Türkçe</span>
            <span data-lang="EN">EN | English</span>
            <span data-lang="DE">DE | Deutsch</span>
            <span data-lang="FR">FR | Français</span>
            <span data-lang="ES">ES | Español</span>
            <span data-lang="RU">RU | Русский</span>
            <span data-lang="AR">AR | العربية</span>
            <span data-lang="ZH">ZH | 中文</span>
        </div>
    </div>

    <div class="logo-container" id="logo-container">
        <img src="images/foryou-logo.png" class="main-logo" id="gate-key" alt="LOGO">
    </div>

    <div class="scene" id="scene">
        <div class="carousel" id="carousel"></div>
    </div>

    <script>
        // --- 1. KAPSÜLLEME: 8 DİL SÖZLÜĞÜ (TAM SÜRÜM) ---
        const langData = {
            "TR": [
                { id: "01", title: "VİZYON VE MİSYONUMUZ", desc: "Marka kimliği, operasyon felsefesi ve geleceğe bakışımız. Kanuni hatırlatmalar eşliğinde.", btn: "VİZYONU GÖR", link: "vizyon.php" },
                { id: "02", title: "İLK TEMAS", desc: "VIP dünyamıza adım atın. Ön başvuru ve tanışma alanı.", btn: "İLETİŞİME GEÇ", link: "iletisim.php" },
                { id: "03", title: "AİLE", desc: "Müşteriye özel Vault (Kasa) alanı. Veri girişi ve şifreli rapor yansımaları.", btn: "EVE HOŞGELDİNİZ", link: "kasa.php" },
                { id: "04", title: "NETWORK VE EŞİK", desc: "Çözüm ortaklarımız. KVKK onaylı şifreli geçit ve iletişim portalı.", btn: "AĞI GÖRÜNTÜLE", link: "network.php" },
                { id: "05", title: "YETENEK ÜSSÜ", desc: "Stajyer, Kursiyer ve Aday Personel Giriş Alanı.", btn: "ÜSSE BAĞLAN", link: "yetenek-ussu.php" },
                { id: "06", title: "STANDARTLARIMIZ", desc: "Hizmet kalitesi ve taviz vermediğimiz kurumsal kriterler.", btn: "KRİTERLER", link: "standartlar.php" },
                { id: "07", title: "AKADEMİ", desc: "Sürekli gelişim, eğitim ve bilgi merkezimiz.", btn: "AKADEMİYE GİR", link: "akademi.php" },
                { id: "08", title: "MİMARİ VE TEST", desc: "Demo Alanı: Site haritası ve arka plan işleyişinin test vitrini.", btn: "DEMO TEST", link: "demo-test.php" }
            ],
            "EN": [
                { id: "01", title: "OUR VISION & MISSION", desc: "Brand identity, operational philosophy, and our vision for the future. With legal disclaimers.", btn: "VIEW VISION", link: "vizyon.php" },
                { id: "02", title: "FIRST CONTACT", desc: "Step into our VIP world. Preliminary application and introductory area.", btn: "CONTACT US", link: "iletisim.php" },
                { id: "03", title: "FAMILY", desc: "Exclusive Vault area for clients. Data entry and encrypted report reflections.", btn: "WELCOME HOME", link: "kasa.php" },
                { id: "04", title: "NETWORK & THRESHOLD", desc: "Our solution partners. Encrypted gateway and communication portal.", btn: "VIEW NETWORK", link: "network.php" },
                { id: "05", title: "TALENT BASE", desc: "Exclusive personnel and operations management data portal.", btn: "CONNECT TO BASE", link: "yetenek-ussu.php" },
                { id: "06", title: "OUR STANDARDS", desc: "Service quality and uncompromising corporate criteria.", btn: "CRITERIA", link: "standartlar.php" },
                { id: "07", title: "ACADEMY", desc: "Our center for continuous development, training, and information.", btn: "ENTER ACADEMY", link: "akademi.php" },
                { id: "08", title: "ARCHITECTURE & TEST", desc: "Demo Area: Site map and test showcase for background operations.", btn: "DEMO TEST", link: "demo-test.php" }
            ],
            "DE": [
                { id: "01", title: "UNSERE VISION & MISSION", desc: "Markenidentität, Betriebsstrategie und unser Blick in die Zukunft. Mit rechtlichen Hinweisen.", btn: "VISION ANSEHEN", link: "vizyon.php" },
                { id: "02", title: "ERSTER KONTAKT", desc: "Treten Sie ein in unsere VIP-Welt. Voranmeldung und Vorstellungsbereich.", btn: "KONTAKTIEREN", link: "iletisim.php" },
                { id: "03", title: "FAMILIE", desc: "Exklusiver Vault (Tresor) Bereich für Kunden. Dateneingabe und verschlüsselte Berichte.", btn: "WILLKOMMEN", link: "kasa.php" },
                { id: "04", title: "NETZWERK & SCHWELLE", desc: "Unsere Lösungspartner. Verschlüsseltes Portal und Kommunikationsnetzwerk.", btn: "NETZWERK", link: "network.php" },
                { id: "05", title: "TALENT-BASIS", desc: "Exklusives Datenportal für Personal- und Betriebsmanagement.", btn: "BASIS VERBINDEN", link: "yetenek-ussu.php" },
                { id: "06", title: "UNSERE STANDARDS", desc: "Servicequalität und kompromisslose Unternehmenskriterien.", btn: "KRITERIEN", link: "standartlar.php" },
                { id: "07", title: "AKADEMIE", desc: "Unser Zentrum für kontinuierliche Entwicklung, Ausbildung und Information.", btn: "AKADEMIE", link: "akademi.php" },
                { id: "08", title: "ARCHITEKTUR & TEST", desc: "Demo-Bereich: Sitemap und Testumgebung für Hintergrundoperationen.", btn: "DEMO TEST", link: "demo-test.php" }
            ],
            "FR": [
                { id: "01", title: "NOTRE VISION & MISSION", desc: "Identité de la marque, philosophie opérationnelle et vision de l'avenir. Avec mentions légales.", btn: "VOIR LA VISION", link: "vizyon.php" },
                { id: "02", title: "PREMIER CONTACT", desc: "Entrez dans notre monde VIP. Demande préliminaire et espace de présentation.", btn: "CONTACTEZ-NOUS", link: "iletisim.php" },
                { id: "03", title: "FAMILLE", desc: "Espace Vault (Coffre-fort) exclusif pour les clients. Saisie de données et rapports cryptés.", btn: "BIENVENUE", link: "kasa.php" },
                { id: "04", title: "RÉSEAU & SEUIL", desc: "Nos partenaires de solutions. Portail de communication et passerelle cryptée.", btn: "VOIR LE RÉSEAU", link: "network.php" },
                { id: "05", title: "BASE DE TALENTS", desc: "Portail de données exclusif pour la gestion du personnel et des opérations.", btn: "SE CONNECTER", link: "yetenek-ussu.php" },
                { id: "06", title: "NOS STANDARDS", desc: "Qualité de service et critères d'entreprise intransigeants.", btn: "CRITÈRES", link: "standartlar.php" },
                { id: "07", title: "ACADÉMIE", desc: "Notre centre de développement continu, de formation et d'information.", btn: "ENTRER", link: "akademi.php" },
                { id: "08", title: "ARCHITECTURE & TEST", desc: "Espace Démo : Plan du site et vitrine de test pour les opérations en arrière-plan.", btn: "TEST DÉMO", link: "demo-test.php" }
            ],
            "ES": [
                { id: "01", title: "NUESTRA VISIÓN Y MISIÓN", desc: "Identidad de marca, filosofía operativa y nuestra visión del futuro. Con avisos legales.", btn: "VER VISIÓN", link: "vizyon.php" },
                { id: "02", title: "PRIMER CONTACTO", desc: "Adéntrese en nuestro mundo VIP. Solicitud preliminar y área de presentación.", btn: "CONTÁCTENOS", link: "iletisim.php" },
                { id: "03", title: "FAMILIA", desc: "Área de Vault (Bóveda) exclusiva para clientes. Ingreso de datos y reportes encriptados.", btn: "BIENVENIDO", link: "kasa.php" },
                { id: "04", title: "RED Y UMBRAL", desc: "Nuestros socios de soluciones. Portal de comunicación y pasarela encriptada.", btn: "VER RED", link: "network.php" },
                { id: "05", title: "BASE DE TALENTOS", desc: "Portal de datos exclusivo para la gestión de personal y operaciones.", btn: "CONECTAR", link: "yetenek-ussu.php" },
                { id: "06", title: "NUESTROS ESTÁNDARES", desc: "Calidad de servicio y criterios corporativos intransigentes.", btn: "CRITERIOS", link: "standartlar.php" },
                { id: "07", title: "ACADEMIA", desc: "Nuestro centro de desarrollo continuo, formación e información.", btn: "ENTRAR", link: "akademi.php" },
                { id: "08", title: "ARQUITECTURA Y PRUEBA", desc: "Área de Demostración: Mapa del sitio y vitrina de pruebas para operaciones.", btn: "PRUEBA DEMO", link: "demo-test.php" }
            ],
            "RU": [
                { id: "01", title: "НАШЕ ВИДЕНИЕ И МИССИЯ", desc: "Идентичность бренда, операционная философия и наш взгляд в будущее.", btn: "СМОТРЕТЬ ВИДЕНИЕ", link: "vizyon.php" },
                { id: "02", title: "ПЕРВЫЙ КОНТАКТ", desc: "Шагните в наш VIP-мир. Предварительная заявка и ознакомительная зона.", btn: "СВЯЗАТЬСЯ С НАМИ", link: "iletisim.php" },
                { id: "03", title: "СЕМЬЯ", desc: "Эксклюзивная зона Vault (Сейф) для клиентов. Ввод данных и зашифрованные отчеты.", btn: "ДОБРО ПОЖАЛОВАТЬ", link: "kasa.php" },
                { id: "04", title: "СЕТЬ И ПОРОГ", desc: "Наши партнеры по решениям. Зашифрованный шлюз и коммуникационный портал.", btn: "ПРОСМОТРЕТЬ СЕТЬ", link: "network.php" },
                { id: "05", title: "БАЗА ТАЛАНТОВ", desc: "Эксклюзивный портал данных для управления персоналом и операциями.", btn: "ПОДКЛЮЧИТЬСЯ", link: "yetenek-ussu.php" },
                { id: "06", title: "НАШИ СТАНДАРТЫ", desc: "Качество обслуживания и бескомпромиссные корпоративные критерии.", btn: "КРИТЕРИИ", link: "standartlar.php" },
                { id: "07", title: "АКАДЕМИЯ", desc: "Наш центр непрерывного развития, обучения и информации.", btn: "ВОЙТИ В АКАДЕМИЮ", link: "akademi.php" },
                { id: "08", title: "АРХИТЕКТУРА И ТЕСТ", desc: "Демо-зона: Карта сайта и тестовая витрина фоновых операций.", btn: "ДЕМО-ТЕСТ", link: "demo-test.php" }
            ],
            "AR": [
                { id: "01", title: "رؤيتنا ومهمتنا", desc: "هوية العلامة التجارية، والفلسفة التشغيلية، ورؤيتنا للمستقبل. مع إشعارات قانونية.", btn: "عرض الرؤية", link: "vizyon.php" },
                { id: "02", title: "الاتصال الأول", desc: "ادخل إلى عالمنا الخاص (VIP). طلب مبدئي ومنطقة تعارف.", btn: "اتصل بنا", link: "iletisim.php" },
                { id: "03", title: "العائلة", desc: "منطقة الخزنة (Vault) الحصرية للعملاء. إدخال البيانات وانعكاسات التقارير المشفرة.", btn: "مرحباً بك", link: "kasa.php" },
                { id: "04", title: "الشبكة والعتبة", desc: "شركاء الحلول لدينا. بوابة مشفرة وبوابة اتصالات.", btn: "عرض الشبكة", link: "network.php" },
                { id: "05", title: "قاعدة المواهب", desc: "بوابة بيانات حصرية لإدارة شؤون الموظفين والعمليات.", btn: "الاتصال بالقاعدة", link: "yetenek-ussu.php" },
                { id: "06", title: "معاييرنا", desc: "جودة الخدمة والمعايير المؤسسية التي لا مساومة فيها.", btn: "المعايير", link: "standartlar.php" },
                { id: "07", title: "الأكاديمية", desc: "مركزنا للتطوير المستمر والتدريب والمعلومات.", btn: "دخول الأكاديمية", link: "akademi.php" },
                { id: "08", title: "الهندسة المعمارية والاختبار", desc: "منطقة العرض: خريطة الموقع وواجهة اختبار للعمليات الخلفية.", btn: "اختبار تجريبي", link: "demo-test.php" }
            ],
            "ZH": [
                { id: "01", title: "我们的愿景与使命", desc: "品牌标识、运营理念以及我们对未来的愿景。附带法律声明。", btn: "查看愿景", link: "vizyon.php" },
                { id: "02", title: "首次接触", desc: "步入我们的VIP世界。初步申请和介绍区域。", btn: "联系我们", link: "iletisim.php" },
                { id: "03", title: "家庭", desc: "客户专属的Vault（保险库）区域。数据输入和加密报告展示。", btn: "欢迎回家", link: "kasa.php" },
                { id: "04", title: "网络与门槛", desc: "我们的解决方案合作伙伴。加密网关和通信门户。", btn: "查看网络", link: "network.php" },
                { id: "05", title: "人才基地", desc: "专属人事和运营管理数据门户。", btn: "连接到基地", link: "yetenek-ussu.php" },
                { id: "06", title: "我们的标准", desc: "服务质量和毫不妥协的企业标准。", btn: "标准", link: "standartlar.php" },
                { id: "07", title: "学院", desc: "我们持续发展、培训和信息中心。", btn: "进入学院", link: "akademi.php" },
                { id: "08", title: "架构与测试", desc: "演示区：站点地图和后台运行的测试展示。", btn: "演示测试", link: "demo-test.php" }
            ]
        };

        // --- DOM ELEMENTLERİ ---
        const carousel = document.getElementById('carousel');
        const logoContainer = document.getElementById('logo-container');
        const scene = document.getElementById('scene');
        const langMenu = document.getElementById('lang-menu');
        const curtainL = document.getElementById('curtain-l');
        const curtainR = document.getElementById('curtain-r');
        const bgVideo = document.getElementById('bg-video');
        const currentLangDisplay = document.querySelector('.lang-current');

        // --- MATEMATİK VE DEĞİŞKENLER ---
        let currentLang = "TR";
        const theta = 360 / 8; 
        const radius = Math.round((380 / 2) / Math.tan(Math.PI / 8)) + 300; 
        
        let selectedIndex = 0;
        let activeAxis = 'Y';
        let isSystemAwake = false;
        let idleTimer;

        // --- 2. KUTULARI İNŞA ETME MOTORU ---
        function initBoxes() {
            carousel.innerHTML = ""; // Sahneyi temizle
            const modules = langData[currentLang]; // Seçili dil verisini çek

            modules.forEach((mod, i) => {
                let box = document.createElement('div');
                box.className = 'phone-box';
                box.style.transform = `rotateY(${i * theta}deg) translateZ(${radius}px)`;
                
                box.innerHTML = `
                    <div class="box-number">${mod.id}</div>
                    <div>
                        <h2>${mod.title}</h2>
                        <p>${mod.desc}</p>
                    </div>
                    <button class="box-btn" onclick="window.location.href='${mod.link}'">${mod.btn}</button>
                `;
                carousel.appendChild(box);
            });
            updateBoxStyles();
        }

        // --- 3. DİL DEĞİŞTİRME TETİKLEYİCİSİ ---
        document.querySelectorAll('.lang-dropdown span').forEach(item => {
            item.addEventListener('click', (e) => {
                const selectedCode = e.target.getAttribute('data-lang');
                if(langData[selectedCode]) {
                    currentLang = selectedCode;
                    currentLangDisplay.innerHTML = `${selectedCode} | ${e.target.innerText.split('|')[1].trim().toUpperCase()}`;
                    initBoxes(); 
                    resetTimer();
                }
            });
        });

        // --- 4. SİSTEM UYANDIRMA VE UYUTMA PROTOKOLLERİ ---
        function wakeUp() {
            if (!isSystemAwake) {
                curtainL.classList.remove('closed');
                curtainR.classList.remove('closed');
                logoContainer.classList.add('cornered'); 
                scene.classList.add('visible');
                langMenu.classList.add('visible');
                
                // VIP Ses Protokolü (%15 seviyesi)
                bgVideo.muted = false;
                bgVideo.volume = 0.15; 
                
                isSystemAwake = true;
            }
            resetTimer();
        }

        function goToSleep() {
            if (isSystemAwake) {
                curtainL.classList.add('closed');
                curtainR.classList.add('closed');
                logoContainer.classList.remove('cornered'); 
                scene.classList.remove('visible');
                langMenu.classList.remove('visible');
                
                // Uyku modunda sessizlik
                bgVideo.muted = true;
                
                isSystemAwake = false;
            }
        }

        function resetTimer() {
            clearTimeout(idleTimer);
            if (isSystemAwake) {
                // 3 Dakika (180.000 milisaniye)
                idleTimer = setTimeout(goToSleep, 180000); 
            }
        }

        // --- 5. GİZLİ GEÇİT (5 TIK) PROTOKOLÜ ---
        let clickCount = 0;
        let clickTimer;
        document.getElementById('gate-key').addEventListener('click', (e) => {
            if(!isSystemAwake) { wakeUp(); }
            
            clickCount++;
            clearTimeout(clickTimer);
            
            if (clickCount === 5) {
                window.location.href = 'operasyon-merkezi.php';
                clickCount = 0;
            } else {
                clickTimer = setTimeout(() => { clickCount = 0; }, 1500);
            }
        });

        // --- 6. HAREKET KONTROLLERİ (KLAVYE VE TEKERLEK) ---
        document.addEventListener('keydown', (e) => {
            if (!isSystemAwake) wakeUp();
            if (e.key === 'ArrowRight') rotateCarousel(1, 'Y'); 
            else if (e.key === 'ArrowLeft') rotateCarousel(-1, 'Y'); 
            else if (e.key === 'ArrowUp') rotateCarousel(1, 'X'); 
            else if (e.key === 'ArrowDown') rotateCarousel(-1, 'X'); 
        });

        document.addEventListener('wheel', (e) => {
            if (!isSystemAwake) { wakeUp(); return; }
            if (e.deltaY > 0) rotateCarousel(1, activeAxis); 
            else rotateCarousel(-1, activeAxis);
        });

        function rotateCarousel(dir, axis) {
            resetTimer();
            if (activeAxis !== axis) {
                activeAxis = axis;
                document.querySelectorAll('.phone-box').forEach((box, i) => {
                    box.style.transform = activeAxis === 'Y' 
                        ? `rotateY(${i * theta}deg) translateZ(${radius}px)` 
                        : `rotateX(${i * -theta}deg) translateZ(${radius}px)`;
                });
            }
            selectedIndex += dir;
            carousel.style.transform = activeAxis === 'Y' 
                ? `translateZ(${-radius}px) rotateY(${selectedIndex * -theta}deg)` 
                : `translateZ(${-radius}px) rotateX(${selectedIndex * theta}deg)`;
            updateBoxStyles();
        }

        function updateBoxStyles() {
            const boxes = document.querySelectorAll('.phone-box');
            boxes.forEach((b, i) => {
                b.classList.remove('active-box');
            });
            let actualIndex = ((selectedIndex % 8) + 8) % 8; 
            let targetIndex = actualIndex === 0 ? 0 : 8 - actualIndex; 
            if(boxes[targetIndex]) {
                boxes[targetIndex].classList.add('active-box'); 
            }
        }

        // SİSTEMİ BAŞLAT
        initBoxes();
        carousel.style.transform = `translateZ(${-radius}px) rotateY(0deg)`;

    </script>
</body>
</html>