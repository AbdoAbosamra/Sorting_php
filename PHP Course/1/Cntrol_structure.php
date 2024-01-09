<html>
    <head>

    </head>
    <body>
        <?php $score=90;?>
        <?php if($score >= 90):?>
        <strong>A</strong>
        <?php elseif ($score >= 80):?>
        <strong>B</strong>
        <?php elseif ($score >= 70):?>
        <strong>C</strong>
        <?php endif;?>

    </body>

</html>