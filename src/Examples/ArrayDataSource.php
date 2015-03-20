<?php
/**
 * Created by PhpStorm.
 * User: danibrutal
 * Date: 27/02/15
 * Time: 7:39
 */

namespace DataSource\Examples;

use DataSource\DataSource;

/**
 * Class ArrayDataSource
 * For testing purposes
 *
 * @package DataSource\Examples
 */
class ArrayDataSource extends DataSource
{

    private $data = [];

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getItems()
    {
        foreach($this->data as $key=>$value) {
            yield $key => $value;
        }
    }

} 