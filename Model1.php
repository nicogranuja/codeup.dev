<?php

abstract class Model
{
    /** @var PDO|null Connection to the database */
    protected static $dbc = null;

    /** @var array Database values for a single record. Array keys should be column names in the DB */
    protected static $attributes = array();

    /**
     * Constructor
     *
     * An instance of a class derived from Model represents a single record in the database.
     *
     * $param array $attributes Optional array of database values to initialize the model record with
     */
    public function __construct(array $attributes = array())
    {
        self::dbConnect();
        // @TODO: Initialize the $attributes property with the passed value
        self::$attributes = $attributes;
    }

    /**
     * Connect to the DB
     *
     * This method should be called at the beginning of any function that needs to communicate with the database
     */
    protected static function dbConnect()
    {
        if (!self::$dbc) {
            // @TODO: Connect to database
            // Get new instance of PDO object
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,DB_USER,DB_PASS);
            // Tell PDO to throw exceptions on error
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    /**
     * Get a value from attributes based on its name
     *
     * @param string $name key for attributes array
     *
     * @return mixed|null value from the attributes array or null if it is undefined
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes for $name if it exists, else return null
        return array_key_exists($name, self::$attributes) ? self::$attributes[$name] : null;
    }

    /**
     * Set a new value for a key in attributes
     *
     * @param string $name  key for attributes array
     * @param mixed  $value value to be saved in attributes array
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
        self::$attributes[$name] = $value;
    }

    /** Store the object in the database */
    public function save($tableName)
    {
        // @TODO: Call the proper database method: if the `id` is set this is an update, else it is a insert
        if(!empty(self::$attributes) && !empty(self::$attributes['id'])){
            self::update($tableName);
        }
         // @TODO: Ensure there are values in the attributes array before attempting to save
        else{
            self::insert($tableName);

        }
    }
    //display all from table
    public function showAll($tableName){
        $query = "SELECT * FROM $tableName";
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    //find by id
    public function find($id, $tableName){
        $query = "SELECT * FROM $tableName
            WHERE id=$id";
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row; 
    }
    //delete maybe by id?
    public function delete($id, $tableName){
        $query = "DELETE FROM $tableName
            WHERE id=$id";
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();
        
    }
    /**
     * Insert new entry into database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    // protected abstract function insert();
    protected function insert($tableName){ 
        //start the query
        $query = "INSERT INTO $tableName ";
        //for each to get the keys inside an array and the values inside another one
        foreach (self::$attributes as $key => $value) {
            $arrKeys[] = $key;
            //saving with colon for the query
            $arrKeysWithColon [] = ":".$key;
            $arrValues[] = $value;
        }
        //get the string to send the query
        $keys = implode(",", $arrKeys);
        $values = implode(",", $arrKeysWithColon);
        //completing the query
        $query .= "( $keys ) VALUES ( $values )" .PHP_EOL;
        $stmt = self::$dbc->prepare($query);
        //binding the values
        for ($i=0; $i < count($arrKeys); $i++) { 
            $stmt->bindValue(":$arrKeys[$i]", $arrValues[$i], PDO::PARAM_STR);
        }
        $stmt->execute();

        //insert id in the array to call update when id is defined
        $insertedId = self::$dbc->lastInsertId();
        self::$attributes['id'] = $insertedId;
        ///******************
    }

    /**
     * Update existing entry in database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    // protected abstract function update();
    protected function update($tableName){
        //start the query
        $query = "UPDATE $tableName ";
        //for each to get the keys inside an array and the values inside another one
        foreach (self::$attributes as $key => $value) {
            $arrKeys[] = $key;
            //saving with colon for the query
            $arrKeysWithColon [] = ":".$key;
            $arrValues[] = $value;
        }
        //pop the id
        array_pop($arrKeys);
        //pop the id
        array_pop($arrKeysWithColon);
        //CANNOT UPDATE THE ROLE ID IN USERS
        for ($i=0; $i < count($arrKeys)-1; $i++) {
            $attribute = is_int($arrValues[$i]) ? $arrValues[$i] : "'".$arrValues[$i]."'";
            $stringForUpdate [] = $arrKeys[$i] ."=" .
             $attribute; 
        }
        $stringUpdate = implode(",", $stringForUpdate);
    
        // completing the query
        $query .= "SET $stringUpdate WHERE id=" . self::$attributes['id'];
        echo $query;
        $stmt = self::$dbc->prepare($query);
        //binding the values
        for ($i=0; $i < count($arrKeys); $i++) { 
            $stmt->bindValue(":$arrKeys[$i]", $arrValues[$i], PDO::PARAM_STR);
        }
        $stmt->execute();
    }
}
