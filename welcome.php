<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/logo/GameHub.png">
  <link rel="stylesheet" href="css/welcome.css">
  <title>Bienvenido</title>
  <script src="https://kit.fontawesome.com/f7f80355db.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
<div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body mt-2">
               <h6 class="modal-text lead"></h6> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-close-btn">Cerrar</button>
            </div>
        </div>
    </div>
</div>
  <header>
    <nav class="navbar color">
      <a href="index.php" class="div-logo">
        <div class="d-flex align-items-center">
          <img src="assets/logo/GameHub.png" alt="GameHub" class="img-logo" id="logo">
          <h3 class="text-white ml-2 mt-2">GameHub</h3>
        </div>
      </a>
    </nav>
  </header>
  <div class="container-fluid foto">
    <div class="row justify-content-center center">
      <div class="col-md-4 mb-4">
        <div class="form-container mt-3 login">
          <div class="form-header">
            <h3 class="form-title pb-2">Inicia sesión en tu cuenta</h3>
          </div>
          <div class="form-body mt-2">
            <div class="form-group">
              <label for="username">Nombre de usuario</label>
              <input type="text" class="form-control" id="username" placeholder="Usuario">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="Contraseña">
              <div class="text-right div-eye">
                <button class="btn btn-link eye-button" id="showPassword"><i class="fa-solid fa-eye"></i></button>
              </div>
            </div>
            <div class="text-right">
              <button type="button" class="btn btn-primary custom-btn-color" id="loginBtn">Iniciar sesión</button>
            </div>
          </div>
        </div>

        <div class="form-container register">
          <div class="form-header">
            <h3 class="form-title">¡Crea una cuenta aquí!</h3>
          </div>
          <div class="form-body mt-2">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos">
            </div>
            <div class="form-group">
              <label for="new-username">Nombre de usuario</label>
              <input type="text" class="form-control" id="new-username" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
              <label for="new-password">Contraseña</label>
              <input type="password" class="form-control" id="new-password" placeholder="Contraseña">
              <div class="text-right div-eye">
                <button class="btn btn-link eye-button" id="showPasswordRegister"><i
                    class="fa-solid fa-eye"></i></button>
              </div>
            </div>
            <div class="text-right">
              <button type="button" class="btn btn-primary custom-btn-color" id="registerBtn">Registrarse</button>
            </div>
          </div>
        </div>

        <div class="text-center mt-3">
          <button class="btn btn-link text-light" id="showRegister">¿No tienes cuenta?</button>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer">
      <div class="row text-align-center justify-content-center">
        <h5>Made with ❤️ by Jose Moreno</h5>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous">
    </script>

  <script>
    $(document).ready(function () {


      //Función para mostrar u ocultar la contraseña del login
      document.getElementById("showPassword").addEventListener("click", function () {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          this.innerHTML = "<i class='fa-solid fa-eye-slash'></i>";
        } else {
          passwordInput.type = "password";
          this.innerHTML = "<i class='fa-solid fa-eye'></i>";
        }
      });

      //Función para mostrar u ocultar la contraseña del registro
      document.getElementById("showPasswordRegister").addEventListener("click", function () {
        var passwordInput = document.getElementById("new-password");
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          this.innerHTML = "<i class='fa-solid fa-eye-slash'></i>";
        } else {
          passwordInput.type = "password";
          this.innerHTML = "<i class='fa-solid fa-eye'></i>";
        }
      });

      //Función para alternar entre login y registro
      $("#showRegister").click(function () {
        var registerCard = $(".register");
        var loginCard = $(".login");
        var registerBtn = $("#showRegister");

        if (registerCard.is(":visible")) {
          registerCard.hide();
          loginCard.show();
          registerBtn.text("¿No tienes cuenta?");
        } else {
          registerCard.show();
          loginCard.hide();
          registerBtn.text("¿Ya tienes cuenta?");
        }
      });

      //Función para enviar los datos del usuario registrado
      $("#registerBtn").click(function () {
        var option = 1;
        var name = $("#name").val();
        var newUsername = $("#new-username").val();
        var newPassword = $("#new-password").val();
        $.ajax({
          url: "backoffice/controllers/users-controller.php",
          method: "POST",
          data: {
            option: option,
            name: name,
            username: newUsername,
            password: newPassword
          },
          success: function (a) {
            alert(a);
            window.location.reload();
          },
        });
      });

      //Función para iniciar sesión
      $("#loginBtn").click(function () {
        var option = 2;
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
          url: "backoffice/controllers/users-controller.php",
          method: "POST",
          data: {
            option: option,
            username: username,
            password: password
          },
          success: function (a) {
            alert(a);
            window.location.href = "index.php";
          },
        });
      });

    });
  </script>
</body>

</html>