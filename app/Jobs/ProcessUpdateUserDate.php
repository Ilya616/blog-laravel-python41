<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessUpdateUserDate implements ShouldQueue
{
    use Queueable;
    private $user;
    /**
     * Create a new job instance.
     */
    public function __construct($user)
    {
        $this->user = $user; 
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        User::where('id', $this->user->id)->update(['updated_at' => now()]);
    }
}
