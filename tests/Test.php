<?php
/**
 * Created by PhpStorm.
 * User: alfian
 * Date: 27/03/19
 * Time: 22:18
 */

use Alfian\Stockbit;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test_it_can_retun_it_value_as_the_type_input()
    {
        $stockbit = new Stockbit();

        $this->assertIsArray($stockbit->test1a(['test']));
        $this->assertIsInt($stockbit->test1a((int) 12));
        $this->assertIsString($stockbit->test1a('ini adalah string'));
    }

    public function test_it_can_return_all_the_value_between()
    {
        $stockbit = new Stockbit();

        $this->assertIsArray($stockbit->test1b());
        $this->assertContains('23 Maret 2018', $stockbit->test1b()[0]);
        $this->assertContains('please note below', $stockbit->test1b()[0]);
        $this->assertContains('x+y', $stockbit->test1b()[0]);
    }
}
