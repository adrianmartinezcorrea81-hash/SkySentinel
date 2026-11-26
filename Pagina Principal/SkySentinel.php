<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Sky Sentinel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require __DIR__ . '/../header.php'; ?>
    <main>
        <div class="columna-izquierda">
            <div id="informacion">
                <table class="informacion">
                    <thead>
                        <tr>
                            <th colspan="2">Información</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Usuario: Usuario</td>
                            <td>Rol: Rol</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tabla-registros">
                <h3>Últimos Registros</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Fecha/Hora</th>
                            <th>Ubicación</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="window.location='../PaginaPost/PaginaPost.php';" style="cursor: pointer;">
                            <td>UAP</td>
                            <td> 18/09/26 03:15:22 AM</td>
                            <td> 38.4851ºN, -1.1022ºW, ALT:2800FT</td>
                            <td>Movimiento errático 3 posibles UAPS</td>
                        </tr>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="directo">
            <h3>VIDEO EN DIRECTO</h3>
                <div class="video-marcador">
                    <button type="button" class="boton-play" aria-label="Reproducir video">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8">
                            <polygon points="7,4 20,12 7,20"></polygon>
                        </svg>
                    </button>
                    <span class="texto-marcador">MARCADOR DE VISTA PREVIA</span>
                </div>
        </div>

        <div class="chat-vivo">
            <div id="chat-contenedor">
                <div class="chat-header">Chat en vivo</div>

                <div class="chat-mensajes">
                    <div class="mensaje">[Guille]: Giro 90 grados imposible wow</div>
                    <div class="mensaje">[ADMIN]: NO MAYUSCULAS</div>
                    <div class="mensaje">[DENIS_HIPP]: WOW INCREIBLE APP</div>
                    <div class="mensaje">[SEBAS]: VIVA MEXICO</div>
                </div>

                <div class="chat-entrada">
                    <input type="text" name="comentario" id="comentario" placeholder="ESCRIBE AQUI...">
                    <button>ENVIAR</button>
                </div>
            </div>
        </div>        
    <div class="panel-inferior">
        <div class="evento">
            <h3>Evento</h3>
            <div class="evento-datos">
                <p>Location:asdasd</p>
                <p>Altitude (YOLO):Estimated asdasd</p>
                <p>Validacion Opensky API:0 civil</p>
                <p>Trajectory:High speed</p>
            </div>
        </div>

        <div class="mapa">
            <h3>Localización en el mapa</h3>
            <div class="mapa-visor">
                <div class="mira">
                    <div class="circulo"></div>
                </div>
            </div>
        </div>
    </div>

    </main>
</body>
</html>
