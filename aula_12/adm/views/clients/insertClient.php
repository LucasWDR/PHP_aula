<h1>Insere CLiente</h1>
<div class="insert">
    <form action="?controller=clients&action=insertClientAction" method="POST">
  <div class="form-group">
      <div>
          <label for="name">Nome:</label>
          <input type="text" class="form-control" name="name">
      </div>
      <div>
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email">
      </div>
      <div>
          <label for="tel">Telefone:</label>
          <input type="text" class="form-control" name="phone">
      </div>
      <div>
          <label for="end">Endereço:</label>
          <input type="text" class="form-control" name="address">
      </div>
    
    <div>
       <label for="photo">Foto:</label>
      <input type="text" class="form-control" name="photo">
    </div>

        <br>

        
        <button type="submit" class="btn btn-sucess">Salvar</button>
     </div>
    </form>
</div>