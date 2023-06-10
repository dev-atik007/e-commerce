<?php

namespace App\Console\Commands;

use App\Models\Permission;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Route;

class InitPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create all permission from web.php file.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = [];
        foreach (Route::getRoutes() as $key => $route){
            if ($route->getName() && $route->getPrefix() !='' && $route->getPrefix() != '_ignition'){

                Permission::updateOrCreate([
                    'name'=>$route->getName(),
                    'status'=>'active',
                ]);
            }
        }

        echo "permission set successfully.";
    }
}
