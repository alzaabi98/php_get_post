
<h4>

    <?php 
    
        if (isset($_GET['name'])) {

            echo 'The user is ' . $_GET['name'];
        }
        
    ?>

</h4>

<a href="<?= $_SERVER['PHP_SELF'] ?>?name=ahmed">Ahmed</a>

<a href="<?= $_SERVER['PHP_SELF'] ?>?name=ali">Ali</a>

