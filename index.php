<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <title>How much He/She loves you?</title>
</head>
<body>
    
    <div class="container" id="container1">
        <center>
            <img src="img/heart-306052__340.webp" height="100px" alt="">
            <h1 class="heading">Calculate your L❤️VE</h1>
            <input class="form-control" type="text" id="myName"> <br>
            <select class="form-control" name="Gender" id="sel">
                <option value="Boy">Boy</option>
                <option value="Girl">Girl</option>
            </select> <br>
            <input class="form-control" type="text" id="crushName"> <br>
            <select class="form-control" name="Gender" id="sel">
                <option value="Boy">Boy</option>
                <option value="Girl" selected>Girl</option>
            </select> <br>
            <input class="submit form-control" type="submit" value="Calculate!!">
        </center>
    </div>


    <div class="container d-none" id="container2">
       <center>
            <h1 class="percentage heading">100%</h1>
            <h1 class="message">You guys really love each other so much</h1>
            <img class="image" src="img/good.png" height="300px" alt=""> <br>
            <button class="btn btn-success" id="btn">Try Again!!</button>
       </center>
    </div>
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>