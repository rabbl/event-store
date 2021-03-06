<?php
/**
 * This file is part of the prooph/event-store.
 * (c) 2014-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ProophTest\EventStore\Mock;

use Prooph\Common\Event\ActionEvent;
use Prooph\EventStore\EventStore;
use Prooph\EventStore\Plugin\Plugin;

/**
 * Class EventLoggerFeature
 *
 * @package ProophTest\EventStore\Mock
 * @author Alexander Miertsch <contact@prooph.de>
 */
class EventLoggerPlugin implements Plugin
{
    /**
     * @var \Iterator
     */
    protected $loggedStreamEvents;

    /**
     * EventLoggerPlugin constructor.
     */
    public function __construct()
    {
        $this->loggedStreamEvents = new \ArrayIterator();
    }

    /**
     * @param EventStore $eventStore
     * @return void
     */
    public function setUp(EventStore $eventStore)
    {
        $eventStore->getActionEventEmitter()->attachListener('commit.post', [$this, "onPostCommit"]);
    }

    /**
     * @param ActionEvent $e
     */
    public function onPostCommit(ActionEvent $e)
    {
        $this->loggedStreamEvents = $e->getParam('recordedEvents', new \ArrayIterator());
    }

    /**
     * @return \Iterator
     */
    public function getLoggedStreamEvents()
    {
        return $this->loggedStreamEvents;
    }
}
