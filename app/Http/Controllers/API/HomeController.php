<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Illuminate\Http\JsonResponse;
   
class HomeController extends BaseController
{
    public function access(): JsonResponse
    {
        $res = [
            'welcome' => 'pesoros'
        ];
        return $this->sendResponse($res, 'success');
    }
}
