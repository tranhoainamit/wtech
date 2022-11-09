<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quản trị website</title>
        
        <script>
        $(function (){
            $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
        });
        </script>
    </head>
    <body>
        <div class="container">
            <h1 class="alert alert-danger">QUẢN TRỊ Wtech</h1>
            <nav>
                <?php require 'menu.php';?>
            </nav>
            <?php
                require $VIEW_NAME;
            ?>
        </div>
    </body>
</html>
