<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Illuminate\Http\JsonResponse;
use App\Models\Vehicle_number;
   
class NopolController extends BaseController
{
    public function getNopol(Request $request): JsonResponse
    {
        $qstring = $request->query();
        $nopol = $qstring['nopol'];
        $getData = Vehicle_number::where('nopol', 'like', "%$nopol%")->limit(10)->get();
        return $this->sendResponse($getData, 'success');
    }
}