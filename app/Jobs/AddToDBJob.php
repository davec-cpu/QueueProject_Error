<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class AddToDBJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $username;
    private $email;
    public function __construct($username, $email)
    {
        //
        $this->username = $username;
        $this->email = $email;
        $this->queue = 'Thêm vào cơ sở dữ liệu';
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        DB::table('m_user')->insert([
            'username'=>$this->username,
            'email'=>$this->email
        ]);
    }
}
