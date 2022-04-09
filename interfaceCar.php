<?php


interface MovableInterface
{
    /**
     * Включает зажигание
     * @return mixed
     */
    public function start();

    /**
     * Выключает зажигание
     * @return mixed
     */
    public function stop();

    /**
     * Увеличивает скорость движения
     * @param int $unit
     * @return mixed
     */
    public function up(int $unit);

    /**
     * Уменьшает скорость движения
     * @param int $unit
     * @return mixed
     */
    public function down(int $unit);
}



// class Car implements MovableInterface{

//     protected $brend;
//     protected $go;
//     protected $stop;
//     protected $maxSpeed;
//     protected $Speed;

//     public function __construct($maxSpeed)
//     {
//         $this->maxSpeed = $maxSpeed;
//     }

//     public function start()
//     {
//         return 'Машина макри' . $this->brend . 'Поехала';
//     }
   
//     public function stop()
//     {
//         return 'Машина макри' . $this->brend . 'Остановилась';
//     }

//     public function up($unit)
//     {
//         return 'Машина макри' . $this->brend . 'разогналась до' . $this->unit = $unit;
//     }
    
//     public function down(int $unit)
//     {
//         return 'Машина макри' . $this->brend . 'сбросила скорость до' . $this->unit = $unit;
//     }

// }

 