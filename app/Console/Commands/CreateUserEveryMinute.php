<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Backend\UserController;

class CreateUserEveryMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-user-every-minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat user baru setiap dijalankan scheduler';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controller = new UserController();
        $controller->createRandomUser();

        $this->info('User berhasil dibuat melalui controller.');

        // php artisan schedule:run -> Hanya menjalankan scheduler sekali, lalu selesai.
        // php artisan schedule:work -> Menjalankan scheduler secara terus-menerus (long-running process).
    }
}
