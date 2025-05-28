<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dispatch(function () {
            \Log::info('Queue test passed!');
        });

        $this->info('Dispatched test job to queue.');
    }
}
