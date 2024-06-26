<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * wgTeams module for xoops
 *
 * @copyright       The XOOPS Project (https://xoops.org)
 * @license         GPL 2.0 or later
 * @package         wgteams
 * @author          Goffy - Wedega.com - Email:<webmaster@wedega.com> - Website:<https://wedega.com>
 */
 
\defined('XOOPS_ROOT_PATH') || die('Restricted access');
if (!\defined('WGTEAMS_PATH')) {
    if (!\defined('XOOPS_ICONS32_PATH')) {
        \define('XOOPS_ICONS32_PATH', \XOOPS_ROOT_PATH . '/Frameworks/moduleclasses/icons/32');
    }
    if (!\defined('XOOPS_ICONS32_URL')) {
        \define('XOOPS_ICONS32_URL', \XOOPS_URL . '/Frameworks/moduleclasses/icons/32');
    }
    \define('WGTEAMS_DIRNAME', 'wgteams');
    \define('WGTEAMS_PATH', \XOOPS_ROOT_PATH . '/modules/' . \WGTEAMS_DIRNAME);
    \define('WGTEAMS_URL', \XOOPS_URL . '/modules/' . \WGTEAMS_DIRNAME);
    \define('WGTEAMS_ICONS_PATH', \WGTEAMS_PATH . '/assets/icons');
    \define('WGTEAMS_ICONS_URL', \WGTEAMS_URL . '/assets/icons');
    \define('WGTEAMS_IMAGE_PATH', \WGTEAMS_PATH . '/assets/images');
    \define('WGTEAMS_IMAGE_URL', \WGTEAMS_URL . '/assets/images');
    \define('WGTEAMS_UPLOAD_PATH', XOOPS_UPLOAD_PATH . '/' . \WGTEAMS_DIRNAME);
    \define('WGTEAMS_UPLOAD_URL', XOOPS_UPLOAD_URL . '/' . \WGTEAMS_DIRNAME);
    \define('WGTEAMS_ADMIN', \WGTEAMS_URL . '/admin/index.php');
    $local_logo = \WGTEAMS_IMAGE_URL . '/wedega.png';
}
// module information
$copyright = "<a href='https://wedega.com' title='XOOPS on Wedega' target='_blank'>
                     <img src='" . $local_logo . "' alt='XOOPS on Wedega' style='height:40px;'></a>";

require_once \WGTEAMS_PATH . '/include/functions.php';
