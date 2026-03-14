<?php
declare(strict_types=1);
?><!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORYOUARK Akademi</title>
    <meta name="description" content="FORYOUARK Akademi - sanatsal, çok dilli, yönlendirmeli ve yaşayan öğrenme alanı">
    <style>
        :root{
            --bg:#071019;
            --bg-deep:#050b12;
            --navy:#0a1522;
            --navy-soft:#102033;
            --gold:#d6b16a;
            --gold-bright:#f0d79a;
            --gold-soft:rgba(214,177,106,0.18);
            --cream:#f8f4eb;
            --text:#f6f1e8;
            --muted:rgba(246,241,232,0.72);
            --soft:rgba(246,241,232,0.54);
            --line:rgba(255,255,255,0.10);
            --panel:rgba(8,15,24,0.52);
            --panel-strong:rgba(11,20,31,0.72);
            --shadow:0 24px 80px rgba(0,0,0,0.42);
            --radius-xl:34px;
            --radius-lg:26px;
            --radius-md:18px;
            --maxw:1380px;
            --header-h:88px;
            --transition:260ms ease;
        }

        *{
            box-sizing:border-box;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            margin:0;
            min-height:100vh;
            background:
                radial-gradient(circle at top left, rgba(214,177,106,0.12), transparent 22%),
                radial-gradient(circle at bottom right, rgba(255,255,255,0.05), transparent 18%),
                linear-gradient(180deg, #09131d 0%, #08111a 40%, #071019 100%);
            color:var(--text);
            font-family: "Georgia", "Times New Roman", serif;
            overflow-x:hidden;
        }

        body::before{
            content:"";
            position:fixed;
            inset:0;
            pointer-events:none;
            z-index:-3;
            background:
                linear-gradient(180deg, rgba(255,255,255,0.02), transparent 16%, transparent 84%, rgba(0,0,0,0.28)),
                radial-gradient(circle at 18% 22%, rgba(214,177,106,0.06), transparent 14%),
                radial-gradient(circle at 82% 62%, rgba(214,177,106,0.05), transparent 16%);
        }

        a{
            color:inherit;
            text-decoration:none;
        }

        img{
            max-width:100%;
            display:block;
        }

        button,
        select,
        input,
        textarea{
            font:inherit;
        }

        .page-shell{
            position:relative;
            min-height:100vh;
            isolation:isolate;
        }

        .library-scene{
            position:fixed;
            inset:0;
            z-index:-2;
            overflow:hidden;
            pointer-events:none;
            background:
                linear-gradient(180deg, rgba(4,8,13,0.36), rgba(4,8,13,0.68)),
                radial-gradient(circle at center 18%, rgba(241,215,154,0.14), transparent 24%);
        }

        .library-scene::before{
            content:"";
            position:absolute;
            inset:0;
            background:
                linear-gradient(to right,
                    rgba(0,0,0,0.34) 0 5%,
                    transparent 5% 9%,
                    rgba(0,0,0,0.25) 9% 13%,
                    transparent 13% 17%,
                    rgba(0,0,0,0.32) 17% 21%,
                    transparent 21% 25%,
                    rgba(0,0,0,0.22) 25% 29%,
                    transparent 29% 33%,
                    rgba(0,0,0,0.34) 33% 37%,
                    transparent 37% 41%,
                    rgba(0,0,0,0.24) 41% 45%,
                    transparent 45% 49%,
                    rgba(0,0,0,0.36) 49% 53%,
                    transparent 53% 57%,
                    rgba(0,0,0,0.25) 57% 61%,
                    transparent 61% 65%,
                    rgba(0,0,0,0.35) 65% 69%,
                    transparent 69% 73%,
                    rgba(0,0,0,0.24) 73% 77%,
                    transparent 77% 81%,
                    rgba(0,0,0,0.33) 81% 85%,
                    transparent 85% 89%,
                    rgba(0,0,0,0.20) 89% 93%,
                    transparent 93% 100%
                ),
                linear-gradient(180deg, rgba(120,73,28,0.22), rgba(40,24,12,0.08) 18%, rgba(40,24,12,0.14) 82%, rgba(18,11,6,0.4));
            opacity:.72;
            transform:scale(1.1);
            filter:blur(0.4px);
        }

        .library-scene::after{
            content:"";
            position:absolute;
            inset:auto 0 0;
            height:26vh;
            background:
                linear-gradient(180deg, transparent, rgba(0,0,0,0.5)),
                radial-gradient(circle at center top, rgba(214,177,106,0.10), transparent 44%);
        }

        .shelf-glow{
            position:absolute;
            inset:10% 8% auto;
            height:46vh;
            background:
                radial-gradient(circle at 20% 35%, rgba(214,177,106,0.10), transparent 12%),
                radial-gradient(circle at 34% 42%, rgba(214,177,106,0.08), transparent 10%),
                radial-gradient(circle at 50% 34%, rgba(214,177,106,0.12), transparent 12%),
                radial-gradient(circle at 63% 43%, rgba(214,177,106,0.08), transparent 10%),
                radial-gradient(circle at 80% 36%, rgba(214,177,106,0.10), transparent 12%);
            filter:blur(18px);
            opacity:.9;
            animation: glowShift 10s ease-in-out infinite alternate;
        }

        .ornament-frame{
            position:fixed;
            inset:18px;
            z-index:-1;
            pointer-events:none;
            border:1px solid rgba(214,177,106,0.14);
            border-radius:30px;
            box-shadow:
                inset 0 0 0 1px rgba(255,255,255,0.04),
                inset 0 0 46px rgba(214,177,106,0.04);
        }

        .ornament-frame::before,
        .ornament-frame::after{
            content:"❦";
            position:absolute;
            font-size:28px;
            color:rgba(214,177,106,0.38);
            text-shadow:0 0 12px rgba(214,177,106,0.18);
        }

        .ornament-frame::before{
            top:12px;
            left:18px;
        }

        .ornament-frame::after{
            right:18px;
            bottom:12px;
            transform:rotate(180deg);
        }

        .dust-layer{
            position:fixed;
            inset:0;
            z-index:-1;
            pointer-events:none;
            overflow:hidden;
        }

        .dust-layer span{
            position:absolute;
            width:3px;
            height:3px;
            border-radius:50%;
            background:rgba(255,236,196,0.6);
            box-shadow:0 0 8px rgba(255,228,170,0.45);
            animation: dustFloat linear infinite;
        }

        .dust-layer span:nth-child(1){ left:8%; top:72%; animation-duration:18s; animation-delay:-2s; }
        .dust-layer span:nth-child(2){ left:14%; top:28%; animation-duration:22s; animation-delay:-8s; }
        .dust-layer span:nth-child(3){ left:23%; top:56%; animation-duration:25s; animation-delay:-5s; }
        .dust-layer span:nth-child(4){ left:34%; top:18%; animation-duration:16s; animation-delay:-4s; }
        .dust-layer span:nth-child(5){ left:46%; top:68%; animation-duration:20s; animation-delay:-9s; }
        .dust-layer span:nth-child(6){ left:58%; top:25%; animation-duration:24s; animation-delay:-6s; }
        .dust-layer span:nth-child(7){ left:67%; top:62%; animation-duration:19s; animation-delay:-7s; }
        .dust-layer span:nth-child(8){ left:79%; top:20%; animation-duration:23s; animation-delay:-3s; }
        .dust-layer span:nth-child(9){ left:88%; top:48%; animation-duration:17s; animation-delay:-10s; }
        .dust-layer span:nth-child(10){ left:92%; top:74%; animation-duration:26s; animation-delay:-11s; }

        @keyframes glowShift{
            0%{ transform:translateY(0) scale(1); opacity:.82; }
            100%{ transform:translateY(-10px) scale(1.02); opacity:1; }
        }

        @keyframes dustFloat{
            0%{ transform:translate3d(0, 0, 0) scale(1); opacity:0; }
            10%{ opacity:.65; }
            50%{ transform:translate3d(24px, -34px, 0) scale(1.3); opacity:.8; }
            100%{ transform:translate3d(48px, -90px, 0) scale(.8); opacity:0; }
        }

        .curtain{
            position:fixed;
            inset:0;
            z-index:120;
            display:grid;
            grid-template-columns:1fr 1fr;
            pointer-events:none;
            transition:opacity .8s ease;
        }

        .curtain.is-open{
            opacity:0;
        }

        .curtain-panel{
            position:relative;
            background:
                linear-gradient(90deg, rgba(54,11,16,0.96), rgba(85,18,26,0.94) 30%, rgba(60,11,17,0.98) 100%);
            box-shadow:inset 0 0 60px rgba(0,0,0,0.45);
            overflow:hidden;
        }

        .curtain-panel::before{
            content:"";
            position:absolute;
            inset:0;
            background:
                repeating-linear-gradient(90deg,
                    rgba(255,255,255,0.03) 0 16px,
                    rgba(0,0,0,0.06) 16px 32px
                );
            opacity:.45;
        }

        .curtain-panel.left{
            border-right:1px solid rgba(255,255,255,0.06);
            transform-origin:left center;
        }

        .curtain-panel.right{
            border-left:1px solid rgba(255,255,255,0.06);
            transform-origin:right center;
        }

        .curtain.is-open .curtain-panel.left{
            animation: curtainLeft 1.65s cubic-bezier(.2,.8,.2,1) forwards;
        }

        .curtain.is-open .curtain-panel.right{
            animation: curtainRight 1.65s cubic-bezier(.2,.8,.2,1) forwards;
        }

        .curtain-center-text{
            position:absolute;
            inset:0;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            gap:10px;
            z-index:3;
            color:#f5e6c4;
            text-align:center;
            padding:20px;
        }

        .curtain-center-text .line-1{
            letter-spacing:.28em;
            text-transform:uppercase;
            font-size:.82rem;
            opacity:.86;
        }

        .curtain-center-text .line-2{
            font-size:clamp(1.7rem, 3vw, 2.8rem);
            font-weight:700;
        }

        .curtain-center-text .line-3{
            max-width:620px;
            font-size:1rem;
            color:rgba(245,230,196,0.78);
            line-height:1.8;
        }

        @keyframes curtainLeft{
            0%{ transform:translateX(0) scaleX(1); }
            100%{ transform:translateX(-100%) scaleX(.92); }
        }

        @keyframes curtainRight{
            0%{ transform:translateX(0) scaleX(1); }
            100%{ transform:translateX(100%) scaleX(.92); }
        }

        .topbar{
            position:sticky;
            top:0;
            z-index:90;
            min-height:var(--header-h);
            display:flex;
            align-items:center;
            backdrop-filter:blur(16px);
            -webkit-backdrop-filter:blur(16px);
            background:linear-gradient(180deg, rgba(8,13,21,0.82), rgba(8,13,21,0.54));
            border-bottom:1px solid rgba(255,255,255,0.06);
            box-shadow:0 10px 40px rgba(0,0,0,0.18);
        }

        .container{
            width:min(var(--maxw), calc(100% - 32px));
            margin:0 auto;
        }

        .topbar-inner{
            display:grid;
            grid-template-columns:auto 1fr auto;
            gap:18px;
            align-items:center;
            min-height:var(--header-h);
        }

        .brand{
            display:flex;
            align-items:center;
            gap:14px;
            min-width:0;
        }

        .brand-logo{
            width:54px;
            height:54px;
            border-radius:18px;
            overflow:hidden;
            border:1px solid rgba(214,177,106,0.25);
            background:rgba(255,255,255,0.03);
            box-shadow:
                0 10px 28px rgba(0,0,0,0.25),
                inset 0 0 18px rgba(214,177,106,0.06);
            display:flex;
            align-items:center;
            justify-content:center;
            padding:8px;
            flex-shrink:0;
        }

        .brand-logo img{
            width:100%;
            height:100%;
            object-fit:contain;
        }

        .brand-fallback{
            width:100%;
            height:100%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:700;
            font-size:1.2rem;
            color:var(--gold-bright);
            letter-spacing:.08em;
        }

        .brand-copy{
            min-width:0;
        }

        .brand-title{
            margin:0;
            font-size:1.08rem;
            letter-spacing:.05em;
            font-weight:700;
            color:#fff6e2;
            white-space:nowrap;
        }

        .brand-sub{
            margin:4px 0 0;
            color:var(--soft);
            font-size:.84rem;
            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
            max-width:330px;
        }

        .nav-actions{
            display:flex;
            align-items:center;
            gap:10px;
            justify-self:end;
            flex-wrap:wrap;
        }

        .btn,
        .lang-select{
            appearance:none;
            border:none;
            outline:none;
            border-radius:999px;
            padding:12px 18px;
            transition:var(--transition);
            cursor:pointer;
            font-size:.94rem;
            line-height:1;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            white-space:nowrap;
        }

        .btn:hover,
        .lang-select:hover{
            transform:translateY(-1px);
        }

        .btn-ghost{
            background:rgba(255,255,255,0.06);
            color:#fff3d6;
            border:1px solid rgba(255,255,255,0.10);
        }

        .btn-gold{
            background:linear-gradient(135deg, var(--gold-bright), var(--gold));
            color:#1b1409;
            font-weight:700;
            box-shadow:0 14px 34px rgba(214,177,106,0.22);
        }

        .lang-select{
            background:rgba(255,255,255,0.07);
            color:#fff3d6;
            border:1px solid rgba(255,255,255,0.10);
            min-width:150px;
        }

        .hero{
            position:relative;
            padding:72px 0 28px;
        }

        .hero-grid{
            display:grid;
            grid-template-columns:1.18fr .82fr;
            gap:26px;
            align-items:stretch;
        }

        .panel{
            position:relative;
            background:linear-gradient(180deg, rgba(11,18,28,0.72), rgba(8,14,22,0.56));
            border:1px solid rgba(255,255,255,0.08);
            border-radius:var(--radius-xl);
            box-shadow:var(--shadow);
            backdrop-filter:blur(12px);
            -webkit-backdrop-filter:blur(12px);
            overflow:hidden;
        }

        .panel::before{
            content:"";
            position:absolute;
            inset:-1px;
            pointer-events:none;
            border-radius:inherit;
            background:
                radial-gradient(circle at top left, rgba(214,177,106,0.14), transparent 28%),
                radial-gradient(circle at bottom right, rgba(255,255,255,0.04), transparent 24%);
        }

        .hero-main{
            padding:42px 38px 40px;
        }

        .mini-seal{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            padding:10px 16px;
            border-radius:999px;
            border:1px solid rgba(214,177,106,0.26);
            background:rgba(214,177,106,0.08);
            color:var(--gold-bright);
            letter-spacing:.16em;
            text-transform:uppercase;
            font-size:.78rem;
        }

        .hero-title{
            margin:18px 0 14px;
            font-size:clamp(2.3rem, 4.8vw, 4.6rem);
            line-height:1.02;
            color:#fff9ef;
            font-weight:700;
            text-wrap:balance;
        }

        .hero-text{
            margin:0;
            max-width:780px;
            color:var(--muted);
            line-height:1.9;
            font-size:1.02rem;
        }

        .hero-action-row{
            margin-top:28px;
            display:flex;
            flex-wrap:wrap;
            gap:12px;
        }

        .scroll-note{
            margin-top:22px;
            display:flex;
            align-items:center;
            gap:10px;
            color:var(--soft);
            font-size:.92rem;
            letter-spacing:.03em;
        }

        .scroll-note::before{
            content:"⌘";
            color:var(--gold);
            font-size:1rem;
        }

        .hero-side{
            padding:24px;
            display:grid;
            gap:14px;
            align-content:start;
        }

        .side-card{
            position:relative;
            padding:18px 18px 17px;
            border-radius:22px;
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.08);
            overflow:hidden;
        }

        .side-card::before{
            content:"";
            position:absolute;
            inset:0;
            background:linear-gradient(180deg, rgba(255,255,255,0.03), transparent);
            pointer-events:none;
        }

        .side-card-kicker{
            color:var(--gold-bright);
            letter-spacing:.10em;
            text-transform:uppercase;
            font-size:.74rem;
            margin-bottom:10px;
        }

        .side-card-title{
            margin:0 0 8px;
            font-size:1.18rem;
            color:#fff7e8;
        }

        .side-card-text{
            margin:0;
            color:var(--muted);
            line-height:1.8;
            font-size:.96rem;
        }

        .section{
            position:relative;
            padding:30px 0;
        }

        .section-head{
            margin-bottom:22px;
        }

        .section-kicker{
            color:var(--gold-bright);
            font-size:.78rem;
            text-transform:uppercase;
            letter-spacing:.18em;
            margin-bottom:10px;
        }

        .section-title{
            margin:0 0 10px;
            color:#fff8ec;
            font-size:clamp(1.8rem, 3vw, 3.1rem);
            line-height:1.12;
            font-weight:700;
        }

        .section-sub{
            margin:0;
            max-width:920px;
            color:var(--muted);
            line-height:1.9;
            font-size:1rem;
        }

        .program-grid{
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:20px;
        }

        .program-card{
            padding:24px;
            min-height:100%;
        }

        .program-top{
            display:flex;
            align-items:flex-start;
            justify-content:space-between;
            gap:12px;
            margin-bottom:12px;
        }

        .program-title{
            margin:0;
            font-size:1.2rem;
            color:#fff7e7;
        }

        .program-badge{
            flex-shrink:0;
            padding:8px 12px;
            border-radius:999px;
            border:1px solid rgba(214,177,106,0.24);
            background:rgba(214,177,106,0.08);
            color:var(--gold-bright);
            font-size:.78rem;
            letter-spacing:.08em;
            text-transform:uppercase;
        }

        .program-text{
            margin:0 0 14px;
            color:var(--muted);
            line-height:1.85;
        }

        .program-list{
            list-style:none;
            padding:0;
            margin:0;
            display:grid;
            gap:10px;
        }

        .program-list li{
            position:relative;
            padding-inline-start:22px;
            color:rgba(246,241,232,0.84);
            line-height:1.7;
        }

        .program-list li::before{
            content:"✦";
            position:absolute;
            inset-inline-start:0;
            top:0;
            color:var(--gold);
        }

        .quote-panel{
            padding:34px 30px;
            text-align:center;
        }

        .quote-text{
            margin:0;
            color:#fff9ef;
            line-height:1.7;
            font-size:clamp(1.35rem, 2.5vw, 2.2rem);
            max-width:980px;
            margin-inline:auto;
        }

        .quote-sign{
            margin-top:16px;
            color:var(--gold-bright);
            letter-spacing:.16em;
            text-transform:uppercase;
            font-size:.84rem;
        }

        .ai-grid{
            display:grid;
            grid-template-columns:.95fr 1.05fr;
            gap:20px;
        }

        .ai-panel,
        .wall-panel{
            padding:26px;
        }

        .ai-orb{
            width:70px;
            height:70px;
            border-radius:50%;
            border:1px solid rgba(214,177,106,0.30);
            background:
                radial-gradient(circle at 35% 35%, rgba(255,255,255,0.32), transparent 28%),
                radial-gradient(circle at 60% 65%, rgba(214,177,106,0.24), rgba(21,28,41,0.7));
            box-shadow:
                0 0 24px rgba(214,177,106,0.18),
                inset 0 0 28px rgba(255,255,255,0.06);
            margin-bottom:18px;
            position:relative;
        }

        .ai-orb::after{
            content:"";
            position:absolute;
            inset:8px;
            border-radius:50%;
            border:1px solid rgba(255,255,255,0.08);
        }

        .ai-title{
            margin:0 0 12px;
            font-size:1.3rem;
            color:#fff8ec;
        }

        .ai-text{
            margin:0 0 18px;
            color:var(--muted);
            line-height:1.85;
        }

        .ai-box{
            border-radius:22px;
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.08);
            padding:18px;
        }

        .ai-messages{
            display:grid;
            gap:12px;
            margin-bottom:14px;
        }

        .ai-msg{
            border-radius:18px;
            padding:14px 16px;
            background:rgba(11,20,31,0.76);
            border:1px solid rgba(255,255,255,0.06);
            color:rgba(246,241,232,0.88);
            line-height:1.7;
            font-size:.95rem;
        }

        .ai-msg strong{
            color:var(--gold-bright);
        }

        .ai-form{
            display:grid;
            grid-template-columns:1fr auto;
            gap:10px;
        }

        .ai-input{
            width:100%;
            border:none;
            outline:none;
            border-radius:18px;
            padding:14px 16px;
            color:#fff8eb;
            background:rgba(6,12,19,0.68);
            border:1px solid rgba(255,255,255,0.08);
        }

        .ai-input::placeholder{
            color:rgba(246,241,232,0.42);
        }

        .talent-ribbon{
            margin-top:18px;
            border-radius:22px;
            padding:18px 18px;
            border:1px solid rgba(214,177,106,0.18);
            background:
                linear-gradient(135deg, rgba(214,177,106,0.09), rgba(255,255,255,0.03));
            color:#fff7e9;
        }

        .talent-ribbon-title{
            margin:0 0 8px;
            font-size:1.06rem;
            color:var(--gold-bright);
        }

        .talent-ribbon-text{
            margin:0 0 14px;
            color:var(--muted);
            line-height:1.8;
        }

        .wall-grid{
            display:grid;
            grid-template-columns:.92fr 1.08fr;
            gap:20px;
        }

        .field{
            display:grid;
            gap:8px;
            margin-bottom:16px;
        }

        .field label{
            color:rgba(246,241,232,0.82);
            font-size:.95rem;
        }

        .field input,
        .field textarea{
            width:100%;
            border:none;
            outline:none;
            border-radius:18px;
            padding:14px 16px;
            color:#fff9ee;
            background:rgba(5,12,18,0.62);
            border:1px solid rgba(255,255,255,0.08);
            transition:var(--transition);
        }

        .field input:focus,
        .field textarea:focus,
        .ai-input:focus{
            border-color:rgba(214,177,106,0.38);
            box-shadow:0 0 0 3px rgba(214,177,106,0.10);
        }

        .field input::placeholder,
        .field textarea::placeholder{
            color:rgba(246,241,232,0.40);
        }

        .field textarea{
            min-height:150px;
            resize:none;
        }

        .wall-meta{
            display:flex;
            justify-content:space-between;
            gap:12px;
            align-items:center;
            color:var(--soft);
            font-size:.9rem;
            margin-bottom:16px;
        }

        .wall-actions{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
        }

        .wall-list-head{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:12px;
            margin-bottom:14px;
        }

        .wall-list{
            display:grid;
            gap:14px;
            max-height:510px;
            overflow:auto;
            padding-right:4px;
        }

        .wall-list::-webkit-scrollbar{
            width:8px;
        }

        .wall-list::-webkit-scrollbar-thumb{
            background:rgba(255,255,255,0.16);
            border-radius:999px;
        }

        .wall-item{
            border-radius:22px;
            padding:16px 18px;
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.08);
            transition:var(--transition);
        }

        .wall-item:hover{
            transform:translateY(-2px);
            background:rgba(255,255,255,0.055);
            border-color:rgba(214,177,106,0.16);
        }

        .wall-item-message{
            margin:0 0 12px;
            color:#fff8ec;
            line-height:1.8;
            white-space:pre-wrap;
            word-break:break-word;
        }

        .wall-item-footer{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:12px;
            font-size:.84rem;
            color:var(--soft);
        }

        .wall-item-name{
            color:var(--gold-bright);
            font-weight:700;
        }

        .wall-empty{
            border-radius:20px;
            padding:22px;
            border:1px dashed rgba(255,255,255,0.14);
            background:rgba(255,255,255,0.03);
            color:var(--soft);
            text-align:center;
        }

        .cta-stage{
            padding:36px 0 74px;
        }

        .cta-panel{
            padding:34px 30px;
            text-align:center;
        }

        .cta-actions{
            margin-top:22px;
            display:flex;
            gap:12px;
            justify-content:center;
            flex-wrap:wrap;
        }

        .footer{
            padding:0 0 34px;
        }

        .footer-line{
            border-top:1px solid rgba(255,255,255,0.08);
            padding-top:18px;
            color:var(--soft);
            text-align:center;
            font-size:.92rem;
        }

        .hidden{
            display:none !important;
        }

        [dir="rtl"] body{
            font-family:"Tahoma","Arial",serif;
        }

        [dir="rtl"] .brand,
        [dir="rtl"] .nav-actions,
        [dir="rtl"] .hero-action-row,
        [dir="rtl"] .wall-actions,
        [dir="rtl"] .cta-actions{
            flex-direction:row-reverse;
        }

        [dir="rtl"] .topbar-inner{
            grid-template-columns:auto 1fr auto;
        }

        [dir="rtl"] .hero-main,
        [dir="rtl"] .hero-side,
        [dir="rtl"] .program-card,
        [dir="rtl"] .ai-panel,
        [dir="rtl"] .wall-panel,
        [dir="rtl"] .section-head{
            text-align:right;
        }

        [dir="rtl"] .program-list li{
            padding-inline-start:0;
            padding-inline-end:22px;
        }

        [dir="rtl"] .program-list li::before{
            inset-inline-start:auto;
            inset-inline-end:0;
        }

        [dir="rtl"] .ai-form{
            grid-template-columns:auto 1fr;
        }

        [dir="rtl"] .wall-item-footer{
            flex-direction:row-reverse;
        }

        [dir="rtl"] .wall-list,
        [dir="rtl"] .ai-messages{
            text-align:right;
        }

        @media (max-width:1180px){
            .hero-grid,
            .ai-grid,
            .wall-grid{
                grid-template-columns:1fr;
            }

            .program-grid{
                grid-template-columns:repeat(2, 1fr);
            }
        }

        @media (max-width:860px){
            .topbar{
                position:relative;
            }

            .topbar-inner{
                grid-template-columns:1fr;
                padding:16px 0;
            }

            .nav-actions{
                justify-self:start;
            }

            .hero{
                padding-top:34px;
            }

            .hero-main,
            .hero-side,
            .program-card,
            .ai-panel,
            .wall-panel,
            .quote-panel,
            .cta-panel{
                padding:24px 22px;
            }

            .program-grid{
                grid-template-columns:1fr;
            }

            .wall-list{
                max-height:none;
            }
        }

        @media (max-width:560px){
            .container{
                width:min(var(--maxw), calc(100% - 18px));
            }

            .nav-actions{
                width:100%;
            }

            .btn,
            .lang-select{
                width:100%;
            }

            .hero-action-row,
            .wall-actions,
            .cta-actions{
                flex-direction:column;
            }

            .ai-form{
                grid-template-columns:1fr;
            }

            .curtain-center-text .line-3{
                font-size:.92rem;
            }

            .brand-sub{
                max-width:100%;
            }
        }
    </style>
</head>
<body>
<div class="page-shell">
    <div class="library-scene">
        <div class="shelf-glow"></div>
    </div>

    <div class="ornament-frame"></div>

    <div class="dust-layer" aria-hidden="true">
        <span></span><span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span><span></span>
    </div>

    <div class="curtain" id="curtain">
        <div class="curtain-panel left"></div>
        <div class="curtain-panel right"></div>
        <div class="curtain-center-text">
            <div class="line-1" id="curtainLine1">FORYOUARK ACADEMY</div>
            <div class="line-2" id="curtainLine2">Bilginin sahnesi şimdi açılıyor</div>
            <div class="line-3" id="curtainLine3">Düşünce, estetik, yönlendirme ve yetenek akışı aynı mekânda buluşuyor.</div>
        </div>
    </div>

    <header class="topbar">
        <div class="container">
            <div class="topbar-inner">
                <a class="brand" href="index.php" aria-label="FORYOUARK Ana Sayfa">
                    <div class="brand-logo">
                        <img src="images/foryou-logo.png" alt="FORYOUARK Logo" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                        <div class="brand-fallback hidden">FY</div>
                    </div>
                    <div class="brand-copy">
                        <h1 class="brand-title">FORYOUARK Akademi</h1>
                        <p class="brand-sub" id="brandSub">Bilgi, estetik ve yön duygusu aynı sahnede buluşsun.</p>
                    </div>
                </a>

                <div></div>

                <div class="nav-actions">
                    <a class="btn btn-ghost" href="index.php" id="btnHome">Ana Sayfaya Dön</a>
                    <a class="btn btn-ghost" href="#ai-guide" id="btnAiJump">AI Rehberi</a>
                    <a class="btn btn-gold" href="yetenek-ussu.php" id="btnTalent">Yetenek Üssüne Gir</a>
                    <select id="langSelect" class="lang-select" aria-label="Dil Seçimi">
                        <option value="tr">Türkçe</option>
                        <option value="en">English</option>
                        <option value="ar">العربية</option>
                        <option value="de">Deutsch</option>
                        <option value="fr">Français</option>
                        <option value="ru">Русский</option>
                        <option value="zh">中文</option>
                        <option value="es">Español</option>
                    </select>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-grid">
                    <div class="panel hero-main">
                        <div class="mini-seal" id="heroSeal">Akademi Sahnesi</div>
                        <h2 class="hero-title" id="heroTitle">Kütüphane derinliğiyle kurulmuş, dikkat çekici bir öğrenme mekânı</h2>
                        <p class="hero-text" id="heroText">
                            Bu sayfa yalnızca bilgi sunmaz. Ziyaretçiyi sakin ama güçlü bir atmosfer içinde karşılar, doğru alana yönlendirir, AI desteğiyle eşlik eder ve özellikle kursiyer, stajyer, gelişim arayan adaylar için Yetenek Üssü kapısını görünür tutar.
                        </p>

                        <div class="hero-action-row">
                            <a href="#programs" class="btn btn-gold" id="heroBtnPrograms">Program Alanları</a>
                            <a href="#quote-wall" class="btn btn-ghost" id="heroBtnWall">İz Bırakan Cümleler</a>
                            <a href="yetenek-ussu.php" class="btn btn-ghost" id="heroBtnTalent">Kursiyer / Stajyer Geçişi</a>
                        </div>

                        <div class="scroll-note" id="heroNote">Sayfa, içerik kadar atmosfer de taşısın diye sahne mantığıyla kurgulandı.</div>
                    </div>

                    <aside class="panel hero-side">
                        <div class="side-card">
                            <div class="side-card-kicker" id="sideKicker1">Ruh</div>
                            <h3 class="side-card-title" id="sideTitle1">Vizyon sayfasıyla akraba bir estetik</h3>
                            <p class="side-card-text" id="sideText1">Sert, resmi ve soğuk değil. Daha sıcak, katmanlı, zarif ve hatırlanabilir.</p>
                        </div>

                        <div class="side-card">
                            <div class="side-card-kicker" id="sideKicker2">Yön</div>
                            <h3 class="side-card-title" id="sideTitle2">Dağılmadan yönlendiren akış</h3>
                            <p class="side-card-text" id="sideText2">Ziyaretçi kaybolmaz. Ana sayfa, AI rehberi ve Yetenek Üssü arasında net geçişler kurulur.</p>
                        </div>

                        <div class="side-card">
                            <div class="side-card-kicker" id="sideKicker3">Dil</div>
                            <h3 class="side-card-title" id="sideTitle3">8 dil ve tam kapsülleme</h3>
                            <p class="side-card-text" id="sideText3">Sabit metinler kapsül içinde yönetilir. Arapça için yön ve yerleşim de birlikte değişir.</p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="section" id="programs">
            <div class="container">
                <div class="section-head">
                    <div class="section-kicker" id="programKicker">Öğrenme Alanları</div>
                    <h2 class="section-title" id="programTitle">Akademi içinde yaşayan başlıklar</h2>
                    <p class="section-sub" id="programSub">Bu alanlar statik kutular gibi değil, ileride belge, modül, ders, AI rehberi ve özel yönlendirme akışlarıyla birleşebilecek şekilde düşünülmüştür.</p>
                </div>

                <div class="program-grid">
                    <article class="panel program-card">
                        <div class="program-top">
                            <h3 class="program-title" id="card1Title">Düşünce ve Perspektif</h3>
                            <span class="program-badge" id="card1Badge">Temel</span>
                        </div>
                        <p class="program-text" id="card1Text">Yalnızca bilgi değil, bakış açısı kazandıran seçilmiş içerikler.</p>
                        <ul class="program-list" id="card1List"></ul>
                    </article>

                    <article class="panel program-card">
                        <div class="program-top">
                            <h3 class="program-title" id="card2Title">Mesleki Gelişim</h3>
                            <span class="program-badge" id="card2Badge">Uygulama</span>
                        </div>
                        <p class="program-text" id="card2Text">Gerçek hayata dokunan, yön veren ve işlev taşıyan içerik kümeleri.</p>
                        <ul class="program-list" id="card2List"></ul>
                    </article>

                    <article class="panel program-card">
                        <div class="program-top">
                            <h3 class="program-title" id="card3Title">Dil ve Sunum</h3>
                            <span class="program-badge" id="card3Badge">Çok Dilli</span>
                        </div>
                        <p class="program-text" id="card3Text">İfade, sunum ve kültürel uyum tarafını güçlendiren anlatım alanı.</p>
                        <ul class="program-list" id="card3List"></ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="panel quote-panel">
                    <p class="quote-text" id="quoteText">“Bazı sayfalar bilgi vermez sadece. İnsanın iç düzenini de toplar, yönünü de hatırlatır.”</p>
                    <div class="quote-sign" id="quoteSign">FORYOUARK</div>
                </div>
            </div>
        </section>

        <section class="section" id="ai-guide">
            <div class="container">
                <div class="section-head">
                    <div class="section-kicker" id="aiKicker">AI Rehber</div>
                    <h2 class="section-title" id="aiSectionTitle">Yol gösteren ama gürültü yapmayan bir yardımcı alan</h2>
                    <p class="section-sub" id="aiSectionSub">AI burada oyuncak gibi durmaz. Doğru içeriğe, doğru kapıya ve doğru programa yönlendiren zarif bir eşlikçi gibi davranır.</p>
                </div>

                <div class="ai-grid">
                    <div class="panel ai-panel">
                        <div class="ai-orb"></div>
                        <h3 class="ai-title" id="aiTitle">Akademi Asistanı</h3>
                        <p class="ai-text" id="aiText">Aşağıdaki alandan kısa bir amaç yaz. Bu örnek sürüm, sana yönlendirme tarzını gösterir.</p>

                        <div class="ai-box">
                            <div class="ai-messages" id="aiMessages">
                                <div class="ai-msg"><strong>AI:</strong> <span id="aiWelcome">Hedefini bir cümleyle yaz. Sana en uygun kapıyı önereyim.</span></div>
                            </div>

                            <form class="ai-form" id="aiForm">
                                <input type="text" id="aiInput" class="ai-input" maxlength="180" placeholder="Örn: staj, gelişim, dil, eğitim, kariyer...">
                                <button type="submit" class="btn btn-gold" id="aiSendBtn">Gönder</button>
                            </form>
                        </div>

                        <div class="talent-ribbon">
                            <h4 class="talent-ribbon-title" id="talentTitle">Yetenek Üssü bağlantısı</h4>
                            <p class="talent-ribbon-text" id="talentText">Kursiyer, stajyer, gelişim yolculuğu içindeki adaylar için en görünür kapı burada da korunur.</p>
                            <a href="yetenek-ussu.php" class="btn btn-ghost" id="talentBtnInline">Yetenek Üssüne Git</a>
                        </div>
                    </div>

                    <div class="panel wall-panel" id="quote-wall">
                        <div class="wall-list-head">
                            <h3 class="ai-title" id="wallTitle">İz Bırakan Cümleler</h3>
                            <span class="mini-seal" id="wallSeal" style="padding:8px 12px;font-size:.72rem;">Topluluk</span>
                        </div>
                        <p class="ai-text" id="wallText">Sessiz ama yaşayan bir duvar. Beğendiğin cümleyi, kısa notunu veya düşünceni bırakabilirsin.</p>

                        <form id="wallForm">
                            <div class="field">
                                <label for="wallName" id="wallNameLabel">İsim</label>
                                <input type="text" id="wallName" maxlength="40" placeholder="İsteğe bağlı">
                            </div>

                            <div class="field">
                                <label for="wallMessage" id="wallMessageLabel">Mesaj</label>
                                <textarea id="wallMessage" maxlength="240" placeholder="Bir cümle, kısa düşünce ya da not bırak..."></textarea>
                            </div>

                            <div class="wall-meta">
                                <span id="wallHint">Anonim paylaşım mümkündür.</span>
                                <span id="wallCounter">0 / 240</span>
                            </div>

                            <div class="wall-actions">
                                <button type="submit" class="btn btn-gold" id="wallSubmitBtn">Duvara Ekle</button>
                                <button type="button" class="btn btn-ghost" id="wallClearBtn">Temizle</button>
                            </div>
                        </form>

                        <div class="wall-list" id="wallList" style="margin-top:18px;"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-stage">
            <div class="container">
                <div class="panel cta-panel">
                    <div class="section-kicker" id="ctaKicker" style="margin-bottom:14px;">Geçiş Noktaları</div>
                    <h2 class="section-title" id="ctaTitle">Bu sahneden sonra doğru kapıya geç</h2>
                    <p class="section-sub" id="ctaSub" style="margin-inline:auto;">Ana sayfaya dönebilir, AI rehberle devam edebilir ya da doğrudan Yetenek Üssü alanına geçebilirsin. Akademi sayfası yalnızca bilgi değil, yön üretmek için burada.</p>

                    <div class="cta-actions">
                        <a href="index.php" class="btn btn-ghost" id="ctaHome">Ana Sayfa</a>
                        <a href="#ai-guide" class="btn btn-ghost" id="ctaAi">AI Rehber</a>
                        <a href="yetenek-ussu.php" class="btn btn-gold" id="ctaTalent">Yetenek Üssü</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-line" id="footerText">FORYOUARK Akademi • çok dilli • yönlendirici • sanatsal • yaşayan alan</div>
        </div>
    </footer>
</div>

<script>
(function(){
    const I18N = {
        tr: {
            dir: "ltr",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "Bilginin sahnesi şimdi açılıyor",
            curtainLine3: "Düşünce, estetik, yönlendirme ve yetenek akışı aynı mekânda buluşuyor.",
            brandSub: "Bilgi, estetik ve yön duygusu aynı sahnede buluşsun.",
            btnHome: "Ana Sayfaya Dön",
            btnAiJump: "AI Rehberi",
            btnTalent: "Yetenek Üssüne Gir",
            heroSeal: "Akademi Sahnesi",
            heroTitle: "Kütüphane derinliğiyle kurulmuş, dikkat çekici bir öğrenme mekânı",
            heroText: "Bu sayfa yalnızca bilgi sunmaz. Ziyaretçiyi sakin ama güçlü bir atmosfer içinde karşılar, doğru alana yönlendirir, AI desteğiyle eşlik eder ve özellikle kursiyer, stajyer, gelişim arayan adaylar için Yetenek Üssü kapısını görünür tutar.",
            heroBtnPrograms: "Program Alanları",
            heroBtnWall: "İz Bırakan Cümleler",
            heroBtnTalent: "Kursiyer / Stajyer Geçişi",
            heroNote: "Sayfa, içerik kadar atmosfer de taşısın diye sahne mantığıyla kurgulandı.",
            sideKicker1: "Ruh",
            sideTitle1: "Vizyon sayfasıyla akraba bir estetik",
            sideText1: "Sert, resmi ve soğuk değil. Daha sıcak, katmanlı, zarif ve hatırlanabilir.",
            sideKicker2: "Yön",
            sideTitle2: "Dağılmadan yönlendiren akış",
            sideText2: "Ziyaretçi kaybolmaz. Ana sayfa, AI rehberi ve Yetenek Üssü arasında net geçişler kurulur.",
            sideKicker3: "Dil",
            sideTitle3: "8 dil ve tam kapsülleme",
            sideText3: "Sabit metinler kapsül içinde yönetilir. Arapça için yön ve yerleşim de birlikte değişir.",
            programKicker: "Öğrenme Alanları",
            programTitle: "Akademi içinde yaşayan başlıklar",
            programSub: "Bu alanlar statik kutular gibi değil, ileride belge, modül, ders, AI rehberi ve özel yönlendirme akışlarıyla birleşebilecek şekilde düşünülmüştür.",
            card1Title: "Düşünce ve Perspektif",
            card1Badge: "Temel",
            card1Text: "Yalnızca bilgi değil, bakış açısı kazandıran seçilmiş içerikler.",
            card1List: [
                "Metin, alıntı ve yorum alanları",
                "Derin ama sade düşünce akışları",
                "Seçilmiş içerik odakları"
            ],
            card2Title: "Mesleki Gelişim",
            card2Badge: "Uygulama",
            card2Text: "Gerçek hayata dokunan, yön veren ve işlev taşıyan içerik kümeleri.",
            card2List: [
                "Senaryo temelli anlatımlar",
                "Uygulama ve beceri yönlendirmeleri",
                "Rol bazlı gelişim kurguları"
            ],
            card3Title: "Dil ve Sunum",
            card3Badge: "Çok Dilli",
            card3Text: "İfade, sunum ve kültürel uyum tarafını güçlendiren anlatım alanı.",
            card3List: [
                "8 dil görünürlüğü",
                "RTL ve LTR düzen geçişi",
                "Kültürel ton hassasiyeti"
            ],
            quoteText: "“Bazı sayfalar bilgi vermez sadece. İnsanın iç düzenini de toplar, yönünü de hatırlatır.”",
            quoteSign: "FORYOUARK",
            aiKicker: "AI Rehber",
            aiSectionTitle: "Yol gösteren ama gürültü yapmayan bir yardımcı alan",
            aiSectionSub: "AI burada oyuncak gibi durmaz. Doğru içeriğe, doğru kapıya ve doğru programa yönlendiren zarif bir eşlikçi gibi davranır.",
            aiTitle: "Akademi Asistanı",
            aiText: "Aşağıdaki alandan kısa bir amaç yaz. Bu örnek sürüm, sana yönlendirme tarzını gösterir.",
            aiWelcome: "Hedefini bir cümleyle yaz. Sana en uygun kapıyı önereyim.",
            aiPlaceholder: "Örn: staj, gelişim, dil, eğitim, kariyer...",
            aiSendBtn: "Gönder",
            talentTitle: "Yetenek Üssü bağlantısı",
            talentText: "Kursiyer, stajyer, gelişim yolculuğu içindeki adaylar için en görünür kapı burada da korunur.",
            talentBtnInline: "Yetenek Üssüne Git",
            wallTitle: "İz Bırakan Cümleler",
            wallSeal: "Topluluk",
            wallText: "Sessiz ama yaşayan bir duvar. Beğendiğin cümleyi, kısa notunu veya düşünceni bırakabilirsin.",
            wallNameLabel: "İsim",
            wallNamePlaceholder: "İsteğe bağlı",
            wallMessageLabel: "Mesaj",
            wallMessagePlaceholder: "Bir cümle, kısa düşünce ya da not bırak...",
            wallHint: "Anonim paylaşım mümkündür.",
            wallSubmitBtn: "Duvara Ekle",
            wallClearBtn: "Temizle",
            ctaKicker: "Geçiş Noktaları",
            ctaTitle: "Bu sahneden sonra doğru kapıya geç",
            ctaSub: "Ana sayfaya dönebilir, AI rehberle devam edebilir ya da doğrudan Yetenek Üssü alanına geçebilirsin. Akademi sayfası yalnızca bilgi değil, yön üretmek için burada.",
            ctaHome: "Ana Sayfa",
            ctaAi: "AI Rehber",
            ctaTalent: "Yetenek Üssü",
            footerText: "FORYOUARK Akademi • çok dilli • yönlendirici • sanatsal • yaşayan alan",
            wallEmpty: "Henüz bir not bırakılmadı. İlk izi sen bırak.",
            anonymous: "Anonim",
            default1: "Bazı cümleler yalnızca okunmaz, içeri yerleşir.",
            default2: "İyi kurulmuş bir sahne bazen bir kitap kadar sessiz, bir öğretmen kadar güçlü olabilir.",
            aiReplyTalent: "Senin odağında gelişim ve yetenek akışı var gibi görünüyor. Yetenek Üssü kapısı senin için en doğru geçiş olabilir.",
            aiReplyLearning: "Önce program alanlarına bakman iyi olur. Orada düşünce, gelişim ve dil başlıkları arasında yolunu daha net bulabilirsin.",
            aiReplyLanguage: "Dil ve sunum alanı senin için daha uygun olabilir. Çok dilli yapı ve anlatım katmanı sana daha fazla karşılık verir.",
            aiReplyGeneral: "Başlangıç için Akademi programlarını incele, sonra gerekirse Yetenek Üssü kapısına geç. İki alan birlikte tasarlandı."
        },
        en: {
            dir: "ltr",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "The stage of knowledge is opening",
            curtainLine3: "Thought, aesthetics, guidance, and talent flow meet in one place.",
            brandSub: "Let knowledge, aesthetics, and direction meet on the same stage.",
            btnHome: "Back to Home",
            btnAiJump: "AI Guide",
            btnTalent: "Enter Talent Hub",
            heroSeal: "Academy Stage",
            heroTitle: "A striking learning space built with the depth of a library",
            heroText: "This page does not merely present information. It welcomes the visitor with a calm yet powerful atmosphere, guides them to the right area, accompanies them with AI support, and keeps the Talent Hub visible especially for trainees, interns, and growth-oriented candidates.",
            heroBtnPrograms: "Program Areas",
            heroBtnWall: "Words That Leave a Mark",
            heroBtnTalent: "Intern / Trainee Path",
            heroNote: "The page was designed like a stage so that atmosphere carries as much weight as content.",
            sideKicker1: "Spirit",
            sideTitle1: "An aesthetic related to the vision page",
            sideText1: "Not harsh, official, or cold. Warmer, layered, elegant, and memorable.",
            sideKicker2: "Direction",
            sideTitle2: "A guided flow without scattering",
            sideText2: "The visitor does not get lost. Clear passages connect home, the AI guide, and the Talent Hub.",
            sideKicker3: "Language",
            sideTitle3: "8 languages and full encapsulation",
            sideText3: "All fixed texts are managed inside the capsule. For Arabic, direction and layout change together.",
            programKicker: "Learning Areas",
            programTitle: "Living headings inside the academy",
            programSub: "These are not static boxes. They are designed to later merge with documents, modules, lessons, AI guidance, and special routing flows.",
            card1Title: "Thought and Perspective",
            card1Badge: "Core",
            card1Text: "Curated content that builds perspective, not just information.",
            card1List: [
                "Text, quotation, and commentary spaces",
                "Deep yet clear thought flows",
                "Curated content zones"
            ],
            card2Title: "Professional Growth",
            card2Badge: "Practice",
            card2Text: "Content clusters that touch real life, guide, and function.",
            card2List: [
                "Scenario-based narratives",
                "Skill and practice guidance",
                "Role-based growth structures"
            ],
            card3Title: "Language and Presentation",
            card3Badge: "Multilingual",
            card3Text: "A narrative area that strengthens expression, presentation, and cultural harmony.",
            card3List: [
                "8-language visibility",
                "RTL and LTR layout switching",
                "Cultural tone sensitivity"
            ],
            quoteText: "“Some pages do not merely inform. They gather a person's inner order and remind them of direction.”",
            quoteSign: "FORYOUARK",
            aiKicker: "AI Guide",
            aiSectionTitle: "A helpful space that guides without making noise",
            aiSectionSub: "AI does not sit here like a toy. It behaves like an elegant companion that guides the visitor toward the right content, door, and program.",
            aiTitle: "Academy Assistant",
            aiText: "Write a short goal below. This sample version shows the style of guidance.",
            aiWelcome: "Write your goal in one sentence. I will suggest the most fitting door.",
            aiPlaceholder: "Ex: internship, growth, language, education, career...",
            aiSendBtn: "Send",
            talentTitle: "Talent Hub connection",
            talentText: "For trainees, interns, and candidates on a growth path, the most visible gate is preserved here too.",
            talentBtnInline: "Go to Talent Hub",
            wallTitle: "Words That Leave a Mark",
            wallSeal: "Community",
            wallText: "A quiet but living wall. You can leave a favorite sentence, a short note, or a thought.",
            wallNameLabel: "Name",
            wallNamePlaceholder: "Optional",
            wallMessageLabel: "Message",
            wallMessagePlaceholder: "Leave a sentence, a short thought, or a note...",
            wallHint: "Anonymous posting is possible.",
            wallSubmitBtn: "Add to Wall",
            wallClearBtn: "Clear",
            ctaKicker: "Passage Points",
            ctaTitle: "Move to the right door after this stage",
            ctaSub: "You can return to the home page, continue with the AI guide, or move directly to the Talent Hub. This academy page is here not only to inform, but to produce direction.",
            ctaHome: "Home",
            ctaAi: "AI Guide",
            ctaTalent: "Talent Hub",
            footerText: "FORYOUARK Academy • multilingual • guiding • artistic • living space",
            wallEmpty: "No note has been left yet. Be the first to leave a trace.",
            anonymous: "Anonymous",
            default1: "Some sentences are not merely read. They settle inside.",
            default2: "A well-built stage can be as quiet as a book and as strong as a teacher.",
            aiReplyTalent: "Your focus seems close to growth and talent flow. The Talent Hub may be the most suitable next door for you.",
            aiReplyLearning: "It would be good to look at the program areas first. There you can better locate yourself among thought, growth, and language.",
            aiReplyLanguage: "The language and presentation area may fit you better. The multilingual and expression layer may answer your need more directly.",
            aiReplyGeneral: "Start with the academy programs, then move to the Talent Hub if needed. The two areas were designed together."
        },
        ar: {
            dir: "rtl",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "يفتتح الآن مسرح المعرفة",
            curtainLine3: "يلتقي الفكر والجمال والتوجيه وتدفّق المواهب في مكان واحد.",
            brandSub: "ليلتقي العلم والجمال والإحساس بالاتجاه على المسرح نفسه.",
            btnHome: "العودة إلى الرئيسية",
            btnAiJump: "الدليل الذكي",
            btnTalent: "الدخول إلى مركز المواهب",
            heroSeal: "مسرح الأكاديمية",
            heroTitle: "مساحة تعليمية لافتة مبنية بعمق المكتبة",
            heroText: "هذه الصفحة لا تعرض المعلومات فقط. بل تستقبل الزائر بجو هادئ وقوي، وتوجهه إلى المساحة الصحيحة، وترافقه بدعم ذكي، وتحافظ على وضوح بوابة مركز المواهب خصوصًا للمتدربين والباحثين عن التطور.",
            heroBtnPrograms: "مساحات البرامج",
            heroBtnWall: "عبارات تترك أثرًا",
            heroBtnTalent: "مسار المتدرب",
            heroNote: "تم بناء الصفحة بمنطق مسرحي كي يحمل الجو قيمة توازي قيمة المحتوى.",
            sideKicker1: "الروح",
            sideTitle1: "جماليات قريبة من صفحة الرؤية",
            sideText1: "ليست قاسية أو رسمية أو باردة. بل أكثر دفئًا وطبقات وأناقة وقابلية للتذكر.",
            sideKicker2: "الاتجاه",
            sideTitle2: "تدفّق موجّه بلا تشتت",
            sideText2: "الزائر لا يضيع. توجد انتقالات واضحة بين الرئيسية والدليل الذكي ومركز المواهب.",
            sideKicker3: "اللغة",
            sideTitle3: "8 لغات وكبسلة كاملة",
            sideText3: "كل النصوص الثابتة تُدار داخل الكبسولة. وفي العربية يتغير الاتجاه والتموضع معًا.",
            programKicker: "مساحات التعلّم",
            programTitle: "عناوين حيّة داخل الأكاديمية",
            programSub: "هذه ليست صناديق جامدة، بل مساحات مصممة لتتصل لاحقًا بالوثائق والوحدات والدروس والتوجيه الذكي ومسارات الانتقال الخاصة.",
            card1Title: "الفكر والرؤية",
            card1Badge: "أساسي",
            card1Text: "محتوى منتقى يمنح منظورًا لا معلومات فقط.",
            card1List: [
                "مساحات للنصوص والاقتباسات والتعليقات",
                "تدفّقات فكرية عميقة وواضحة",
                "مناطق محتوى منتقاة"
            ],
            card2Title: "النمو المهني",
            card2Badge: "تطبيقي",
            card2Text: "عناقيد محتوى تمس الحياة الواقعية وتوجّه وتعمل.",
            card2List: [
                "سرديات قائمة على السيناريو",
                "توجيهات للمهارة والتطبيق",
                "هياكل نمو حسب الدور"
            ],
            card3Title: "اللغة والعرض",
            card3Badge: "متعدد اللغات",
            card3Text: "مساحة سرد تقوّي التعبير والعرض والانسجام الثقافي.",
            card3List: [
                "ظهور بثماني لغات",
                "التحويل بين RTL وLTR",
                "حساسية للنبرة الثقافية"
            ],
            quoteText: "“بعض الصفحات لا تكتفي بتقديم المعرفة، بل تجمع ترتيب الداخل وتذكّر بالاتجاه أيضًا.”",
            quoteSign: "FORYOUARK",
            aiKicker: "الدليل الذكي",
            aiSectionTitle: "مساحة مساعدة ترشد بلا ضجيج",
            aiSectionSub: "الذكاء هنا لا يقف كلعبة. بل يتصرف كرفيق أنيق يوجّه الزائر إلى المحتوى والباب والبرنامج الصحيح.",
            aiTitle: "مساعد الأكاديمية",
            aiText: "اكتب هدفًا قصيرًا في الأسفل. هذه النسخة التجريبية توضح أسلوب التوجيه.",
            aiWelcome: "اكتب هدفك في جملة واحدة، وسأقترح لك الباب الأنسب.",
            aiPlaceholder: "مثال: تدريب، تطور، لغة، تعليم، مهنة...",
            aiSendBtn: "إرسال",
            talentTitle: "صلة مركز المواهب",
            talentText: "للمتدربين والباحثين عن التطور، تبقى البوابة الأوضح مرئية هنا أيضًا.",
            talentBtnInline: "اذهب إلى مركز المواهب",
            wallTitle: "عبارات تترك أثرًا",
            wallSeal: "المجتمع",
            wallText: "جدار هادئ لكنه حي. يمكنك ترك جملة أعجبتك أو فكرة قصيرة أو ملاحظة.",
            wallNameLabel: "الاسم",
            wallNamePlaceholder: "اختياري",
            wallMessageLabel: "الرسالة",
            wallMessagePlaceholder: "اترك جملة أو فكرة قصيرة أو ملاحظة...",
            wallHint: "يمكن النشر بشكل مجهول.",
            wallSubmitBtn: "أضف إلى الجدار",
            wallClearBtn: "مسح",
            ctaKicker: "نقاط العبور",
            ctaTitle: "انتقل إلى الباب الصحيح بعد هذا المسرح",
            ctaSub: "يمكنك العودة إلى الرئيسية، أو متابعة الدليل الذكي، أو الانتقال مباشرة إلى مركز المواهب. هذه الصفحة ليست للمعلومة فقط، بل لإنتاج الاتجاه أيضًا.",
            ctaHome: "الرئيسية",
            ctaAi: "الدليل الذكي",
            ctaTalent: "مركز المواهب",
            footerText: "أكاديمية FORYOUARK • متعددة اللغات • موجِّهة • فنية • حيّة",
            wallEmpty: "لم تُترك أي ملاحظة بعد. كن أول من يترك أثرًا.",
            anonymous: "مجهول",
            default1: "بعض الجمل لا تُقرأ فقط، بل تستقر في الداخل.",
            default2: "المسرح الجيد قد يكون هادئًا مثل كتاب، وقويًا مثل معلّم.",
            aiReplyTalent: "يبدو أن تركيزك قريب من مسار التطور وتدفق المواهب. ربما يكون مركز المواهب هو الباب الأنسب لك الآن.",
            aiReplyLearning: "من الجيد أن تبدأ بمساحات البرامج أولًا. هناك ستتضح لك العناوين بين الفكر والنمو واللغة.",
            aiReplyLanguage: "قد تكون مساحة اللغة والعرض أنسب لك. طبقة التعدد اللغوي والتعبير ستمنحك فائدة أوضح.",
            aiReplyGeneral: "ابدأ ببرامج الأكاديمية، ثم انتقل إلى مركز المواهب عند الحاجة. كلا المساحتين صُممتا معًا."
        },
        de: {
            dir: "ltr",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "Die Bühne des Wissens öffnet sich",
            curtainLine3: "Denken, Ästhetik, Orientierung und Talentfluss treffen an einem Ort zusammen.",
            brandSub: "Wissen, Ästhetik und Richtung sollen auf derselben Bühne zusammenkommen.",
            btnHome: "Zur Startseite",
            btnAiJump: "AI-Leitfaden",
            btnTalent: "Talent Hub öffnen",
            heroSeal: "Akademie-Bühne",
            heroTitle: "Ein markanter Lernraum mit der Tiefe einer Bibliothek",
            heroText: "Diese Seite bietet nicht nur Informationen. Sie empfängt Besucher mit einer ruhigen, starken Atmosphäre, führt sie zum richtigen Bereich, begleitet sie mit AI-Unterstützung und hält den Talent Hub besonders für Praktikanten und entwicklungsorientierte Kandidaten sichtbar.",
            heroBtnPrograms: "Programmfelder",
            heroBtnWall: "Sätze mit Wirkung",
            heroBtnTalent: "Praktikantenpfad",
            heroNote: "Die Seite wurde wie eine Bühne konzipiert, damit Atmosphäre ebenso viel trägt wie Inhalt.",
            sideKicker1: "Geist",
            sideTitle1: "Eine Ästhetik im Geist der Vision-Seite",
            sideText1: "Nicht hart, offiziell oder kalt. Wärmer, vielschichtiger, eleganter und einprägsamer.",
            sideKicker2: "Richtung",
            sideTitle2: "Geführter Fluss ohne Zerstreuung",
            sideText2: "Der Besucher geht nicht verloren. Es gibt klare Übergänge zwischen Startseite, AI-Leitfaden und Talent Hub.",
            sideKicker3: "Sprache",
            sideTitle3: "8 Sprachen und vollständige Kapselung",
            sideText3: "Alle festen Texte werden innerhalb der Kapsel verwaltet. Für Arabisch ändern sich Richtung und Layout gemeinsam.",
            programKicker: "Lernfelder",
            programTitle: "Lebendige Überschriften innerhalb der Akademie",
            programSub: "Dies sind keine statischen Boxen, sondern Bereiche, die später mit Dokumenten, Modulen, Lektionen, AI-Leitfäden und besonderen Weiterleitungen verbunden werden können.",
            card1Title: "Denken und Perspektive",
            card1Badge: "Kern",
            card1Text: "Kuratiertes Material, das nicht nur Wissen, sondern Perspektive vermittelt.",
            card1List: ["Text-, Zitat- und Kommentarräume", "Tiefe, klare Denkflüsse", "Kuratierten Inhaltsschwerpunkte"],
            card2Title: "Berufliche Entwicklung",
            card2Badge: "Praxis",
            card2Text: "Inhaltscluster mit Bezug zum echten Leben, Führung und Funktion.",
            card2List: ["Szenariobasierte Erzählungen", "Skill- und Praxisführung", "Rollenbasierte Entwicklungsstrukturen"],
            card3Title: "Sprache und Präsentation",
            card3Badge: "Mehrsprachig",
            card3Text: "Ein Bereich, der Ausdruck, Präsentation und kulturelle Harmonie stärkt.",
            card3List: ["Sichtbarkeit in 8 Sprachen", "Umschalten zwischen RTL und LTR", "Feingefühl für kulturellen Ton"],
            quoteText: "„Manche Seiten informieren nicht nur. Sie sammeln auch die innere Ordnung eines Menschen und erinnern an die Richtung.“",
            quoteSign: "FORYOUARK",
            aiKicker: "AI-Leitfaden",
            aiSectionTitle: "Ein hilfreicher Bereich, der ohne Lärm führt",
            aiSectionSub: "AI steht hier nicht wie ein Spielzeug. Sie verhält sich wie ein eleganter Begleiter, der Besucher zum richtigen Inhalt, zur richtigen Tür und zum richtigen Programm führt.",
            aiTitle: "Akademie-Assistent",
            aiText: "Schreibe unten ein kurzes Ziel. Diese Beispielversion zeigt den Stil der Orientierung.",
            aiWelcome: "Schreibe dein Ziel in einem Satz. Ich schlage dir die passendste Tür vor.",
            aiPlaceholder: "Z. B.: Praktikum, Entwicklung, Sprache, Bildung, Karriere...",
            aiSendBtn: "Senden",
            talentTitle: "Talent-Hub-Verbindung",
            talentText: "Für Praktikanten und entwicklungsorientierte Kandidaten bleibt die sichtbarste Tür auch hier erhalten.",
            talentBtnInline: "Zum Talent Hub",
            wallTitle: "Sätze mit Wirkung",
            wallSeal: "Gemeinschaft",
            wallText: "Eine ruhige, aber lebendige Wand. Hinterlasse einen Satz, eine kurze Notiz oder einen Gedanken.",
            wallNameLabel: "Name",
            wallNamePlaceholder: "Optional",
            wallMessageLabel: "Nachricht",
            wallMessagePlaceholder: "Hinterlasse einen Satz, einen Gedanken oder eine Notiz...",
            wallHint: "Anonymes Teilen ist möglich.",
            wallSubmitBtn: "Zur Wand hinzufügen",
            wallClearBtn: "Leeren",
            ctaKicker: "Übergangspunkte",
            ctaTitle: "Gehe nach dieser Bühne zur richtigen Tür",
            ctaSub: "Du kannst zur Startseite zurückkehren, mit dem AI-Leitfaden weitermachen oder direkt zum Talent Hub wechseln. Diese Akademieseite ist nicht nur da, um zu informieren, sondern um Richtung zu erzeugen.",
            ctaHome: "Startseite",
            ctaAi: "AI-Leitfaden",
            ctaTalent: "Talent Hub",
            footerText: "FORYOUARK Akademie • mehrsprachig • führend • künstlerisch • lebendig",
            wallEmpty: "Noch wurde keine Notiz hinterlassen. Sei der Erste.",
            anonymous: "Anonym",
            default1: "Manche Sätze werden nicht nur gelesen. Sie setzen sich innen fest.",
            default2: "Eine gut gebaute Bühne kann so still wie ein Buch und so stark wie ein Lehrer sein.",
            aiReplyTalent: "Dein Fokus scheint Entwicklung und Talentfluss zu sein. Der Talent Hub könnte jetzt die passendste Tür für dich sein.",
            aiReplyLearning: "Es wäre gut, zuerst die Programmbereiche anzusehen. Dort wird klarer, ob du eher bei Denken, Entwicklung oder Sprache zuhause bist.",
            aiReplyLanguage: "Der Bereich Sprache und Präsentation könnte besser zu dir passen. Die mehrsprachige Ausdrucksebene gibt dir vermutlich die passendere Antwort.",
            aiReplyGeneral: "Beginne mit den Akademieprogrammen und wechsle danach bei Bedarf zum Talent Hub. Beide Bereiche wurden gemeinsam entworfen."
        },
        fr: {
            dir: "ltr",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "La scène du savoir s’ouvre",
            curtainLine3: "Pensée, esthétique, orientation et flux de talents se rencontrent en un seul lieu.",
            brandSub: "Que le savoir, l’esthétique et le sens de la direction se rencontrent sur la même scène.",
            btnHome: "Retour à l’accueil",
            btnAiJump: "Guide IA",
            btnTalent: "Entrer dans le Pôle Talent",
            heroSeal: "Scène de l’académie",
            heroTitle: "Un espace d’apprentissage marquant construit avec la profondeur d’une bibliothèque",
            heroText: "Cette page ne se contente pas d’informer. Elle accueille le visiteur avec une atmosphère calme mais puissante, l’oriente vers le bon espace, l’accompagne avec l’IA et garde visible le Pôle Talent, surtout pour les stagiaires et profils en développement.",
            heroBtnPrograms: "Espaces de programme",
            heroBtnWall: "Phrases qui laissent une trace",
            heroBtnTalent: "Parcours stagiaire",
            heroNote: "La page a été construite comme une scène afin que l’atmosphère porte autant que le contenu.",
            sideKicker1: "Esprit",
            sideTitle1: "Une esthétique proche de la page vision",
            sideText1: "Ni dure, ni officielle, ni froide. Plus chaleureuse, plus stratifiée, plus élégante et mémorable.",
            sideKicker2: "Direction",
            sideTitle2: "Un flux guidé sans dispersion",
            sideText2: "Le visiteur ne se perd pas. Des passages nets relient l’accueil, le guide IA et le Pôle Talent.",
            sideKicker3: "Langue",
            sideTitle3: "8 langues et encapsulation complète",
            sideText3: "Tous les textes fixes sont gérés dans la capsule. Pour l’arabe, la direction et la mise en page changent ensemble.",
            programKicker: "Espaces d’apprentissage",
            programTitle: "Des rubriques vivantes au sein de l’académie",
            programSub: "Ce ne sont pas des blocs statiques, mais des espaces pensés pour se relier plus tard à des documents, modules, leçons, guidages IA et flux de redirection.",
            card1Title: "Pensée et perspective",
            card1Badge: "Base",
            card1Text: "Des contenus choisis qui apportent une perspective, pas seulement une information.",
            card1List: ["Espaces de texte, citation et commentaire", "Flux de pensée profonds mais clairs", "Zones de contenu sélectionné"],
            card2Title: "Développement professionnel",
            card2Badge: "Pratique",
            card2Text: "Des ensembles de contenus utiles, concrets et orientants.",
            card2List: ["Narrations basées sur des scénarios", "Guides de pratique et de compétence", "Structures d’évolution selon le rôle"],
            card3Title: "Langue et présentation",
            card3Badge: "Multilingue",
            card3Text: "Un espace qui renforce l’expression, la présentation et l’harmonie culturelle.",
            card3List: ["Visibilité en 8 langues", "Bascule RTL et LTR", "Sensibilité au ton culturel"],
            quoteText: "« Certaines pages n’informent pas seulement. Elles rassemblent aussi l’ordre intérieur d’une personne et lui rappellent sa direction. »",
            quoteSign: "FORYOUARK",
            aiKicker: "Guide IA",
            aiSectionTitle: "Un espace d’aide qui guide sans faire de bruit",
            aiSectionSub: "Ici, l’IA n’est pas un gadget. Elle agit comme un compagnon élégant qui oriente vers le bon contenu, la bonne porte et le bon programme.",
            aiTitle: "Assistant de l’académie",
            aiText: "Écris un objectif court ci-dessous. Cette version montre le style d’orientation.",
            aiWelcome: "Écris ton objectif en une phrase. Je te proposerai la porte la plus adaptée.",
            aiPlaceholder: "Ex : stage, évolution, langue, formation, carrière...",
            aiSendBtn: "Envoyer",
            talentTitle: "Connexion au Pôle Talent",
            talentText: "Pour les stagiaires et profils en progression, la porte la plus visible reste aussi présente ici.",
            talentBtnInline: "Aller au Pôle Talent",
            wallTitle: "Phrases qui laissent une trace",
            wallSeal: "Communauté",
            wallText: "Un mur discret mais vivant. Laisse une phrase, une note courte ou une pensée.",
            wallNameLabel: "Nom",
            wallNamePlaceholder: "Optionnel",
            wallMessageLabel: "Message",
            wallMessagePlaceholder: "Laisse une phrase, une pensée ou une note...",
            wallHint: "Le partage anonyme est possible.",
            wallSubmitBtn: "Ajouter au mur",
            wallClearBtn: "Effacer",
            ctaKicker: "Points de passage",
            ctaTitle: "Après cette scène, passe par la bonne porte",
            ctaSub: "Tu peux revenir à l’accueil, continuer avec le guide IA, ou aller directement au Pôle Talent. Cette page académique n’est pas là seulement pour informer, mais pour produire une direction.",
            ctaHome: "Accueil",
            ctaAi: "Guide IA",
            ctaTalent: "Pôle Talent",
            footerText: "FORYOUARK Académie • multilingue • orientante • artistique • vivante",
            wallEmpty: "Aucune note n’a encore été laissée. Sois le premier.",
            anonymous: "Anonyme",
            default1: "Certaines phrases ne sont pas seulement lues. Elles s’installent à l’intérieur.",
            default2: "Une scène bien construite peut être aussi silencieuse qu’un livre et aussi forte qu’un enseignant.",
            aiReplyTalent: "Ton objectif semble proche du développement et du flux de talents. Le Pôle Talent peut être la porte la plus juste pour toi.",
            aiReplyLearning: "Il serait bon de regarder d’abord les espaces de programme. Tu pourras mieux voir si ton axe est pensée, évolution ou langue.",
            aiReplyLanguage: "L’espace langue et présentation peut mieux te convenir. La couche multilingue et expressive répondra sans doute plus directement à ton besoin.",
            aiReplyGeneral: "Commence par les programmes de l’académie, puis passe au Pôle Talent si nécessaire. Les deux espaces ont été conçus ensemble."
        },
        ru: {
            dir: "ltr",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "Сцена знания открывается",
            curtainLine3: "Мысль, эстетика, навигация и поток талантов встречаются в одном пространстве.",
            brandSub: "Пусть знание, эстетика и чувство направления встретятся на одной сцене.",
            btnHome: "На главную",
            btnAiJump: "AI-гид",
            btnTalent: "Войти в Talent Hub",
            heroSeal: "Сцена академии",
            heroTitle: "Выразительное учебное пространство с глубиной библиотеки",
            heroText: "Эта страница не просто показывает информацию. Она встречает посетителя спокойной, но сильной атмосферой, ведет к нужной зоне, сопровождает AI-поддержкой и сохраняет видимой дверь в Talent Hub, особенно для стажеров и тех, кто ищет развитие.",
            heroBtnPrograms: "Разделы программ",
            heroBtnWall: "Фразы, которые оставляют след",
            heroBtnTalent: "Путь стажера",
            heroNote: "Страница построена как сцена, чтобы атмосфера несла не меньше, чем содержание.",
            sideKicker1: "Дух",
            sideTitle1: "Эстетика, родственная странице видения",
            sideText1: "Не жесткая, не официальная и не холодная. Более теплая, многослойная, изящная и запоминающаяся.",
            sideKicker2: "Направление",
            sideTitle2: "Поток без рассеивания",
            sideText2: "Посетитель не теряется. Есть ясные переходы между главной, AI-гидом и Talent Hub.",
            sideKicker3: "Язык",
            sideTitle3: "8 языков и полная инкапсуляция",
            sideText3: "Все фиксированные тексты управляются внутри капсулы. Для арабского вместе меняются направление и компоновка.",
            programKicker: "Зоны обучения",
            programTitle: "Живые заголовки внутри академии",
            programSub: "Это не статичные блоки, а области, которые позже могут объединиться с документами, модулями, уроками, AI-навигацией и специальными переходами.",
            card1Title: "Мысль и перспектива",
            card1Badge: "Основа",
            card1Text: "Отобранный контент, который дает не только знания, но и взгляд.",
            card1List: ["Тексты, цитаты и комментарии", "Глубокие, но ясные мыслительные линии", "Фокусные зоны отобранного контента"],
            card2Title: "Профессиональный рост",
            card2Badge: "Практика",
            card2Text: "Контентные блоки, которые касаются реальной жизни, направляют и работают.",
            card2List: ["Сценарные повествования", "Навигация по навыкам и практике", "Структуры роста по ролям"],
            card3Title: "Язык и подача",
            card3Badge: "Многоязычность",
            card3Text: "Зона, усиливающая выражение, подачу и культурную гармонию.",
            card3List: ["Видимость на 8 языках", "Переключение RTL и LTR", "Чувствительность к культурному тону"],
            quoteText: "«Некоторые страницы не только информируют. Они собирают внутренний порядок человека и напоминают ему направление.»",
            quoteSign: "FORYOUARK",
            aiKicker: "AI-гид",
            aiSectionTitle: "Полезное пространство, которое направляет без шума",
            aiSectionSub: "AI здесь не игрушка. Он ведет себя как изящный спутник, который направляет к нужному контенту, двери и программе.",
            aiTitle: "Ассистент академии",
            aiText: "Напиши ниже короткую цель. Эта пробная версия покажет стиль навигации.",
            aiWelcome: "Напиши свою цель одним предложением. Я предложу наиболее подходящую дверь.",
            aiPlaceholder: "Напр.: стажировка, развитие, язык, образование, карьера...",
            aiSendBtn: "Отправить",
            talentTitle: "Связь с Talent Hub",
            talentText: "Для стажеров и тех, кто идет по пути развития, самая заметная дверь сохраняется и здесь.",
            talentBtnInline: "Перейти в Talent Hub",
            wallTitle: "Фразы, которые оставляют след",
            wallSeal: "Сообщество",
            wallText: "Тихая, но живая стена. Оставь любимую фразу, короткую заметку или мысль.",
            wallNameLabel: "Имя",
            wallNamePlaceholder: "Необязательно",
            wallMessageLabel: "Сообщение",
            wallMessagePlaceholder: "Оставь фразу, мысль или заметку...",
            wallHint: "Анонимная публикация возможна.",
            wallSubmitBtn: "Добавить на стену",
            wallClearBtn: "Очистить",
            ctaKicker: "Точки перехода",
            ctaTitle: "После этой сцены перейди к нужной двери",
            ctaSub: "Ты можешь вернуться на главную, продолжить с AI-гидом или сразу перейти в Talent Hub. Эта академическая страница создана не только для информации, но и для направления.",
            ctaHome: "Главная",
            ctaAi: "AI-гид",
            ctaTalent: "Talent Hub",
            footerText: "FORYOUARK Академия • многоязычная • направляющая • художественная • живая",
            wallEmpty: "Пока никто не оставил заметку. Будь первым.",
            anonymous: "Аноним",
            default1: "Некоторые фразы не просто читают. Они оседают внутри.",
            default2: "Хорошо построенная сцена может быть такой же тихой, как книга, и такой же сильной, как учитель.",
            aiReplyTalent: "Похоже, твой фокус связан с развитием и потоком талантов. Talent Hub может быть для тебя самой подходящей следующей дверью.",
            aiReplyLearning: "Сначала стоит посмотреть разделы программ. Там станет яснее, ближе ли тебе мысль, развитие или язык.",
            aiReplyLanguage: "Раздел языка и подачи может подойти тебе лучше. Многоязычный слой и работа с выражением, вероятно, точнее ответят на твой запрос.",
            aiReplyGeneral: "Начни с программ академии, а затем при необходимости перейди в Talent Hub. Эти два пространства проектировались вместе."
        },
        zh: {
            dir: "ltr",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "知识之幕正在开启",
            curtainLine3: "思想、美学、引导与人才流动在同一空间相遇。",
            brandSub: "让知识、美学与方向感在同一舞台相遇。",
            btnHome: "返回首页",
            btnAiJump: "AI 导航",
            btnTalent: "进入人才中枢",
            heroSeal: "学院舞台",
            heroTitle: "以图书馆般纵深打造的醒目学习空间",
            heroText: "这个页面不仅提供信息。它以安静却有力量的氛围迎接访客，引导到正确区域，以 AI 协助同行，并为实习生、学员和成长型候选人持续保留“人才中枢”入口。",
            heroBtnPrograms: "项目区域",
            heroBtnWall: "留下痕迹的句子",
            heroBtnTalent: "实习 / 学员通道",
            heroNote: "页面以舞台逻辑构建，让氛围与内容同样重要。",
            sideKicker1: "气质",
            sideTitle1: "与愿景页相呼应的审美",
            sideText1: "不是生硬、正式、冰冷的页面，而是更温暖、更有层次、更优雅、更容易被记住。",
            sideKicker2: "方向",
            sideTitle2: "不散乱的引导流线",
            sideText2: "访客不会迷失。首页、AI 导航与人才中枢之间建立了清晰过渡。",
            sideKicker3: "语言",
            sideTitle3: "8 种语言与完整封装",
            sideText3: "所有固定文本都在封装中管理。阿拉伯语时方向与布局也会一起变化。",
            programKicker: "学习区域",
            programTitle: "学院内部的活体标题",
            programSub: "这些并不是静态卡片，而是未来可与文档、模块、课程、AI 引导及专属流线相连的区域。",
            card1Title: "思想与视角",
            card1Badge: "基础",
            card1Text: "不仅传递信息，也塑造视角的精选内容。",
            card1List: ["文本、引语与评论空间", "深而清晰的思想流线", "精选内容焦点"],
            card2Title: "职业成长",
            card2Badge: "实践",
            card2Text: "贴近现实、具备方向感与实用性的内容集合。",
            card2List: ["场景化叙述", "技能与实践引导", "基于角色的成长结构"],
            card3Title: "语言与表达",
            card3Badge: "多语言",
            card3Text: "强化表达、呈现与文化协调性的叙述区域。",
            card3List: ["8 语言可见性", "RTL / LTR 切换", "文化语气敏感度"],
            quoteText: "“有些页面不只是提供信息，它也会整理人的内在秩序，并提醒方向。”",
            quoteSign: "FORYOUARK",
            aiKicker: "AI 导航",
            aiSectionTitle: "安静但会指路的辅助区域",
            aiSectionSub: "这里的 AI 不是玩具，而像一位优雅的陪伴者，将访客引向正确的内容、入口与项目。",
            aiTitle: "学院助手",
            aiText: "在下方写一句简短目标。这一示例版本会展示它的引导方式。",
            aiWelcome: "用一句话写下你的目标，我会推荐最适合你的入口。",
            aiPlaceholder: "例如：实习、成长、语言、教育、职业...",
            aiSendBtn: "发送",
            talentTitle: "人才中枢连接",
            talentText: "对于实习生、学员与成长路径中的候选人，这里也保留了最醒目的入口。",
            talentBtnInline: "前往人才中枢",
            wallTitle: "留下痕迹的句子",
            wallSeal: "社群",
            wallText: "安静却鲜活的墙。你可以留下喜欢的句子、短注或想法。",
            wallNameLabel: "姓名",
            wallNamePlaceholder: "可选",
            wallMessageLabel: "留言",
            wallMessagePlaceholder: "留下一句短句、想法或备注...",
            wallHint: "支持匿名发布。",
            wallSubmitBtn: "加入墙面",
            wallClearBtn: "清空",
            ctaKicker: "过渡节点",
            ctaTitle: "离开这处舞台后，走向正确的门",
            ctaSub: "你可以返回首页、继续使用 AI 导航，或直接进入人才中枢。这个学院页面不仅用于传递信息，也用于生成方向。",
            ctaHome: "首页",
            ctaAi: "AI 导航",
            ctaTalent: "人才中枢",
            footerText: "FORYOUARK 学院 • 多语言 • 引导型 • 艺术化 • 活体空间",
            wallEmpty: "还没有人留下内容。你可以成为第一个。",
            anonymous: "匿名",
            default1: "有些句子不只是被阅读，它会停留在内里。",
            default2: "一个搭建得好的舞台，可以像书一样安静，也可以像老师一样有力量。",
            aiReplyTalent: "你的重点似乎更接近成长与人才流动。人才中枢可能是你下一步最合适的入口。",
            aiReplyLearning: "你可以先看看学院的项目区域。在那里更容易判断你更适合思想、成长还是语言方向。",
            aiReplyLanguage: "语言与表达区域可能更适合你。多语言与表达层会更直接回应你的需求。",
            aiReplyGeneral: "先从学院项目开始，必要时再进入人才中枢。这两个区域是一起设计的。"
        },
        es: {
            dir: "ltr",
            curtainLine1: "FORYOUARK ACADEMY",
            curtainLine2: "Se abre el escenario del conocimiento",
            curtainLine3: "Pensamiento, estética, orientación y flujo de talento se encuentran en un mismo lugar.",
            brandSub: "Que el conocimiento, la estética y el sentido de dirección se encuentren en el mismo escenario.",
            btnHome: "Volver al inicio",
            btnAiJump: "Guía IA",
            btnTalent: "Entrar al Talent Hub",
            heroSeal: "Escenario de la academia",
            heroTitle: "Un espacio de aprendizaje impactante construido con la profundidad de una biblioteca",
            heroText: "Esta página no solo presenta información. Recibe al visitante con una atmósfera serena pero poderosa, lo guía al área correcta, lo acompaña con apoyo de IA y mantiene visible la puerta del Talent Hub especialmente para becarios, practicantes y candidatos orientados al desarrollo.",
            heroBtnPrograms: "Áreas del programa",
            heroBtnWall: "Frases que dejan huella",
            heroBtnTalent: "Ruta de becario / practicante",
            heroNote: "La página fue concebida como un escenario para que la atmósfera pese tanto como el contenido.",
            sideKicker1: "Espíritu",
            sideTitle1: "Una estética emparentada con la página de visión",
            sideText1: "No es dura, oficial ni fría. Es más cálida, más estratificada, más elegante y más memorable.",
            sideKicker2: "Dirección",
            sideTitle2: "Flujo guiado sin dispersión",
            sideText2: "El visitante no se pierde. Hay transiciones claras entre inicio, guía IA y Talent Hub.",
            sideKicker3: "Idioma",
            sideTitle3: "8 idiomas y encapsulación total",
            sideText3: "Todos los textos fijos se gestionan dentro de la cápsula. En árabe, la dirección y la distribución cambian juntas.",
            programKicker: "Áreas de aprendizaje",
            programTitle: "Encabezados vivos dentro de la academia",
            programSub: "No son cajas estáticas, sino áreas pensadas para unirse después con documentos, módulos, lecciones, guía IA y flujos especiales.",
            card1Title: "Pensamiento y perspectiva",
            card1Badge: "Base",
            card1Text: "Contenido curado que aporta perspectiva, no solo información.",
            card1List: ["Espacios de texto, cita y comentario", "Flujos de pensamiento profundos pero claros", "Zonas de contenido seleccionado"],
            card2Title: "Desarrollo profesional",
            card2Badge: "Práctica",
            card2Text: "Conjuntos de contenido útiles, orientadores y conectados con la vida real.",
            card2List: ["Narrativas basadas en escenarios", "Guías de habilidad y práctica", "Estructuras de crecimiento según el rol"],
            card3Title: "Lenguaje y presentación",
            card3Badge: "Multilingüe",
            card3Text: "Un área narrativa que fortalece la expresión, la presentación y la armonía cultural.",
            card3List: ["Visibilidad en 8 idiomas", "Cambio entre RTL y LTR", "Sensibilidad al tono cultural"],
            quoteText: "“Algunas páginas no solo informan. También reúnen el orden interior de una persona y le recuerdan su dirección.”",
            quoteSign: "FORYOUARK",
            aiKicker: "Guía IA",
            aiSectionTitle: "Un espacio de ayuda que guía sin hacer ruido",
            aiSectionSub: "La IA no está aquí como un juguete. Se comporta como una acompañante elegante que dirige al visitante hacia el contenido, la puerta y el programa correctos.",
            aiTitle: "Asistente de la academia",
            aiText: "Escribe abajo un objetivo breve. Esta versión de muestra enseña el estilo de orientación.",
            aiWelcome: "Escribe tu objetivo en una sola frase. Te sugeriré la puerta más adecuada.",
            aiPlaceholder: "Ej.: prácticas, desarrollo, idioma, educación, carrera...",
            aiSendBtn: "Enviar",
            talentTitle: "Conexión con Talent Hub",
            talentText: "Para practicantes, becarios y candidatos en ruta de crecimiento, la puerta más visible también se conserva aquí.",
            talentBtnInline: "Ir a Talent Hub",
            wallTitle: "Frases que dejan huella",
            wallSeal: "Comunidad",
            wallText: "Un muro silencioso pero vivo. Puedes dejar una frase, una nota breve o un pensamiento.",
            wallNameLabel: "Nombre",
            wallNamePlaceholder: "Opcional",
            wallMessageLabel: "Mensaje",
            wallMessagePlaceholder: "Deja una frase, un pensamiento o una nota...",
            wallHint: "Se permite publicar de forma anónima.",
            wallSubmitBtn: "Añadir al muro",
            wallClearBtn: "Limpiar",
            ctaKicker: "Puntos de paso",
            ctaTitle: "Después de este escenario, entra por la puerta correcta",
            ctaSub: "Puedes volver al inicio, continuar con la guía IA o entrar directamente al Talent Hub. Esta página académica no está solo para informar, sino para producir dirección.",
            ctaHome: "Inicio",
            ctaAi: "Guía IA",
            ctaTalent: "Talent Hub",
            footerText: "FORYOUARK Academia • multilingüe • orientadora • artística • viva",
            wallEmpty: "Todavía no se ha dejado ninguna nota. Sé la primera persona en dejar huella.",
            anonymous: "Anónimo",
            default1: "Algunas frases no solo se leen. Se instalan por dentro.",
            default2: "Un escenario bien construido puede ser tan silencioso como un libro y tan fuerte como un maestro.",
            aiReplyTalent: "Tu enfoque parece estar cerca del desarrollo y del flujo de talento. Talent Hub podría ser la puerta más adecuada para ti ahora.",
            aiReplyLearning: "Conviene mirar primero las áreas del programa. Allí será más fácil ver si encajas mejor con pensamiento, desarrollo o lenguaje.",
            aiReplyLanguage: "El área de lenguaje y presentación puede ajustarse mejor a ti. La capa multilingüe y expresiva responderá de forma más directa a tu necesidad.",
            aiReplyGeneral: "Empieza con los programas de la academia y luego, si hace falta, pasa a Talent Hub. Ambos espacios fueron diseñados juntos."
        }
    };

    const FIXED_KEYS = [
        "curtainLine1","curtainLine2","curtainLine3","brandSub","btnHome","btnAiJump","btnTalent",
        "heroSeal","heroTitle","heroText","heroBtnPrograms","heroBtnWall","heroBtnTalent","heroNote",
        "sideKicker1","sideTitle1","sideText1","sideKicker2","sideTitle2","sideText2","sideKicker3","sideTitle3","sideText3",
        "programKicker","programTitle","programSub","card1Title","card1Badge","card1Text","card2Title","card2Badge","card2Text","card3Title","card3Badge","card3Text",
        "quoteText","quoteSign","aiKicker","aiSectionTitle","aiSectionSub","aiTitle","aiText","aiWelcome","aiSendBtn",
        "talentTitle","talentText","talentBtnInline","wallTitle","wallSeal","wallText","wallNameLabel","wallMessageLabel","wallHint","wallSubmitBtn","wallClearBtn",
        "ctaKicker","ctaTitle","ctaSub","ctaHome","ctaAi","ctaTalent","footerText"
    ];

    const LIST_KEYS = ["card1List","card2List","card3List"];
    const LANG_KEY = "fyark_academy_lang_v3";
    const WALL_KEY = "fyark_academy_wall_v3";

    const el = (id) => document.getElementById(id);

    const langSelect = el("langSelect");
    const aiForm = el("aiForm");
    const aiInput = el("aiInput");
    const aiMessages = el("aiMessages");
    const wallForm = el("wallForm");
    const wallName = el("wallName");
    const wallMessage = el("wallMessage");
    const wallCounter = el("wallCounter");
    const wallList = el("wallList");
    const wallClearBtn = el("wallClearBtn");
    const curtain = el("curtain");

    function escapeHtml(str){
        return String(str)
            .replaceAll("&", "&amp;")
            .replaceAll("<", "&lt;")
            .replaceAll(">", "&gt;")
            .replaceAll('"', "&quot;")
            .replaceAll("'", "&#039;");
    }

    function currentLang(){
        return langSelect.value || localStorage.getItem(LANG_KEY) || "tr";
    }

    function t(key){
        const lang = currentLang();
        return (I18N[lang] && I18N[lang][key] !== undefined) ? I18N[lang][key] : I18N.tr[key];
    }

    function renderList(id, items){
        const node = el(id);
        if(!node) return;
        node.innerHTML = items.map(item => `<li>${escapeHtml(item)}</li>`).join("");
    }

    function applyLanguage(lang){
        const dict = I18N[lang] || I18N.tr;
        document.documentElement.lang = lang;
        document.documentElement.dir = dict.dir || "ltr";
        localStorage.setItem(LANG_KEY, lang);

        FIXED_KEYS.forEach(key => {
            const node = el(key);
            if(node && dict[key] !== undefined){
                node.textContent = dict[key];
            }
        });

        LIST_KEYS.forEach(listKey => {
            renderList(listKey, dict[listKey] || []);
        });

        aiInput.placeholder = dict.aiPlaceholder || "";
        wallName.placeholder = dict.wallNamePlaceholder || "";
        wallMessage.placeholder = dict.wallMessagePlaceholder || "";

        renderWall();
    }

    function formatDate(dateObj, lang){
        try{
            return new Intl.DateTimeFormat(lang === "ar" ? "ar" : lang, {
                day: "2-digit",
                month: "long",
                year: "numeric",
                hour: "2-digit",
                minute: "2-digit"
            }).format(dateObj);
        }catch(e){
            return new Date().toLocaleString();
        }
    }

    function defaultWallItems(){
        const lang = currentLang();
        return [
            {
                name: "FORYOUARK",
                message: t("default1"),
                date: formatDate(new Date(), lang)
            },
            {
                name: t("anonymous"),
                message: t("default2"),
                date: formatDate(new Date(), lang)
            }
        ];
    }

    function readWall(){
        try{
            const raw = localStorage.getItem(WALL_KEY);
            if(!raw){
                return defaultWallItems();
            }
            const parsed = JSON.parse(raw);
            if(!Array.isArray(parsed) || parsed.length === 0){
                return defaultWallItems();
            }
            return parsed;
        }catch(e){
            return defaultWallItems();
        }
    }

    function saveWall(items){
        localStorage.setItem(WALL_KEY, JSON.stringify(items));
    }

    function renderWall(){
        const items = readWall();
        if(!items.length){
            wallList.innerHTML = `<div class="wall-empty">${escapeHtml(t("wallEmpty"))}</div>`;
            return;
        }

        wallList.innerHTML = items.map(item => `
            <article class="wall-item">
                <p class="wall-item-message">${escapeHtml(item.message)}</p>
                <div class="wall-item-footer">
                    <span class="wall-item-name">${escapeHtml(item.name || t("anonymous"))}</span>
                    <span>${escapeHtml(item.date || "")}</span>
                </div>
            </article>
        `).join("");
    }

    function updateCounter(){
        wallCounter.textContent = `${wallMessage.value.length} / 240`;
    }

    function aiAnswerFor(text){
        const q = text.toLowerCase();
        if(/staj|kurs|kursiyer|intern|trainee|talent|yetenek|öğren|geliş|career|kar(i|y)er|prakt|stage|estagio|стаж|人才|internship/.test(q)){
            return t("aiReplyTalent");
        }
        if(/dil|language|presentation|sunum|rtl|çeviri|translate|idioma|langue|sprache|язык|语言/.test(q)){
            return t("aiReplyLanguage");
        }
        if(/eğitim|education|learn|öğren|program|course|formation|bildung|образование|学习/.test(q)){
            return t("aiReplyLearning");
        }
        return t("aiReplyGeneral");
    }

    langSelect.addEventListener("change", function(){
        applyLanguage(this.value);
    });

    aiForm.addEventListener("submit", function(e){
        e.preventDefault();
        const value = aiInput.value.trim();
        if(!value){
            aiInput.focus();
            return;
        }

        const userCard = document.createElement("div");
        userCard.className = "ai-msg";
        userCard.innerHTML = `<strong>YOU:</strong> ${escapeHtml(value)}`;

        const aiCard = document.createElement("div");
        aiCard.className = "ai-msg";
        aiCard.innerHTML = `<strong>AI:</strong> ${escapeHtml(aiAnswerFor(value))}`;

        aiMessages.appendChild(userCard);
        aiMessages.appendChild(aiCard);
        aiInput.value = "";
    });

    wallMessage.addEventListener("input", updateCounter);

    wallClearBtn.addEventListener("click", function(){
        wallName.value = "";
        wallMessage.value = "";
        updateCounter();
    });

    wallForm.addEventListener("submit", function(e){
        e.preventDefault();

        const name = wallName.value.trim().slice(0, 40);
        const message = wallMessage.value.trim().slice(0, 240);

        if(!message){
            wallMessage.focus();
            return;
        }

        const items = readWall();
        items.unshift({
            name: name || t("anonymous"),
            message: message,
            date: formatDate(new Date(), currentLang())
        });

        saveWall(items.slice(0, 30));
        renderWall();
        wallForm.reset();
        updateCounter();
    });

    window.addEventListener("load", function(){
        setTimeout(() => {
            curtain.classList.add("is-open");
        }, 260);
        setTimeout(() => {
            curtain.style.display = "none";
        }, 2350);
    });

    (function init(){
        const savedLang = localStorage.getItem(LANG_KEY) || "tr";
        langSelect.value = savedLang;
        applyLanguage(savedLang);
        updateCounter();
    })();
})();
</script>
</body>
</html>