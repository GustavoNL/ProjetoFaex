<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container-login">
        <form action="/PFaex/register/save" method="post">
        <a href="/PFaex/">
                <div class="container-logo">
                    <img src="public/img/images.png" alt="">
                </div>
            </a>
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input name="name" type="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefone</label>
                <input name="phone" type="name" class="form-control" id="fone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <div class="container-action">
                <span>Possui conta?</span>
                <a href="/PFaex/login">Clique aqui</a>
            </div>
        </form>
    </div>

</body>
</html>
