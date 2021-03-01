<?php declare(strict_types=1);
/**
 * @license MIT
 * @author hazuki3417<hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\DataStructure\Test;

use PHPUnit\Framework\TestCase;
use Selen\DataStructure\Types;

/**
 * @coversDefaultClass \Selen\DataStructure\Types
 *
 * @group Selen/DataStructure
 * @group Selen/DataStructure/Types
 *
 * @see \Selen\DataStructure\Types
 *
 * [command]
 * php ./vendor/bin/phpunit --group=Selen/DataStructure/Types
 *
 * @internal
 */
class TypesTest extends TestCase
{
    /**
     * @dataProvider dataProviderTestValidate
     *
     * @param mixed $typeName
     * @param mixed $data
     * @param mixed $expected
     */
    public function testValidate($typeName, $data, $expected)
    {
        $this->assertEquals(Types::validate($typeName, $data), $expected);
    }

    public function dataProviderTestValidate()
    {
        return [
            'testPatten001' => ['typeName' => 'array', 'data' => [],              'expected' => true],
            'testPatten002' => ['typeName' => 'array', 'data' => true,            'expected' => false],
            'testPatten003' => ['typeName' => 'array', 'data' => 1.0,             'expected' => false],
            'testPatten004' => ['typeName' => 'array', 'data' => -1.0,            'expected' => false],
            'testPatten005' => ['typeName' => 'array', 'data' => 1,               'expected' => false],
            'testPatten006' => ['typeName' => 'array', 'data' => null,            'expected' => false],
            'testPatten007' => ['typeName' => 'array', 'data' => '1',             'expected' => false],
            'testPatten008' => ['typeName' => 'array', 'data' => 'data',          'expected' => false],
            'testPatten009' => ['typeName' => 'array', 'data' => new \DateTime(), 'expected' => false],

            'testPatten011' => ['typeName' => 'bool', 'data' => [],              'expected' => false],
            'testPatten012' => ['typeName' => 'bool', 'data' => true,            'expected' => true],
            'testPatten013' => ['typeName' => 'bool', 'data' => 1.0,             'expected' => false],
            'testPatten014' => ['typeName' => 'bool', 'data' => -1.0,            'expected' => false],
            'testPatten015' => ['typeName' => 'bool', 'data' => 1,               'expected' => false],
            'testPatten016' => ['typeName' => 'bool', 'data' => null,            'expected' => false],
            'testPatten017' => ['typeName' => 'bool', 'data' => '1',             'expected' => false],
            'testPatten018' => ['typeName' => 'bool', 'data' => 'data',          'expected' => false],
            'testPatten019' => ['typeName' => 'bool', 'data' => new \DateTime(), 'expected' => false],

            'testPatten021' => ['typeName' => 'double', 'data' => [],              'expected' => false],
            'testPatten022' => ['typeName' => 'double', 'data' => true,            'expected' => false],
            'testPatten023' => ['typeName' => 'double', 'data' => 1.0,             'expected' => true],
            'testPatten024' => ['typeName' => 'double', 'data' => -1.0,            'expected' => true],
            'testPatten025' => ['typeName' => 'double', 'data' => 1,               'expected' => false],
            'testPatten026' => ['typeName' => 'double', 'data' => null,            'expected' => false],
            'testPatten027' => ['typeName' => 'double', 'data' => '1',             'expected' => false],
            'testPatten028' => ['typeName' => 'double', 'data' => 'data',          'expected' => false],
            'testPatten029' => ['typeName' => 'double', 'data' => new \DateTime(), 'expected' => false],

            'testPatten031' => ['typeName' => 'float', 'data' => [],              'expected' => false],
            'testPatten032' => ['typeName' => 'float', 'data' => true,            'expected' => false],
            'testPatten033' => ['typeName' => 'float', 'data' => 1.0,             'expected' => true],
            'testPatten034' => ['typeName' => 'float', 'data' => -1.0,            'expected' => true],
            'testPatten035' => ['typeName' => 'float', 'data' => 1,               'expected' => false],
            'testPatten036' => ['typeName' => 'float', 'data' => null,            'expected' => false],
            'testPatten037' => ['typeName' => 'float', 'data' => '1',             'expected' => false],
            'testPatten038' => ['typeName' => 'float', 'data' => 'data',          'expected' => false],
            'testPatten039' => ['typeName' => 'float', 'data' => new \DateTime(), 'expected' => false],

            'testPatten041' => ['typeName' => 'int', 'data' => [],              'expected' => false],
            'testPatten042' => ['typeName' => 'int', 'data' => true,            'expected' => false],
            'testPatten043' => ['typeName' => 'int', 'data' => 1.0,             'expected' => false],
            'testPatten044' => ['typeName' => 'int', 'data' => -1.0,            'expected' => false],
            'testPatten045' => ['typeName' => 'int', 'data' => 1,               'expected' => true],
            'testPatten046' => ['typeName' => 'int', 'data' => null,            'expected' => false],
            'testPatten047' => ['typeName' => 'int', 'data' => '1',             'expected' => false],
            'testPatten048' => ['typeName' => 'int', 'data' => 'data',          'expected' => false],
            'testPatten049' => ['typeName' => 'int', 'data' => new \DateTime(), 'expected' => false],

            'testPatten051' => ['typeName' => 'integer', 'data' => [],              'expected' => false],
            'testPatten052' => ['typeName' => 'integer', 'data' => true,            'expected' => false],
            'testPatten053' => ['typeName' => 'integer', 'data' => 1.0,             'expected' => false],
            'testPatten054' => ['typeName' => 'integer', 'data' => -1.0,            'expected' => false],
            'testPatten055' => ['typeName' => 'integer', 'data' => 1,               'expected' => true],
            'testPatten056' => ['typeName' => 'integer', 'data' => null,            'expected' => false],
            'testPatten057' => ['typeName' => 'integer', 'data' => '1',             'expected' => false],
            'testPatten058' => ['typeName' => 'integer', 'data' => 'data',          'expected' => false],
            'testPatten059' => ['typeName' => 'integer', 'data' => new \DateTime(), 'expected' => false],

            'testPatten061' => ['typeName' => 'long', 'data' => [],              'expected' => false],
            'testPatten062' => ['typeName' => 'long', 'data' => true,            'expected' => false],
            'testPatten063' => ['typeName' => 'long', 'data' => 1.0,             'expected' => false],
            'testPatten064' => ['typeName' => 'long', 'data' => -1.0,            'expected' => false],
            'testPatten065' => ['typeName' => 'long', 'data' => 1,               'expected' => true],
            'testPatten066' => ['typeName' => 'long', 'data' => null,            'expected' => false],
            'testPatten067' => ['typeName' => 'long', 'data' => '1',             'expected' => false],
            'testPatten068' => ['typeName' => 'long', 'data' => 'data',          'expected' => false],
            'testPatten069' => ['typeName' => 'long', 'data' => new \DateTime(), 'expected' => false],

            'testPatten071' => ['typeName' => 'null', 'data' => [],              'expected' => false],
            'testPatten072' => ['typeName' => 'null', 'data' => true,            'expected' => false],
            'testPatten073' => ['typeName' => 'null', 'data' => 1.0,             'expected' => false],
            'testPatten074' => ['typeName' => 'null', 'data' => -1.0,            'expected' => false],
            'testPatten075' => ['typeName' => 'null', 'data' => 1,               'expected' => false],
            'testPatten076' => ['typeName' => 'null', 'data' => null,            'expected' => true],
            'testPatten077' => ['typeName' => 'null', 'data' => '1',             'expected' => false],
            'testPatten078' => ['typeName' => 'null', 'data' => 'data',          'expected' => false],
            'testPatten079' => ['typeName' => 'null', 'data' => new \DateTime(), 'expected' => false],

            'testPatten081' => ['typeName' => 'numeric', 'data' => [],              'expected' => false],
            'testPatten082' => ['typeName' => 'numeric', 'data' => true,            'expected' => false],
            'testPatten083' => ['typeName' => 'numeric', 'data' => 1.0,             'expected' => true],
            'testPatten084' => ['typeName' => 'numeric', 'data' => -1.0,            'expected' => true],
            'testPatten085' => ['typeName' => 'numeric', 'data' => 1,               'expected' => true],
            'testPatten086' => ['typeName' => 'numeric', 'data' => null,            'expected' => false],
            'testPatten087' => ['typeName' => 'numeric', 'data' => '1',             'expected' => true],
            'testPatten088' => ['typeName' => 'numeric', 'data' => 'data',          'expected' => false],
            'testPatten089' => ['typeName' => 'numeric', 'data' => new \DateTime(), 'expected' => false],

            'testPatten091' => ['typeName' => 'scalar', 'data' => [],              'expected' => false],
            'testPatten092' => ['typeName' => 'scalar', 'data' => true,            'expected' => true],
            'testPatten093' => ['typeName' => 'scalar', 'data' => 1.0,             'expected' => true],
            'testPatten094' => ['typeName' => 'scalar', 'data' => -1.0,            'expected' => true],
            'testPatten095' => ['typeName' => 'scalar', 'data' => 1,               'expected' => true],
            'testPatten096' => ['typeName' => 'scalar', 'data' => null,            'expected' => false],
            'testPatten097' => ['typeName' => 'scalar', 'data' => '1',             'expected' => true],
            'testPatten098' => ['typeName' => 'scalar', 'data' => 'data',          'expected' => true],
            'testPatten099' => ['typeName' => 'scalar', 'data' => new \DateTime(), 'expected' => false],

            'testPatten101' => ['typeName' => 'string', 'data' => [],              'expected' => false],
            'testPatten102' => ['typeName' => 'string', 'data' => true,            'expected' => false],
            'testPatten103' => ['typeName' => 'string', 'data' => 1.0,             'expected' => false],
            'testPatten104' => ['typeName' => 'string', 'data' => -1.0,            'expected' => false],
            'testPatten105' => ['typeName' => 'string', 'data' => 1,               'expected' => false],
            'testPatten106' => ['typeName' => 'string', 'data' => null,            'expected' => false],
            'testPatten107' => ['typeName' => 'string', 'data' => '1',             'expected' => true],
            'testPatten108' => ['typeName' => 'string', 'data' => 'data',          'expected' => true],
            'testPatten109' => ['typeName' => 'string', 'data' => new \DateTime(), 'expected' => false],

            'testPatten111' => ['typeName' => \DateTime::class, 'data' => [],              'expected' => false],
            'testPatten112' => ['typeName' => \DateTime::class, 'data' => true,            'expected' => false],
            'testPatten113' => ['typeName' => \DateTime::class, 'data' => 1.0,             'expected' => false],
            'testPatten114' => ['typeName' => \DateTime::class, 'data' => -1.0,            'expected' => false],
            'testPatten115' => ['typeName' => \DateTime::class, 'data' => 1,               'expected' => false],
            'testPatten116' => ['typeName' => \DateTime::class, 'data' => null,            'expected' => false],
            'testPatten117' => ['typeName' => \DateTime::class, 'data' => '1',             'expected' => false],
            'testPatten118' => ['typeName' => \DateTime::class, 'data' => 'data',          'expected' => false],
            'testPatten119' => ['typeName' => \DateTime::class, 'data' => new \DateTime(), 'expected' => true],
        ];
    }
}
