<?php
/**
 * This file is part of the prooph/event-store.
 * (c) 2014-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prooph\EventStore\Snapshot\Adapter;

use Prooph\EventStore\Aggregate\AggregateType;
use Prooph\EventStore\Snapshot\Snapshot;

/**
 * Interface Adapter
 * @package Prooph\EventStore\Snapshot\Adapter
 */
interface Adapter
{
    /**
     * Get the aggregate root if it exists otherwise null
     *
     * @param AggregateType $aggregateType
     * @param string $aggregateId
     * @return Snapshot
     */
    public function get(AggregateType $aggregateType, $aggregateId);

    /**
     * Save a snapshot
     *
     * @param Snapshot $snapshot
     * @return void
     */
    public function save(Snapshot $snapshot);
}
