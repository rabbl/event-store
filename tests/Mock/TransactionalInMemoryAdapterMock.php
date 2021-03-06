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

use Prooph\EventStore\Adapter\Feature\CanHandleTransaction;
use Prooph\EventStore\Adapter\InMemoryAdapter;

/**
 * Class TransactionalInMemoryAdapterMock
 *
 * @package ProophTest\EventStore
 * @author Jefersson Nathan <malukenho@phpse.net>
 */
final class TransactionalInMemoryAdapterMock extends InMemoryAdapter implements CanHandleTransaction
{
    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
    }
}
