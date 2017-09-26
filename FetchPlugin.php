<?php
/**
 * Fetch plugin for Craft CMS
 *
 * file_get_contents for Craft CMS.
 *
 * @author    Joshua Baker
 * @copyright Copyright (c) 2017 Joshua Baker
 * @link      https://joshuabaker.com
 * @package   Fetch
 * @since     0.1.0
 */

namespace Craft;

class FetchPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Fetch');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('file_get_contents for Craft CMS.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/joshuabaker/craft-fetch/fetch/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/joshuabaker/craft-fetch/fetch/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '0.1.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '0.1.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Joshua Baker';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://joshuabaker.com';
    }

    /**
     * Add any Twig extensions.
     *
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.fetch.twigextensions.FetchTwigExtension');

        return new FetchTwigExtension();
    }
}
