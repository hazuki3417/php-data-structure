<?php

/**
 * @license MIT
 * @author hazuki3417<hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\DataStructure;

class Collection implements CollectionInterface
{
    private $data = [];

    private $typeName;

    public function __construct(string $typeName)
    {
        $this->typeName = $typeName;
    }

    public function isEmpty(): bool
    {
        return $this->size() <= 0;
    }

    public function isNotEmpty(): bool
    {
        return 0 < $this->size();
    }

    public function size(): int
    {
        return count($this->data);
    }

    public function clear()
    {
        $this->data = [];
    }
}
