MuLang.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'mulang-panel-home',
            renderTo: 'mulang-panel-home-div'
        }]
    });
    MuLang.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(MuLang.page.Home, MODx.Component);
Ext.reg('mulang-page-home', MuLang.page.Home);