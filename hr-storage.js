/* =========================================================
   FOR YOU | CRYPTOGRAPHIC DNA STORAGE ENGINE v8.1 (REVISED)
   ========================================================= */
const FOR_YOU_STORAGE = (function() {
    const DB_KEY = 'FOR_YOU_DNA_VAULT';
    const LOG_KEY = 'FOR_YOU_SECURITY_LOGS';

    const getDNA = () => JSON.parse(localStorage.getItem(DB_KEY)) || [];
    const saveDNA = (d) => localStorage.setItem(DB_KEY, JSON.stringify(d));

    return {
        getDNA,

        upsertEmployee: function(data) {
            let vault = getDNA();
            const idx = vault.findIndex(e => e.tcNo === data.tcNo);
            if (idx !== -1) {
                vault[idx] = { ...vault[idx], ...data };
            } else {
                if (!data.sicil) data.sicil = this.generateSequentialSicil(data.jobCode);
                data.cryptoPassword = `TEMP-${new Date().getFullYear()}`;
                data.isFirstLogin = true;
                vault.push(data);
            }
            saveDNA(vault);
            return data.sicil;
        },

        deleteEmployee: function(tcNo) {
            let vault = getDNA();
            const newVault = vault.filter(e => e.tcNo !== tcNo);
            saveDNA(newVault);
        },

        generateSequentialSicil: function(jobCode) {
            const vault = getDNA();
            const year = new Date().getFullYear();
            const initial = (jobCode || "D").trim().charAt(0).toUpperCase();
            const count = vault.filter(e => e.sicil && e.sicil.startsWith(`${year}-`)).length;
            return `${year}-${initial}-${(count + 1).toString().padStart(3, '0')}`;
        },

        sealCryptoProtocol: function(tcOrSicil, newPass, question, answer) {
            let vault = getDNA();
            const idx = vault.findIndex(e => e.tcNo === tcOrSicil || e.sicil === tcOrSicil);
            if (idx !== -1) {
                vault[idx].cryptoPassword = newPass;
                vault[idx].secretQuestion = question;
                vault[idx].secretAnswer = answer;
                vault[idx].isFirstLogin = false;
                saveDNA(vault);
                return true;
            }
            return false;
        },

        verifyLogin: function(id, pass) {   // ← BU FONKSİYON BURADA, HATAYI ÇÖZECEK
            const emp = getDNA().find(e => (e.sicil === id || e.tcNo === id) && e.cryptoPassword === pass);
            return emp ? { success: true, isFirstLogin: emp.isFirstLogin, data: emp } : { success: false };
        },

        logSecurityEvent: function(actor, message, type) {
            let logs = JSON.parse(localStorage.getItem(LOG_KEY)) || [];
            logs.push({ time: new Date().toISOString(), actor, message, type });
            localStorage.setItem(LOG_KEY, JSON.stringify(logs));
        },

        exportDatabase: function() {
            const data = { dna: getDNA(), logs: this.getSecurityLogs() };
            const blob = new Blob([JSON.stringify(data, null, 2)], { type: 'application/json' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url; a.download = 'for_you_dna_export.json'; a.click();
            URL.revokeObjectURL(url);
        },

        getSecurityLogs: () => JSON.parse(localStorage.getItem(LOG_KEY)) || []
    };
})();