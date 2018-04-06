<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
    </head>
    <body>
        <?php
            try {
                $conn = new \PDO('mysql:host=mysql;port=3306;dbname=mysql', 'root', 'root');
                echo "Success! Enjoying coding now."; 
                // Maybe you need to wait for some seconds for building the database at the first time.
            }
            catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
            ?>
    </body>
</html>