<?php
    // https://prnt.sc/rYf4mRrtaPe3

    $array1 = ['title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'title7', 'title8', 'title9'];
    $rand_index = rand(0, 8);
    $rand_title = $array1[$rand_index];
?>

<html>
    <head>
        <title><?php echo $rand_title; ?></title>
    </head>
    <body>
        check the title
    </body>

</html>