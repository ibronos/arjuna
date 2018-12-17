<?php

use PHPUnit\Framework\TestCase;

require '../core/inc/bigtree/utils.php';

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a,$expected)
    {
        $this->assertSame($expected, $a );
    }

    public function additionProvider()
    {
        define($bigtree, 'http://localhost/bigtree/admin/pages/view-tree/0/');
        $expected = 'd-m-Y H:i:s';
        $a = "Y-m-d H:i:s";
        return [
            [$a, $expected ]
        ];
    }
}