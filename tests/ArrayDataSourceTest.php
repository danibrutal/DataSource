<?php
/**
 * Created by PhpStorm.
 * User: danibrutal
 * Date: 27/02/15
 * Time: 7:41
 */

namespace DataSource\Test;

use DataSource\Origins\ArrayDataSource;

/**
 * Class ArrayDataSourceTest
 *
 * Basic test to show the use of DataSource class
 *
 * @package DataSource\Test
 */
class ArrayDataSourceTest extends \PHPUnit_Framework_TestCase
{

    /** @var  ArrayDataSource $sut */
    private $sut;
    private $data = [1,2,3];

    public function setUp()
    {
        $this->sut = new ArrayDataSource(
            $this->data
        );
    }

    public function testWeCanInspectGeneratedData()
    {
        $this->assertTrue($this->sut->hasItems());
        $this->assertEquals(1, $this->sut->nextItem());
    }

    public function testWeCanIterateOverData()
    {
        $collectedData = [];
        while($val = $this->sut->nextItem()) {
            $collectedData[] = $val;
        }

        $this->assertEquals($this->data, $collectedData);
    }
} 