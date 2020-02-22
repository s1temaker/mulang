<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/MuLang/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/mulang')) {
            $cache->deleteTree(
                $dev . 'assets/components/mulang/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/mulang/', $dev . 'assets/components/mulang');
        }
        if (!is_link($dev . 'core/components/mulang')) {
            $cache->deleteTree(
                $dev . 'core/components/mulang/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/mulang/', $dev . 'core/components/mulang');
        }
    }
}

return true;