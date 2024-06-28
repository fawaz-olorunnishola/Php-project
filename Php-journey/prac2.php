<!-- <?php


// Defining a property implicity:
// $object1 = new User();
// $object1->name = "Alice";

// echo $object1->name;

// class user {}

// valid and invalid property declarations:
//   class Test  
//   {    
//     public $name  = "Paul Smith"; // Valid    
//     public $age   = 42;           // Valid    
//     public $time  = time();       // Invalid - calls a function   
//     public $score = $level * 2;   // Invalid - uses an expression  
// }

// declaring constants:
// Translate::lookup();

// class Translate
// {
//     const ENGLISH = 1;
//     const SPANISH = 1;
//     const GERMAN = 1;
//     const FRENCH = 1;


// static function lookup()
// {
//     echo self::SPANISH;
// }
// }

// changing property and method scope:
// class Example
// {
//     var $name = "Micheal"; // Same as public but deprecated
//     public $age = 23;   // Public property
//     protected $usercount; // Protected property

//     private function admin() // Private method
//     {
//         // Admin code goes here
//     }
// }

// Defining a class with a static property:
// $temp = new Test();

// echo "Test A: " . Test::$static_property . "<br>";
// echo "Test B: " . $temp->get_sp()        . "<br>";
// echo "Test C: " . $temp->static_property . "<br>";

// class Test{
//     static $static_property = "I'm static";

//     function get_sp()
//     {
//         return self::$static_property;
//     }
// }

// Inheriting and extending classes:
// $object  = new Subscriber;
// $object->name  = "Fred";
// $object->password  ="pword";
// $object->phone  = "012 345 6789";
// $object->email  = "fred@bloggs.com";
// $object->display();  

// class User{
//     public $name, $password;

//     function save_user()
//     {
//         echo "Save User code goes here";
//     }
// }

// class Subscriber extends User
// {
//     public $phone, $email;

//     function display()
//     {
//         echo "Name: " . $this->name . "<br>";
//         echo "Pass: " . $this->password . "<br>";
//         echo "Phone: " . $this->phone . "<br>";
//         echo "Email: " . $this->email;
//     }
// }

// Overriding a method and using the parent operator:
// $object = new Son;
// $object->test();
// $object->test2();

// class Dad
// {
//     function test()
//     {
//         echo "[Class Dad] I am your Father<br>";
//     }
// }

// class Son extends Dad
// {
//     function test()
//     {
//         echo "[Class son] I am Luke<br>";
//     }

//     function test2()
//     {
//         parent::test();
//     }
// }

// Calling the parent class constructor:
// $object = new Tiger();                                             
// echo "Tigers have...<br>";  
// echo "Fur: " . $object->fur . "<br>";  
// echo "Stripes: " . $object->stripes;

// class Wildcat  
// {    
//     public $fur; // Wildcats have fur
//     function __construct()    
//     {      
//         $this->fur = "TRUE";    
//     }  
// }
//   class Tiger extends Wildcat  
//   {    
//     public $stripes; // Tigers have stripes

//     function __construct()    
//     {      
//         parent::__construct(); // Call parent constructor first      
//         $this->stripes = "TRUE";    
//     }  
// }

// Creating a final method:
// class User{

//     final function copyright()
//     {
//         echo "This class was written by joe smith";
//     }
// }




// ARRAYS-LEARNING:
// $paper[] = "Copier";
// $paper[] = "Inkjet";
// $paper[] = "Laser";
// $paper[] = "Photo";

// for ($j = 0; $j < 4; ++$j)
//     echo "$j: $paper[$j]<br>";


// echo "<pre>";
// print_r($paper);
?> -->