<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class NewJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $name;
    
    /**
     * Create a new job instance.
     */
    public function __construct($name)
    {
        //
        $this->name = $name;
        $this->queue = 'Log ra file';
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        Log::info("Job new: ", [
            'name'=>$this->name
            
        ]);
    }
}
