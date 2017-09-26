<?php
/**
 * Fetch plugin for Craft CMS
 *
 * Fetch Service
 *
 * @author    Joshua Baker
 * @copyright Copyright (c) 2017 Joshua Baker
 * @link      https://joshuabaker.com
 * @package   Fetch
 * @since     0.1.0
 */

namespace Craft;

class FetchService extends BaseApplicationComponent
{
    /**
     * Gets the file contents and optionally caches them.
     *
     * @param string $path
     * @param array $params
     *
     * @return string|bool
     */
    public function getFileContents($path, array $params = [])
    {
        $params = array_merge([
            'array' => false,
            'cache' => true,
            'suppressErrors' => true,
        ], $params);

        extract($params);

        $cacheKey = 'fetch'.$path;

        if ($cache && craft()->cache->has($cacheKey)) {
            return craft()->cache->get($cacheKey);
        }

        $contents = IOHelper::getFileContents($path, $array, $suppressErrors);

        if ($cache) {
            craft()->cache->set($cacheKey, $contents);
        }

        return $contents;
    }

}
