<?php
/**
 * Created by PhpStorm.
 * User: danibrutal
 * Date: 26/02/15
 * Time: 21:49
 */

namespace DataSource;

/**
 * Class DataSource
 *
 * @author: Daniel Martínez <www.testdouble.es>
 * @package DataSource
 */
abstract class DataSource
{
    /** @var \generator  */
    private $generator = null;

    /**
     * @return \generator
     */
    protected function getGenerator()
    {
        if (is_null($this->generator)) {
            $this->generator = $this->getItems();
        }

        return $this->generator;
    }

    /**
     * @return bool
     */
    public function hasItems()
    {
        return $this->getGenerator()->valid();
    }

    /**
     * @return mixed
     */
    public function nextItem()
    {
        $currentItem = $this->getGenerator()->current();
        $this->getGenerator()->next();

        return $currentItem;
    }

    /**
     * @return \generator
     */
    abstract public function getItems();

} 