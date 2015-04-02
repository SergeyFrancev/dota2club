<?php

namespace app\components;

use yii\web;
use Yii;

class AssetManager extends web\AssetManager
{
	/**
	 * Generate a CRC32 hash for the directory path. Collisions are higher
	 * than MD5 but generates a much smaller hash string.
	 * @param string $path string to be hashed.
	 * @return string hashed string.
	 */
	protected function hash($path)
	{
		$path1 = preg_match("/([^\/]+)[0-9]{10}$/", $path, $mach);
		echo "<pre>";
		var_dump($mach);
		echo "</pre>";
		return $mach[1];
	}
}