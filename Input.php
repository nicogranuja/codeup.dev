<?php

class Input
{

    public static function getString($key){
        if(is_string($key)){
            if(self::has($key)){
                return strval(self::get($key));
            }
            throw new Exception("The key $key given is not set.");
        }
        throw new Exception("The given value for $key could not be read.");
    }

    public static function getNumber($key){
        
        if(is_numeric($key)){
            if(self::has($key)){
                return intval(self::get($key));
            }
            throw new Exception("The key $key given is not set.");
        }
        else{
            throw new Exception("The given value for $key could not be read.");   
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
