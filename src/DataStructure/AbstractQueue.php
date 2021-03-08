<?php

/**
 * @license MIT
 * @author hazuki3417<hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\DataStructure;

abstract class AbstractQueue extends AbstractObjects implements QueueInterface
{
    private $workValue;

    private $workKey;

    public function current(): mixed
    {
        return $this->workValue;
    }

    public function key(): mixed
    {
        return $this->workKey;
    }

    public function next(): void
    {
        ++$this->workKey;
        $this->workValue = array_shift($this->objects);
    }

    public function rewind(): void
    {
        reset($this->objects);
        $this->workKey   = key($this->objects);
        $this->workValue = array_shift($this->objects);
    }

    public function valid(): bool
    {
        return $this->workValue !== null;
    }
}
