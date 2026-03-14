<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/functions.php';

$submitStatus = null;
$submitMessage = '';
$referenceId = '';

fyark_generate_csrf_token();

if (empty($_SESSION['form_started_at'])) {
    fyark_generate_form_token();
}

$langData = [
    'tr' => [
        'dir' => 'ltr',
        'html_lang' => 'tr',
        'page_title' => 'İlk Temas | FOR YOU ARK',
        'home' => '← ANASAYFA',
        'idle' => 'SİSTEM UYKUDA. UYANDIRMAK İÇİN DOKUNUN.',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => 'ÖN DEĞERLENDİRME ALANI',
        'hero_title' => 'İLK TEMAS',
        'hero_lead' => 'Bu alan, FOR YOU ARK ile kurulacak ilk ciddi temasın ön değerlendirme katmanıdır.',
        'hero_note' => 'Her mesaj aynı yoldan ilerlemez. Bazı başvurular doğrudan ilgili eşiğe yönlendirilir, bazıları ise ön inceleme sonrasında özel kanal mantığıyla ele alınır.',
        'side_1_title' => 'SEÇİCİLİK',
        'side_1_text' => 'Burada bırakılan her kayıt, hacim için değil uygunluk için değerlendirilir.',
        'side_2_title' => 'MAHREMİYET',
        'side_2_text' => 'Paylaşılan bilgiler, yalnızca ilk temas ve yönlendirme çerçevesinde sınırlı erişimle ele alınır.',
        'side_3_title' => 'DOĞRU EŞİK',
        'side_3_text' => 'Müşteri, partner, aday veya demo ziyaretçisi için aynı kapı kullanılmaz. Bu salon, doğru geçidi bulmanız içindir.',
        'process_title' => 'İLK TEMAS NASIL İŞLER?',
        'process_items' => [
            'Temasınızın niteliği belirlenir ve uygun eşik ayrıştırılır.',
            'Gerekli görülürse kayıt ilgili operasyon hattına yönlendirilir.',
            'Her kayıt aynı hızda değil, uygunluk ve öncelik esasına göre ele alınır.'
        ],
        'privacy_title' => 'MAHREMİYET VE GÜVEN',
        'privacy_text' => 'Bu alan doğrudan pazarlama listesi değildir. Burada bırakılan bilgiler, ilk yönlendirme ve ön değerlendirme amacıyla sınırlı erişim içinde ele alınır.',
        'form_title' => 'GENEL ÖN DEĞERLENDİRME KAYDI',
        'form_subtitle' => 'Doğru kapıyı seçemediyseniz veya kısa bir ilk kayıt bırakmak istiyorsanız, aşağıdaki alanı kullanabilirsiniz.',
        'labels' => [
            'full_name' => 'AD SOYAD',
            'email' => 'E-POSTA',
            'phone' => 'TELEFON / WHATSAPP',
            'preferred_channel' => 'TERCİH EDİLEN İLETİŞİM',
            'city_country' => 'ŞEHİR / ÜLKE',
            'representation' => 'TEMSİL TÜRÜ',
            'contact_type' => 'TEMAS NİTELİĞİ',
            'message' => 'İLK TEMAS NOTU'
        ],
        'placeholders' => [
            'full_name' => 'Adınız Soyadınız',
            'email' => 'ornek@mail.com',
            'phone' => '+90...',
            'city_country' => 'İzmir / Türkiye',
            'message' => 'Temasınızın niteliğini, beklentinizi ve gerekirse mahremiyet hassasiyetinizi birkaç cümleyle paylaşabilirsiniz.'
        ],
        'channels' => [
            '' => 'Seçiniz',
            'email' => 'E-posta',
            'phone' => 'Telefon',
            'whatsapp' => 'WhatsApp',
            'assistant' => 'Temsilci üzerinden'
        ],
        'representations' => [
            '' => 'Seçiniz',
            'individual' => 'Bireysel',
            'family' => 'Aile adına',
            'representative' => 'Temsilci aracılığıyla',
            'office' => 'Kurumsal / özel ofis adına'
        ],
        'contact_types' => [
            '' => 'Seçiniz',
            'client' => 'Müşteri / Private Talep',
            'partner' => 'Partner / İş Birliği',
            'candidate' => 'Stajyer / Kursiyer / Aday',
            'demo' => 'Demo / Mimari İnceleme',
            'general' => 'Genel İlk Temas'
        ],
        'quick_title' => 'HIZLI TEMAS',
        'quick_text' => 'Uğraşmadan hızlı şekilde ulaşmak isterseniz aşağıdaki kanalları kullanabilirsiniz.',
        'quick_email' => 'E-POSTA',
        'quick_whatsapp' => 'WHATSAPP',
        'consent' => 'Paylaştığım bilgilerin ilk temas, yönlendirme ve ön değerlendirme amacıyla sınırlı erişim içinde ele alınmasını kabul ediyorum.',
        'form_meta' => 'Uygun görülen kayıtlar özel kanal üzerinden ilerletilir. Bu alan otomatik kabul garantisi vermez.',
        'submit' => 'İLK TEMASI MÜHÜRLE',
        'alerts' => [
            'FORM_SUCCESS' => 'Kaydınız alındı. Referans numaranız: %s',
            'FORM_VALIDATION_FAILED' => 'Lütfen zorunlu alanları ve onay kutusunu eksiksiz tamamlayın.',
            'SECURITY_VALIDATION_FAILED' => 'Güvenlik doğrulaması başarısız oldu. Sayfayı yenileyip tekrar deneyin.',
            'RATE_LIMITED' => 'Çok sık deneme yapıldı. Lütfen biraz sonra tekrar deneyin.',
            'BOT_DETECTED' => 'Form gönderimi güvenlik nedeniyle kabul edilmedi.',
            'FORM_TOO_FAST' => 'Form çok hızlı gönderildi. Lütfen yeniden deneyin.',
            'FILE_WRITE_FAILED' => 'Kayıt oluşturulamadı. Lütfen sunucu yazma izinlerini kontrol edin.'
        ],
        'ai_header' => 'EŞİK REHBERİ',
        'ai_welcome' => 'Temasınızın niteliğine göre sizi doğru kapıya yönlendirebilirim. Müşteri, partner, aday veya demo ziyaretçisi olduğunuzu birkaç kelimeyle yazmanız yeterli.',
        'ai_placeholder' => 'Kararsızsanız bir iki kelime yazın...',
        'ai_send' => 'YÖNLENDİR',
        'ai_quick' => ['Müşteriyim', 'Partner olmak istiyorum', 'Staj başvurusu', 'Sadece demoyu görmek istiyorum'],
        'lang_current' => 'TR | TÜRKÇE',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => 'Bu talep müşteri / private talep eşiğine daha yakın görünüyor. Formdaki temas niteliğini buna göre önceden seçtim.',
            'partner' => 'Bu başvuru partner / iş birliği eşiğine daha uygun görünüyor. İlgili temas niteliğini önceden seçtim.',
            'candidate' => 'Bu içerik stajyer / kursiyer / aday hattına daha yakın görünüyor. İlgili alanı önceden seçtim.',
            'demo' => 'Siz daha çok demo / keşif ziyaretçisi gibi görünüyorsunuz. İlgili alanı önceden seçtim.',
            'general' => 'Mesajınızı genel ilk temas olarak değerlendirmek en doğru seçim gibi görünüyor. Formdaki ilgili alanı buna göre önceden seçtim.'
        ]
    ],

    'en' => [
        'dir' => 'ltr',
        'html_lang' => 'en',
        'page_title' => 'First Contact | FOR YOU ARK',
        'home' => '← HOME',
        'idle' => 'SYSTEM ASLEEP. TOUCH TO AWAKEN.',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => 'PRELIMINARY EVALUATION AREA',
        'hero_title' => 'FIRST CONTACT',
        'hero_lead' => 'This area is the preliminary evaluation layer for the first serious contact to be established with FOR YOU ARK.',
        'hero_note' => 'Not every message proceeds through the same path. Some applications are directed straight to the relevant threshold, while others are handled through a special channel logic after initial review.',
        'side_1_title' => 'SELECTIVITY',
        'side_1_text' => 'Every record left here is evaluated not for volume, but for suitability.',
        'side_2_title' => 'PRIVACY',
        'side_2_text' => 'The information shared is handled with limited access solely within the framework of first contact and routing.',
        'side_3_title' => 'THE RIGHT THRESHOLD',
        'side_3_text' => 'The same gate is not used for clients, partners, candidates, or demo visitors. This chamber exists to help you find the correct passage.',
        'process_title' => 'HOW DOES FIRST CONTACT WORK?',
        'process_items' => [
            'The nature of your contact is identified and the appropriate threshold is separated.',
            'If deemed necessary, the record is routed to the relevant operational line.',
            'Not every record is handled at the same pace, but according to suitability and priority.'
        ],
        'privacy_title' => 'PRIVACY AND TRUST',
        'privacy_text' => 'This area is not a direct marketing list. The information left here is handled with limited access for first routing and preliminary evaluation purposes.',
        'form_title' => 'GENERAL PRELIMINARY EVALUATION RECORD',
        'form_subtitle' => 'If you could not choose the right gate or want to leave a brief initial record, you may use the area below.',
        'labels' => [
            'full_name' => 'FULL NAME',
            'email' => 'E-MAIL',
            'phone' => 'PHONE / WHATSAPP',
            'preferred_channel' => 'PREFERRED CONTACT CHANNEL',
            'city_country' => 'CITY / COUNTRY',
            'representation' => 'TYPE OF REPRESENTATION',
            'contact_type' => 'CONTACT NATURE',
            'message' => 'FIRST CONTACT NOTE'
        ],
        'placeholders' => [
            'full_name' => 'Your full name',
            'email' => 'example@mail.com',
            'phone' => '+90...',
            'city_country' => 'Izmir / Türkiye',
            'message' => 'You may briefly share the nature of your contact, your expectations, and, if necessary, your privacy sensitivity.'
        ],
        'channels' => [
            '' => 'Select',
            'email' => 'E-mail',
            'phone' => 'Phone',
            'whatsapp' => 'WhatsApp',
            'assistant' => 'Through a representative'
        ],
        'representations' => [
            '' => 'Select',
            'individual' => 'Individual',
            'family' => 'On behalf of family',
            'representative' => 'Through a representative',
            'office' => 'On behalf of a corporate / private office'
        ],
        'contact_types' => [
            '' => 'Select',
            'client' => 'Client / Private Request',
            'partner' => 'Partner / Collaboration',
            'candidate' => 'Intern / Trainee / Candidate',
            'demo' => 'Demo / Architectural Review',
            'general' => 'General First Contact'
        ],
        'quick_title' => 'QUICK CONTACT',
        'quick_text' => 'If you wish to reach us quickly without unnecessary friction, you may use the channels below.',
        'quick_email' => 'E-MAIL',
        'quick_whatsapp' => 'WHATSAPP',
        'consent' => 'I accept that the information I share will be handled with limited access for first contact, routing, and preliminary evaluation purposes.',
        'form_meta' => 'Records deemed appropriate are advanced through a private channel. This area does not provide an automatic acceptance guarantee.',
        'submit' => 'SEAL THE FIRST CONTACT',
        'alerts' => [
            'FORM_SUCCESS' => 'Your record has been received. Your reference number is: %s',
            'FORM_VALIDATION_FAILED' => 'Please complete all required fields and the consent checkbox.',
            'SECURITY_VALIDATION_FAILED' => 'Security validation failed. Please refresh the page and try again.',
            'RATE_LIMITED' => 'Too many attempts were made. Please try again later.',
            'BOT_DETECTED' => 'Form submission was rejected for security reasons.',
            'FORM_TOO_FAST' => 'The form was submitted too quickly. Please try again.',
            'FILE_WRITE_FAILED' => 'The record could not be created. Please check server write permissions.'
        ],
        'ai_header' => 'THRESHOLD GUIDE',
        'ai_welcome' => 'I can guide you to the correct gate according to the nature of your contact. It is enough to write in a few words whether you are a client, partner, candidate, or demo visitor.',
        'ai_placeholder' => 'If you are undecided, write a few words...',
        'ai_send' => 'ROUTE',
        'ai_quick' => ['I am a client', 'I want to become a partner', 'Internship application', 'I only want to see the demo'],
        'lang_current' => 'EN | ENGLISH',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => 'This request appears closer to the client / private request threshold. I preselected the contact nature accordingly.',
            'partner' => 'This application seems more suitable for the partner / collaboration threshold. I preselected the relevant contact nature.',
            'candidate' => 'This content appears closer to the intern / trainee / candidate line. I preselected the relevant field.',
            'demo' => 'You appear more like a demo / exploration visitor. I preselected the relevant field.',
            'general' => 'It seems most accurate to evaluate your message as general first contact. I preselected the relevant field accordingly.'
        ]
    ],

    'de' => [
        'dir' => 'ltr',
        'html_lang' => 'de',
        'page_title' => 'Erster Kontakt | FOR YOU ARK',
        'home' => '← STARTSEITE',
        'idle' => 'SYSTEM IM RUHEMODUS. ZUM AKTIVIEREN BERÜHREN.',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => 'BEREICH FÜR VORBEWERTUNG',
        'hero_title' => 'ERSTER KONTAKT',
        'hero_lead' => 'Dieser Bereich ist die Vorbewertungsebene für den ersten ernsthaften Kontakt mit FOR YOU ARK.',
        'hero_note' => 'Nicht jede Nachricht folgt demselben Weg. Einige Anfragen werden direkt an die passende Schwelle geleitet, andere nach einer ersten Prüfung über einen besonderen Kanal behandelt.',
        'side_1_title' => 'SELEKTIVITÄT',
        'side_1_text' => 'Jeder hier hinterlassene Eintrag wird nicht nach Menge, sondern nach Eignung bewertet.',
        'side_2_title' => 'VERTRAULICHKEIT',
        'side_2_text' => 'Die geteilten Informationen werden ausschließlich im Rahmen des Erstkontakts und der Weiterleitung mit eingeschränktem Zugriff verarbeitet.',
        'side_3_title' => 'DIE RICHTIGE SCHWELLE',
        'side_3_text' => 'Für Kunden, Partner, Kandidaten oder Demo-Besucher wird nicht dasselbe Tor verwendet. Dieser Saal dient dazu, den richtigen Übergang zu finden.',
        'process_title' => 'WIE FUNKTIONIERT DER ERSTE KONTAKT?',
        'process_items' => [
            'Die Art Ihres Kontakts wird bestimmt und die passende Schwelle wird getrennt.',
            'Falls erforderlich, wird der Eintrag an die zuständige operative Linie weitergeleitet.',
            'Nicht jeder Eintrag wird mit derselben Geschwindigkeit behandelt, sondern nach Eignung und Priorität.'
        ],
        'privacy_title' => 'VERTRAULICHKEIT UND VERTRAUEN',
        'privacy_text' => 'Dieser Bereich ist keine direkte Marketingliste. Die hier hinterlassenen Informationen werden mit eingeschränktem Zugriff für Erstweiterleitung und Vorbewertung verarbeitet.',
        'form_title' => 'ALLGEMEINER EINTRAG ZUR VORBEWERTUNG',
        'form_subtitle' => 'Wenn Sie das richtige Tor nicht wählen konnten oder einen kurzen ersten Eintrag hinterlassen möchten, können Sie den folgenden Bereich verwenden.',
        'labels' => [
            'full_name' => 'VOR- UND NACHNAME',
            'email' => 'E-MAIL',
            'phone' => 'TELEFON / WHATSAPP',
            'preferred_channel' => 'BEVORZUGTER KOMMUNIKATIONSKANAL',
            'city_country' => 'STADT / LAND',
            'representation' => 'ART DER VERTRETUNG',
            'contact_type' => 'ART DES KONTAKTS',
            'message' => 'NOTIZ ZUM ERSTKONTAKT'
        ],
        'placeholders' => [
            'full_name' => 'Ihr Vor- und Nachname',
            'email' => 'beispiel@mail.com',
            'phone' => '+90...',
            'city_country' => 'Izmir / Türkei',
            'message' => 'Sie können die Art Ihres Kontakts, Ihre Erwartungen und gegebenenfalls Ihre Vertraulichkeitssensibilität in wenigen Sätzen mitteilen.'
        ],
        'channels' => [
            '' => 'Wählen',
            'email' => 'E-Mail',
            'phone' => 'Telefon',
            'whatsapp' => 'WhatsApp',
            'assistant' => 'Über einen Vertreter'
        ],
        'representations' => [
            '' => 'Wählen',
            'individual' => 'Einzeln',
            'family' => 'Im Namen der Familie',
            'representative' => 'Durch einen Vertreter',
            'office' => 'Im Namen eines Unternehmens / privaten Büros'
        ],
        'contact_types' => [
            '' => 'Wählen',
            'client' => 'Kunde / Private Anfrage',
            'partner' => 'Partner / Zusammenarbeit',
            'candidate' => 'Praktikant / Kursteilnehmer / Kandidat',
            'demo' => 'Demo / Architektonische Prüfung',
            'general' => 'Allgemeiner Erstkontakt'
        ],
        'quick_title' => 'SCHNELLER KONTAKT',
        'quick_text' => 'Wenn Sie uns schnell und ohne unnötige Umwege erreichen möchten, können Sie die folgenden Kanäle nutzen.',
        'quick_email' => 'E-MAIL',
        'quick_whatsapp' => 'WHATSAPP',
        'consent' => 'Ich akzeptiere, dass die von mir geteilten Informationen mit eingeschränktem Zugriff für Erstkontakt, Weiterleitung und Vorbewertung verarbeitet werden.',
        'form_meta' => 'Geeignete Einträge werden über einen privaten Kanal weitergeführt. Dieser Bereich garantiert keine automatische Annahme.',
        'submit' => 'ERSTKONTAKT VERSIEGELN',
        'alerts' => [
            'FORM_SUCCESS' => 'Ihr Eintrag wurde empfangen. Ihre Referenznummer lautet: %s',
            'FORM_VALIDATION_FAILED' => 'Bitte füllen Sie alle Pflichtfelder und das Kontrollkästchen vollständig aus.',
            'SECURITY_VALIDATION_FAILED' => 'Die Sicherheitsprüfung ist fehlgeschlagen. Bitte laden Sie die Seite neu und versuchen Sie es erneut.',
            'RATE_LIMITED' => 'Es wurden zu viele Versuche unternommen. Bitte versuchen Sie es später erneut.',
            'BOT_DETECTED' => 'Die Formularübermittlung wurde aus Sicherheitsgründen abgelehnt.',
            'FORM_TOO_FAST' => 'Das Formular wurde zu schnell gesendet. Bitte versuchen Sie es erneut.',
            'FILE_WRITE_FAILED' => 'Der Eintrag konnte nicht erstellt werden. Bitte überprüfen Sie die Schreibrechte des Servers.'
        ],
        'ai_header' => 'SCHWELLEN-LEITFADEN',
        'ai_welcome' => 'Ich kann Sie je nach Art Ihres Kontakts zum richtigen Tor führen. Es genügt, in wenigen Worten zu schreiben, ob Sie Kunde, Partner, Kandidat oder Demo-Besucher sind.',
        'ai_placeholder' => 'Falls Sie unsicher sind, schreiben Sie ein paar Wörter...',
        'ai_send' => 'LEITEN',
        'ai_quick' => ['Ich bin Kunde', 'Ich möchte Partner werden', 'Praktikumsbewerbung', 'Ich möchte nur die Demo sehen'],
        'lang_current' => 'DE | DEUTSCH',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => 'Diese Anfrage scheint näher an der Schwelle für Kunde / private Anfrage zu liegen. Ich habe die Kontaktart entsprechend vorausgewählt.',
            'partner' => 'Diese Bewerbung scheint besser zur Schwelle Partner / Zusammenarbeit zu passen. Ich habe die entsprechende Kontaktart vorausgewählt.',
            'candidate' => 'Dieser Inhalt scheint näher an der Linie Praktikant / Kursteilnehmer / Kandidat zu liegen. Ich habe das entsprechende Feld vorausgewählt.',
            'demo' => 'Sie wirken eher wie ein Demo- / Erkundungsbesucher. Ich habe das entsprechende Feld vorausgewählt.',
            'general' => 'Es scheint am passendsten, Ihre Nachricht als allgemeinen Erstkontakt zu bewerten. Ich habe das entsprechende Feld vorausgewählt.'
        ]
    ],

    'fr' => [
        'dir' => 'ltr',
        'html_lang' => 'fr',
        'page_title' => 'Premier contact | FOR YOU ARK',
        'home' => '← ACCUEIL',
        'idle' => 'SYSTÈME EN VEILLE. TOUCHEZ POUR RÉVEILLER.',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => 'ZONE DE PRÉ-ÉVALUATION',
        'hero_title' => 'PREMIER CONTACT',
        'hero_lead' => 'Cette zone constitue la couche de pré-évaluation du premier contact sérieux à établir avec FOR YOU ARK.',
        'hero_note' => 'Chaque message ne suit pas le même chemin. Certaines demandes sont dirigées directement vers le seuil concerné, tandis que d’autres sont traitées via une logique de canal spécial après une première analyse.',
        'side_1_title' => 'SÉLECTIVITÉ',
        'side_1_text' => 'Chaque dossier laissé ici est évalué non pour le volume, mais pour sa pertinence.',
        'side_2_title' => 'CONFIDENTIALITÉ',
        'side_2_text' => 'Les informations partagées sont traitées avec un accès limité uniquement dans le cadre du premier contact et de l’orientation.',
        'side_3_title' => 'LE BON SEUIL',
        'side_3_text' => 'La même porte n’est pas utilisée pour les clients, les partenaires, les candidats ou les visiteurs démo. Ce salon existe pour vous aider à trouver le bon passage.',
        'process_title' => 'COMMENT FONCTIONNE LE PREMIER CONTACT ?',
        'process_items' => [
            'La nature de votre contact est identifiée et le seuil approprié est distingué.',
            'Si nécessaire, l’enregistrement est orienté vers la ligne opérationnelle concernée.',
            'Chaque enregistrement n’est pas traité à la même vitesse, mais selon sa pertinence et sa priorité.'
        ],
        'privacy_title' => 'CONFIDENTIALITÉ ET CONFIANCE',
        'privacy_text' => 'Cette zone n’est pas une simple liste de marketing direct. Les informations laissées ici sont traitées avec un accès limité à des fins d’orientation initiale et de pré-évaluation.',
        'form_title' => 'ENREGISTREMENT GÉNÉRAL DE PRÉ-ÉVALUATION',
        'form_subtitle' => 'Si vous n’avez pas pu choisir la bonne porte ou si vous souhaitez laisser un bref premier enregistrement, vous pouvez utiliser la zone ci-dessous.',
        'labels' => [
            'full_name' => 'NOM ET PRÉNOM',
            'email' => 'E-MAIL',
            'phone' => 'TÉLÉPHONE / WHATSAPP',
            'preferred_channel' => 'CANAL DE CONTACT PRÉFÉRÉ',
            'city_country' => 'VILLE / PAYS',
            'representation' => 'TYPE DE REPRÉSENTATION',
            'contact_type' => 'NATURE DU CONTACT',
            'message' => 'NOTE DE PREMIER CONTACT'
        ],
        'placeholders' => [
            'full_name' => 'Votre nom et prénom',
            'email' => 'exemple@mail.com',
            'phone' => '+90...',
            'city_country' => 'Izmir / Turquie',
            'message' => 'Vous pouvez partager en quelques phrases la nature de votre contact, vos attentes et, si nécessaire, votre sensibilité à la confidentialité.'
        ],
        'channels' => [
            '' => 'Sélectionner',
            'email' => 'E-mail',
            'phone' => 'Téléphone',
            'whatsapp' => 'WhatsApp',
            'assistant' => 'Par l’intermédiaire d’un représentant'
        ],
        'representations' => [
            '' => 'Sélectionner',
            'individual' => 'Individuel',
            'family' => 'Au nom de la famille',
            'representative' => 'Par l’intermédiaire d’un représentant',
            'office' => 'Au nom d’un bureau d’entreprise / privé'
        ],
        'contact_types' => [
            '' => 'Sélectionner',
            'client' => 'Client / Demande privée',
            'partner' => 'Partenaire / Collaboration',
            'candidate' => 'Stagiaire / Candidat / Participant',
            'demo' => 'Démo / Revue architecturale',
            'general' => 'Premier contact général'
        ],
        'quick_title' => 'CONTACT RAPIDE',
        'quick_text' => 'Si vous souhaitez nous joindre rapidement sans complication inutile, vous pouvez utiliser les canaux ci-dessous.',
        'quick_email' => 'E-MAIL',
        'quick_whatsapp' => 'WHATSAPP',
        'consent' => 'J’accepte que les informations que je partage soient traitées avec un accès limité à des fins de premier contact, d’orientation et de pré-évaluation.',
        'form_meta' => 'Les enregistrements jugés appropriés sont poursuivis via un canal privé. Cette zone ne garantit pas une acceptation automatique.',
        'submit' => 'SCELLER LE PREMIER CONTACT',
        'alerts' => [
            'FORM_SUCCESS' => 'Votre enregistrement a été reçu. Votre numéro de référence est : %s',
            'FORM_VALIDATION_FAILED' => 'Veuillez compléter tous les champs obligatoires ainsi que la case de consentement.',
            'SECURITY_VALIDATION_FAILED' => 'La validation de sécurité a échoué. Veuillez actualiser la page et réessayer.',
            'RATE_LIMITED' => 'Trop de tentatives ont été effectuées. Veuillez réessayer plus tard.',
            'BOT_DETECTED' => 'L’envoi du formulaire a été rejeté pour des raisons de sécurité.',
            'FORM_TOO_FAST' => 'Le formulaire a été soumis trop rapidement. Veuillez réessayer.',
            'FILE_WRITE_FAILED' => 'L’enregistrement n’a pas pu être créé. Veuillez vérifier les permissions d’écriture du serveur.'
        ],
        'ai_header' => 'GUIDE DU SEUIL',
        'ai_welcome' => 'Je peux vous orienter vers la bonne porte selon la nature de votre contact. Il suffit d’écrire en quelques mots si vous êtes client, partenaire, candidat ou visiteur démo.',
        'ai_placeholder' => 'Si vous hésitez, écrivez quelques mots...',
        'ai_send' => 'ORIENTER',
        'ai_quick' => ['Je suis client', 'Je veux devenir partenaire', 'Candidature de stage', 'Je veux seulement voir la démo'],
        'lang_current' => 'FR | FRANÇAIS',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => 'Cette demande semble plus proche du seuil client / demande privée. J’ai présélectionné la nature du contact en conséquence.',
            'partner' => 'Cette candidature semble mieux convenir au seuil partenaire / collaboration. J’ai présélectionné la nature du contact correspondante.',
            'candidate' => 'Ce contenu semble plus proche de la ligne stagiaire / candidat / participant. J’ai présélectionné le champ correspondant.',
            'demo' => 'Vous semblez davantage être un visiteur démo / exploration. J’ai présélectionné le champ correspondant.',
            'general' => 'Il semble plus exact d’évaluer votre message comme un premier contact général. J’ai présélectionné le champ correspondant.'
        ]
    ],

    'es' => [
        'dir' => 'ltr',
        'html_lang' => 'es',
        'page_title' => 'Primer contacto | FOR YOU ARK',
        'home' => '← INICIO',
        'idle' => 'SISTEMA EN REPOSO. TOQUE PARA DESPERTAR.',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => 'ÁREA DE EVALUACIÓN PRELIMINAR',
        'hero_title' => 'PRIMER CONTACTO',
        'hero_lead' => 'Esta área es la capa de evaluación preliminar para el primer contacto serio que se establecerá con FOR YOU ARK.',
        'hero_note' => 'No todos los mensajes avanzan por el mismo camino. Algunas solicitudes se dirigen directamente al umbral correspondiente, mientras que otras se manejan mediante una lógica de canal especial después de una revisión inicial.',
        'side_1_title' => 'SELECTIVIDAD',
        'side_1_text' => 'Cada registro que se deja aquí se evalúa no por volumen, sino por idoneidad.',
        'side_2_title' => 'PRIVACIDAD',
        'side_2_text' => 'La información compartida se maneja con acceso limitado únicamente dentro del marco del primer contacto y la derivación.',
        'side_3_title' => 'EL UMBRAL CORRECTO',
        'side_3_text' => 'No se utiliza la misma puerta para clientes, socios, candidatos o visitantes demo. Este salón existe para ayudarle a encontrar el pasaje correcto.',
        'process_title' => '¿CÓMO FUNCIONA EL PRIMER CONTACTO?',
        'process_items' => [
            'Se identifica la naturaleza de su contacto y se separa el umbral adecuado.',
            'Si se considera necesario, el registro se deriva a la línea operativa correspondiente.',
            'No todos los registros se manejan al mismo ritmo, sino según idoneidad y prioridad.'
        ],
        'privacy_title' => 'PRIVACIDAD Y CONFIANZA',
        'privacy_text' => 'Esta área no es una lista de marketing directo. La información dejada aquí se maneja con acceso limitado para fines de primera derivación y evaluación preliminar.',
        'form_title' => 'REGISTRO GENERAL DE EVALUACIÓN PRELIMINAR',
        'form_subtitle' => 'Si no pudo elegir la puerta correcta o desea dejar un breve registro inicial, puede utilizar el área de abajo.',
        'labels' => [
            'full_name' => 'NOMBRE Y APELLIDO',
            'email' => 'CORREO ELECTRÓNICO',
            'phone' => 'TELÉFONO / WHATSAPP',
            'preferred_channel' => 'CANAL DE CONTACTO PREFERIDO',
            'city_country' => 'CIUDAD / PAÍS',
            'representation' => 'TIPO DE REPRESENTACIÓN',
            'contact_type' => 'NATURALEZA DEL CONTACTO',
            'message' => 'NOTA DE PRIMER CONTACTO'
        ],
        'placeholders' => [
            'full_name' => 'Su nombre y apellido',
            'email' => 'ejemplo@mail.com',
            'phone' => '+90...',
            'city_country' => 'Izmir / Turquía',
            'message' => 'Puede compartir en unas pocas frases la naturaleza de su contacto, su expectativa y, si es necesario, su sensibilidad respecto a la privacidad.'
        ],
        'channels' => [
            '' => 'Seleccionar',
            'email' => 'Correo electrónico',
            'phone' => 'Teléfono',
            'whatsapp' => 'WhatsApp',
            'assistant' => 'A través de un representante'
        ],
        'representations' => [
            '' => 'Seleccionar',
            'individual' => 'Individual',
            'family' => 'En nombre de la familia',
            'representative' => 'A través de un representante',
            'office' => 'En nombre de una oficina corporativa / privada'
        ],
        'contact_types' => [
            '' => 'Seleccionar',
            'client' => 'Cliente / Solicitud privada',
            'partner' => 'Socio / Colaboración',
            'candidate' => 'Practicante / Cursante / Candidato',
            'demo' => 'Demo / Revisión arquitectónica',
            'general' => 'Primer contacto general'
        ],
        'quick_title' => 'CONTACTO RÁPIDO',
        'quick_text' => 'Si desea comunicarse rápidamente sin fricción innecesaria, puede utilizar los canales a continuación.',
        'quick_email' => 'CORREO ELECTRÓNICO',
        'quick_whatsapp' => 'WHATSAPP',
        'consent' => 'Acepto que la información que comparto sea tratada con acceso limitado para fines de primer contacto, derivación y evaluación preliminar.',
        'form_meta' => 'Los registros considerados adecuados avanzan por un canal privado. Esta área no garantiza una aceptación automática.',
        'submit' => 'SELLAR EL PRIMER CONTACTO',
        'alerts' => [
            'FORM_SUCCESS' => 'Su registro ha sido recibido. Su número de referencia es: %s',
            'FORM_VALIDATION_FAILED' => 'Por favor complete todos los campos obligatorios y la casilla de consentimiento.',
            'SECURITY_VALIDATION_FAILED' => 'La validación de seguridad falló. Actualice la página e inténtelo de nuevo.',
            'RATE_LIMITED' => 'Se realizaron demasiados intentos. Inténtelo nuevamente más tarde.',
            'BOT_DETECTED' => 'El envío del formulario fue rechazado por motivos de seguridad.',
            'FORM_TOO_FAST' => 'El formulario se envió demasiado rápido. Inténtelo nuevamente.',
            'FILE_WRITE_FAILED' => 'No se pudo crear el registro. Verifique los permisos de escritura del servidor.'
        ],
        'ai_header' => 'GUÍA DEL UMBRAL',
        'ai_welcome' => 'Puedo guiarle hacia la puerta correcta según la naturaleza de su contacto. Basta con escribir en pocas palabras si usted es cliente, socio, candidato o visitante demo.',
        'ai_placeholder' => 'Si no está seguro, escriba unas pocas palabras...',
        'ai_send' => 'DIRIGIR',
        'ai_quick' => ['Soy cliente', 'Quiero ser socio', 'Solicitud de prácticas', 'Solo quiero ver la demo'],
        'lang_current' => 'ES | ESPAÑOL',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => 'Esta solicitud parece más cercana al umbral de cliente / solicitud privada. He preseleccionado la naturaleza del contacto en consecuencia.',
            'partner' => 'Esta solicitud parece más adecuada para el umbral de socio / colaboración. He preseleccionado la naturaleza de contacto correspondiente.',
            'candidate' => 'Este contenido parece más cercano a la línea de practicante / cursante / candidato. He preseleccionado el campo correspondiente.',
            'demo' => 'Usted parece más un visitante de demo / exploración. He preseleccionado el campo correspondiente.',
            'general' => 'Parece más correcto evaluar su mensaje como un primer contacto general. He preseleccionado el campo correspondiente.'
        ]
    ],

    'ru' => [
        'dir' => 'ltr',
        'html_lang' => 'ru',
        'page_title' => 'Первый контакт | FOR YOU ARK',
        'home' => '← ГЛАВНАЯ',
        'idle' => 'СИСТЕМА В РЕЖИМЕ СНА. КОСНИТЕСЬ, ЧТОБЫ РАЗБУДИТЬ.',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => 'ЗОНА ПРЕДВАРИТЕЛЬНОЙ ОЦЕНКИ',
        'hero_title' => 'ПЕРВЫЙ КОНТАКТ',
        'hero_lead' => 'Эта зона является уровнем предварительной оценки для первого серьёзного контакта с FOR YOU ARK.',
        'hero_note' => 'Не каждое сообщение проходит одним и тем же путём. Некоторые обращения направляются сразу к соответствующему порогу, а другие обрабатываются по логике специального канала после первичного рассмотрения.',
        'side_1_title' => 'ИЗБИРАТЕЛЬНОСТЬ',
        'side_1_text' => 'Каждая запись, оставленная здесь, оценивается не по объёму, а по соответствию.',
        'side_2_title' => 'КОНФИДЕНЦИАЛЬНОСТЬ',
        'side_2_text' => 'Предоставленная информация обрабатывается с ограниченным доступом исключительно в рамках первого контакта и маршрутизации.',
        'side_3_title' => 'ПРАВИЛЬНЫЙ ПОРОГ',
        'side_3_text' => 'Для клиентов, партнёров, кандидатов или посетителей демо не используется один и тот же вход. Этот зал создан, чтобы помочь вам найти правильный проход.',
        'process_title' => 'КАК РАБОТАЕТ ПЕРВЫЙ КОНТАКТ?',
        'process_items' => [
            'Определяется характер вашего обращения и отделяется подходящий порог.',
            'При необходимости запись направляется на соответствующую операционную линию.',
            'Не каждая запись обрабатывается с одинаковой скоростью, а в соответствии с уместностью и приоритетом.'
        ],
        'privacy_title' => 'КОНФИДЕНЦИАЛЬНОСТЬ И ДОВЕРИЕ',
        'privacy_text' => 'Эта зона не является прямым маркетинговым списком. Информация, оставленная здесь, обрабатывается с ограниченным доступом для целей первичной маршрутизации и предварительной оценки.',
        'form_title' => 'ОБЩАЯ ЗАПИСЬ ПРЕДВАРИТЕЛЬНОЙ ОЦЕНКИ',
        'form_subtitle' => 'Если вы не смогли выбрать правильную дверь или хотите оставить краткую первичную запись, вы можете использовать область ниже.',
        'labels' => [
            'full_name' => 'ИМЯ И ФАМИЛИЯ',
            'email' => 'ЭЛЕКТРОННАЯ ПОЧТА',
            'phone' => 'ТЕЛЕФОН / WHATSAPP',
            'preferred_channel' => 'ПРЕДПОЧТИТЕЛЬНЫЙ КАНАЛ СВЯЗИ',
            'city_country' => 'ГОРОД / СТРАНА',
            'representation' => 'ТИП ПРЕДСТАВИТЕЛЬСТВА',
            'contact_type' => 'ХАРАКТЕР ОБРАЩЕНИЯ',
            'message' => 'ПРИМЕЧАНИЕ К ПЕРВОМУ КОНТАКТУ'
        ],
        'placeholders' => [
            'full_name' => 'Ваше имя и фамилия',
            'email' => 'example@mail.com',
            'phone' => '+90...',
            'city_country' => 'Измир / Турция',
            'message' => 'Вы можете в нескольких предложениях описать характер вашего обращения, ожидания и, при необходимости, чувствительность к конфиденциальности.'
        ],
        'channels' => [
            '' => 'Выберите',
            'email' => 'Электронная почта',
            'phone' => 'Телефон',
            'whatsapp' => 'WhatsApp',
            'assistant' => 'Через представителя'
        ],
        'representations' => [
            '' => 'Выберите',
            'individual' => 'Индивидуально',
            'family' => 'От имени семьи',
            'representative' => 'Через представителя',
            'office' => 'От имени корпоративного / частного офиса'
        ],
        'contact_types' => [
            '' => 'Выберите',
            'client' => 'Клиент / Частный запрос',
            'partner' => 'Партнёр / Сотрудничество',
            'candidate' => 'Стажёр / Участник курса / Кандидат',
            'demo' => 'Демо / Архитектурный обзор',
            'general' => 'Общий первый контакт'
        ],
        'quick_title' => 'БЫСТРЫЙ КОНТАКТ',
        'quick_text' => 'Если вы хотите быстро связаться с нами без лишних сложностей, вы можете использовать каналы ниже.',
        'quick_email' => 'ЭЛЕКТРОННАЯ ПОЧТА',
        'quick_whatsapp' => 'WHATSAPP',
        'consent' => 'Я принимаю, что информация, которую я предоставляю, будет обрабатываться с ограниченным доступом для целей первого контакта, маршрутизации и предварительной оценки.',
        'form_meta' => 'Записи, признанные подходящими, переводятся в частный канал. Эта зона не гарантирует автоматического принятия.',
        'submit' => 'ЗАПЕЧАТАТЬ ПЕРВЫЙ КОНТАКТ',
        'alerts' => [
            'FORM_SUCCESS' => 'Ваша запись получена. Ваш номер ссылки: %s',
            'FORM_VALIDATION_FAILED' => 'Пожалуйста, заполните все обязательные поля и отметьте поле согласия.',
            'SECURITY_VALIDATION_FAILED' => 'Проверка безопасности не удалась. Обновите страницу и попробуйте снова.',
            'RATE_LIMITED' => 'Было выполнено слишком много попыток. Пожалуйста, попробуйте позже.',
            'BOT_DETECTED' => 'Отправка формы была отклонена по соображениям безопасности.',
            'FORM_TOO_FAST' => 'Форма была отправлена слишком быстро. Пожалуйста, попробуйте снова.',
            'FILE_WRITE_FAILED' => 'Запись не удалось создать. Проверьте права сервера на запись.'
        ],
        'ai_header' => 'ПУТЕВОДИТЕЛЬ ПО ПОРОГУ',
        'ai_welcome' => 'Я могу направить вас к правильной двери в зависимости от характера вашего обращения. Достаточно написать несколькими словами, являетесь ли вы клиентом, партнёром, кандидатом или посетителем демо.',
        'ai_placeholder' => 'Если вы не уверены, напишите пару слов...',
        'ai_send' => 'НАПРАВИТЬ',
        'ai_quick' => ['Я клиент', 'Я хочу стать партнёром', 'Заявка на стажировку', 'Я хочу только увидеть демо'],
        'lang_current' => 'RU | РУССКИЙ',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => 'Этот запрос выглядит ближе к порогу клиент / частный запрос. Я предварительно выбрал соответствующий характер обращения.',
            'partner' => 'Это обращение больше подходит для порога партнёр / сотрудничество. Я предварительно выбрал соответствующий характер обращения.',
            'candidate' => 'Это содержание выглядит ближе к линии стажёр / участник курса / кандидат. Я предварительно выбрал соответствующее поле.',
            'demo' => 'Вы больше похожи на посетителя демо / исследования. Я предварительно выбрал соответствующее поле.',
            'general' => 'Похоже, наиболее правильно оценить ваше сообщение как общий первый контакт. Я предварительно выбрал соответствующее поле.'
        ]
    ],

    'ar' => [
        'dir' => 'rtl',
        'html_lang' => 'ar',
        'page_title' => 'الاتصال الأول | FOR YOU ARK',
        'home' => 'الصفحة الرئيسية →',
        'idle' => 'النظام في وضع السكون. المس للإيقاظ.',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => 'منطقة التقييم الأولي',
        'hero_title' => 'الاتصال الأول',
        'hero_lead' => 'هذه المنطقة هي طبقة التقييم الأولي لأول تواصل جاد سيتم إنشاؤه مع FOR YOU ARK.',
        'hero_note' => 'ليست كل رسالة تسير في الطريق نفسه. بعض الطلبات تُوجَّه مباشرة إلى العتبة المناسبة، بينما تُعالَج طلبات أخرى بمنطق قناة خاصة بعد المراجعة الأولية.',
        'side_1_title' => 'الانتقائية',
        'side_1_text' => 'كل سجل يُترك هنا لا يتم تقييمه من أجل العدد، بل من أجل الملاءمة.',
        'side_2_title' => 'الخصوصية',
        'side_2_text' => 'يتم التعامل مع المعلومات المشتركة ضمن نطاق الاتصال الأولي والتوجيه فقط وبوصول محدود.',
        'side_3_title' => 'العتبة الصحيحة',
        'side_3_text' => 'لا تُستخدم البوابة نفسها للعملاء أو الشركاء أو المرشحين أو زوار العرض التجريبي. هذا الجناح موجود لمساعدتك على العثور على المعبر الصحيح.',
        'process_title' => 'كيف يعمل الاتصال الأول؟',
        'process_items' => [
            'يتم تحديد طبيعة تواصلك وفصل العتبة المناسبة.',
            'إذا لزم الأمر، يتم توجيه السجل إلى المسار التشغيلي المعني.',
            'لا تتم معالجة كل السجلات بالسرعة نفسها، بل وفقاً للملاءمة والأولوية.'
        ],
        'privacy_title' => 'الخصوصية والثقة',
        'privacy_text' => 'هذه المنطقة ليست قائمة تسويق مباشرة. المعلومات التي تُترك هنا تُعالَج بوصول محدود لأغراض التوجيه الأولي والتقييم المبدئي.',
        'form_title' => 'سجل التقييم الأولي العام',
        'form_subtitle' => 'إذا لم تتمكن من اختيار البوابة الصحيحة أو كنت ترغب في ترك سجل أولي موجز، يمكنك استخدام المساحة أدناه.',
        'labels' => [
            'full_name' => 'الاسم الكامل',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف / واتساب',
            'preferred_channel' => 'قناة الاتصال المفضلة',
            'city_country' => 'المدينة / الدولة',
            'representation' => 'نوع التمثيل',
            'contact_type' => 'طبيعة التواصل',
            'message' => 'ملاحظة الاتصال الأول'
        ],
        'placeholders' => [
            'full_name' => 'اسمك الكامل',
            'email' => 'example@mail.com',
            'phone' => '+90...',
            'city_country' => 'إزمير / تركيا',
            'message' => 'يمكنك مشاركة طبيعة تواصلك وتوقعاتك، وإذا لزم الأمر، حساسيتك تجاه الخصوصية في بضع جمل.'
        ],
        'channels' => [
            '' => 'اختر',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف',
            'whatsapp' => 'واتساب',
            'assistant' => 'عبر ممثل'
        ],
        'representations' => [
            '' => 'اختر',
            'individual' => 'فردي',
            'family' => 'نيابة عن العائلة',
            'representative' => 'عبر ممثل',
            'office' => 'نيابة عن مكتب خاص / مؤسسي'
        ],
        'contact_types' => [
            '' => 'اختر',
            'client' => 'عميل / طلب خاص',
            'partner' => 'شريك / تعاون',
            'candidate' => 'متدرب / متقدم / مرشح',
            'demo' => 'عرض تجريبي / مراجعة معمارية',
            'general' => 'اتصال أول عام'
        ],
        'quick_title' => 'اتصال سريع',
        'quick_text' => 'إذا كنت ترغب في الوصول إلينا بسرعة ودون تعقيد، يمكنك استخدام القنوات التالية.',
        'quick_email' => 'البريد الإلكتروني',
        'quick_whatsapp' => 'واتساب',
        'consent' => 'أوافق على أن تتم معالجة المعلومات التي أشاركها ضمن نطاق وصول محدود لأغراض الاتصال الأولي والتوجيه والتقييم الأولي.',
        'form_meta' => 'يتم متابعة السجلات المناسبة عبر قناة خاصة. هذه المنطقة لا تقدم ضمان قبول تلقائي.',
        'submit' => 'اختم الاتصال الأول',
        'alerts' => [
            'FORM_SUCCESS' => 'تم استلام سجلك. رقم المرجع الخاص بك هو: %s',
            'FORM_VALIDATION_FAILED' => 'يرجى إكمال جميع الحقول المطلوبة وخانة الموافقة.',
            'SECURITY_VALIDATION_FAILED' => 'فشل التحقق الأمني. يرجى تحديث الصفحة والمحاولة مرة أخرى.',
            'RATE_LIMITED' => 'تم إجراء عدد كبير جداً من المحاولات. يرجى المحاولة لاحقاً.',
            'BOT_DETECTED' => 'تم رفض إرسال النموذج لأسباب أمنية.',
            'FORM_TOO_FAST' => 'تم إرسال النموذج بسرعة كبيرة. يرجى المحاولة مرة أخرى.',
            'FILE_WRITE_FAILED' => 'تعذر إنشاء السجل. يرجى التحقق من أذونات الكتابة على الخادم.'
        ],
        'ai_header' => 'دليل العتبة',
        'ai_welcome' => 'يمكنني توجيهك إلى البوابة الصحيحة وفقاً لطبيعة تواصلك. يكفي أن تكتب بكلمات قليلة ما إذا كنت عميلاً أو شريكاً أو مرشحاً أو زائراً للعرض التجريبي.',
        'ai_placeholder' => 'إذا كنت متردداً، اكتب بضع كلمات...',
        'ai_send' => 'وجّه',
        'ai_quick' => ['أنا عميل', 'أريد أن أصبح شريكاً', 'طلب تدريب', 'أريد فقط رؤية العرض التجريبي'],
        'lang_current' => 'AR | العربية',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => 'يبدو أن هذا الطلب أقرب إلى عتبة العميل / الطلب الخاص. لقد قمت بتحديد طبيعة التواصل مسبقاً وفقاً لذلك.',
            'partner' => 'يبدو أن هذا الطلب أنسب لعتبة الشريك / التعاون. لقد قمت بتحديد طبيعة التواصل المناسبة مسبقاً.',
            'candidate' => 'يبدو أن هذا المحتوى أقرب إلى مسار المتدرب / المتقدم / المرشح. لقد قمت بتحديد الحقل المناسب مسبقاً.',
            'demo' => 'يبدو أنك أقرب إلى زائر عرض تجريبي / استكشاف. لقد قمت بتحديد الحقل المناسب مسبقاً.',
            'general' => 'يبدو أن التقييم الأدق لرسالتك هو اعتبارها اتصالاً أولياً عاماً. لقد قمت بتحديد الحقل المناسب مسبقاً.'
        ]
    ],

    'zh' => [
        'dir' => 'ltr',
        'html_lang' => 'zh-CN',
        'page_title' => '首次联系 | FOR YOU ARK',
        'home' => '← 首页',
        'idle' => '系统休眠中。触碰即可唤醒。',
        'brand' => 'FOR YOU ARK',
        'hero_eyebrow' => '初步评估区域',
        'hero_title' => '首次联系',
        'hero_lead' => '该区域是与 FOR YOU ARK 建立首次严肃接触的初步评估层。',
        'hero_note' => '并非每一条信息都会经过同一条路径。有些申请会被直接引导至相应门槛，而有些则会在初步审查后通过特殊通道逻辑处理。',
        'side_1_title' => '甄选性',
        'side_1_text' => '留在这里的每一条记录都不是为了数量而评估，而是为了适配性。',
        'side_2_title' => '隐私',
        'side_2_text' => '所分享的信息仅在首次联系和引导框架内以受限访问方式处理。',
        'side_3_title' => '正确门槛',
        'side_3_text' => '客户、合作伙伴、候选人或演示访客不会使用同一扇门。这个厅堂的存在，是为了帮助您找到正确的通道。',
        'process_title' => '首次联系如何运作？',
        'process_items' => [
            '首先识别您的联系性质，并区分适当的门槛。',
            '如有必要，记录将被引导至相关运营线路。',
            '并非所有记录都会以相同速度处理，而是依据适配性与优先级。'
        ],
        'privacy_title' => '隐私与信任',
        'privacy_text' => '该区域并不是一个直接营销名单。留在这里的信息仅会以受限访问方式用于初步引导和初步评估。',
        'form_title' => '通用初步评估记录',
        'form_subtitle' => '如果您无法确定正确入口，或者只想留下简短的首次记录，您可以使用下方区域。',
        'labels' => [
            'full_name' => '姓名',
            'email' => '电子邮箱',
            'phone' => '电话 / WHATSAPP',
            'preferred_channel' => '首选联系渠道',
            'city_country' => '城市 / 国家',
            'representation' => '代表类型',
            'contact_type' => '联系性质',
            'message' => '首次联系说明'
        ],
        'placeholders' => [
            'full_name' => '您的姓名',
            'email' => 'example@mail.com',
            'phone' => '+90...',
            'city_country' => '伊兹密尔 / 土耳其',
            'message' => '您可以用几句话说明联系性质、期望内容，以及在需要时对隐私的敏感程度。'
        ],
        'channels' => [
            '' => '请选择',
            'email' => '电子邮箱',
            'phone' => '电话',
            'whatsapp' => 'WhatsApp',
            'assistant' => '通过代表'
        ],
        'representations' => [
            '' => '请选择',
            'individual' => '个人',
            'family' => '代表家庭',
            'representative' => '通过代表',
            'office' => '代表企业 / 私人办公室'
        ],
        'contact_types' => [
            '' => '请选择',
            'client' => '客户 / 私人请求',
            'partner' => '合作伙伴 / 合作',
            'candidate' => '实习生 / 学员 / 候选人',
            'demo' => '演示 / 架构审查',
            'general' => '一般首次联系'
        ],
        'quick_title' => '快速联系',
        'quick_text' => '如果您希望快速联系我们而不想经历繁琐流程，可以使用以下渠道。',
        'quick_email' => '电子邮箱',
        'quick_whatsapp' => 'WHATSAPP',
        'consent' => '我同意，我所分享的信息将以受限访问方式用于首次联系、引导与初步评估。',
        'form_meta' => '被认为合适的记录会通过私人通道继续推进。该区域不提供自动接受保证。',
        'submit' => '封存首次联系',
        'alerts' => [
            'FORM_SUCCESS' => '您的记录已收到。您的参考编号是：%s',
            'FORM_VALIDATION_FAILED' => '请完整填写所有必填字段并勾选同意框。',
            'SECURITY_VALIDATION_FAILED' => '安全验证失败。请刷新页面后重试。',
            'RATE_LIMITED' => '尝试次数过多。请稍后再试。',
            'BOT_DETECTED' => '出于安全原因，表单提交被拒绝。',
            'FORM_TOO_FAST' => '表单提交过快。请重新尝试。',
            'FILE_WRITE_FAILED' => '无法创建记录。请检查服务器写入权限。'
        ],
        'ai_header' => '门槛向导',
        'ai_welcome' => '我可以根据您的联系性质，引导您前往正确入口。您只需用几个词说明您是客户、合作伙伴、候选人还是演示访客即可。',
        'ai_placeholder' => '如果您还拿不准，可以写几个词……',
        'ai_send' => '引导',
        'ai_quick' => ['我是客户', '我想成为合作伙伴', '实习申请', '我只想查看演示'],
        'lang_current' => 'ZH | 中文',
        'lang_options' => [
            'tr' => 'TR | Türkçe',
            'en' => 'EN | English',
            'de' => 'DE | Deutsch',
            'fr' => 'FR | Français',
            'es' => 'ES | Español',
            'ru' => 'RU | Русский',
            'ar' => 'AR | العربية',
            'zh' => 'ZH | 中文'
        ],
        'ai_responses' => [
            'client' => '该请求看起来更接近客户 / 私人请求门槛。我已据此预先选择联系性质。',
            'partner' => '该申请看起来更适合合作伙伴 / 协作门槛。我已预先选择相应的联系性质。',
            'candidate' => '该内容看起来更接近实习生 / 学员 / 候选人线路。我已预先选择相应字段。',
            'demo' => '您看起来更像演示 / 探索访客。我已预先选择相应字段。',
            'general' => '将您的信息评估为一般首次联系似乎更准确。我已据此预先选择相应字段。'
        ]
    ]
];

$currentLang = strtolower((string)($_GET['lang'] ?? $_POST['lang'] ?? 'tr'));
if (!fyark_in_array_strict($currentLang, FYARK_ALLOWED_LANGS)) {
    $currentLang = 'tr';
}
$t = $langData[$currentLang];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (fyark_is_rate_limited()) {
        $submitStatus = 'error';
        $submitMessage = 'RATE_LIMITED';
    } elseif (!empty($_POST['website'])) {
        fyark_register_attempt();
        $submitStatus = 'error';
        $submitMessage = 'BOT_DETECTED';
    } elseif (!fyark_validate_form_time()) {
        fyark_register_attempt();
        $submitStatus = 'error';
        $submitMessage = 'FORM_TOO_FAST';
    } elseif (!fyark_validate_csrf_token($_POST['csrf_token'] ?? null)) {
        fyark_register_attempt();
        $submitStatus = 'error';
        $submitMessage = 'SECURITY_VALIDATION_FAILED';
    } else {
        fyark_register_attempt();

        $name = fyark_clean_text($_POST['full_name'] ?? '');
        $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $phone = fyark_clean_text($_POST['phone'] ?? '');
        $cityCountry = fyark_clean_text($_POST['city_country'] ?? '');
        $contactType = fyark_clean_text($_POST['contact_type'] ?? '');
        $representation = fyark_clean_text($_POST['representation'] ?? '');
        $preferredChannel = fyark_clean_text($_POST['preferred_channel'] ?? '');
        $message = fyark_clean_message($_POST['message'] ?? '');
        $consent = isset($_POST['consent']) ? 1 : 0;
        $lang = fyark_clean_text($_POST['lang'] ?? 'tr');

        $valid =
            $name !== '' &&
            $email !== '' &&
            filter_var($email, FILTER_VALIDATE_EMAIL) &&
            $contactType !== '' &&
            $message !== '' &&
            $consent === 1 &&
            fyark_in_array_strict($lang, FYARK_ALLOWED_LANGS) &&
            fyark_in_array_strict($contactType, FYARK_ALLOWED_CONTACT_TYPES) &&
            fyark_in_array_strict($representation, FYARK_ALLOWED_REPRESENTATIONS) &&
            fyark_in_array_strict($preferredChannel, FYARK_ALLOWED_CHANNELS);

        if (!$valid) {
            $submitStatus = 'error';
            $submitMessage = 'FORM_VALIDATION_FAILED';
        } else {
            $referenceId = fyark_create_reference_id();

            $record = [
                'reference_id' => $referenceId,
                'created_at' => date('Y-m-d H:i:s'),
                'ip' => fyark_client_ip(),
                'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
                'language' => $lang,
                'full_name' => $name,
                'email' => $email,
                'phone' => $phone,
                'city_country' => $cityCountry,
                'contact_type' => $contactType,
                'representation' => $representation,
                'preferred_channel' => $preferredChannel,
                'message' => $message,
                'consent' => $consent,
                'status' => 'new'
            ];

            if (fyark_save_contact($record)) {
                $submitStatus = 'success';
                $submitMessage = 'FORM_SUCCESS';

                $_POST = [];
                unset($_SESSION['form_started_at']);
                fyark_generate_form_token();
                fyark_generate_csrf_token();
            } else {
                $submitStatus = 'error';
                $submitMessage = 'FILE_WRITE_FAILED';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($t['html_lang'], ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($t['dir'], ENT_QUOTES, 'UTF-8'); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo htmlspecialchars($t['page_title'], ENT_QUOTES, 'UTF-8'); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700;900&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root{
            --gold-base:#d4af37;
            --gold-bright:#ffdf86;
            --gold-dark:#8b6914;
            --gold-glow:rgba(212,175,55,.55);
            --panel:rgba(8,8,8,.72);
            --line:rgba(212,175,55,.28);
            --soft-white:#ece6d7;
            --muted:#cdbf9d;
            --shadow:0 30px 80px rgba(0,0,0,.55);
            --radius:22px;
            --danger:#b86f52;
            --success:#bfa14a;
            --telecom-blue:rgba(86,160,255,.14);
            --telecom-blue-2:rgba(109,196,255,.10);
            --telecom-grid:rgba(140,200,255,.08);
        }

        *{margin:0;padding:0;box-sizing:border-box}

        html,body{
            width:100%;
            min-height:100%;
            background:#000;
            color:#fff;
            font-family:'Cormorant Garamond',serif;
            overflow:hidden;
        }

        body{
            position:relative;
            isolation:isolate;
            perspective:2400px;
            background:
                radial-gradient(circle at 20% 15%, rgba(255,223,134,.06) 0%, rgba(255,223,134,0) 18%),
                radial-gradient(circle at 80% 18%, rgba(212,175,55,.06) 0%, rgba(212,175,55,0) 20%),
                radial-gradient(circle at 50% 85%, rgba(212,175,55,.05) 0%, rgba(212,175,55,0) 25%),
                linear-gradient(140deg, #020202 0%, #070707 34%, #030303 60%, #090909 100%);
        }

        .telecom-bg,
        .telecom-grid,
        .telecom-beams,
        .telecom-pulses,
        .bg-veil{
            position:fixed;
            inset:0;
            pointer-events:none;
        }

        .telecom-bg{
            z-index:1;
            background:
                radial-gradient(circle at 12% 20%, rgba(94,165,255,.10) 0%, rgba(94,165,255,0) 22%),
                radial-gradient(circle at 86% 18%, rgba(106,193,255,.10) 0%, rgba(106,193,255,0) 22%),
                radial-gradient(circle at 50% 78%, rgba(88,157,255,.08) 0%, rgba(88,157,255,0) 28%),
                linear-gradient(180deg, rgba(0,10,24,.20), rgba(0,0,0,0));
            animation:telecomFloat 16s ease-in-out infinite alternate;
        }

        .telecom-grid{
            z-index:2;
            background:
                repeating-linear-gradient(90deg,
                    rgba(140,200,255,.06) 0px,
                    rgba(140,200,255,.06) 1px,
                    transparent 1px,
                    transparent 130px
                ),
                repeating-linear-gradient(180deg,
                    rgba(140,200,255,.04) 0px,
                    rgba(140,200,255,.04) 1px,
                    transparent 1px,
                    transparent 110px
                );
            opacity:.48;
            transform-origin:center;
            animation:gridDrift 22s linear infinite;
        }

        .telecom-beams{
            z-index:3;
            background:
                linear-gradient(115deg, transparent 0%, rgba(96,182,255,.12) 16%, transparent 22%),
                linear-gradient(62deg, transparent 0%, transparent 71%, rgba(255,223,134,.07) 79%, transparent 84%),
                linear-gradient(145deg, transparent 0%, rgba(103,198,255,.08) 26%, transparent 34%);
            mix-blend-mode:screen;
            animation:beamShift 12s ease-in-out infinite;
        }

        .telecom-pulses{
            z-index:4;
            overflow:hidden;
        }

        .telecom-pulses::before,
        .telecom-pulses::after{
            content:'';
            position:absolute;
            border-radius:50%;
            border:1px solid rgba(122,192,255,.16);
            box-shadow:0 0 40px rgba(122,192,255,.08), inset 0 0 30px rgba(122,192,255,.04);
            animation:pulseRing 8s linear infinite;
        }

        .telecom-pulses::before{
            width:460px;
            height:460px;
            left:-120px;
            bottom:-120px;
        }

        .telecom-pulses::after{
            width:380px;
            height:380px;
            right:-80px;
            top:-80px;
            animation-delay:2.2s;
        }

        .bg-veil{
            z-index:5;
            background:
                linear-gradient(90deg, rgba(0,0,0,.24), rgba(0,0,0,.08), rgba(0,0,0,.18)),
                radial-gradient(circle at center, rgba(0,0,0,0) 0%, rgba(0,0,0,.22) 72%, rgba(0,0,0,.50) 100%);
        }

        @keyframes telecomFloat{
            0%{transform:translate3d(0,0,0) scale(1)}
            100%{transform:translate3d(0,-1.5%,0) scale(1.03)}
        }

        @keyframes gridDrift{
            0%{transform:translate3d(0,0,0)}
            50%{transform:translate3d(-20px,14px,0)}
            100%{transform:translate3d(0,0,0)}
        }

        @keyframes beamShift{
            0%{transform:translateX(0) scale(1)}
            50%{transform:translateX(-1.2%) scale(1.02)}
            100%{transform:translateX(0) scale(1)}
        }

        @keyframes pulseRing{
            0%{transform:scale(.86);opacity:.20}
            50%{transform:scale(1);opacity:.42}
            100%{transform:scale(1.14);opacity:.08}
        }

        .curtain-entrance{
            position:fixed;
            top:0;
            width:50vw;
            height:100vh;
            background:linear-gradient(90deg, #050000 0%, #160000 12%, #250000 24%, #120000 38%, #050000 100%);
            z-index:99999;
            box-shadow:inset 0 0 120px rgba(0,0,0,.95);
            transition:transform 1.8s cubic-bezier(.7,0,.3,1);
        }

        .curtain-entrance-left{
            left:0;
            border-right:8px solid var(--gold-dark);
            transform:translateX(0);
        }

        .curtain-entrance-right{
            right:0;
            border-left:8px solid var(--gold-dark);
            transform:translateX(0);
        }

        body.awake .curtain-entrance-left{transform:translateX(-100%)}
        body.awake .curtain-entrance-right{transform:translateX(100%)}

        #idle-curtain{
            position:fixed;
            inset:0;
            z-index:99998;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            gap:16px;
            background:radial-gradient(circle at center, #0c0a07 0%, #020202 70%, #000 100%);
            opacity:0;
            pointer-events:none;
            transition:opacity 1.1s ease;
        }

        #idle-curtain.active{
            opacity:1;
            pointer-events:auto;
            cursor:pointer;
        }

        .curtain-logo{
            font-family:'Cinzel Decorative',serif;
            font-size:clamp(2.2rem,5vw,5.2rem);
            letter-spacing:.35rem;
            color:var(--gold-bright);
            text-shadow:0 0 30px var(--gold-glow);
            text-align:center;
        }

        .curtain-sub{
            font-family:'Montserrat',sans-serif;
            font-size:.88rem;
            letter-spacing:.20rem;
            color:var(--muted);
            text-align:center;
            padding:0 20px;
        }

        .logo-container{
            position:fixed;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            width:190px;
            height:190px;
            z-index:12000;
            transition:all 1.2s cubic-bezier(.68,-0.55,.265,1.55);
            cursor:pointer;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .logo-container.cornered{
            top:30px;
            left:30px;
            transform:none;
            width:76px;
            height:76px;
        }

        [dir="rtl"] .logo-container.cornered{
            left:auto;
            right:30px;
        }

        .main-logo{
            width:100%;
            height:100%;
            border:2px solid var(--gold-base);
            border-radius:50%;
            padding:6%;
            background:rgba(0,0,0,.85);
            box-shadow:0 0 35px var(--gold-glow);
            object-fit:contain;
            animation:heartbeat 2.5s infinite ease-in-out;
        }

        @keyframes heartbeat{
            0%,100%{transform:scale(1);box-shadow:0 0 35px var(--gold-glow)}
            50%{transform:scale(1.05);box-shadow:0 0 60px var(--gold-glow)}
        }

        .lang-menu,.btn-home{
            position:fixed;
            top:28px;
            z-index:1200;
            background:rgba(0,0,0,.82);
            border:1px solid var(--gold-dark);
            color:var(--gold-bright);
            font-family:'Cinzel Decorative',serif;
            box-shadow:0 0 18px rgba(0,0,0,1), inset 0 0 10px rgba(212,175,55,.12);
            backdrop-filter:blur(8px);
            -webkit-backdrop-filter:blur(8px);
        }

        .lang-menu{
            right:34px;
            min-width:148px;
            border-radius:10px;
            overflow:hidden;
        }

        .lang-current{
            padding:11px 16px;
            cursor:pointer;
            font-size:.9rem;
            text-align:right;
        }

        .lang-dropdown{
            display:none;
            border-top:1px solid rgba(212,175,55,.16);
            background:rgba(0,0,0,.96);
        }

        .lang-menu:hover .lang-dropdown{
            display:block;
        }

        .lang-dropdown a{
            display:block;
            padding:10px 16px;
            color:var(--gold-base);
            text-decoration:none;
            font-family:'Montserrat',sans-serif;
            font-size:.85rem;
            transition:.25s;
        }

        .lang-dropdown a:hover{
            background:rgba(212,175,55,.08);
            color:var(--gold-bright);
            transform:translateX(-4px);
        }

        .btn-home{
            left:34px;
            text-decoration:none;
            padding:11px 18px;
            border-radius:10px;
            font-size:.82rem;
            letter-spacing:.14rem;
            transition:.35s;
        }

        .btn-home:hover,.lang-menu:hover{
            border-color:var(--gold-bright);
            box-shadow:0 0 24px var(--gold-glow);
        }

        .page-shell{
            position:relative;
            z-index:20;
            width:min(96vw, 1600px);
            height:min(94vh, 1000px);
            margin:3vh auto;
            display:flex;
            flex-direction:column;
            background:linear-gradient(180deg, rgba(10,10,10,.72), rgba(4,4,4,.86));
            border:1px solid rgba(212,175,55,.22);
            box-shadow:
                0 0 0 8px rgba(0,0,0,.72),
                0 0 0 10px rgba(212,175,55,.14),
                inset 0 0 50px rgba(0,0,0,.5),
                var(--shadow);
            backdrop-filter:blur(12px);
            -webkit-backdrop-filter:blur(12px);
            overflow:hidden;
            opacity:0;
            pointer-events:none;
            transform:translateY(14px);
            transition:opacity .7s ease, transform .7s ease;
        }

        body.awake .page-shell{
            opacity:1;
            pointer-events:auto;
            transform:translateY(0);
        }

        .page-shell::before{
            content:'';
            position:absolute;
            inset:15px;
            border:1px solid rgba(212,175,55,.16);
            pointer-events:none;
        }

        .rococo-ornament{
            position:absolute;
            z-index:4;
            font-size:2.25rem;
            color:var(--gold-bright);
            text-shadow:0 0 20px var(--gold-glow);
        }

        .top-left{top:0;left:2px;transform:rotate(-45deg)}
        .top-right{top:0;right:2px;transform:rotate(45deg)}
        .bottom-left{bottom:0;left:2px;transform:rotate(-135deg)}
        .bottom-right{bottom:0;right:2px;transform:rotate(135deg)}

        .brand-bar{
            position:relative;
            z-index:3;
            flex:0 0 auto;
            padding:28px 64px 18px;
            display:flex;
            align-items:center;
            justify-content:center;
            border-bottom:1px solid rgba(212,175,55,.12);
        }

        .brand-lock{
            display:flex;
            align-items:center;
            justify-content:center;
            gap:18px;
            direction:ltr !important;
            unicode-bidi:isolate;
            text-align:left;
        }

        .brand-lock img{
            width:66px;
            height:66px;
            object-fit:contain;
            filter:drop-shadow(0 0 16px var(--gold-glow));
        }

        .brand-text{
            font-family:'Cinzel Decorative',serif;
            font-size:clamp(1.4rem,2.8vw,2.6rem);
            letter-spacing:.35rem;
            color:var(--gold-bright);
            text-shadow:0 0 18px rgba(212,175,55,.35);
            white-space:nowrap;
        }

        .content-scroll{
            flex:1 1 auto;
            overflow:auto;
            padding:28px 44px 34px;
            scrollbar-width:thin;
            scrollbar-color:var(--gold-base) rgba(255,255,255,.04);
        }

        .content-scroll::-webkit-scrollbar{width:5px}
        .content-scroll::-webkit-scrollbar-thumb{background:var(--gold-base);border-radius:999px}
        .content-scroll::-webkit-scrollbar-track{background:rgba(255,255,255,.03)}

        .hero{
            display:grid;
            grid-template-columns:1.1fr .9fr;
            gap:26px;
            align-items:stretch;
            margin-bottom:24px;
        }

        .hero-main,.hero-side,.section-panel,.form-shell{
            background:linear-gradient(180deg, rgba(14,14,14,.82), rgba(7,7,7,.88));
            border:1px solid var(--line);
            border-radius:22px;
            box-shadow:inset 0 0 22px rgba(212,175,55,.04), 0 18px 35px rgba(0,0,0,.18);
        }

        .hero-main{
            padding:30px 30px 28px;
            position:relative;
            overflow:hidden;
        }

        .hero-main::after{
            content:'';
            position:absolute;
            inset:auto -12% -35% auto;
            width:300px;
            height:300px;
            border-radius:50%;
            background:
                radial-gradient(circle, rgba(212,175,55,.12) 0%, rgba(212,175,55,0) 68%),
                radial-gradient(circle at 55% 55%, rgba(95,175,255,.12) 0%, rgba(95,175,255,0) 58%);
            pointer-events:none;
        }

        .eyebrow{
            font-family:'Montserrat',sans-serif;
            color:var(--muted);
            font-size:.82rem;
            letter-spacing:.24rem;
            text-transform:uppercase;
            margin-bottom:12px;
        }

        .hero-title{
            font-family:'Cinzel Decorative',serif;
            color:var(--gold-bright);
            font-size:clamp(1.8rem,3.4vw,3rem);
            letter-spacing:.18rem;
            line-height:1.2;
            margin-bottom:14px;
            text-transform:uppercase;
        }

        .hero-lead{
            color:var(--soft-white);
            font-size:1.28rem;
            line-height:1.75;
            margin-bottom:18px;
        }

        .hero-note{
            font-size:1.02rem;
            line-height:1.75;
            color:var(--muted);
            padding-top:16px;
            border-top:1px solid rgba(212,175,55,.14);
        }

        .hero-side{
            padding:22px 22px 18px;
            display:grid;
            gap:14px;
        }

        .side-item{
            padding:16px 16px 14px;
            border:1px solid rgba(212,175,55,.12);
            border-radius:16px;
            background:rgba(255,255,255,.015);
        }

        .side-item h3{
            color:var(--gold-bright);
            font-family:'Cinzel Decorative',serif;
            font-size:1rem;
            letter-spacing:.12rem;
            margin-bottom:8px;
            line-height:1.45;
        }

        .side-item p{
            color:var(--soft-white);
            font-size:1rem;
            line-height:1.65;
        }

        .lower-grid{
            display:grid;
            grid-template-columns:1.05fr .95fr;
            gap:20px;
            align-items:start;
        }

        .left-stack{
            display:grid;
            gap:18px;
        }

        .section-panel{
            padding:20px 22px;
        }

        .section-panel h3{
            font-family:'Cinzel Decorative',serif;
            color:var(--gold-bright);
            font-size:1.1rem;
            letter-spacing:.08rem;
            margin-bottom:10px;
            line-height:1.45;
            text-transform:uppercase;
        }

        .section-panel p,.section-panel li{
            color:var(--soft-white);
            font-size:1.02rem;
            line-height:1.75;
        }

        .section-panel ul{
            padding-left:18px;
            display:grid;
            gap:8px;
        }

        .form-shell{
            padding:22px 22px 20px;
        }

        .form-head{
            margin-bottom:16px;
        }

        .form-head h3{
            font-family:'Cinzel Decorative',serif;
            color:var(--gold-bright);
            font-size:1.2rem;
            letter-spacing:.1rem;
            line-height:1.45;
            text-transform:uppercase;
            margin-bottom:8px;
        }

        .form-head p{
            color:var(--muted);
            font-size:1rem;
            line-height:1.65;
        }

        .alert{
            margin-bottom:14px;
            border-radius:16px;
            padding:14px 16px;
            font-family:'Montserrat',sans-serif;
            font-size:.9rem;
            line-height:1.6;
            border:1px solid rgba(212,175,55,.2);
        }

        .alert.success{
            background:rgba(191,161,74,.12);
            color:#f0dfaa;
            border-color:rgba(191,161,74,.35);
        }

        .alert.error{
            background:rgba(184,111,82,.12);
            color:#ffd1bf;
            border-color:rgba(184,111,82,.35);
        }

        .form-grid{
            display:grid;
            grid-template-columns:repeat(2, minmax(0, 1fr));
            gap:14px;
        }

        .field{
            display:flex;
            flex-direction:column;
            gap:8px;
        }

        .field.full{grid-column:1 / -1}

        .field label{
            font-family:'Montserrat',sans-serif;
            color:var(--muted);
            font-size:.78rem;
            letter-spacing:.1rem;
            text-transform:uppercase;
        }

        .field input,.field select,.field textarea{
            width:100%;
            background:rgba(255,255,255,.03);
            color:#fff;
            border:1px solid rgba(212,175,55,.18);
            border-radius:16px;
            padding:14px 15px;
            outline:none;
            font-family:'Montserrat',sans-serif;
            font-size:.95rem;
            transition:.25s;
        }

        .field textarea{
            min-height:150px;
            resize:vertical;
        }

        .field input:focus,.field select:focus,.field textarea:focus{
            border-color:rgba(255,223,134,.42);
            box-shadow:0 0 0 3px rgba(212,175,55,.08), 0 0 24px rgba(98,181,255,.10);
        }

        .field select option{
            background:#090909;
            color:#fff;
        }

        .quick-panel{
            margin-top:16px;
            padding:16px 18px;
            border:1px solid rgba(212,175,55,.12);
            border-radius:18px;
            background:rgba(255,255,255,.015);
        }

        .quick-panel h3{
            font-family:'Cinzel Decorative',serif;
            color:var(--gold-bright);
            font-size:1rem;
            margin-bottom:8px;
            letter-spacing:.08rem;
            text-transform:uppercase;
        }

        .quick-panel p{
            color:var(--soft-white);
            line-height:1.7;
            margin-bottom:12px;
        }

        .quick-actions{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
        }

        .consent-row{
            margin-top:14px;
            display:flex;
            gap:12px;
            align-items:flex-start;
            padding:14px 14px 0;
            border-top:1px solid rgba(212,175,55,.12);
        }

        .consent-row input{
            margin-top:4px;
            accent-color:var(--gold-base);
        }

        .consent-row label{
            font-family:'Montserrat',sans-serif;
            color:var(--soft-white);
            font-size:.9rem;
            line-height:1.7;
        }

        .form-actions{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:14px;
            margin-top:16px;
            flex-wrap:wrap;
        }

        .form-meta{
            color:var(--muted);
            font-size:.92rem;
            line-height:1.65;
            max-width:520px;
        }

        .form-submit,.ai-send,.btn-gold,.btn-ghost{
            appearance:none;
            cursor:pointer;
            text-decoration:none;
            text-align:center;
            border-radius:999px;
            padding:12px 16px;
            font-family:'Montserrat',sans-serif;
            font-weight:600;
            letter-spacing:.08rem;
            font-size:.82rem;
            text-transform:uppercase;
            transition:.3s ease;
        }

        .btn-gold,.form-submit,.ai-send{
            background:linear-gradient(180deg, #e0bf59, #af8a28);
            color:#120d03;
            border:none;
            box-shadow:0 10px 25px rgba(212,175,55,.18);
        }

        .btn-gold:hover,.form-submit:hover,.ai-send:hover{
            transform:translateY(-2px);
            filter:brightness(1.06);
        }

        .btn-ghost{
            background:transparent;
            color:var(--gold-bright);
            border:1px solid rgba(212,175,55,.34);
        }

        .btn-ghost:hover{
            background:rgba(212,175,55,.09);
            transform:translateY(-2px);
        }

        .ai-orb{
            position:fixed;
            right:30px;
            bottom:28px;
            width:74px;
            height:74px;
            border-radius:50%;
            z-index:2000;
            cursor:pointer;
            display:flex;
            align-items:center;
            justify-content:center;
            background:radial-gradient(circle at 30% 30%, #fff4cb 0%, #e0bf59 30%, #8a6815 58%, #1a1205 100%);
            box-shadow:0 0 35px var(--gold-glow), inset -10px -10px 20px rgba(0,0,0,.45);
            border:2px solid rgba(255,255,255,.2);
            animation:orbFloat 4s ease-in-out infinite;
        }

        .ai-orb::after{
            content:'AI';
            font-family:'Cinzel Decorative',serif;
            font-size:1.35rem;
            color:#110d03;
            text-shadow:0 1px 1px rgba(255,255,255,.45);
        }

        .ai-chat-window{
            position:fixed;
            right:28px;
            bottom:116px;
            width:min(420px, calc(100vw - 28px));
            height:520px;
            z-index:2000;
            display:none;
            flex-direction:column;
            background:rgba(6,6,6,.96);
            border:1px solid rgba(212,175,55,.34);
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 24px 60px rgba(0,0,0,.72), 0 0 26px rgba(212,175,55,.18);
            transform:translateY(20px) scale(.96);
            opacity:0;
            transition:.35s ease;
        }

        .ai-chat-window.open{
            display:flex;
            opacity:1;
            transform:translateY(0) scale(1);
        }

        .ai-header{
            padding:16px 18px;
            background:linear-gradient(90deg, #8f6a17, #e0bf59, #8f6a17);
            color:#120d03;
            font-family:'Cinzel Decorative',serif;
            letter-spacing:.1rem;
            font-size:1rem;
            text-align:center;
        }

        .ai-body{
            flex:1;
            overflow:auto;
            padding:18px;
            display:flex;
            flex-direction:column;
            gap:12px;
            background:linear-gradient(180deg, rgba(16,16,16,.95), rgba(6,6,6,.98));
        }

        .ai-msg{
            max-width:86%;
            border-radius:18px;
            padding:12px 14px;
            font-family:'Montserrat',sans-serif;
            font-size:.92rem;
            line-height:1.65;
        }

        .ai-msg.assistant{
            align-self:flex-start;
            background:rgba(212,175,55,.09);
            color:#f0e2b5;
            border:1px solid rgba(212,175,55,.18);
        }

        .ai-msg.user{
            align-self:flex-end;
            background:rgba(255,255,255,.05);
            color:#fff;
            border:1px solid rgba(255,255,255,.08);
        }

        .ai-quick{
            padding:0 18px 12px;
            display:flex;
            flex-wrap:wrap;
            gap:8px;
            background:rgba(6,6,6,.98);
        }

        .ai-quick button{
            background:transparent;
            color:var(--gold-bright);
            border:1px solid rgba(212,175,55,.24);
            border-radius:999px;
            padding:8px 12px;
            cursor:pointer;
            font-family:'Montserrat',sans-serif;
            font-size:.75rem;
            transition:.25s;
        }

        .ai-quick button:hover{
            background:rgba(212,175,55,.08);
        }

        .ai-input-area{
            display:flex;
            gap:10px;
            padding:14px;
            border-top:1px solid rgba(212,175,55,.14);
            background:rgba(6,6,6,.98);
        }

        .ai-input-area input{
            flex:1;
            background:rgba(255,255,255,.03);
            color:#fff;
            border:1px solid rgba(212,175,55,.16);
            border-radius:999px;
            padding:13px 15px;
            font-family:'Montserrat',sans-serif;
            outline:none;
        }

        .toast{
            position:fixed;
            left:50%;
            bottom:26px;
            transform:translateX(-50%) translateY(20px);
            z-index:3000;
            padding:12px 16px;
            border-radius:999px;
            background:rgba(6,6,6,.92);
            color:#fff;
            font-family:'Montserrat',sans-serif;
            font-size:.86rem;
            border:1px solid rgba(212,175,55,.18);
            box-shadow:0 18px 40px rgba(0,0,0,.45);
            opacity:0;
            pointer-events:none;
            transition:.28s ease;
        }

        .toast.show{
            opacity:1;
            transform:translateX(-50%) translateY(0);
        }

        .honeypot{
            position:absolute !important;
            left:-9999px !important;
            width:1px !important;
            height:1px !important;
            overflow:hidden !important;
            opacity:0 !important;
            pointer-events:none !important;
        }

        @keyframes orbFloat{
            0%,100%{transform:translateY(0)}
            50%{transform:translateY(-8px)}
        }

        [dir="rtl"] .content-scroll,
        [dir="rtl"] .hero-lead,
        [dir="rtl"] .hero-note,
        [dir="rtl"] .side-item p,
        [dir="rtl"] .section-panel p,
        [dir="rtl"] .section-panel li,
        [dir="rtl"] .form-head p,
        [dir="rtl"] .form-meta,
        [dir="rtl"] .consent-row label,
        [dir="rtl"] .quick-panel p{
            text-align:right;
        }

        [dir="rtl"] .btn-home{
            left:auto;
            right:34px;
        }

        [dir="rtl"] .lang-menu{
            right:auto;
            left:34px;
        }

        [dir="rtl"] .lang-current{
            text-align:left;
        }

        [dir="rtl"] .lang-dropdown a:hover{
            transform:translateX(4px);
        }

        [dir="rtl"] .form-grid{
            direction:rtl;
        }

        [dir="rtl"] .field label{
            text-align:right;
        }

        [dir="rtl"] .field input,
        [dir="rtl"] .field textarea,
        [dir="rtl"] .field select{
            text-align:right;
        }

        [dir="rtl"] .consent-row{
            flex-direction:row-reverse;
        }

        [dir="rtl"] .section-panel ul{
            padding-left:0;
            padding-right:18px;
        }

        [dir="rtl"] .ai-msg.assistant{
            align-self:flex-end;
        }

        [dir="rtl"] .ai-msg.user{
            align-self:flex-start;
        }

        [dir="rtl"] .ai-orb{
            right:auto;
            left:30px;
        }

        [dir="rtl"] .ai-chat-window{
            right:auto;
            left:28px;
        }

        @media (max-width:1024px){
            .hero,.lower-grid{grid-template-columns:1fr}
            .page-shell{width:96vw;height:95vh}
        }

        @media (max-width:768px){
            .page-shell{height:96vh;margin:2vh auto}
            .brand-bar{padding:22px 20px 16px}
            .content-scroll{padding:18px 16px 24px}
            .hero-main,.hero-side,.section-panel,.form-shell{border-radius:18px}
            .form-grid{grid-template-columns:1fr}
            .lang-menu{top:14px;right:14px;min-width:132px}
            .lang-current{font-size:.78rem;padding:9px 11px}
            .lang-dropdown a{font-size:.78rem;padding:9px 11px}
            .btn-home{top:14px;left:14px;padding:9px 11px;font-size:.72rem;letter-spacing:.06rem}
            .logo-container.cornered{top:70px;left:16px;width:62px;height:62px}
            [dir="rtl"] .btn-home{right:14px;left:auto}
            [dir="rtl"] .lang-menu{left:14px;right:auto}
            [dir="rtl"] .logo-container.cornered{right:16px;left:auto}
            .ai-chat-window{right:14px;bottom:102px;width:calc(100vw - 28px);height:60vh}
            .ai-orb{right:16px;bottom:16px;width:68px;height:68px}
            [dir="rtl"] .ai-chat-window{left:14px;right:auto}
            [dir="rtl"] .ai-orb{left:16px;right:auto}
        }
    </style>
</head>
<body>

    <div class="curtain-entrance curtain-entrance-left"></div>
    <div class="curtain-entrance curtain-entrance-right"></div>

    <div class="telecom-bg"></div>
    <div class="telecom-grid"></div>
    <div class="telecom-beams"></div>
    <div class="telecom-pulses"></div>
    <div class="bg-veil"></div>

    <div id="idle-curtain" onclick="wakeFromIdle()">
        <div class="curtain-logo"><?php echo htmlspecialchars($t['brand'], ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="curtain-sub" id="curtain-text"><?php echo htmlspecialchars($t['idle'], ENT_QUOTES, 'UTF-8'); ?></div>
    </div>

    <div class="logo-container" id="logo-container">
        <img src="images/foryou-logo.png" class="main-logo" id="gate-key" alt="FOR YOU ARK Logo">
    </div>

    <div class="lang-menu" id="lang-menu">
        <div class="lang-current"><?php echo htmlspecialchars($t['lang_current'], ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="lang-dropdown">
            <?php foreach ($t['lang_options'] as $langCode => $langLabel): ?>
                <a href="?lang=<?php echo urlencode($langCode); ?>">
                    <?php echo htmlspecialchars($langLabel, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <a href="index.php?lang=<?php echo urlencode($currentLang); ?>" class="btn-home"><?php echo htmlspecialchars($t['home'], ENT_QUOTES, 'UTF-8'); ?></a>

    <main class="page-shell">
        <div class="rococo-ornament top-left">⚜</div>
        <div class="rococo-ornament top-right">⚜</div>
        <div class="rococo-ornament bottom-left">⚜</div>
        <div class="rococo-ornament bottom-right">⚜</div>

        <div class="brand-bar">
            <div class="brand-lock" aria-label="FOR YOU ARK">
                <img src="images/foryou-logo.png" alt="FOR YOU ARK Logo">
                <div class="brand-text"><?php echo htmlspecialchars($t['brand'], ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
        </div>

        <div class="content-scroll">
            <section class="hero">
                <div class="hero-main">
                    <div class="eyebrow"><?php echo htmlspecialchars($t['hero_eyebrow'], ENT_QUOTES, 'UTF-8'); ?></div>
                    <h1 class="hero-title"><?php echo htmlspecialchars($t['hero_title'], ENT_QUOTES, 'UTF-8'); ?></h1>
                    <div class="hero-lead"><?php echo htmlspecialchars($t['hero_lead'], ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="hero-note"><?php echo htmlspecialchars($t['hero_note'], ENT_QUOTES, 'UTF-8'); ?></div>
                </div>

                <div class="hero-side">
                    <div class="side-item">
                        <h3><?php echo htmlspecialchars($t['side_1_title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($t['side_1_text'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                    <div class="side-item">
                        <h3><?php echo htmlspecialchars($t['side_2_title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($t['side_2_text'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                    <div class="side-item">
                        <h3><?php echo htmlspecialchars($t['side_3_title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($t['side_3_text'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
            </section>

            <section class="lower-grid">
                <div class="left-stack">
                    <div class="section-panel">
                        <h3><?php echo htmlspecialchars($t['process_title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <ul>
                            <?php foreach ($t['process_items'] as $item): ?>
                                <li><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="section-panel">
                        <h3><?php echo htmlspecialchars($t['privacy_title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($t['privacy_text'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>

                <div class="form-shell" id="contact-form">
                    <div class="form-head">
                        <h3><?php echo htmlspecialchars($t['form_title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($t['form_subtitle'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>

                    <?php if ($submitStatus !== null): ?>
                        <div class="alert <?php echo $submitStatus === 'success' ? 'success' : 'error'; ?>">
                            <?php
                            $alertText = $t['alerts'][$submitMessage] ?? $submitMessage;
                            if ($submitMessage === 'FORM_SUCCESS') {
                                echo htmlspecialchars(sprintf($alertText, $referenceId), ENT_QUOTES, 'UTF-8');
                            } else {
                                echo htmlspecialchars($alertText, ENT_QUOTES, 'UTF-8');
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" novalidate>
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="lang" value="<?php echo htmlspecialchars($currentLang, ENT_QUOTES, 'UTF-8'); ?>">

                        <div class="honeypot" aria-hidden="true">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="form-grid">
                            <div class="field">
                                <label for="full_name"><?php echo htmlspecialchars($t['labels']['full_name'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <input type="text" name="full_name" id="full_name" value="<?php echo fyark_old('full_name'); ?>" placeholder="<?php echo htmlspecialchars($t['placeholders']['full_name'], ENT_QUOTES, 'UTF-8'); ?>" required>
                            </div>

                            <div class="field">
                                <label for="email"><?php echo htmlspecialchars($t['labels']['email'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <input type="email" name="email" id="email" value="<?php echo fyark_old('email'); ?>" placeholder="<?php echo htmlspecialchars($t['placeholders']['email'], ENT_QUOTES, 'UTF-8'); ?>" required>
                            </div>

                            <div class="field">
                                <label for="phone"><?php echo htmlspecialchars($t['labels']['phone'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <input type="text" name="phone" id="phone" value="<?php echo fyark_old('phone'); ?>" placeholder="<?php echo htmlspecialchars($t['placeholders']['phone'], ENT_QUOTES, 'UTF-8'); ?>">
                            </div>

                            <div class="field">
                                <label for="preferred_channel"><?php echo htmlspecialchars($t['labels']['preferred_channel'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <select name="preferred_channel" id="preferred_channel">
                                    <?php foreach ($t['channels'] as $value => $label): ?>
                                        <option value="<?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>" <?php echo fyark_selected('preferred_channel', $value); ?>>
                                            <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="field">
                                <label for="city_country"><?php echo htmlspecialchars($t['labels']['city_country'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <input type="text" name="city_country" id="city_country" value="<?php echo fyark_old('city_country'); ?>" placeholder="<?php echo htmlspecialchars($t['placeholders']['city_country'], ENT_QUOTES, 'UTF-8'); ?>">
                            </div>

                            <div class="field">
                                <label for="representation"><?php echo htmlspecialchars($t['labels']['representation'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <select name="representation" id="representation">
                                    <?php foreach ($t['representations'] as $value => $label): ?>
                                        <option value="<?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>" <?php echo fyark_selected('representation', $value); ?>>
                                            <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="field full">
                                <label for="contact_type"><?php echo htmlspecialchars($t['labels']['contact_type'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <select name="contact_type" id="contact_type" required>
                                    <?php foreach ($t['contact_types'] as $value => $label): ?>
                                        <option value="<?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>" <?php echo fyark_selected('contact_type', $value); ?>>
                                            <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="field full">
                                <label for="message"><?php echo htmlspecialchars($t['labels']['message'], ENT_QUOTES, 'UTF-8'); ?></label>
                                <textarea name="message" id="message" placeholder="<?php echo htmlspecialchars($t['placeholders']['message'], ENT_QUOTES, 'UTF-8'); ?>" required><?php echo fyark_old('message'); ?></textarea>
                            </div>
                        </div>

                        <div class="quick-panel">
                            <h3><?php echo htmlspecialchars($t['quick_title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p><?php echo htmlspecialchars($t['quick_text'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <div class="quick-actions">
                                <a href="mailto:iletisim@foryouark.com" class="btn-ghost"><?php echo htmlspecialchars($t['quick_email'], ENT_QUOTES, 'UTF-8'); ?></a>
                                <a href="https://wa.me/905000000000" target="_blank" rel="noopener noreferrer" class="btn-gold"><?php echo htmlspecialchars($t['quick_whatsapp'], ENT_QUOTES, 'UTF-8'); ?></a>
                            </div>
                        </div>

                        <div class="consent-row">
                            <input type="checkbox" name="consent" id="consent" value="1" <?php echo fyark_checked('consent'); ?> required>
                            <label for="consent"><?php echo htmlspecialchars($t['consent'], ENT_QUOTES, 'UTF-8'); ?></label>
                        </div>

                        <div class="form-actions">
                            <div class="form-meta"><?php echo htmlspecialchars($t['form_meta'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <button type="submit" class="form-submit"><?php echo htmlspecialchars($t['submit'], ENT_QUOTES, 'UTF-8'); ?></button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>

    <div class="ai-orb" id="ai-orb" onclick="openAI()"></div>

    <div class="ai-chat-window" id="ai-chat">
        <div class="ai-header"><?php echo htmlspecialchars($t['ai_header'], ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="ai-body" id="ai-messages"></div>
        <div class="ai-quick" id="ai-quick"></div>
        <div class="ai-input-area">
            <input type="text" id="ai-text" placeholder="<?php echo htmlspecialchars($t['ai_placeholder'], ENT_QUOTES, 'UTF-8'); ?>" onkeypress="if(event.key==='Enter') sendAIMessage()">
            <button class="ai-send" onclick="sendAIMessage()"><?php echo htmlspecialchars($t['ai_send'], ENT_QUOTES, 'UTF-8'); ?></button>
        </div>
    </div>

    <div class="toast" id="toast"></div>

    <script>
        const currentLang = <?php echo json_encode($currentLang, JSON_UNESCAPED_UNICODE); ?>;
        const aiWelcome = <?php echo json_encode($t['ai_welcome'], JSON_UNESCAPED_UNICODE); ?>;
        const aiQuickItems = <?php echo json_encode($t['ai_quick'], JSON_UNESCAPED_UNICODE); ?>;
        const contactTypes = <?php echo json_encode($t['contact_types'], JSON_UNESCAPED_UNICODE); ?>;
        const aiResponses = <?php echo json_encode($t['ai_responses'], JSON_UNESCAPED_UNICODE); ?>;

        let idleTimer = null;
        let isIdleActive = false;
        let isSystemAwake = false;
        let clickCount = 0;
        let clickTimer = null;

        const IDLE_DELAY = 180000;

        const body = document.body;
        const idleCurtain = document.getElementById('idle-curtain');
        const aiOrb = document.getElementById('ai-orb');
        const aiChat = document.getElementById('ai-chat');
        const aiMessages = document.getElementById('ai-messages');
        const aiQuick = document.getElementById('ai-quick');
        const aiText = document.getElementById('ai-text');
        const toast = document.getElementById('toast');
        const logoContainer = document.getElementById('logo-container');
        const gateKey = document.getElementById('gate-key');

        function showToast(message) {
            toast.textContent = message;
            toast.classList.add('show');
            clearTimeout(window.toastTimeout);
            window.toastTimeout = setTimeout(() => {
                toast.classList.remove('show');
            }, 2400);
        }

        function presetContactType(type) {
            const select = document.getElementById('contact_type');
            if (select) {
                select.value = type;
                document.querySelector('#contact-form').scrollIntoView({ behavior: 'smooth', block: 'start' });
                showToast(contactTypes[type] || type);
            }
        }

        function aiReply(input) {
            const txt = input.toLowerCase();

            if (
                txt.includes('müşteri') || txt.includes('client') || txt.includes('private') ||
                txt.includes('vip') || txt.includes('service') || txt.includes('özel') ||
                txt.includes('cliente') || txt.includes('клиент') || txt.includes('عميل') ||
                txt.includes('客户')
            ) {
                presetContactType('client');
                return aiResponses.client;
            }

            if (
                txt.includes('partner') || txt.includes('iş birliği') || txt.includes('collab') ||
                txt.includes('network') || txt.includes('solution') || txt.includes('socio') ||
                txt.includes('partenaire') || txt.includes('партн') || txt.includes('شريك') ||
                txt.includes('合作')
            ) {
                presetContactType('partner');
                return aiResponses.partner;
            }

            if (
                txt.includes('staj') || txt.includes('intern') || txt.includes('kurs') ||
                txt.includes('candidate') || txt.includes('aday') || txt.includes('trainee') ||
                txt.includes('prakt') || txt.includes('stag') || txt.includes('кандид') ||
                txt.includes('مرشح') || txt.includes('实习')
            ) {
                presetContactType('candidate');
                return aiResponses.candidate;
            }

            if (
                txt.includes('demo') || txt.includes('test') || txt.includes('keşif') ||
                txt.includes('explore') || txt.includes('architecture') || txt.includes('arquitect') ||
                txt.includes('architekt') || txt.includes('архит') || txt.includes('معمار') ||
                txt.includes('演示')
            ) {
                presetContactType('demo');
                return aiResponses.demo;
            }

            presetContactType('general');
            return aiResponses.general;
        }

        function addAIMessage(text, role = 'assistant') {
            const msg = document.createElement('div');
            msg.className = `ai-msg ${role}`;
            msg.textContent = text;
            aiMessages.appendChild(msg);
            aiMessages.scrollTop = aiMessages.scrollHeight;
        }

        function buildAI() {
            aiMessages.innerHTML = '';
            addAIMessage(aiWelcome, 'assistant');

            aiQuick.innerHTML = '';
            aiQuickItems.forEach(text => {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.textContent = text;
                btn.onclick = () => {
                    aiText.value = text;
                    sendAIMessage();
                };
                aiQuick.appendChild(btn);
            });
        }

        function sendAIMessage() {
            const msg = aiText.value.trim();
            if (!msg) return;

            addAIMessage(msg, 'user');
            aiText.value = '';

            const response = aiReply(msg);
            setTimeout(() => {
                addAIMessage(response, 'assistant');
            }, 320);

            resetIdleTimer();
        }

        function openAI() {
            if (!isSystemAwake) {
                wakeSystem();
            }
            aiChat.classList.add('open');
            aiOrb.style.display = 'none';
            resetIdleTimer();
        }

        document.addEventListener('click', function(event) {
            const clickedInsideChat = aiChat.contains(event.target);
            const clickedOrb = aiOrb.contains(event.target);

            if (!clickedInsideChat && !clickedOrb && aiChat.classList.contains('open')) {
                aiChat.classList.remove('open');
                aiOrb.style.display = 'flex';
            }
        });

        function wakeSystem() {
            body.classList.add('awake');
            logoContainer.classList.add('cornered');
            idleCurtain.classList.remove('active');
            isIdleActive = false;
            isSystemAwake = true;
            resetIdleTimer();
        }

        function goIdleMode() {
            if (!isSystemAwake) return;
            idleCurtain.classList.add('active');
            isIdleActive = true;
            body.classList.remove('awake');
            logoContainer.classList.remove('cornered');
            aiChat.classList.remove('open');
            aiOrb.style.display = 'flex';
        }

        function wakeFromIdle() {
            wakeSystem();
        }

        function resetIdleTimer() {
            clearTimeout(idleTimer);
            if (!isSystemAwake) return;
            idleTimer = setTimeout(goIdleMode, IDLE_DELAY);
        }

        gateKey.addEventListener('click', function() {
            if (!isSystemAwake) {
                wakeSystem();
            }

            clickCount++;
            clearTimeout(clickTimer);

            if (clickCount === 5) {
                window.location.href = 'operasyon-merkezi.php';
                clickCount = 0;
            } else {
                clickTimer = setTimeout(() => {
                    clickCount = 0;
                }, 1500);
            }
        });

        ['mousemove', 'mousedown', 'keydown', 'touchstart', 'wheel', 'scroll'].forEach(evt => {
            document.addEventListener(evt, () => {
                if (!isSystemAwake) {
                    wakeSystem();
                } else {
                    resetIdleTimer();
                }
            }, { passive: true });
        });

        window.addEventListener('DOMContentLoaded', () => {
            buildAI();
            setTimeout(() => {
                wakeSystem();
            }, 500);
        });
    </script>
</body>
</html>