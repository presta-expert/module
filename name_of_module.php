<?php
/**
 * Checking if module is executed in prestashop context
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Loading composer autoload if available
 */
if (is_file(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * IMPORTANT NOTE:
 *
 * We can't use the "use" statement in our module because
 * Prestashop executes your module in something like this:
 *
 * if (eval('if (false){	'.$file."\n".' }') !== false)
 *
 * Prestashop 1.6.1.24
 * @see [PRESTASHOP_ROOT]/classes/modules/Module.php:1361
 */

/**
 * Your module information
 *
 * @author      ASOCIAL MEDIA Maciej Strączkowski <biuro@asocial.media>
 * @copyright   ASOCIAL MEDIA Maciej Strączkowski <biuro@asocial.media>
 * @version     1.0.0
 */
class NameOfModule extends \AsocialMedia\Prestashop\Helper\AbstractModule
{

}
