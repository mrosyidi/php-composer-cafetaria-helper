<?php 
    
    require_once __DIR__ . "/../vendor/autoload.php";

    class Food
    {
        private string $name;
        public function __construct(string $name){ $this->name = $name; }
        public function getName(): string{ return $this->name; }
    }

    class Drink 
    {
        private string $name;
        public function __construct(string $name){ $this->name = $name; }
        public function getName(): string{ return $this->name; }
    }

    function testCheckHelperFoodNotFound(): void 
    {
        $foods[] = new Food("Mie Ayam");
        $foods[] = new Food("Ayam Goreng");
        $result = \Cafetaria\Helper\CheckHelper::check($foods, "Rawon");
        var_dump($result);
    }

    testCheckHelperFoodNotFound();