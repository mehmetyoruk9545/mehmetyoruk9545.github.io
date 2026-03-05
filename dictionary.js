/* =========================================================
   FOR YOU | UNIVERSAL STRATEGIC DICTIONARY v15.1 (REVISED)
   Kapsam: 8 Dil (TR, EN, RU, ZH, AR, DE, FR, ES)
   Bağlı Modüller: Master DNA, Admin HQ, Gateway, Performance, Legacy, Financial
   Revizyon Notu: Eksik key'ler eklendi (dinamik kartlar için), çeviriler tutarlı hale getirildi.
   ========================================================= */

const FY_DICTIONARY = {
    // Mevcut key'ler (truncated kısım baz alınarak, örnekler)
    lbl_name: { tr: "İSİM", en: "NAME", ru: "ИМЯ", zh: "姓名", ar: "الاسم", de: "NAME", fr: "NOM", es: "NOMBRE" },
    lbl_tc: { tr: "TC NO", en: "ID NO", ru: "НОМЕР ИД", zh: "身份证号", ar: "رقم الهوية", de: "ID-NR", fr: "N° ID", es: "NÚMERO ID" },
    lbl_unit: { tr: "BİRİM", en: "UNIT", ru: "ОТДЕЛ", zh: "单位", ar: "الوحدة", de: "EINHEIT", fr: "UNITÉ", es: "UNIDAD" },
    lbl_score: { tr: "SKOR", en: "SCORE", ru: "ОЦЕНКА", zh: "分数", ar: "النقاط", de: "PUNKTZAHL", fr: "SCORE", es: "PUNTUACIÓN" },
    btn_save: { tr: "KAYDET", en: "SAVE", ru: "СОХРАНИТЬ", zh: "保存", ar: "حفظ", de: "SPEICHERN", fr: "SAUVEGARDER", es: "GUARDAR" },
    // ... (diğer mevcut key'ler, örneğin lbl_payroll, btn_select vb. truncated olanlar)
    lbl_payroll: { tr: "BORDRO", en: "PAYROLL", ru: "ЗАРПЛАТА", zh: "工资单", ar: "كشف الرواتب", de: "LÖHNE", fr: "PAIE", es: "NÓMINA" },
    btn_select: { tr: "SEÇ / HESAPLA", en: "SELECT / CALCULATE", ru: "ВЫБЕРИТЕ / РАССЧИТАТЬ", zh: "选择/计算", ar: "تحديد / حساب", de: "AUSWÄHLEN / BERECHNEN", fr: "SÉLECTIONNER / CALCULER", es: "SELECCIONAR / CALCULAR" },

    // Yeni Eklenen Key'ler (Dinamik Kartlar ve Yeni Sayfalar İçin)
    lbl_staff_list: { tr: "Kayıtlı DNA bulunamadı.", en: "No DNA records found.", ru: "Записей ДНК не найдено.", zh: "未找到DNA记录。", ar: "لم يتم العثور على سجلات DNA.", de: "Keine DNA-Einträge gefunden.", fr: "Aucun enregistrement ADN trouvé.", es: "No se encontraron registros de ADN." },
    lbl_radar_status: { tr: "RADAR DURUMU", en: "RADAR STATUS", ru: "СТАТУС РАДАРА", zh: "雷达状态", ar: "حالة الرادار", de: "RADAR-STATUS", fr: "STATUT RADAR", es: "ESTADO DEL RADAR" },
    lbl_signals: { tr: "SİNYALLER", en: "SIGNALS", ru: "СИГНАЛЫ", zh: "信号", ar: "الإشارات", de: "SIGNALE", fr: "SIGNAUX", es: "SEÑALES" },
    lbl_signal_type: { tr: "SİNYAL TİPİ", en: "SIGNAL TYPE", ru: "ТИП СИГНАЛА", zh: "信号类型", ar: "نوع الإشارة", de: "SIGNAL-TYP", fr: "TYPE DE SIGNAL", es: "TIPO DE SEÑAL" },
    lbl_red_code: { tr: "KIRMIZI KOD", en: "RED CODE", ru: "КРАСНЫЙ КОД", zh: "红色代码", ar: "كود أحمر", de: "ROTER CODE", fr: "CODE ROUGE", es: "CÓDIGO ROJO" },
    lbl_legacy: { tr: "MİRAS ODASI", en: "LEGACY ROOM", ru: "КОМНАТА НАСЛЕДИЯ", zh: "遗产室", ar: "غرفة التراث", de: "ERBE-RAUM", fr: "SALLE DU PATRIMOINE", es: "SALA DE LEGADO" },
    lbl_financial_report: { tr: "FİNANSAL RAPOR", en: "FINANCIAL REPORT", ru: "ФИНАНСОВЫЙ ОТЧЕТ", zh: "财务报告", ar: "تقرير مالي", de: "FINANZBERICHT", fr: "RAPPORT FINANCIER", es: "INFORME FINANCIERO" },
    lbl_performance: { tr: "PERFORMANS", en: "PERFORMANCE", ru: "ПРОИЗВОДИТЕЛЬНОСТЬ", zh: "性能", ar: "الأداء", de: "LEISTUNG", fr: "PERFORMANCE", es: "RENDIMIENTO" },
    lbl_dossier: { tr: "DOSYA", en: "DOSSIER", ru: "ДОСЬЕ", zh: "档案", ar: "ملف", de: "DOSSIER", fr: "DOSSIER", es: "EXPEDIENTE" },
    lbl_security_log: { tr: "GÜVENLİK LOGU", en: "SECURITY LOG", ru: "ЖУРНАЛ БЕЗОПАСНОСТИ", zh: "安全日志", ar: "سجل الأمان", de: "SICHERHEITSLOG", fr: "JOURNAL DE SÉCURITÉ", es: "REGISTRO DE SEGURIDAD" },

    // ... (Eğer başka truncated key'ler varsa, buraya ekle. Tam hali için bana bildir.)
};