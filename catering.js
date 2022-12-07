if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('../online-catering-system/sw.js').then((reg) => {
      console.log('[ServiceWorker] Registered');
    }).catch((err) => {
      console.error('[ServiceWorker] failed: ', err)
    });
}