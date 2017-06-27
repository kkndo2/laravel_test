<?php
//참고 : https://github.com/laravel/envoy/blob/master/src/TaskContainer.php

if($install){
    ob_end_clean();

    $ask=function ($name) { //파라메터 입력 함수
        echo $name.' : ';
        $input=trim(fgets(STDIN));
        //echo "\n";
        return $input;
    };

    $exit=function () use ($__envoyPath){ //종료함수
        @unlink($__envoyPath);
        exit;
    };

    $confirm=$ask(
        "install 모드입니다.\n".
        "디비생성과 라라벨키생성등의 초기작업이 진행됩니다.\n".
        "프로젝트 최초설치가 맞습니까?(y/n)"
    );

    if($confirm!=='y') $exit();

    $db_root_pass=$ask('database root password');
    $db_name='test6';
    $username=$ask('username');
    $pass=$ask('pass');

    $sql="
        CREATE DATABASE {$db_name};
        
        CREATE USER `{$username}` IDENTIFIED BY `{$pass}`;

        GRANT ALL PRIVILEGES ON {$db_name}.* TO `{$username}`;

        FLUSH PRIVILEGES ;
    ";

    ob_start();
}//end if