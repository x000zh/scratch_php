<?php

namespace ScratchPhp;

class ArrayStruct {

    //比较数组结构是否相同，
    public function structEquals($arr1, $arr2){
        if(gettype($arr1) != gettype($arr2)){
            //如果类型不同
            return false;
        }
        if( is_array($arr1) ){
            if( count(array_keys($arr1)) == count(array_keys($arr2)) ){
                foreach($arr1 as $key => $val){
                    if(!isset($arr2[$key]) || !$this->structEquals($val, $arr2[$key])){
                        return false;
                    }
                }
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
}
