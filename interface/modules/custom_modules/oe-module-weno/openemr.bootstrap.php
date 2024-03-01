<?php

/**
 *
 * @package     OpenEMR Weno Module
 * @link        https://online.wenoexchange.com
 *
 * @author      Kofi Appiah <kkappiah@medsov.com>
 *   Copyright (c) 2023 Omega Systems Group Corp <omegasystemsgroup.com>
 * @license     GNU General Public License 3
 *
 */

namespace OpenEMR\Modules\WenoModule;

use OpenEMR\Core\ModulesClassLoader;

/**
 * @global OpenEMR\Core\ModulesClassLoader $classLoader
 */

$classLoader->registerNamespaceIfNotExists('OpenEMR\\Modules\\WenoModule\\', __DIR__ . DIRECTORY_SEPARATOR . 'src');

/**
 * @global EventDispatcher $eventDispatcher Injected by the OpenEMR module loader;
 */

$bootstrap = new Bootstrap($eventDispatcher);
$bootstrap->subscribeToEvents();
