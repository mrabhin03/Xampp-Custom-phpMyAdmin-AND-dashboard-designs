<?php
    $database   =   $_GET['Database'];
    $conn   =   new mysqli("localhost","root","");
    $tables =   $conn->query("SELECT TABLE_NAME FROM information_schema.tables WHERE table_schema = '$database';");
    while($table    =   $tables->fetch_assoc()){
        echo "<option value='{$table['TABLE_NAME']}'>{$table['TABLE_NAME']}</option>";
    }

?>