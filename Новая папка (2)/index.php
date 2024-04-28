<?php
include_once 'connect';

$sql = "SELECT * FROM tovar ";
$result = mysql_query();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contanier" style="margin-top:20px;">
        <div class="row">
            <div class="col-xs-8 col-xs-offser-2">
                <div class="panel-heading">
                    <h3>PHP CRUD</h3>
                </div>

                <div class="panel-body text-right" >
                    <a href="#" class="btn btn-danger">Добавить</a>
                </div>
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Название</td>
                        <td>Цена</td>
                        <td>Правка</td>
                        <td>Удаление</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt =1;
                    while($row = mysqli_fetch_array($result))
                    {

                    
                    ?>
                    <tr>
                        <td>1</td>
                        <td>Пример</td>
                        <td>Цена</td>
                        <td></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                   
                </table>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        Количество записей...
    </div>
    <script src="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    <script src="/jquery-3.7.1.min.map"></script>
    <script>
        function delete_tovar(id)
        {

        }
    </script>
</body>
</html>