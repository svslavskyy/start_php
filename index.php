<?php
echo "Hello! 1111";
$a = 10;
$b ='000';
echo '<p>';
echo $a + $b;
echo '<p>';
echo $a.$b;
echo '</p>';



for ($i=0;$i<$a;$i++)
{
    echo "<p> $i </p>";
    if($i==5)
    {
        echo "<p> ooops </p>";
        $i = "5";
        if($i!==5){
            break;
        }
    }

}


//новый класс
class Start
{
    var $name;

    // конструктор:
    function Start()
    {
        $this->name="null name";
    }
    // методы:
    function Getname()
    {
        echo "<p> $this->name </p>";
    }

    function Setname($name)
    {
        $this->name = $name;
    }

}
// создание и работа с объектами
$object = new Start;
$object->Getname();
$object->Setname("Nick");
$object->Getname();

//класс родителя и дочерний
class Parents{
    function parent_funct() { echo "<h1>Это родительская функция</h1>"; }
    function test () { echo "<h1>Это родительский класс</h1>"; }
}

class Child extends Parents {
    function child_funct() { echo "<h2>Это дочерняя функция</h2>"; }
    function test () { echo "<h2>Это дочерний класс</h2>"; }
}

$object = new Parents;
var_dump($object);
$object = new Child;
var_dump($object);
$object->parent_funct();
$object->child_funct();
$object->test();


//класс Singleton
class Singleton
{
    private static $instance = null;

    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {}
    public function test()
    {
        var_dump($this);
    }
}
$Object = Singleton::getInstance();
//Вывод будет одинаковым, так как существует только один экземпляр
$Object -> test();
Singleton::getInstance() -> test();
var_dump($Object);
//$Object2 = new Singleton();
//$Object3 = clone $Object;