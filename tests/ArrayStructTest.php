<?php

require_once __DIR__ . '/../bootstrap.php';

use PHPUnit\Framework\TestCase;
use ScratchPhp\ArrayStruct;

class ArrayStructTest extends TestCase {

    public function __construct(){
        $this->obj = new ArrayStruct();
    }

    public function testStructEquals(){
        //字符串
        $str1 = 'str1';
        $arr1 = array(
            '1' => array(1, 2)
        );
        $arr2 = array(
            array(
                '11221',
                array(
                    'adsfa'
                )
            ),
            array(
                'aa' => 'af',
                'bb' => array(
                    'aaa',
                    1231
                )
            )
        );
        $arr3 = array(
            array(
                '11221',
                array(
                    'adsfa'
                )
            ),
            array(
                'aa' => 'af',
                'bb' => array(
                    'aaa',
                    '1231',//只有这里不同
                )
            )
        );

        $ret = $this->obj->structEquals($str1, $str1);
        $this->assertTrue($ret);
        $ret = $this->obj->structEquals($arr1, $arr1);
        $this->assertTrue($ret);
        $ret = $this->obj->structEquals($arr2, $arr2);
        $this->assertTrue($ret, '$ret is false');
        $ret = $this->obj->structEquals($str1, $arr1);
        $this->assertFalse($ret , '$ret is false');
        $ret = $this->obj->structEquals($arr2, $arr3);
        $this->assertFalse($ret, '$ret is false');
    }
}
