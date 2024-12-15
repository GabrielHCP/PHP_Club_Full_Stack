
<?= get('message'); ?>

<form action="/pages/forms/create_user.php" method="POST" role="form">
    <legend>Formulário de Cadastro</legend>
    
    <div class='form-group'>
        <label for="">Nome</label>
        <input type="text" class="form-control" id="" placeholder="Digite seu nome" name="name">
    </div>

    <div class='form-group'>
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" id="" placeholder="Digite seu e-mail" name="sobrenome">
    </div>

    <div class='form-group'>
        <label for="">E-mail</label>
        <input type="text" class="form-control" id="" placeholder="Digite o assunto" name="email">
    </div>

    
    <div class='form-group'>
        <label for="">Senha</label>
        <input type="text" name="password" cols="30" rows="10" class="form-control">

    <button type="submit" class="btn btn-primary">Submit</button>

</form>