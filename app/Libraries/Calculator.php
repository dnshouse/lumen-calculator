<?php

namespace App\Libraries;

class Calculator
{
    private $a;
    private $b;

    /**
     * Calculator constructor.
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @param $operation
     * @return float|int|null
     */
    public function result($operation): float|int|null
    {
        $result = null;

        switch ($operation) {
            case "+":
                $result = $this->a + $this->b;
                break;
            case "-":
                $result = $this->a - $this->b;
                break;
            case "*":
                $result = $this->a * $this->b;
                break;
            case "/":
                $result = $this->a / $this->b;
                break;
        }

        return $result;
    }

    /**
     * @param $operation
     * @return array
     */
    public static function validationRules($operation): array
    {
        $rules = [
            'a' => 'required',
            'b' => 'required',
            'operation' => 'required|in:+,-,*,/'
        ];

        if ($operation == '/') {
            $rules['b'] = 'required|not_in:0';
        }

        return $rules;
    }
}
