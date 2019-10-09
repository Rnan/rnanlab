<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HouseKeeping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rnanlab:housekeeping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To clean temp file that age more than config.';

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
      $result = shell_exec("find /Users/rnan/dev/rnanlab.com/source/rnanlab/www/public/temp* -mtime 1 -delete");
      print_r($result);
    }
}
