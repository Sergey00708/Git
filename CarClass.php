<?php

include 'interfaceCar.php';

class Car implements MovableInterface{

    protected $brend;
    protected $go;
    protected $stop;
    protected $maxSpeed;
    protected $Speed;

    public function __construct($maxSpeed=0, $brend)
    {
        $this->maxSpeed = $maxSpeed;
        $this->brend = $brend;
    }

    public function start()
    {
        return 'Машина марки' .' '.$this->brend .' '.'Поехала';
    }
   
    public function stop()
    {
        return 'Машина марки' . $this->brend . 'Остановилась';
    }

    public function up($unit)
    {
        return 'Машина марки' . $this->brend . 'разогналась до' . $this->unit = $unit;
    }
    
    public function down(int $unit)
    {
        return 'Машина марки' .' '. $this->brend . 'сбросила скорость до' . $this->unit = $unit;
    }

}