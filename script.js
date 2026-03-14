const nodes = [
    { title: "AİLEMİZ", desc: "Münhasır Hizmetler & VIP Kalkan", btn: "SİSTEMİ KEŞFET (DEMO)", action: "window.location.href='vault.html'" },
    { title: "OPERASYON", desc: "Kriz Yönetimi & Stratejik Müdahale", btn: "KRİZ MERKEZİNE BAĞLAN", action: "alert('Kuleye şifreli bağlantı kuruluyor...')" },
    { title: "ÇÖZÜM ORTAKLARI", desc: "Küresel İttifak Ekosistemi", btn: "PARTNER AĞINI GÖR", action: "alert('Küresel İttifak Haritası Açılıyor...')" },
    { title: "YETENEK ÜSSÜ", desc: "Akademi & Geleceğin Mimarları", btn: "AKADEMİ & STAJ BAŞVURUSU", action: "alert('Akademi portalına yönlendiriliyorsunuz...')" },
    { title: "İLK TEMAS", desc: "Karargah Bağlantısı", btn: "GÜVENLİ İLETİŞİM HATTI", action: "alert('Uçtan uca şifreli iletişim kanalı açılıyor...')" },
    { title: "İLKELER VE ETİK", desc: "Manifesto & Kurumsal Felsefe", btn: "KURUMSAL MANİFESTO", action: "alert('DNA ve İlkelerimiz yükleniyor...')" },
    { title: "STANDARTLARIMIZ", desc: "Mahremiyet & Hukuki Zırh", btn: "HUKUKİ ZIRH PROTOKOLLERİ", action: "alert('Güvenlik standartları sayfası açılıyor...')" },
    { title: "VİZYON", desc: "Gelecek Hedefleri", btn: "GELECEK TASARIMI", action: "alert('Vizyon haritamız açılıyor...')" }
];

const carousel = document.getElementById('carousel');
const mainHub = document.getElementById('main-hub');
const scene = document.getElementById('cinematic-view');
const topBar = document.getElementById('top-bar');
const aiIndicator = document.getElementById('ai-indicator');
const execView = document.getElementById('executive-view');
const curtainL = document.getElementById('curtain-l');
const curtainR = document.getElementById('curtain-r');

const theta = 360 / nodes.length; 
const radius = Math.round((680 / 2) / Math.tan(Math.PI / nodes.length)) + 250; 

let selectedIndex = 0;
let activeAxis = 'Y';
let idleTimer;
let isCurtainClosed = true;

function init() {
    nodes.forEach((node, i) => {
        let face = document.createElement('div');
        face.className = 'crystal-face';
        face.style.transform = `rotateY(${i * theta}deg) translateZ(${radius}px)`;
        face.innerHTML = `<h2>${node.title}</h2><p>${node.desc}</p><button class="action-btn" onclick="${node.action}">${node.btn}</button>`;
        carousel.appendChild(face);

        let card = document.createElement('div');
        card.className = 'exec-card';
        card.innerHTML = `<h3 style="color:var(--gold); margin-bottom:10px;">${node.title}</h3><p style="font-size:0.8rem; color:#aaa;">${node.desc}</p>`;
        card.setAttribute('onclick', node.action); 
        document.getElementById('exec-grid').appendChild(card);
    });
    updateFaces();
}

function wakeUpSystem() {
    if (isCurtainClosed) {
        curtainL.classList.remove('closing');
        curtainR.classList.remove('closing');
        mainHub.classList.remove('returning');
        mainHub.classList.add('cornered'); 
        topBar.classList.remove('hide-elements');
        aiIndicator.classList.remove('hide-elements');
        scene.classList.remove('hide-elements');
        if(isExecView) execView.classList.remove('hide-elements');
        isCurtainClosed = false;
    }
    resetIdleTimer();
}

function sleepSystem() {
    curtainL.classList.add('closing');
    curtainR.classList.add('closing');
    mainHub.classList.remove('cornered');
    mainHub.classList.add('returning');
    topBar.classList.add('hide-elements');
    aiIndicator.classList.add('hide-elements');
    scene.classList.add('hide-elements');
    execView.classList.add('hide-elements');
    isCurtainClosed = true;
}

function resetIdleTimer() {
    clearTimeout(idleTimer);
    if (!isCurtainClosed) {
        idleTimer = setTimeout(sleepSystem, 60000);
    }
}

['mousemove', 'mousedown', 'scroll'].forEach(event => { window.addEventListener(event, wakeUpSystem); });

// 5 TIK GEÇİDİ YÖNLENDİRMESİ
let gateClicks = 0;
let gateTimer;
document.getElementById('gate-key').addEventListener('click', (e) => {
    e.stopPropagation();
    gateClicks++;
    clearTimeout(gateTimer);
    if(gateClicks === 5) {
        alert("SOVEREIGN DOĞRULANDI. Geçit Açılıyor.");
        window.location.href = 'gateway.php';
        gateClicks = 0;
    } else {
        gateTimer = setTimeout(() => { gateClicks = 0; }, 2000);
    }
});

document.addEventListener('keydown', (e) => {
    wakeUpSystem(); 
    if (e.key === 'ArrowRight') { rotateSphere(1, 'Y'); } 
    else if (e.key === 'ArrowLeft') { rotateSphere(-1, 'Y'); } 
    else if (e.key === 'ArrowUp') { rotateSphere(1, 'X'); } 
    else if (e.key === 'ArrowDown') { rotateSphere(-1, 'X'); }
});

function rotateSphere(dir, requestedAxis) {
    if (activeAxis !== requestedAxis) {
        activeAxis = requestedAxis;
        document.querySelectorAll('.crystal-face').forEach((face, i) => {
            face.style.transform = activeAxis === 'Y' 
                ? `rotateY(${i * theta}deg) translateZ(${radius}px)` 
                : `rotateX(${i * -theta}deg) translateZ(${radius}px)`;
        });
    }
    selectedIndex += dir;
    carousel.style.transform = activeAxis === 'Y' 
        ? `translateZ(${-radius}px) rotateY(${selectedIndex * -theta}deg)` 
        : `translateZ(${-radius}px) rotateX(${selectedIndex * theta}deg)`;
    updateFaces();
}

function updateFaces() {
    const faces = document.querySelectorAll('.crystal-face');
    faces.forEach((f, i) => {
        f.classList.remove('active-face');
        if (activeAxis === 'Y') f.style.transform = `rotateY(${i * theta}deg) translateZ(${radius}px) scale(0.9)`;
        else f.style.transform = `rotateX(${i * -theta}deg) translateZ(${radius}px) scale(0.9)`;
    });
    let actualIndex = ((selectedIndex % 8) + 8) % 8; 
    let targetIndex = actualIndex === 0 ? 0 : 8 - actualIndex; 
    if(faces[targetIndex]) {
        faces[targetIndex].classList.add('active-face');
        if (activeAxis === 'Y') faces[targetIndex].style.transform = `rotateY(${targetIndex * theta}deg) translateZ(${radius}px) scale(1.08)`;
        else faces[targetIndex].style.transform = `rotateX(${targetIndex * -theta}deg) translateZ(${radius}px) scale(1.08)`;
    }
}

let isExecView = false;
function toggleMode() { 
    isExecView = !isExecView;
    if(isExecView) {
        execView.classList.add('active');
        execView.classList.remove('hide-elements');
    } else {
        execView.classList.remove('active');
        execView.classList.add('hide-elements');
    }
    const btn = document.getElementById('view-toggle-btn');
    btn.innerText = isExecView ? "SİNEMATİK KÜRE GÖRÜNÜMÜ" : "KLASİK GÖRÜNÜM";
    resetIdleTimer();
}

init();
carousel.style.transform = `translateZ(${-radius}px) rotateY(0deg)`;