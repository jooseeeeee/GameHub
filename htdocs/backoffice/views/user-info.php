<label for="name">Nombre</label>
<input type="text" class="form-control mb-2" id="name" value="<?php echo $data['name'] ?>">
<label for="username">Usuario</label>
<input type="text" class="form-control mb-2" id="username" value="<?php echo $data['username'] ?>">
<label for="password">Contraseña</label>
<input type="password" id="password" class="form-control mb-2" id="password" value="<?php echo $data['password'] ?>">
<div class="text-center mb-3">
    <button class="btn btn-link customlinkcolor" id="showPassword">Mostrar contraseña <i
            class="fa-solid fa-eye"></i></button>
</div>
<div class="text-center">
    <button class="btn btn-danger btn-sm delete-account" title="Eliminar cuenta">Eliminar cuenta</button>
    <button class="btn btn-dark btn-sm modify-info" title="Modificar datos">Modificar datos</button>
</div>

<script>
    $(document).ready(function () {
        //Función para mostrar u ocultar la contraseña
        document.getElementById("showPassword").addEventListener("click", function () {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                this.innerHTML = "Ocultar contraseña  <i class='fa-solid fa-eye-slash'></i>";
            } else {
                passwordInput.type = "password";
                this.innerHTML = "Mostrar contraseña  <i class='fa-solid fa-eye'></i>";
            }
        });

        //Botón de modificar datos deshabilitado hasta que se modifique algún campo
        $(".modify-info").prop("disabled", true);

        $("#name, #username, #password").on("input", function () {
            $(".modify-info").prop("disabled", false);
        });

        //Función para modificar datos del usuario
        $(".modify-info").click(function () {
            var option = 5;
            var name = $("#name").val();
            var username = $("#username").val();
            var password = $("#password").val();
            $.ajax({
                url: "backoffice/controllers/users-controller.php",
                method: "POST",
                data: {
                    option: option,
                    name: name,
                    username: username,
                    password: password
                },
                success: function (a) {
                    $('.toast-body').html(a);
                    $('.toast').toast('show');
                    let option2 = 4
                    $.ajax({
                        url: 'backoffice/controllers/users-controller.php',
                        type: 'POST',
                        data: { option: option2 },
                        success: function (a) {
                            $('#userInfo').html(a)
                        }
                    })
                },
            });
        });

        //Función para mostrar la modal de eliminar cuenta
        $(".delete-account").click(function () {
            $(".modal").modal("show");
        });

        
        $(".delete-confirm").click(function () {
            var option = 6;
            $.ajax({
                url: "backoffice/controllers/users-controller.php",
                method: "POST",
                data: {
                    option: option
                },
                success: function (a) {
                    window.location.href = "index.php";
                },
            });
        });


        $(".delete-cancel").click(function () {
            $(".modal").modal("hide");
        });
    });
</script>