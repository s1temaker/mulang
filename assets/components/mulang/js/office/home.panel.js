MuLang.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'mulang-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('mulang_items'),
                layout: 'anchor',
                items: [{
                    html: _('mulang_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'mulang-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    MuLang.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(MuLang.panel.Home, MODx.Panel);
Ext.reg('mulang-panel-home', MuLang.panel.Home);
