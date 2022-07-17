<?php


namespace App\classes;


class OddEven
{
    public $startingNumber;
    public $endingNumber;
    public $result;

    public function __construct($data = null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
    }

    public function index()
    {
        header('Location: action.php?page=home');
//        for ($this->startingNumber; $this->startingNumber <= $this->endingNumber;)
    }

}