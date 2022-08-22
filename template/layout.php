<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <title><?= isset($pageTitle) ? $pageTitle : 'Mon site web' ?></title>
    <style>
        .float-right{
            float: right;
        }
        .style-a{
            text-decoration: underline;
            color:#0d6efd;
            border: none;
            background: white;
            cursor: pointer;
        }
        .style-flex{
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $router->generate('home') ?>">Mon site</a>
            
        </div>
    </nav>
    <div class="container mt-3">
        <?= $pageContent ?>
    </div>
    
</body>
</html>