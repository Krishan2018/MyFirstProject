<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyFistProject</title>
    </head>
    <body>
        <form method="post" action="controller/controller.php">
            <label> Voer een tekst in <br /></label>
            <input type="text" name="naam" >
            <input type="submit" name="submit" value="Submit"/>
        </form>
        
        <?php
        echo $viewData['palindroom'];
        echo $viewData['message'];
        echo $viewData['action'];
        ?>
    </body>
</html>
