<?php
    // define('NAMA', 'Edwin Duta Ramadhan');
    // echo NAMA;

    // const USIA = 32;
    // echo USIA;
    // class Coba{
    //     const NAMA = 'Edwin Duta Ramadhan';
    // }


    // echo __LINE__;

    // function Coba(){
    //     return __FUNCTION__;
    // }
    // echo Coba();

    class coba{
        public $kelas = __CLASS__;
    }

    $obj = new coba();
    echo $obj->kelas;