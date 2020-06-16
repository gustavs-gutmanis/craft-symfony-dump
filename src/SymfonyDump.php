<?php
/**
 * test plugin for Craft CMS 3.x
 *
 * Test
 *
 * @link      https://github.com/gustavs-gutmanis
 * @copyright Copyright (c) 2020 Gustavs Gutmanis
 */

namespace GG\SymfonyDump;

use craft\base\Plugin as BasePlugin;
use GG\SymfonyDump\TwigExtensions\SymfonyDumpTwigExtension;

/**
 * Class Test
 *
 * @author    Gustavs Gutmanis
 * @package   Test
 * @since     1.0.0
 *
 */
class SymfonyDump extends BasePlugin
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        \Craft::$app->view->registerTwigExtension(new SymfonyDumpTwigExtension());
    }
}
