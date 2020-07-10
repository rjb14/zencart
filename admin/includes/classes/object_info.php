<?php

/**
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Sun Jan 7 21:39:26 2018 -0500 Modified in v1.5.6 $
 */

/**
 * Class objectInfo
 */
class objectInfo implements ArrayAccess
{
    /**
     * @param $object_array
     */
    public function __construct($object_array)
    {
        $this->updateObjectInfo($object_array);
    }

    /**
     * @param $object_array array
     */
    public function objectInfo($object_array)
    {
        if (!is_array($object_array)) return;

        foreach ($object_array as $key => $value) {
            $this->$key = zen_db_prepare_input($value);
        }
        $this->object_array = $object_array;
    }

    /**
     * @param $object_array array
     */
    public function updateObjectInfo($object_array)
    {
        if (!is_array($object_array)) return;

        foreach ($object_array as $key => $value) {
            $this->$key = zen_db_prepare_input($value);
        }
    }

    public function __isset($field)
    {
        return isset($this->$field);
    }

    public function __set($field, $value)
    {
        $this->$field = $value;
    }

    public function __get($field)
    {
        if (isset($this->$field)) return $this->$field;

        if ($field == 'keys') return array();

        return null;
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->object_array[] = $value;
        } else {
            $this->object_array[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->object_array[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->object_array[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->object_array[$offset]) ? $this->object_array[$offset] : null;
    }

}
