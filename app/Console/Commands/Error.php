<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Error extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'error';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        throw new \Exception('aaaa');
    }
}
