<?php
function getMoviesFromCSV() {
    
   $csvString = "";
    
    for($i=0; $i<100; $i++) {
        
        $csvString .= "Movie $i,1\n";
    }
    
    
    return $csvString;
    
}

$csvString = getMoviesFromCSV();

//echo $csvString;

$lines = explode("\n",$csvString);

//print_r($lines);    

foreach($lines as $line) {
    
    list($movieTitle, $cinemaID) = explode(',',$line);
    
    $sql = "INSERT into movies values (null, $movieTitle,$cinemaID)";
    
    echo "<p>$cinemaIDsql";
   
    
}

?>
