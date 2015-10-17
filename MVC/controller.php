<?php

// link to the record file
include('record.php');


//in a live enviroment we would validate the data now.
//for the example we will skipp that



// controller passes data to the model using the create function.
$new = record::create($_POST);



?>
<pre>
<?php
print_r($new);
?>
</pre>

Data was sent from the view and handed off to the controller and then given to the model to be saved.
