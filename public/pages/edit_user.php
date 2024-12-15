
<?= get('message'); ?>

<?php  
   $user = find('users', 'id', $_GET['id']);
?>

<form action="/pages/forms/update_user.php" method="POST" role="form">
    <legend>Formulário de Cadastro</legend>
    
    <div class='form-group'>
        <label for="">Nome</label>
        <input type="text" class="form-control" id="" placeholder="Digite seu nome" name="name" value="<?= $user->name ?>">
    </div>

    <input type="hidden" name="id" value="<?= $user->id; ?>">

    <div class='form-group'>
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" id="" placeholder="Digite seu e-mail" name="sobrenome" value="<?= $user->sobrenome ?>">
    </div>

    <div class='form-group'>
        <label for="">E-mail</label>
        <input type="text" class="form-control" id="" placeholder="Digite o assunto" name="email" value="<?= $user->email ?>">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

</form>