<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var MuLang $MuLang */
$MuLang = $modx->getService('MuLang', 'MuLang', MODX_CORE_PATH . 'components/mulang/model/');
$modx->lexicon->load('mulang:default');

// handle request
$corePath = $modx->getOption('mulang_core_path', null, $modx->getOption('core_path') . 'components/mulang/');
$path = $modx->getOption('processorsPath', $MuLang->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);