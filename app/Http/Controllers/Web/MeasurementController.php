<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Web\MeasurementService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    public function __construct(
        private MeasurementService $measurementService
    ) {

    }
    public function getMeasurements(): JsonResponse
    {
        $measurements = $this->measurementService->getMeasurements();
        return response()->json($measurements);
    }
}
