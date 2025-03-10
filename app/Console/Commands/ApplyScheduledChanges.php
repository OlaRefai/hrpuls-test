<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FutureChange;
use Carbon\Carbon;

class ApplyScheduledChanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:apply-scheduled-changes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Apply scheduled changes for employees';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $changes = FutureChange::where('change_date', '<=', Carbon::now())->get();
        foreach ($changes as $change) {
            $employee = $change->employee;
            $employee->update([$change->column => $change->new_value]);
            $change->delete();
        }
    }
}
