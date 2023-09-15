<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Crud</title>
    <?php include 'Class/ClassConexao.php' ;?>
</head>
<body>
    <?php 
        $connect = new ClassConexao();
        var_dump($connect->connectDB());
        
    ?>
</body>
</html>