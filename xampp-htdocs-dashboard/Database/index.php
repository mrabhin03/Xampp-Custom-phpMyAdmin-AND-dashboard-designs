<?php
    $conn=new mysqli("localhost","root","");
    $databases=$conn->query("show databases");
?>
<head>
    <link rel="stylesheet" href="Database/style.css?v=<?=time()?>">
</head>
<body>
    <header>
        <h1>Database Details</h1>
        <div class='inputs'>
            <label for="database">
                Database Name: 
                <select onchange='changedValue()' name="database" id="database">
                    <!-- <option value="" disabled selected>Select database</option> -->
                    <?php
                    $i=0;
                    while($database=$databases->fetch_assoc()){
                        $sel="";
                        if($i==0){
                            $i++;
                            $sel="selected";
                        }
                        if($database['Database']!="information_schema" && $database['Database']!="mysql" &&$database['Database']!="performance_schema" && $database['Database']!="phpmyadmin")
                    echo "<option value='{$database['Database']}' $sel>{$database['Database']}</option>";
                    }
                    ?>
                </select>
            </label>
            <label for="table">
                Table Name:
                <select onclick="tableValues()" name="table" id="table">
                    <option value="none" disabled selected>First Select a database</option>
                </select>
            </label>
        </div>
    </header>
    <section id="output">
        Select a Database
    </section>
    <script src='Database/script.js?v=<?=time()?>'></script>
</body>