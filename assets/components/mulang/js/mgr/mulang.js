var MuLang = function (config) {
    config = config || {};
    MuLang.superclass.constructor.call(this, config);
};
Ext.extend(MuLang, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('mulang', MuLang);

MuLang = new MuLang();