<!DOCTYPE html>
<html>
    <body>
        
        
   
    </body>
</html>
<?php
//Store data from my form into variables
$t = $_GET['t'];


//retrieve the Jason file and converted it into php array
$jr = file_get_contents('file.json');
$phparray = json_decode($jr, true);

//print_r($phparray);

foreach ($phparray as $v){
 if($t == $v["e"]){
        print_r($v["e"]);
        print_r($v);
   };
};
