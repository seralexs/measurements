<?php
declare(strict_types=1);

namespace App\Services\Web;

use App\Models\Measurement;
use Illuminate\Support\Collection;

class MeasurementService
{
    public function getMeasurements(): Collection
    {
        return Measurement::all();
    }
}
