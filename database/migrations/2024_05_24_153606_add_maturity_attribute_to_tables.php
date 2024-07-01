<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $tables = [
            'entities',
            'relations',
            'processes',
            'operations',
            'actors',
            'activities',
            'tasks',
            'information',
            'application_blocks',
            'm_applications',
            'application_modules',
            'databases',
            'fluxes',
            'networks',
            'subnetworks',
            'gateways',
            'external_connected_entities',
            'routers',
            'dhcp_servers',
            'dnsservers',
            'logical_servers',
            'certificates',
            'sites',
            'buildings',
            'bays',
            'physical_servers',
            'workstations',
            'storage_devices',
            'peripherals',
            'phones',
            'physical_switches',
            'physical_routers',
            'physical_security_devices',
            'wans',
            'mans',
            'lans',
            'vlans',
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                if (!Schema::hasColumn($table->getTable(), 'maturity')) {
                    $table->integer('maturity')->nullable();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $tables = [
            'entities',
            'relations',
            'processes',
            'operations',
            'actors',
            'activities',
            'tasks',
            'information',
            'application_blocks',
            'm_applications',
            'application_modules',
            'databases',
            'fluxes',
            'networks',
            'subnetworks',
            'gateways',
            'external_connected_entities',
            'routers',
            'dhcp_servers',
            'dnsservers',
            'logical_servers',
            'certificates',
            'sites',
            'buildings',
            'bays',
            'physical_servers',
            'workstations',
            'storage_devices',
            'peripherals',
            'phones',
            'physical_switches',
            'physical_routers',
            'physical_security_devices',
            'wans',
            'mans',
            'lans',
            'vlans',
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                if (Schema::hasColumn($table->getTable(), 'maturity')) {
                    $table->dropColumn('maturity');
                }
            });
        }
    }
}

?>