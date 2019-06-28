<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyFistProject</title>
    </head>
    <body>
        <form method="post" action="http://localhost/MyFirstProject/controller/controller.php">
            <label> Voer een tekst in <br /></label>
            <input type="text" name="naam" >
            <input type="submit" name="submit" value="Verzenden"/>
        </form>
        </p>
        <?php
        echo $viewData['palindroom']."<br />";
        echo $viewData['message']."<br />";
        echo $viewData['action'];
        ?>
    </body>
</html>

