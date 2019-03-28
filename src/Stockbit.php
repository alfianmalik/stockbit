<?php
/**
 * Created by PhpStorm.
 * User: alfian
 * Date: 27/03/19
 * Time: 18:46
 */

namespace Alfian;

class Stockbit {

    /**
     * @param $value
     * @return mixed
     */
    public function test1a($value)
    {
        if(is_array($value)){
            return (array) $value;
        }
        else if(is_string($value))
        {
            return (string) $value;
        }
        else if(is_numeric($value))
        {
            return (int) $value;
        }

        return $value;
    }

    /**
     *
     */
    public function test1b()
    {
        $string = "(23 Maret 2018) Some string is below here (please note below): The dummy formula is a=(x+y)-100.";

        preg_match_all('/(?<=\()([^\)]+)(?=\))/is', $string, $output_array);

        return $output_array;
    }

}