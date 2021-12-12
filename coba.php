<?php 
    $asrr = ["name"=>"cloudias","age"=>12];
    var_dump($asrr);
    echo "<br>";
    $jsonArr = json_encode($asrr);
    // var_dump($jsonArr);
    echo $jsonArr;
    echo '<br>';
    $asArrBack = json_decode($jsonArr);
    var_dump($asArrBack);
    echo $asArrBack->name;

?>