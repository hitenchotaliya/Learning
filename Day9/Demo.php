<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Demo</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            color: yellow;
            text-align: center;
            text-decoration: underline;
            text-shadow: -4px -3px 2px black;
            margin: 0;
            padding: 20px;
            background-color: bisque;
        }

        .container {
            display: flex;
            max-width: 1000px;
            margin: auto;
            border: 2px solid black;
            height: 500px;
            overflow: hidden;
        }

        .links {
            background-color: cadetblue;
            padding: 10px;
            width: 25%;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        .main {
            background-color: beige;
            padding: 10px;
            width: 60%;
        }

        .advertisement {
            background-color: lightgray;
            padding: 10px;
            width: 15%;
        }
    </style>
</head>

<body>
    <h1>Ajax Demo</h1>
    <div class="container">
        <div class="links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="main">
            <!-- Main Content Goes Here -->
            Main part
        </div>

        <div class="advertisement">
            <!-- Advertisement Goes Here -->
            Advertisement
        </div>
    </div>
</body>

</html>