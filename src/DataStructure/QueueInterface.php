<?php

/**
 * @license MIT
 * @author hazuki3417<hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\DataStructure;

interface QueueInterface extends ObjectsInterface, \Iterator
{
    public function enqueue($object);

    public function dequeue();
}
