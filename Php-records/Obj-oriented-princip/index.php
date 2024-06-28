<?php

//(1) // Class
// class user 
// {

// }

// class AchievementBadge{
//     public $title;
//     public $description;
//     public $points;

// public function awardto($user) 
// {

// }
// }



// (2) Objects:

// class Team 
// {
//     protected $name;

//     protected $members = [];

//     public function __construct($name, $members = [])
//     {
//         $this->name= $name;
//         $this->members = $members;
//     }

//     public static function start(...$params) 
//     {
//         return new static(...$params);
//     }

//     public function name()
//     {
//         return $this->name;
//     }

//     public function members()
//     {
//         return $this->members;
//     }

//     public function add($name)
//     {
//         $this->members[] = $name;
//     }

//     public function cancel()
//     {

//     }

//     public function manager()
//     {

//     }

// }

// class Member 
// {
//     protected $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function lastViewed()
//     {

//     }
// }

// $acme =Team::start('Acme', [
//   new Member('Fawas Abdul'),
//   new Member('Pablo Escobar')
// ]);

// // $Laracast = new Team('Laracasts');

// // $Laracast = new Team('Foo');

// // $acme->add('Social Addict');

// echo "<pre>";
// var_dump($acme->members());


//(3) Inheritance:

// class coffeeMaker
// {
//     public function brew()
//     {
//         var_dump('Brewing the coffee');
//     }
// }   

// class SpecialityCoffeeMaker  extends coffeeMaker
// {
//     public function brewLatte()
//     {
//         var_dump('Brewing a latte');
//     }
// }

// (new specialityCoffeeMaker())->brewLatte();

class collection
{
    protected array $item;

    public function __construct($item)
    {
       $this->items = $item;
    }
    public function sum($key)
    {

    return array_sum(array_map(function ($item) use ($key) {
        return $item->$key;
        }, $this->$items));
    }
}

class Video 
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length; 
    }
}

$collection =  new Collection([
    new Video('Some Video 1', 100),
    new Video('Some Video 2', 200),
    new Video('Some Video 3', 300),
]);

// echo "<pre>";
// var_dump($collection);

echo $collection->sum('length');