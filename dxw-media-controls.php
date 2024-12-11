<?php

/**
 * dxw Media controls
 *
 * @package     dxwMediaControls
 * @author      dxw
 * @copyright   2020
 * @license     MIT
 *
 * @dxw-media-controls
 * Plugin Name: dxw Media controls
 * Plugin URI: https://github.com/dxw/dxw-media-controls
 * Description: Manage media uploading: file sizes and types with user guidance
 * Author: dxw
 * Version: 0.1.0
 * Network: True
 */

$registrar = require __DIR__.'/src/load.php';
$registrar->register();
