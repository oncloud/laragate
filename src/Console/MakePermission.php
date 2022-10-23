<?php

namespace Lectero\Laragate\Console;

use Illuminate\Console\Command;
use Lectero\Laragate\Models\Permission;

class MakePermission extends Command
{
    protected $signature = 'make:permission {name} {label?}';

    protected $description = 'Create a new permission';

    public function handle()
    {
        $name = $this->argument('name');
        $label = $this->argument('label') ?? $name;

        Permission::create([
            'name' => $name,
            'label' => $label,
        ]);

        $this->info("Permission $name created");
    }
}