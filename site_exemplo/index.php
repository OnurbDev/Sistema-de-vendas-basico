<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <h1">Login</h1>
<div class="row justify-content-center container-fluid">
<div class="card" style="width: 28rem;">
    <div class="container">
        <form method="POST" action="login.php"> 
            <div class="email">
                <label class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="email" require>
            </div>

            <div class="email">
                <label class="form-label">senha</label>
                <input type="password" class="form-control" name="senha" id="senha" require>
            </div>
                <button type="submit" class="btn btn-primary">ENTRAR</button>

        </form>
    </div>
</div>
</div>
</body>
</html>