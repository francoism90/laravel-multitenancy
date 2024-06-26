<?php

namespace Spatie\Multitenancy\Commands;

use Illuminate\Console\Command;
use Spatie\Multitenancy\Concerns\UsesMultitenancyCaching;

class TenantsRefreshCommand extends Command
{
    use UsesMultitenancyCaching;

    protected $signature = 'tenants:refresh';

    protected $description = 'Refresh tenant cache';

    public function handle()
    {
        $this->info('Clearing tenant caches...');

        $this->clearTenantCache();
    }
}
