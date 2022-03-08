<?php $link = mysqli_connect('hellothere-db', getenv('USERNAME'), getenv('PASSWORD'), getenv('DBNAME')); ?>
<html>
<head>
        <title>Hello there!</title>
        <style>
        body {
                background-color: white;
                text-align: center;
                padding: 50px;
                font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        </style>
</head>
<body>
        <h1><?php echo "Hello there!   "; ?></h1>
        <?php if(!$link) { ?>
                <h2>Can't connect to MySQL Server!</h2>
        <?php } else { ?>
                <h2>MySQL Server version: <?php echo $link -> server_info; ?></h2>
        <?php } ?>
</body>
</html>