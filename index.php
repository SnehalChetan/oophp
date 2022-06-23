<?php

declare(strict_types=1);


if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'classes' : 
            require 'classes.php';
            exit;
        case 'extending' : 
            require 'extending.php';
            exit;
        case 'default' : 
            require 'Please display correct page';
            exit;
                        
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>puppylov store</title>
</head>
<body>
    <h3 class="py-3"> PHP OOP Exercises </h3>
    <div class="container">
        <div class="section">
            <form method="Get" id="userDetails" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
            <div class="row py-2">
                <button class="btn border-primary" type="page" id="page" name="page" value="classes">Ex 1 : Classes Exercise</button>
            </div>
            <div class="row py-2">
            <button class="btn border-primary" type="page" id="page" name="page" value="extending">Ex 2 : Extending Exercise</button>
            </div>
            <div class="row py-2">
                <button class="btn border-primary" type="page" id="page" name="page" value="private">Ex 2 : Private Exercise</button>
            </div>
            <!-- <div class="row">
                <button class="btn border-primary" type="page" id="page" name="page" value="classes">Classes Exercise</button>
            </div> -->
            </form>
        </div>
    </div>

    
    
