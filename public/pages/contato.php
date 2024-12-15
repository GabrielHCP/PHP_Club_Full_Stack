<h2>Contato</h2>

<?=get('message')?>

<form action="/pages/forms/contato.php" method="POST" role="form">
    <legend>Formulário de contato</legend>
    
    <div class='form-group'>
        <label for="">Nome</label>
        <input type="text" class="form-control" id="" placeholder="Digite seu nome" name="name">
    </div>

    <div class='form-group'>
        <label for="">E-mail</label>
        <input type="text" class="form-control" id="" placeholder="Digite seu e-mail" name="email">
    </div>

    <div class='form-group'>
        <label for="">Assunto</label>
        <input type="text" class="form-control" id="" placeholder="Digite o assunto" name="subject">
    </div>

    
    <div class='form-group'>
        <label for="">Mensagem</label>
        <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>