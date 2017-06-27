<?php
/**
 * Created by PhpStorm.
 * User: kkndo2
 * Date: 2017-06-15
 * Time: 오후 3:03
 */

namespace App\Services;


class Test
{
    public $a='aaa';
    public $c=0;
    public $d=0;

    public function __construct(int $c=0, int $b=0)
    {
        $this->c=$b;
        $this->d=$c;
    }
}