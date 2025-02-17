<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    class Order 
    {
        private int $code;
        public function __construct(int $code){ $this->code = $code; }
        public function getCode(): int { return $this->code; }
    }

    class Payment 
    {
        private int $code;
        public function __construct(int $code){ $this->code = $code; }
        public function getCode(): int { return $this->code; }
    }

    function testCodeHelperEmpty(): void 
    {
        $orders = [];
        $payments = [];
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    function testCodeHelperSameCode(): void 
    {
        $orders[] = new Order(1);
        $payments = [];
        $code = \Cafetaria\Helper\CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    testCodeHelperSameCode();