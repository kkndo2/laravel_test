<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Dotenv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dotenv:set 
                            {keyval* : 키=값 구조로 입력합니다.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '.env 파일을 설정한다.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach($this->argument('keyval') as $keyval){
            $this->info( $keyval);
        }//end foreach


    }
}
