<?php
/**
 * Created by PhpStorm.
 * User: kkndo2
 * Date: 2017-06-28
 * Time: 오후 10:51
 *
 * .env 파일을 수정할 수 있는 인터페이스를 제공한다.
 */

namespace App\Services;


interface EnvFile
{
    /**
     * 해당 키의 값을 반환한다.
     *
     * @return string
     */
    public function get();
    public function set();
    public function load();



}