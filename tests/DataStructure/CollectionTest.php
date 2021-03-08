<?php declare(strict_types=1);
/**
 * @license MIT
 * @author hazuki3417<hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\DataStructure\Test;

use PHPUnit\Framework\TestCase;
use Selen\DataStructure\Collection;

/**
 * @coversDefaultClass \Selen\DataStructure\Collection
 *
 * @group Selen/DataStructure
 * @group Selen/DataStructure/Collection
 *
 * @see \Selen\DataStructure\Collection
 *
 * [command]
 * php ./vendor/bin/phpunit --group=Selen/DataStructure/Collection
 *
 * @internal
 */
class CollectionTest extends TestCase
{
    public function testConstruct()
    {
        $instance = new Collection('string');

        $this->assertInstanceOf(Collection::class, $instance);
    }

    public function testAdd()
    {
        $instance = new Collection(\DateTime::class);

        $addData1 = new \DateTime();
        $addData2 = new \DateTime('-7 days');

        $this->assertEquals(0, $instance->size());

        $instance->add($addData1);
        $this->assertEquals(1, $instance->size());

        $instance->add($addData2);
        $this->assertEquals(2, $instance->size());
    }

    public function testAddException()
    {
        $instance = new Collection(\DateTime::class);

        $addData1 = new \DateTime();
        $addData2 = $addData1->format('Y-m-d');

        $this->assertEquals(0, $instance->size());

        $instance->add($addData1);
        $this->assertEquals(1, $instance->size());

        $this->expectException(\InvalidArgumentException::class);

        $instance->add($addData2);
    }

    public function testRemove()
    {
        $instance = new Collection(\DateTime::class);

        $this->assertTrue($instance->isEmpty());

        $addData1 = new \DateTime();
        $addData2 = new \DateTime('-7 days');

        $this->assertTrue($instance->add($addData1));
        $this->assertEquals(1, $instance->size());

        $this->assertTrue($instance->add($addData2));
        $this->assertEquals(2, $instance->size());

        $this->assertTrue($instance->remove($addData1));
        $this->assertEquals(1, $instance->size());

        $this->assertTrue($instance->remove($addData2));
        $this->assertEquals(0, $instance->size());
    }

    // public function testIsEmpty()
    // {
    //     $instance = new Collection('string');

    //     $this->assertTrue($instance->isEmpty());

    //     $instance->add('add data1');

    //     $this->assertFalse($instance->isEmpty());

    //     $instance->add('add data2');

    //     $this->assertFalse($instance->isEmpty());

    //     $instance->deCollection();

    //     $this->assertFalse($instance->isEmpty());

    //     $instance->deCollection();

    //     $this->assertTrue($instance->isEmpty());
    // }

    // public function testIsNotEmpty()
    // {
    //     $instance = new Collection('string');

    //     $this->assertFalse($instance->isNotEmpty());

    //     $instance->add('add data1');

    //     $this->assertTrue($instance->isNotEmpty());

    //     $instance->add('add data2');

    //     $this->assertTrue($instance->isNotEmpty());

    //     $instance->deCollection();

    //     $this->assertTrue($instance->isNotEmpty());

    //     $instance->deCollection();

    //     $this->assertFalse($instance->isNotEmpty());
    // }

    // public function testSize()
    // {
    //     $instance = new Collection('string');

    //     $this->assertEquals(0, $instance->size());

    //     $instance->add('add data1');

    //     $this->assertEquals(1, $instance->size());

    //     $instance->add('add data2');

    //     $this->assertEquals(2, $instance->size());

    //     $instance->deCollection();

    //     $this->assertEquals(1, $instance->size());

    //     $instance->deCollection();

    //     $this->assertEquals(0, $instance->size());
    // }

    // public function testClear()
    // {
    //     $instance = new Collection('string');

    //     $this->assertTrue($instance->isEmpty());

    //     $instance->add('add data1');

    //     $this->assertTrue($instance->isNotEmpty());

    //     $instance->clear();

    //     $this->assertTrue($instance->isEmpty());

    //     $instance->add('add data1');
    //     $instance->add('add data2');

    //     $this->assertTrue($instance->isNotEmpty());

    //     $instance->clear();

    //     $this->assertTrue($instance->isEmpty());
    // }
}
