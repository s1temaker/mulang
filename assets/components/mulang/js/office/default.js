Ext.onReady(function () {
    MuLang.config.connector_url = OfficeConfig.actionUrl;

    var grid = new MuLang.panel.Home();
    grid.render('office-mulang-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});