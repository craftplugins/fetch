<?php
/**
 * Fetch plugin for Craft CMS
 *
 * Fetch Variable
 *
 * @author    Joshua Baker
 * @copyright Copyright (c) 2017 Joshua Baker
 * @link      https://joshuabaker.com
 * @package   Fetch
 * @since     0.1.0
 */

namespace Craft;

class FetchVariable
{
    /**
     * Fetch method.
     *
     * @see FetchService::getFileContents()
     *
     * @param string $path
     * @param array $params
     *
     * @return string|bool
     */
    public function getFileContents($path, array $params = [])
    {
        return craft()->fetch->getFileContents($path, $params);
    }
}
