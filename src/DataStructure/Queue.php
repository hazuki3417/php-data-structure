<?php
/**
 * @license MIT
 * @author hazuki3417<hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\DataStructure;

class Queue
{
    private $data = [];

    private $typeName;

    public function __construct(string $typeName)
    {
        $this->typeName = $typeName;
    }

    public function enqueue($data)
    {
        $isExpectedType = Types::validate($this->typeName, $data);

        if (!$isExpectedType) {
            throw new \InvalidArgumentException('Invalid argument type.');
        }
        $this->data[] = $data;
    }

    public function dequeue()
    {
        return array_shift($this->data);
    }

    public function isEmpty()
    {
        return $this->size() <= 0;
    }

    public function isNotEmpty()
    {
        return 0 < $this->size();
    }

    public function size()
    {
        return count($this->data);
    }

    public function clear()
    {
        $this->data = [];
    }
}
