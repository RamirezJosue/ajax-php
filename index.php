<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Productos</h2>
        <form action="" id="form_insert">
            <div class="row">
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Nombre</label>
                        <input class="form-control" type="text" required name="nombre[]">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Marca:</label>
                        <select required class="form-control" name="marca[]">
                            <option value="">Elige...</option>
                            <option value="X1">Marca X1</option>
                            <option value="X2">Marca X2</option>
                            <option value="X3">Marca X3</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Modelo</label>
                        <input class="form-control" type="text" required name="modelo[]">
                    </div>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>