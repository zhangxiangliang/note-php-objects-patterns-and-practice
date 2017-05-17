<?php
class StaticExample
{
    public static $aNum = 0;
    public static function sayHello()
    {
        self::$aNum++;
        printf("hello (%d) \n", self::$aNum);
    }
}

StaticExample::sayHello();
StaticExample::sayHello();
StaticExample::sayHello();
StaticExample::sayHello();
