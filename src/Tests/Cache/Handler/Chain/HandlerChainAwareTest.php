<?php
/*
 * This file is part of the Scribe Cache Bundle.
 *
 * (c) Scribe Inc. <source@scribe.software>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\CacheBundle\Tests\Cache\Handler\Chain;

use PHPUnit_Framework_TestCase;
use Scribe\CacheBundle\Cache\Handler\Chain\HandlerChain;
use Scribe\CacheBundle\Tests\Cache\Handler\Chain\Fixtures\ObjectChainAware;

/**
 * Class HandlerChainAwareTest
 *
 * @package Scribe\CacheBundle\Tests\Cache\Handler\Chain
 */
class ObjectChainAwareTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ObjectChainAware
     */
    protected $chainAware;

    protected function setUp()
    {
        $this->chainAware = new ObjectChainAware;
    }

    public function testMutators()
    {
        $chainHandler = new HandlerChain;

        $this->assertFalse($this->chainAware->hasCacheHandlerChain());

        $this->chainAware->setCacheHandlerChain($chainHandler);

        $this->assertTrue($this->chainAware->hasCacheHandlerChain());
        $this->assertEquals($chainHandler, $this->chainAware->getCacheHandlerChain());
    }
}

/* EOF */