<?php
/**
 * Fetch plugin for Craft CMS
 *
 * Fetch Twig Extension
 *
 * @author    Joshua Baker
 * @copyright Copyright (c) 2017 Joshua Baker
 * @link      https://joshuabaker.com
 * @package   Fetch
 * @since     0.1.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class FetchTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'Fetch';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            'fetch' => new \Twig_Filter_Method($this, 'getFileContents'),
        ];
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            'fetch' => new \Twig_Function_Method($this, 'getFileContents'),
        ];
    }

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
