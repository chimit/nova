<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\BuildingsPerActive;
use App\Nova\Metrics\BuildingsPerType;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new BuildingsPerActive,
            new BuildingsPerType,
        ];
    }
}
