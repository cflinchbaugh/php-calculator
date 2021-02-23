<?php

class Calc {
    private $operator;
    private $num0;
    private $num1;

    public function __construct(string $operator, int $num0, int $num1) {
        $this->operator = $operator;
        $this->num0 = $num0;
        $this->num1 = $num1;
    }

        
    /**
     * calculate
     * Performs basic arithmetic only
     *
     * @return number
     */
    public function calculate() {
        $result = '';

        switch ($this->operator) {
            case 'add':
                $result = $this->num0 + $this->num1;
                break;

            case 'subtract':
                $result = $this->num0 - $this->num1;
                break;

            case 'multiply':
                $result = $this->num0 * $this->num1;
                break;

            case 'divide':
                $result = $this->num0 / $this->num1;
                break;

            
            default:
                echo "Error, invalid operator:" . $this->operator;
                break;

            return $result;
        }
    }

}