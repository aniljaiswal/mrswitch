<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Role;

class PopulateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This console command seeds the roles tables with inital set of roles.';

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
        $roles = ['pending', 'confirmed', 'paid', 'canceled', 'admin'];

        if (Role::whereIn('name', $roles)->get()->isEmpty())
        {
            foreach ($roles as $role)
            {
                $newRole  = new Role;
                $newRole->name = $role;
                $newRole->display_name = ucwords($role);
                $newRole->description = '';
                $newRole->save();
            }
            $this->info('Populate: roles command finished. Exiting... ');
        }
    }
}
