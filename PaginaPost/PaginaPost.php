<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Post</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require __DIR__ . '/../header.php'; ?>

    <main class="pagina-post">
        <section class="tarjeta-post">
            <div class="tarjeta-header">
                <span>Ubicación detallada</span>
                <span class="etiqueta-derecha">COORDENADAS</span>
            </div>
            <div class="tarjeta-cuerpo fila-simple">
                <span class="texto-verde">COORD:38.4851°N, -1.1022°W, ALT:2800ft</span>
                <span class="etiqueta-derecha">LAT-LONG-ALT</span>
            </div>
        </section>

        <section class="tarjeta-post">
            <div class="tarjeta-header">
                <span>Vista previa del video</span>
            </div>
            <div class="tarjeta-cuerpo">
                <div class="video-marcador">
                    <button type="button" class="boton-play" aria-label="Reproducir video">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8">
                            <polygon points="7,4 20,12 7,20"></polygon>
                        </svg>
                    </button>
                    <span class="texto-marcador">MARCADOR DE VISTA PREVIA</span>
                </div>
            </div>
        </section>

        <section class="tarjeta-post barra-fecha">
            <span class="texto-blanco">FECHA/HORA: 18/09/26 03:15:22 AM</span>
            <button type="button" class="btn-neon">VER FOTOS</button>
        </section>

        <section class="tarjeta-post">
            <div class="tarjeta-header">
                <span>DESCRIPCIÓN</span>
                <span class="etiqueta-derecha">DETALLE</span>
            </div>
            <div class="tarjeta-cuerpo lista-filas">
                <div class="fila-dato">
                    <span class="texto-verde">Tipo:</span>
                    <span class="texto-blanco negrita">UAP</span>
                </div>
                <div class="fila-dato">
                    <span class="texto-verde">DESCRIPCIÓN</span>
                    <span class="texto-blanco">Movimiento errático 3 posibles UAPS</span>
                </div>
            </div>
        </section>

        <section class="tarjeta-post">
            <div class="tarjeta-header">
                <span>Comentarios de la discusión</span>
                <span class="etiqueta-derecha">CHAT LOG</span>
            </div>
            <div class="tarjeta-cuerpo lista-filas">
                <div class="fila-dato">
                    <span class="texto-blanco">Usuario 01: Giro 90 grados imposible wow</span>
                    <span class="etiqueta-derecha">03:15:22</span>
                </div>
                <div class="fila-dato">
                    <span class="texto-blanco">Usuario 02: Es un ovni 100%</span>
                    <span class="etiqueta-derecha">03:15:28</span>
                </div>
            </div>
        </section>

        <div class="acciones-post">
            <button type="button" class="btn-neon btn-grande">Exportar PDF</button>
            <button type="button" class="btn-neon btn-grande">Exportar Video</button>
        </div>
    </main>
</body>
</html>