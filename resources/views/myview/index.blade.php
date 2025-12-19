@extends('template.dafault')

@section('title','my view1')

@section('content')
    <h2>ice</h2>
    <?php
        echo "my view content";
        echo "<br>";
        echo "Line2";
    ?>

    <br>

    <?php
        $myval = "hello php";
    ?>

    <br>

    <?php
        echo $myval;
        $myarry = array(1,2,3,4,5);
        

        echo $myarry[0];

    ?>

    <?php
        $myarry4 = [
            "name" => "john",
            "age" => 30,
            "city" => "New York",
            0,1
    ];
    print_r($myarry4);
    foreach($myarry4 as $key => $value){
        echo "<br>key: " . $key . ", value: " . $value;
    }

    foreach($myarry4 as $value){
        echo "<br>value: " . $value;
    }

    $myval = "A";
    $myVal = "F";
    for($i=0; $i<10; $i++){
        echo $myval++;
        echo "<br>";
    }
    
    function myFunction() {
        return "My function called";
    }

    echo mYfUnCtIoN();
    echo "<br>";

    $a = 10;
    if($a <10) {
        echo "a<10";
    }
    else 
    
    if ($a==10) {
        echo "a=10";
    }
    else {
        echo "a>10";
    }


    ?>
@endsection