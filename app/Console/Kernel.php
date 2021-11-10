<?php

namespace App\Console;

use App\Models\Share;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ShareImport;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
	    $schedule->call(function () {
		    $path=public_path('exce.xlsx');
		    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		    $spreadsheet = $reader->load($path);
		    $excel=$spreadsheet->getSheet(0)->toArray();
		    Share::truncate();
		    foreach ($excel as $exce){
			    Share::create([
					    'name' => $exce[0],
					    'nick_name' => $exce[1],
					    'signal' => $exce[2],
					    'price' => $exce[3],
					    'date' => now(),
				    ]
			    );
		    }
	    })->everyMinute();//update Share table every minute

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
