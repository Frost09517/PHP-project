<!DOCTYPE html>
<html>
<title> Form </title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }
        body {
            margin: 0;
            box-sizing: border-box;
        }

        /* CSS for header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
        }

        .header .logo {
            font-size: 25px;
            font-family: 'Sriracha', cursive;
            color: #000;
            text-decoration: none;
            margin-left: 30px;
        }

        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #f5f5f5;
            margin-right: 20px;
        }

        .nav-items a {
            text-decoration: none;
            color: #000;
            padding: 35px 20px;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #04AA6D;
            color: green;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        .dropbtn {
            background-color: white;
            color: black;
            padding: 1px;
            font-size: 16px;
            border: black;
            cursor: default;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>

</head>
<body>
<header class="header">
    <a class="logo">Driving Licence</a>
    <nav class="nav-items">
        <a href="result.php">Result</a>
    </nav>
</header>
    <form method="post" action="database2.php" enctype="multipart/form-data">
        <label for="name"><b>Name:</b></label><br>
        <input type = "text" name="name" placeholder="Enter your name"><br>

        <label for="address"><b>Address:</b></label><br>
        <input type = "text" name="address" placeholder="Enter your address"><br>

        <label for="ctzno"><b>Citizenship number:</b></label><br>
        <input type ="text" name=ctzno placeholder="Enter Citizenship number"><br>

        <label for="email"><b>Email:</b></label><br>
        <input type="email" name="email" placeholder="Enter your Email"><<br>

        <label for="gender"><b>Gender:</b></label>
        <select id="gender" class="dropbtn">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="other">other</option>
        </select><br>
        <br>
        <label for="lcetyp"><b>License Type:</b></label>
        <select id="license-type" class="dropbtn" name="license-type">
            <option value="car">Car</option>
            <option value="bike">Bike</option>
            <option value="scooter">Scooter</option>
        </select><br>



        <button type="submit" class="registerbtn">Submit</button>
    </form>
</body>
</html>