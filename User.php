<?php
define('DB_HOST','127.0.0.1');
define('DB_NAME', 'join_test_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');
require_once "Model1.php";

class User extends Model{
	 
	public function insert(){
        //select the table name
        $tableName = 'users';
        //start the query
        $query = "INSERT INTO $tableName ";
        //for each to get the keys inside an array and the values inside another one
        foreach ($this->attributes as $key => $value) {
         	$arrKeys[] = $key;
         	$arrValues[] = $value;
        }
        //get the string to send the query
        $keys = implode(",", $arrKeys);
     	//completing the query
        $query .= "( $keys ) VALUES ( :$keys )";
        $stmt = self::$dbc->prepare($query);
        //binding the values
        for ($i=0; $i < count($arrKeys); $i++) { 
        	$stmt->bindValue(":$arrKeys[$i]", $arrValues[$i], PDO::PARAM_STR);
        }
        $stmt->execute();

        //insert id in the array to call update when id is defined
        $insertedId = $dbc->lastInsertId();
        $this->attributes['id'] = $insertedId;
        ///******************
	}
	public function update(){
	    //select the table name
        $tableName = 'users';
        //start the query
        $query = "UPDATE $tableName ";
        //for each to get the keys inside an array and the values inside another one
        foreach ($this->attributes as $key => $value) {
         	$arrKeys[] = $key;
         	$arrValues[] = $value;
        }
        //get the string to send the query
        $keys = implode(",", $arrKeys);
     	//completing the query
        $query .= "( $keys ) SET ( :$keys ) WHERE id= $this->attributes['id']";
        $stmt = self::$dbc->prepare($query);
        //binding the values
        for ($i=0; $i < count($arrKeys); $i++) { 
        	$stmt->bindValue(":$arrKeys[$i]", $arrValues[$i], PDO::PARAM_STR);
        }
        $stmt->execute();
	}
}
$data = [
	['name'=>'bob',
	'email'=> 'bobsieger@aol.com',
	'role_id=> 1'],
];
$user1 = new User($data);





var_dump($user1->find(1, 'users'));