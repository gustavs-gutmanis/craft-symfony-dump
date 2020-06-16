<?php
/**
 * test plugin for Craft CMS 3.x
 *
 * Test
 *
 * @link      https://github.com/gustavs-gutmanis
 * @copyright Copyright (c) 2020 Gustavs Gutmanis
 */

namespace GG\SymfonyDump\TwigExtensions;

use Symfony\Component\VarDumper\VarDumper;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * @author    Gustavs Gutmanis
 * @package   Test
 * @since     1.0.0
 */
class SymfonyDumpTwigExtension extends AbstractExtension
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Symfony Dump';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new TwigFilter('dump', [$this, 'getDump']),
        ];
    }

    /**
     * @param null $object
     *
     * @return string
     */
    public function getDump($object = null)
    {
        return VarDumper::dump($object);
    }
}
