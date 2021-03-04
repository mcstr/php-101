<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>

<div class="container">

<div class="image">
    <img src="https://www.xing.com/imagecache/public/scaled_original_image/eyJ1dWlkIjoiMWEzZGU1ZWUtNTBhZS00MmY1LTk0YTEtZmUzZDI4ZTY0MGMxIiwiYXBwX2NvbnRleHQiOiJlbnRpdHktcGFnZXMiLCJtYXhfd2lkdGgiOjMyMCwibWF4X2hlaWdodCI6MzIwfQ?signature=ea8ca0de275e7cacaed191bdcb634385adeeee4af821637f190fd6550e624b69" alt="">
</div>
    <h1>Sign up</h1>

    <!-- form -->
    <form action="form.php" method="post" id="form">
         <!-- first name -->
    <div class="form-group">
        <label for="first_name">First name</label>
        <input name="first" type="text" id="first-name" placeholder="First Name"  minlength="3" maxlength="100" value=<?php echo $_POST['first']?>>
    </div>

    <!-- last name -->
    <div class="form-group">
        <label for="last_name">Last name</label>
        <input name="last" type="text" id="last-name" placeholder="Last Name"  minlength="3" maxlength="100">
    </div>

    <!-- age -->
    <div class="form-group">
        <label for="age">Age</label>
        <input name="age" type="number" id="age" placeholder="Age"  minlength="3" maxlength="100">
    </div>
    <!-- eamil -->
    <div class="form-group">
        <label for="email">email</label>
        <input name="email" type="email" id="email" placeholder="email@address.com"  minlength="3" maxlength="100" required>
    </div>
    <button type="submit">Submit</button>
    </form>
</div>



    <?php
        
        echo $_POST['first'];
        echo $_POST['last'];
      
        


    ?>
</body>
</html>