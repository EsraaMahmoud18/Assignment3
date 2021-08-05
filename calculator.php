
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator App</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    
</head>
<body>
    <div class=" vh-100 bg-info">
    <h1 class=" text-center w-50 m-auto ">Calculator App </h1>
    <form method="POST" action="handle-calculate.php" class=" w-50 m-auto border  p-5 text-center m-3">
        <div class="contain d-flex justify-content-around">
        <label for="inputX">Input X :</label>
        <input type="text " class="form-control col" name="inputX">
        <label for="inputY">Input Y :</label>
        <input type="text " class="form-control m-1 col" name="inputY">
        <label for="operation"> Enter Operation :</label>
        <input type="text " class="form-control m-1 col" name="operation">
        </div>
        
        <button class=" btn btn-primary m-2 " name="submit" value="submit " type="submit">submit </button>
        <?php
        // echo "
        
        // <div  > $result</div>
        
        // ";
        ?>
    </form>
    </div>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
