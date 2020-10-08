<h2>Cadastro de Clientes</h2>

<form action="?controller=clients&action=registerView" method="post">

<div class="form-group">
    <label>Nome</label>
    <input type="text" name="name" class="form=control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form=control">
</div>
<div class="form-group">
    <label>Interesse</label>
    <input type="text" name="interest" class="form=control">
</div>
<div class="form-group">
    <label>Senha:</label>
    <input type="password" id="pwd" name="senha">
</div>
<div class="form-group">
    <label>Seu Veiculo:</label><br>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> Eu tenho bicicleta</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> Eu tenho carro</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> Eu tenho um bote</label><br>
</div>
<div class="form-group">
<label for="cars">Marca do Carro:</label>
<select id="cars" name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Volks</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
</div>


<div class="form-group">
    <label>Sexo</label>
    <input type="radio" name="sexo" value="female">Female
    <input type="radio" name="sexo" value="male">Male
</div>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select multiple class="form-control" name="select" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
<div class="form-group">
    <label>Comentário</label>
    <textarea name="comment" rows="5" cols="40"></textarea>
</div>



<br>
<input type="submit" value="Registrar">

</form>