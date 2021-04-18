<?php
include 'VarDumper.php';
class Horse
{
    public $legs = 4;
    public $steps = 0;
    public $nose = 1;
    public $satiety = 60;
	public $weight = 50;
    public function go(){ // Лошадь начала движение
        return $this -> steps++;
        return $this ->satiety - 20;
    }
    public function jump (){ // Лошадь неудачно прыгнула через барьер
        return $this ->legs--;
    }
	
	public function jumponface (){ // Лошадь неудачно прыгнула через барьер и упала на нос, повредив его
        return $this ->nose-;
    }

    public function eat () { // Лошадь поела сено
        return $this ->satiety + 20;
		return $this ->weight++; // набрала вес
    }
	
    public function run (){ // Лошадь побежала
        return $this->satiety - 40;
		return $this -> steps++;
    }
}
$jakutskaya = new Horse;
print_r($jakutskaya);
echo '<br>';
$jakutskaya->run();
$jakutskaya->eat();
$jakutskaya->jumponface();
$jakutskaya->jump();
$jakutskaya->go();
VarDumper::dump($jakutskaya,10,true);
echo '<br>';
?>
