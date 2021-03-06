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

use Prooph\Common\Messaging\Message;

/**
 * Class FaultyAggregateRoot
 *
 * @package ProophTest\EventStore\Mock
 * @author Alexander Miertsch <contact@prooph.de>
 */
final class FaultyAggregateRoot implements DefaultAggregateRootContract
{
    public function getVersion()
    {
        //faulty return
        return;
    }

    /**
     * @param \Iterator $historyEvents
     * @return DefaultAggregateRootContract
     */
    public static function reconstituteFromHistory(\Iterator $historyEvents)
    {
        //faulty method
        return;
    }

    /**
     * @return string
     */
    public function getId()
    {
        //faulty method
        return;
    }

    /**
     * @return Message[]
     */
    public function popRecordedEvents()
    {
        //faulty method
        return;
    }

    /**
     * @param $event
     */
    public function replay($event)
    {
        // faulty method
        return;
    }

    protected function aggregateId()
    {
        //faulty method
        return;
    }

    protected function AggregateVersion()
    {
        //faulty method
        return;
    }

    protected static function inAccessibleReconstituteFromHistory(\Iterator $historyEvents)
    {
        //faulty method
        return;
    }

    protected function inAccessiblePopRecordedEvents()
    {
        //faulty method
        return;
    }

    protected function inAccessibleReplay($event)
    {
        // faulty method
        return;
    }
}
