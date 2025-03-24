<?php
    $table = $_GET['Table'];
    $database = $_GET['database'];
    $conn   =   new mysqli("localhost","root","",$database);
    $datas = $conn->query("SELECT * FROM $table");
    $fieldsarray = $datas->fetch_fields();
    echo"<table class='details' >";
    echo"<thead>";
    foreach($fieldsarray as $data){
         echo"<th>{$data->name}</th>";
    }
    echo"</thead>";
    echo"<tbody>";
    if($datas->num_rows>0){
        while($data=$datas->fetch_assoc()){
            echo "<tr>";
            foreach($fieldsarray as $field){
                echo"<td>{$data[$field->name]}</td>";
            }
        echo "</tr>";
        }
    }else{
        echo "<tr><td align='center' colspan='".count($fieldsarray)."'>No data</td></tr>";
    }
    echo"</tbody>";


    echo "</table>";
    
?>