<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Backend\UserController;

class DeleteUserEveryThreeSeconds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-user-every-three-seconds';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete user setiap 3 detik';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        (new UserController())->deleteOneUser();

        $this->info("Controller deleteOneUser dipanggil.");

        // php artisan schedule:run -> Hanya menjalankan scheduler sekali, lalu selesai.
        // php artisan schedule:work -> Menjalankan scheduler secara terus-menerus (long-running process).
    }
}
