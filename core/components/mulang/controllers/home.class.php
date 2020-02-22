<?php

/**
 * The home manager controller for MuLang.
 *
 */
class MuLangHomeManagerController extends modExtraManagerController
{
    /** @var MuLang $MuLang */
    public $MuLang;


    /**
     *
     */
    public function initialize()
    {
        $this->MuLang = $this->modx->getService('MuLang', 'MuLang', MODX_CORE_PATH . 'components/mulang/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['mulang:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('mulang');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->MuLang->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->MuLang->config['jsUrl'] . 'mgr/mulang.js');
        $this->addJavascript($this->MuLang->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->MuLang->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->MuLang->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->MuLang->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->MuLang->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->MuLang->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        MuLang.config = ' . json_encode($this->MuLang->config) . ';
        MuLang.config.connector_url = "' . $this->MuLang->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "mulang-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="mulang-panel-home-div"></div>';

        return '';
    }
}