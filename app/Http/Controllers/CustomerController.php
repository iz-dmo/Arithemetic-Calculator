<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MathParser\StdMathParser;
use App\Http\Requests\NameRequest;
use MathParser\Interpreting\Evaluator;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.insert');
    }

    public function formData(NameRequest $request){
        
        $expression = $request->input('expression');

        $parser = new StdMathParser();
        $ast = $parser->parse($expression);
        $evaluator = new Evaluator();
    
        try {
            $result = $ast->accept($evaluator);
        } catch (\Exception $e) {
            $result = 'Error: ' . $e->getMessage();
        }
    
        return view('customer.insert', ['result' => $result]);
        // dd($result);
    }
}
