<?php
/**
 * Created by PhpStorm.
 * User: danibrutal
 * Date: 26/02/15
 * Time: 22:07
 */

namespace DataSource\Origins;


use DataSource\DataSource;

/**
 * Class CSVDataSource
 * @package DataSource\Origins
 */
class CSVDataSource extends DataSource
{
    private $filename;
    private $delimiter;

    /**
     * @param $filename
     * @param null $delimiter
     */
    public function __construct($filename, $delimiter = null)
    {
        $this->filename  = $filename;
        $this->delimiter = $delimiter;
    }

    public function getItems()
    {
        if (false === ($handle = fopen($this->filename, 'r')) ) {
            throw new \InvalidArgumentException("{$this->filename} not valid");
        }

        while($line = fgetcsv($handle)) {
            yield $line;
        }
    }
} 