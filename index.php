<?php

/**
 * Class Animal
 */
class Animal
{
    protected $name;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    function __construct($name) {
        $this->name=$name;
    }
}
/**
 * Class Cat
 */
class Cat extends Animal
{
    protected $catname;
    public function meow ()
    {
        return "Cat {$this->catname} is sayig meow";
    }
    function __construct($catname) {
        parent::__construct($catname);
        $this->catname=$catname;
    }
}


$cat = new Cat('garfild');
echo $cat->getName ();
echo $cat->meow ();