<?php
  $marks =array(
    "mohammad"=> array(
        "physics"=>35,
        "maths"=>30,
        "chemistry"=> 39
    ),
    "qadir"=> array(
        "physics"=>35,
        "maths"=>30,
        "chemistry"=> 39
    ),
    "zara"=> array(
        "physics"=>35,
        "maths"=>30,
        "chemistry"=> 39 
    )
    );
    /*Accessing multi-dimensional array values*/
    echo "marks for mohammad in physics :";
    echo $marks['mohammad'] ['physics']."<br/>";
    echo "marks for qadir in maths :";
    echo $marks['qadir'] ['maths']."<br/>";
    echo "marks for zara in chemistry :";
    echo $marks['zara'] ['chemistry']."<br/>";
    ?>