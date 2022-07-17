<?php


namespace App\classes;


class Series
{
    public $firstNumber;
    public $lastNumber;
    public $result;

    public function __construct($data)
    {
//        echo gettype($data);
        $this->firstNumber = $data['first_number'];
        $this->lastNumber = $data['last_number'];
    }
    public function seriesTypeOne()
    {
        for ($this->firstNumber; $this->firstNumber <= $this->lastNumber; $this->firstNumber++)
        {
            $this->result = $this->result . $this->firstNumber.' ';
        }
        return $this->result;
    }

    public function seriesTypeTwo()
    {
        for ($this->lastNumber; $this->firstNumber >= $this->lastNumber; $this->lastNumber++)
        {
            $this->result .= $this->lastNumber.' ';
        }
        return $this->result;
    }

    public function series()
    {
        if ($this->firstNumber < $this->lastNumber)
        {
            $this->result = $this->seriesTypeOne();
        }
        elseif ($this->lastNumber < $this->firstNumber)
        {
            $this->result = $this->seriesTypeTwo();
        }
        elseif ($this->firstNumber == $this->lastNumber)
        {
            $this->result = $this->firstNumber;
        }
        return $this->result;
    }

    public function sumOfSeries()
    {
        if ($this->firstNumber <= $this->lastNumber)
        {
            for ($this->firstNumber; $this->firstNumber <= $this->lastNumber; $this->firstNumber++)
            {
                $this->result += $this->firstNumber;
            }
        }
        elseif ($this->lastNumber < $this->firstNumber)
        {
            for ($this->lastNumber; $this->lastNumber <= $this->firstNumber; $this->lastNumber++)
            {
                $this->result += $this->lastNumber;
            }
        }
        return $this->result;
    }
}