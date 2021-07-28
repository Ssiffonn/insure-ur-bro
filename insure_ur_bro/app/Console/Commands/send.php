<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TestJob;

class send extends Command
{
    protected $signature = 'send';

    public function handle()
    {
        TestJob::dispatch();
    }
}
