<?php
include_once 'layout.php';
include_once $_SERVER["DOCUMENT_ROOT"] .'/webTransaccionalVeterinaria/Controller/MascotaController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smile Pet - Mis Mascotas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php 
    IncluirCSS();
    ?>

</head>

<body>

<body>

    <?php
    MostrarMenu();
    ?>

    <section class="ftco-section bg-light">
        <div class="container">
            <h3 class="mb-4">Mis Mascotas</h3>

            <!-- Mostrar mensajes -->
            <?php
            if(isset($_SESSION["txtMensaje"]))
            {
                $mensajeTipo = isset($_SESSION["mensajeTipo"]) ? $_SESSION["mensajeTipo"] : 'info';
                echo '<div class="alert alert-' . $mensajeTipo . '">' . $_SESSION["txtMensaje"] . '</div>';
                unset($_SESSION["txtMensaje"]);
                unset($_SESSION["mensajeTipo"]);
            }
            ?>

            <div class="row">
                <div class="col-md-4">
                    <!-- Lista de mascotas -->
                    <ul class="list-group">
                        <?php
                        if($listaMascotas != null && $listaMascotas->num_rows > 0)
                        {
                            while($mascota = $listaMascotas->fetch_assoc())
                            {
                                echo '<li class="list-group-item">';
                                echo '<a href="misMascotas.php?MascotaID=' . $mascota["MascotaID"] . '">' . $mascota["Nombre"] . '</a>';
                                echo '</li>';
                            }
                        }
                        else
                        {
                            echo '<li class="list-group-item">No tienes mascotas registradas.</li>';
                        }
                        ?>
                    </ul>
                </div>

                <div class="col-md-8">
                    <?php
                    // Mostrar información de la mascota seleccionada
                    if(isset($_GET["MascotaID"]))
                    {
                        $MascotaID = $_GET["MascotaID"];

                        // Obtener información de la mascota
                        $mascotaSeleccionada = null;
                        $listaMascotas->data_seek(0);

                        while($mascota = $listaMascotas->fetch_assoc())
                        {
                            if($mascota["MascotaID"] == $MascotaID)
                            {
                                $mascotaSeleccionada = $mascota;
                                break;
                            }
                        }

                        if($mascotaSeleccionada != null)
                        {
                            echo '<h4>Información de la Mascota</h4>';
                            echo '<p><strong>ID:</strong> ' . $mascotaSeleccionada["MascotaID"] . '</p>';
                            echo '<p><strong>Nombre:</strong> ' . $mascotaSeleccionada["Nombre"] . '</p>';
                            echo '<p><strong>Especie:</strong> ' . $mascotaSeleccionada["Especie"] . '</p>';
                            echo '<p><strong>Raza:</strong> ' . $mascotaSeleccionada["Raza"] . '</p>';
                            echo '<p><strong>Sexo:</strong> ' . $mascotaSeleccionada["Sexo"] . '</p>';
                            echo '<p><strong>Fecha de Nacimiento:</strong> ' . $mascotaSeleccionada["FechaNacimiento"] . '</p>';
                        }
                        else
                        {
                            echo '<p>No se encontró la mascota seleccionada.</p>';
                        }
                    }
                    else
                    {
                        echo '<p>Selecciona una mascota para ver su información.</p>';
                    }
                    ?>

                    <!-- Formulario para registrar una nueva mascota -->
                    <h4 class="mt-4">Registrar Nueva Mascota</h4>
                    <form method="POST" onsubmit="return confirmarRegistro();">
                        <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="Especie">Especie</label>
                            <select class="form-control" id="Especie" name="Especie" required>
                                <option value="">Seleccione</option>
                                <option value="Perro">Perro</option>
                                <option value="Gato">Gato</option>
                                <option value="Ave">Ave</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Raza">Raza</label>
                            <input type="text" class="form-control" id="Raza" name="Raza">
                        </div>
                        <div class="form-group">
                            <label for="Sexo">Sexo</label>
                            <select class="form-control" id="Sexo" name="Sexo" required>
                                <option value="">Seleccione</option>
                                <option value="Macho">Macho</option>
                                <option value="Hembra">Hembra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="FechaNacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento">
                        </div>
                        <input type="hidden" name="Confirmado" id="Confirmado" value="0">
                        <button type="submit" class="btn btn-primary" name="btnRegistrarMascota">Registrar Mascota</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    MostrarFooter();
    ?>

    <!-- Enlaces a scripts -->
    <?php 
    IncluirScripts();
    ?>
    <script>
        function confirmarRegistro()
        {
            var confirmar = confirm("¿Está seguro de que desea registrar esta mascota? Luego no podrá borrarse de la lista.");
            if(confirmar)
            {
                document.getElementById("Confirmado").value = "1";
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
</body>

</html>
