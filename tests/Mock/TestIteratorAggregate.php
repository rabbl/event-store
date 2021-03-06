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

use ArrayIterator;
use IteratorAggregate;

/**
 * Class TestIteratorAggregate
 * @package ProophTest\EventStore\Mock
 */
final class TestIteratorAggregate implements IteratorAggregate
{
    /**
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator([]);
    }
}
