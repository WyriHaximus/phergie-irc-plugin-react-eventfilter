<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link https://github.com/phergie/phergie-irc-plugin-react-eventfilter for the canonical source repository
 * @copyright Copyright (c) 2008-2014 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Irc\Plugin\React\EventFilter
 */

namespace Phergie\Irc\Plugin\React\EventFilter;

use Phake;
use Phergie\Irc\Event\EventInterface;
use Phergie\Irc\Bot\React\EventQueueInterface;

/**
 * Tests for the Plugin class.
 *
 * @category Phergie
 * @package Phergie\Irc\Plugin\React\EventFilter
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{


    /**
     * Tests that getSubscribedEvents() returns an array.
     */
    public function testGetSubscribedEvents()
    {
        $plugin = new Plugin;
        $this->assertInternalType('array', $plugin->getSubscribedEvents());
    }
}
