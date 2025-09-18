<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Our Company</title>
    <style>
        nav ul {
            list-style: none;
            padding: 15px; 
            display: flex;
            gap: 10px;
            background-color: black;
            opacity: 0.8;
            margin-bottom: 20px;
        }
        nav ul li {
            padding: 5px 10px;
        }
        nav ul li.active a {
            background-color: #007bff;
            color: white;
            padding: 15px;            
        }
        nav ul li a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <?php include 'navigaatio.php'; ?>
</header>
<main>
    <h1>Welcome to the Front Page!</h1>
    <p>This is the main page of our site with dynamic navigation.</p>
</main>
</body>
</html>
