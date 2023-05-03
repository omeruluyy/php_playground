<?php

abstract class Shape{
    abstract  function area();
    abstract function perimeter();

    function printResult(){
        echo  get_class($this). " Alan: ". $this->area()." Çevre :".$this->perimeter()."<br>";
    }
}

class triangle extends Shape
{
    private $ceil,$h, $edge2, $edge3;
    public function __construct($ceil,$h, $edge2, $edge3)
    {
        $this->ceil=$ceil;
        $this->h=$h;
        $this->edge2=$edge2;
        $this->edge3=$edge3;

    }
    function area()
    {
        return $this->h * $this->ceil /2;
    }

    function perimeter()
    {
        // TODO: Implement perimeter() method.
        return $this->ceil+$this->edge2+$this->edge3;
    }
}
class rectangle extends Shape{
private $long,$short;
    public function __construct($long,$short)
    {
        $this->long=$long;
        $this->short=$short;
    }
    function area()
    {
        return $this->short * $this->long;
    }

    function perimeter()
    {
        return ($this->long + $this->short)*2;
    }
}

class square extends Shape{
    private $edge;
    public function __construct($edge)
    {
        $this->edge=$edge;
    }

    function area()
    {
        // TODO: Implement area() method.
        return $this->edge* $this->edge;

    }

    function perimeter()
    {
        // TODO: Implement perimeter() method.
        return 4* $this->edge;
    }
}


$kare=new square(2);
$ucgen=new triangle(5,4,6,4);
$dikdortgen=new rectangle(4,2);
$kare->printResult();
$ucgen->printResult();
$dikdortgen->printResult();
