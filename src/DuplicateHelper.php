<?php   

    namespace Cafetaria\Helper 
    {
        class DuplicateHelper
        {
            public static function duplicate(array $orders, int $code): array 
            {
                $elements = [];

                for($index = 0; $index < sizeof($orders); $index++)
                {
                    if($orders[$index]->getCode() == $code)
                    {
                        $elements[] = $orders[$index];
                    }
                }

                return $elements;
            }
        }
    }