<!DOCTYPE html>
<html lang="en">
<title>Home Page</title>
<head>
    <style>
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

        /* CSS for main element */
        .intro {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 100%;
            width: 100%;
            height: 520px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("images.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeatrepeat;
        }

        /* CSS for footer */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #302f49;
            padding: 40px 80px;
        }

        .footer .copy {
            color: #fff;
        }

    </style>
</head>

<body>
<header class="header">
    <a class="logo">Driving Licence</a>
    <nav class="nav-items">
        <a href="register_page.php">Sign Out</a>
        <a href="licence_form.php">Form</a>
        <a href="result.php">Result</a>
    </nav>
</header>
<main>
    <div class="intro">
    </div>
</main>
<footer class="footer">
</footer>
</body>

</html>