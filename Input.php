<?php
class DateRangeException extends Exception{

}
class Input
{
    public static function getDate($key){
        $min = date("1900-01-01");
        $max = date("Y-m-d");
        $stringDate = self::get($key);
        if(self::has($key) && strlen($stringDate)==10){
            $value = date(self::get($key));
            if($value > $min && $value < $max){

                return $value;    
            }
            else{
                throw new DateRangeException("The date $stringDate is out of range min. Date: $min max. Date: $max");
            }
        }
        else{
            throw new InvalidArgumentException("Invalid argument date: $stringDate not recognized.");
        }
    }

    public static function getString($key , $min=1, $max=100){

        if(is_string(self::get($key)) && (is_numeric($min) && is_numeric($max))){
            if(self::has($key)){
                if($min > strlen(self::get($key)) || $max < strlen(self::get($key))){
                    throw new LengthException("The length was out of range");
                }
                return strval(self::get($key));
            }else{  
                throw new OutOfRangeException("The key $key given is not set.");
            }
        }
        else{
            throw new InvalidArgumentException("The given value for $key could not be read.");   
        }
    }

    public static function getNumber($key , $min=0, $max=PHP_INT_MAX){
        
        if(is_numeric($key) || (is_numeric($min) && is_numeric($max))){

            if(self::has($key)){
                if($min > self::get($key) || $max < self::get($key)){
                    throw new RangeException("The number was out of range");
                }
                return intval(self::get($key));
            }else{
                throw new OutOfRangeException("The key $key given is not set.");
            }
        }
        else{
            throw new InvalidArgumentException("The given value for $key could not be read.");   
        }
    }
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        return isset($_REQUEST[$key]) ? true : false;
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
