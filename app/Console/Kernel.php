<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\ImportUsers;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $filePath = $this->getFilePath();
            if ($filePath) {
                dispatch(new ImportUsers($filePath));
            }
        })->everyMinute();
    }

    protected function getFilePath()
    {
        return storage_path('app/public/imports/users.xml');
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
