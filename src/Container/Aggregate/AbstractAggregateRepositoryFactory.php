<?php
/**
 * This file is part of the prooph/event-store.
 * (c) 2014-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prooph\EventStore\Container\Aggregate;

/**
 * @deprecated Use AggregateRepositoryFactory, will be removed in next major version
 */
abstract class AbstractAggregateRepositoryFactory extends AggregateRepositoryFactory
{
    public function __construct()
    {
        parent::__construct($this->containerId());
    }

    /**
     * @inheritdoc
     */
    abstract public function containerId();
}
