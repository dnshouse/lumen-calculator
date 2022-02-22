<?php

namespace App\Http\Controllers;

use App\Libraries\Calculator;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function calculate(Request $request): JsonResponse
    {
        $this->validate($request, Calculator::validationRules($request->get('operation')));

        $calculator = new Calculator(
            $request->get('a'),
            $request->get('b')
        );

        return response()->json(['result' => $calculator->result($request->get('operation'))], 200);
    }
}
