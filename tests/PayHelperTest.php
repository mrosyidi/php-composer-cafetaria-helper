<?php 

    require_once __DIR__ . "/../vendor/autoload.php";

    class Order 
    {
        private int $code;
        private int $subTotal;
        
        public function __construct(int $code, int $subTotal)
        { 
            $this->code = $code; 
            $this->subTotal = $subTotal;
        }

        public function getCode(): int { return $this->code; }
        public function getSubTotal(): int { return $this->subTotal; }
    }

    function testPayHelperDataNotExist(): void 
    {
        $orders = [];
        $total = \Cafetaria\Helper\PayHelper::pay($orders, 2);
        var_dump($total);
    }

    testPayHelperDataNotExist();