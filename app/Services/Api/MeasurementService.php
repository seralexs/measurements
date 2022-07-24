<?php
declare(strict_types=1);

namespace App\Services\Api;

use App\Models\Measurement;

class MeasurementService
{
    public function createMeasurement($dto)
    {
        Measurement::create([
            'humidity' => $dto->humidity,
            'temperature' => $dto->temperature,
            'location' => $dto->location,
        ]);
    }
}
