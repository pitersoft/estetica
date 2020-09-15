<section class="form__section">
  <div class="container">
    <div class="row">
      <div class="form__registro col-12 col-md-8 p-5 mx-auto">
        <h4 class="text-center">Registro</h4>
        <form>
          <div class="form-group">
            <label for="inputName">Nombre</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nombres" required minlength="3" maxlength="50" />
          </div>
          <div class="form-group">
            <label for="inputLastName">Apellido</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Apellidos" required minlength="3" maxlength="50" />
          </div>
          <div class="form-group">
            <label for="inputAdress">Dirección</label>
            <input type="text" class="form-control" id="inputAdress" placeholder="Dirección" required minlength="3" maxlength="50" />
          </div>
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Correo electrónico" required minlength="3" maxlength="50" />
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputTelefono">Telefono</label>
              <input type="text" class="form-control" id="inputTelefono" placeholder="Numero celular" required minlength="6" maxlength="9" />
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Cumpleaños</label>
              <input type="text" class="form-control" id="inputBirthday" placeholder="Fecha cumpleaños" />
            </div>
          </div>

          <button type="submit" class="btn btn-dark">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</section>