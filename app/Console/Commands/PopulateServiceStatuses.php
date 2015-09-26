<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\ServiceStatus;

class PopulateServiceStatuses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:servicestatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command generates the service statuses to be used through the lifecycle of a booking';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $statuses = ['pending', 'processing', 'completed', 'canceled'];

        if (ServiceStatus::whereIn('status_code', $statuses)->get()->isEmpty())
        {
            foreach ($statuses as $status)
            {
                $newStatus = new ServiceStatus;
                $newStatus->status_code = $status;
                $newStatus->status_label = ucwords($status);
                $newStatus->save();
            }
            $this->info('Service statuses created. Exiting.');
        }
    }
}
