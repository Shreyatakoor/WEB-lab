<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Visitor Counter
        </title>
        <style>
            body { font-family:Arial,sans-serif;text-align:center;margin-top:50px;}
            h1{color:#333;}
            p{font-size:1.2 em;}
        </style>
        </head>
        <body>
            <h1>SHREYA TAKOOR</h1>
            <h1>4MW23CS154</h1>
            <?php
            $file='Counter.txt';
            $count=file_exists($file)?(int)file_get_contents($file):0;
            file_put_contents($file,++$count);
            ?>
            <h1>Visitor Counter</h1>
            <p>Number of Visitors:<strong><?php echo $count;?></strong></p>
        </body>
</html>
