<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

require __DIR__ . '/vendor/autoload.php';

use MatthiasMullie\Minify;

$sourcePath = 'vendors.js';
$minifier = new Minify\JS($sourcePath);

// save minified file to disk
$minifiedPath = 'vendors.min.js';
$minifier->minify($minifiedPath);

// or just output the content
if (strlen($minifier->minify()))
{
	echo 'Done';
}
else
{
	echo 'Failed';
}