<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        $request->validate([
            'expression' => 'required|string',
        ]);

        $expression = $request->input('expression');
        $result = null;
        $error = null;

        // Only allow numbers, spaces, and + - * /
        if (preg_match('#^[0-9+\-*/.\s]+$#', $expression)) {
            // Replace multiple spaces
            $expression = preg_replace('/\s+/', '', $expression);
            // Prevent dangerous eval by only allowing numbers and operators
            try {
                // Evaluate the expression safely
                $result = eval('return ' . $expression . ';');
                if ($result === INF || $result === -INF || is_nan($result)) {
                    $error = 'infinite value';
                }
            } catch (\Throwable $e) {
                $error = 'Invalid expression.';
            }
        } else {
            $error = 'Expression contains invalid characters.';
        }

        if ($error) {
            return back()->withErrors($error)->withInput();
        }

        return back()->with([
            'result' => $result,
            'expression' => $expression
        ]);
    }
}