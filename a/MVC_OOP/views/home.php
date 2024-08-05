<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coastal Breeze Villas</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background: url('https://th.bing.com/th/id/R.3fcf92b590efbafe5874222d235d557d?rik=KVHw9t1A%2fO9qig&pid=ImgRaw&r=0') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            color: white;
        }

        .nav {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .hero {
            text-align: center;
        }

        .hero h1 {
            font-size: 4em;
            margin: 0;
        }

        .hero p {
            font-size: 1.5em;
        }

        .btn {
            background-color: #fff;
            color: #000;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="<?= BASE_DIR; ?>?act=product_list">LIST</a></li>
                <li><a href="#">CREATE</a></li>
                <li><a href="#">EDIT</a></li>
                <li><a href="#">CART (0)</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Coastal Breeze Villas</h1>
            <p>A Countryside Getaway</p>
            <a href="#" class="btn">Check Rooms Now</a>
        </div>
    </header>
</body>

</html>