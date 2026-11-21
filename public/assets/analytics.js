(() => {
    const measurementId = document.currentScript.dataset.measurementId;
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        window.dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', measurementId, {
        allow_google_signals: false,
        allow_ad_personalization_signals: false,
    });

    const tag = document.createElement('script');
    tag.async = true;
    tag.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(measurementId);
    document.head.appendChild(tag);
})();
