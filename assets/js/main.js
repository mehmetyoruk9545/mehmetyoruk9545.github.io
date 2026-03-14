/* FOR YOU | STRATEJİK ANAYASA MOTORU v5.0 - KESİN SÜRÜM */

const dict = {
    tr: {
        n1: "Ana Sayfa", n2: "Hakkımızda", n3: "Analiz Başlat", n4: "Akademi", n5: "İletişim", n6: "ACİL DURUM",
        s1: "🏛️ RESMİ KURUMLAR", s2: "🤝 STRATEJİK PARTNERLER", s3: "💰 FİNANS TERMİNALİ",
        h1: "Siz Hayatın Ritmini Deneyimleyin; Biz Geleceğin Kaosunu Disiplinle Senkronize Edelim.",
        h2: "Belirsizlik anlarında refleksler geçici, sistemler ise kalıcıdır. FOR YOU; yüksek risk içeren durumları küresel bir disiplinle koordine eden stratejik çözüm merkezinizdir.",
        a1: "✨ FOR YOU AI HUB", y1: "🛡️ YETKİLİ GİRİŞİ", o1: "🟢 ÇEVRİM İÇİ DESTEK",
        t1: "İZMİR SON DAKİKA", t2: "📢 İzmir Körfezi stratejik koordinasyon merkezi aktif. | 🌤️ Bölgesel rapor hazır."
    },
    en: {
        n1: "Home", n2: "About Us", n3: "Start Analysis", n4: "Academy", n5: "Contact", n6: "EMERGENCY",
        s1: "🏛️ OFFICIAL INSTITUTIONS", s2: "🤝 STRATEGIC PARTNERS", s3: "💰 FINANCE TERMINAL",
        h1: "Experience Life's Rhythm; Let Us Synchronize Future Chaos with Discipline.",
        h2: "In moments of uncertainty, reflexes are temporary, systems are permanent. FOR YOU is your strategic center for high-risk situations.",
        a1: "✨ FOR YOU AI HUB", y1: "🛡️ STAFF LOGIN", o1: "🟢 ONLINE SUPPORT",
        t1: "IZMIR LATEST", t2: "📢 Strategic coordination center active. | 🌤️ Regional report ready."
    },
    de: {
        n1: "Startseite", n2: "Über uns", n3: "Analyse starten", n4: "Akademie", n5: "Kontakt", n6: "NOTFALL",
        s1: "🏛️ BEHÖRDEN", s2: "🤝 STRATEGISCHE PARTNER", s3: "💰 FINANZTERMINAL",
        h1: "Erleben Sie den Rhythmus des Lebens; wir synchronisieren das Chaos mit Disziplin.",
        h2: "In Momenten der Unsicherheit sind Reflexe vorübergehend, Systeme sind dauerhaft. FOR YOU ist Ihr globales Krisenzentrum.",
        a1: "✨ FOR YOU KI HUB", y1: "🛡️ LOGIN", o1: "🟢 ONLINE-SUPPORT",
        t1: "IZMIR AKTUELL", t2: "📢 Strategisches Zentrum aktiv. | 🌤️ Regionalbericht bereit."
    },
    ru: {
        n1: "Главная", n2: "О нас", n3: "Начать анализ", n4: "Академия", n5: "Контакт", n6: "СРОЧНО",
        s1: "🏛️ ОРГАНЫ ВЛАСТИ", s2: "🤝 ПАРТНЕРЫ", s3: "💰 ФИНАНСЫ",
        h1: "Почувствуйте ритм жизни; мы синхронизируем хаос будущего с дисциплиной.",
        h2: "В моменты неопределенности рефлексы временны, системы постоянны. FOR YOU — ваш центр стратегических решений.",
        a1: "✨ FOR YOU ИИ ХАБ", y1: "🛡️ ВХОД", o1: "🟢 ОНЛАЙН ПОДДЕРЖКА",
        t1: "ИЗМИР НОВОСТИ", t2: "📢 Стратегический центр активен. | 🌤️ Отчет готов."
    },
    ar: {
        n1: "الرئيسية", n2: "من نحن", n3: "بدء التحليل", n4: "أكاديمية", n5: "اتصال", n6: "طوارئ",
        s1: "🏛️ المؤسسات الرسمية", s2: "🤝 الشركاء الاستراتيجيون", s3: "💰 المحطة المالية",
        h1: "استمتع بإيقاع الحياة؛ نحن ننظم فوضى المستقبل بانضباط.",
        h2: "في لحظات عدم اليقين، تكون ردود الفعل مؤقتة، والأنظمة دائمة. المركز الاستراتيجي المعتمد.",
        a1: "✨ مركز الذكاء الاصطناعي", y1: "🛡️ دخول الموظفين", o1: "🟢 دعم عبر الإنترنت",
        t1: "إزمير عاجل", t2: "📢 مركز التنسيق الاستراتيجي نشط حالياً."
    },
    fr: {
        n1: "Accueil", n2: "À propos", n3: "Lancer l'analyse", n4: "Académie", n5: "Contact", n6: "URGENCE",
        s1: "🏛️ INSTITUTIONS", s2: "🤝 PARTENAIRES", s3: "💰 TERMINAL FINANCIER",
        h1: "Vivez le rythme de la vie; nous synchronisons le chaos avec discipline.",
        h2: "Dans l'incertitude, les réflexes sont temporaires, les systèmes sont permanents. Votre centre stratégique global.",
        a1: "✨ FOR YOU IA HUB", y1: "🛡️ CONNEXION", o1: "🟢 SUPPORT EN LIGNE",
        t1: "IZMIR INFOS", t2: "📢 Centre de coordination stratégique actif."
    },
    es: {
        n1: "Inicio", n2: "Nosotros", n3: "Iniciar análisis", n4: "Academia", n5: "Contacto", n6: "EMERGENCIA",
        s1: "🏛️ INSTITUCIONES", s2: "🤝 SOCIOS", s3: "💰 TERMINAL FINANCIERO",
        h1: "Vive el ritmo de la vida; sincronizamos el caos del futuro con disciplina.",
        h2: "En la incertidumbre, los reflejos son temporales, los sistemas son permanentes. Su centro estratégico global.",
        a1: "✨ FOR YOU IA HUB", y1: "🛡️ ACCESO", o1: "🟢 SOPORTE EN LÍNEA",
        t1: "IZMIR ÚLTIMA", t2: "📢 Centro de coordinación estratégica activo."
    },
    zh: {
        n1: "首页", n2: "关于我们", n3: "开始分析", n4: "学院", n5: "联系", n6: "紧急情况",
        s1: "🏛️ 官方机构", s2: "🤝 合作伙伴", s3: "💰 金融终端",
        h1: "体验生活的节奏；我们用纪律同步未来的混乱。",
        h2: "在不确定时刻，反应是暂时的，系统是永久的。您的全球战略中心。",
        a1: "✨ 智能助手", y1: "🛡️ 员工登录", o1: "🟢 在线支持",
        t1: "伊兹密尔快讯", t2: "📢 战略协调中心已激活。"
    }
};

function mühürle(lang, btn) {
    document.querySelectorAll('.lang-bar span').forEach(s => s.classList.remove('active'));
    btn.classList.add('active');
    const t = dict[lang] || dict['tr'];
    document.querySelectorAll('[data-key]').forEach(el => {
        const key = el.getAttribute('data-key');
        if (t[key]) el.innerText = t[key];
    });
    document.body.dir = (lang === 'ar') ? 'rtl' : 'ltr';
}

function initCanvas() {
    const canvas = document.getElementById('bg-canvas');
    if(!canvas) return;
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    let particles = [];
    for(let i=0; i<120; i++) {
        particles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            vx: (Math.random() - 0.5) * 0.4,
            vy: (Math.random() - 0.5) * 0.4,
            size: Math.random() * 1.5 + 0.2
        });
    }
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "rgba(212, 175, 55, 0.4)";
        particles.forEach(p => {
            p.x += p.vx; p.y += p.vy;
            if(p.x < 0 || p.x > canvas.width) p.vx *= -1;
            if(p.y < 0 || p.y > canvas.height) p.vy *= -1;
            ctx.beginPath(); ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2); ctx.fill();
        });
        requestAnimationFrame(animate);
    }
    animate();
}

window.onload = function() { initCanvas(); };
function filter() {
    let val = document.getElementById('instSearch').value.toUpperCase();
    let links = document.querySelectorAll('.list-link');
    links.forEach(a => { a.style.display = a.innerText.toUpperCase().indexOf(val) > -1 ? "" : "none"; });
}