<?php

class record {


function __construct() {
       
       $this->field1 = null;
       $this->field2 = null;
       $this->field3 = null;
   }


public static function create($data){
	$new = new record;
	$new->field1 = $data['field1'];	
	$new->field2 = $data['field2'];	
	$new->field3 = $data['field3'];	

	// then we would run some type of update string that would update the DB with the new information.
	//ex saveNew($new);

	// for the example we are just going to return back the object
	return $new;
}

}

?>