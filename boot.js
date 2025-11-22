function boot() {
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
}
