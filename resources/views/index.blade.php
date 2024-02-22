<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Generador de Pronósticos Deportivos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Generador de Pronósticos Deportivos</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <img src="images/robot.png" alt="">
                        Predictor
                    </div>
                    <form id="form" method="POST" action="/procesar-formulario">
                        <div class="card-body" id="chat-messages">
                            <!-- Mensajes del chat aquí -->
                            <div id="typing-indicator">
                            </div> <!-- Indicador de escritura -->
                        </div>
                        <div class="card-footer">

                            <div class="form-group form-inline">
                                <input type="text" id="name-input"
                                    class="form-control form-control-sm custom-input mr-2" placeholder="Nombre" required
                                    data-error="Por favor, ingresa tu nombre">
                                <input type="text" id="last-name-input"
                                    class="form-control form-control-sm custom-input mr-2" placeholder="Apellido(s)"
                                    required>
                                <input type="email" id="email-input"
                                    class="form-control form-control-sm custom-input mr-2"
                                    placeholder="Correo Electronico" required
                                    data-error="Por favor, ingresa tu dirección de correo electronico">
                                <!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" -->

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="selectLeague"><strong>Seleccionar Liga:</strong></label>
                                        <select class="form-control" id="selectLeague" required>
                                            <option value="">Selecciona una Liga o Competición</option>
                                            <!-- Opciones de ligas -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="selectTeamLocal"><strong>Equipo Local:</strong></label>
                                        <select class="form-control" id="selectTeamLocal" disabled required>
                                            <option value="">Selecciona equipo local</option>
                                            <!-- Equipos locales -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="selectTeamVisitor"><strong>Equipo Visitante:</strong></label>
                                        <select class="form-control" id="selectTeamVisitor" disabled required>
                                            <option value="">Selecciona equipo visitante</option>
                                            <!-- Equipos visitantes -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="selectLevel"><strong>Seleccionar tu nivel de
                                                apuesta:</strong></label>
                                        <select class="form-control" id="selectLevel" disabled required>
                                            <option value="">Selecciona tu nivel como apostador</option>
                                            <option value="lP">Principiante</option>
                                            <option value="lI">Intermedio</option>
                                            <option value="lA">Avanzado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="respond-button" class="btn btn-primary btn-sm">Pagar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="module" src="js/app.js"></script>