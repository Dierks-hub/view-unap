<?php
include_once("layouts/offcanvas.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light" data-bs-theme="light">
    <section>
        <header>
            <nav class="navbar shadow-sm bg-body-secondary" id="navbar">
                <div class="row w-100 align-items-center">
                    <div class="col d-flex align-items-center justify-content-start px-4">
                        <i class="bi bi-layout-sidebar-inset me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></i>
                    </div>
                    <div class="col d-flex align-items-center justify-content-end">
                        <div class="d-flex align-items-center">
                            <i type="button" class="bi bi-gear px-3"></i>
                            <i type="button" class="bi bi-bell px-3"></i>
                            <i type="button" onclick="cambiarTema()" id="dl-icon" class="bi bi-moon px-3"></i>
                        </div>
                        <div class="vr mx-2"></div>
                        <img src="assets/images/foto_perfil.png" alt="Ejemplo" style="width: 50px;">
                        <div class="px-3">
                            <p class="mb-0">Jaime David Guszman Rojas</p>
                            <p class="mb-0">Administrador</p>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </section>
    <div class="container mt-3" id="container-main">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card shadow-sm mb-2 w-50">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-2 mb-md-0">
                                <div class="btn-group w-100" role="group" aria-label="Basic example">
                                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary w-50" for="success-outlined"><i class="fas fa-user-graduate"></i>
                                    </label>
                                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                                    <label class="btn btn-outline-primary w-50" for="danger-outlined"><i class="fas fa-chalkboard-teacher"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-8 mb-2 mb-md-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Rut" aria-label="Username" aria-describedby="basic-addon1">
                                    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-1">
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <h5 class="card-header">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="button">Generar Alerta</button>
                        </div>
                    </h5>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>
                                <img src="image-url" alt="Profile Picture" class="img-fluid rounded-circle" width="50" height="50">
                            </li>
                            <li><strong>Name:</strong> Jaime David Guszman Rojas</li>
                            <li><strong>RUT:</strong> 12345678-9</li>
                            <li><strong>Email:</strong> <a href="mailto:jaime@example.com">jaime@example.com</a></li>
                            <li><strong>Phone:</strong> +56 9 8765 4321</li>
                            <li><strong>Cell Phone:</strong> +56 9 8765 4321</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Obtencion de datos:</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Campo 1</span>
                            <input type="number" class="form-control" aria-label="Valor del campo 1" id="campo1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Campo 2</span>
                            <input type="number" class="form-control" aria-label="Valor del campo 2" id="campo2">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Campo 3</span>
                            <input type="number" class="form-control" aria-label="Valor del campo 3" id="campo3">
                        </div>
                        <button class="btn btn-primary" type="button" id="ingresar">Ingresar Valores</button>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Resultados:</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Suma de Campo 1 y 2:</h6>
                        <p class="card-text" id='resultado1'></p>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Suma de Campo 1, 2 y 3:</h6>
                        <p class="card-text" id='resultado2'></p>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Campo 3 es par o impar:</h6>
                        <p class="card-text" id='resultado3'></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-body-secondary mt-3" id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="logo">Logo</div>
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-end">
                    <h5 class="mb-3 px-5">Videos Tutoriales</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">1. Introducción SAT</a></li>
                        <li><a href="#">2. Seguimiento de carreras</a></li>
                        <li><a href="#">3. Bitácora SAT estudiantes</a></li>
                        <li><a href="#">4. Bitácora SAT docentes</a></li>
                        <li><a href="#">5. Informes y filtros</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="assets/js/darkMode.js"></script>
<script>
    $('#ingresar').click(function() {
        $.ajax({
            url: "resp.php",
            type: "POST",
            dataType: "json",
            data: {
                var0: 'respuestaPrueba',
                var1: $("#campo1").val(),
                var2: $("#campo2").val(),
                var3: $("#campo3").val()
            },
            success: function(resultado, status) {
                $("#resultado1").html(resultado.resp1);
                $("#resultado2").html(resultado.resp2);
                $("#resultado3").html(resultado.resp3);
            },

            error: function(objeto, texterror) {
                alert("ERROR: Paso lo siguiente-> " + texterror);
            }
        })
    });
</script>
</body>

</html>