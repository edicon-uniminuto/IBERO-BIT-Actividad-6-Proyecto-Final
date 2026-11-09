<?php
/*
   ============================================================
   PROYECTO: IberoTech - Actividad 6 - Proyecto final
   INSTITUCIÓN: BIT - Corporación Universitaria Iberoamericana
   ESTUDIANTE: Edilberto Elias Contreras Sierra
   DOCENTE: Jairo Niño
   ARCHIVO: backend/vistas.php
   TECNOLOGÍAS: PHP 8, HTML5, Bootstrap 5.3.6
   DESCRIPCIÓN: Plantilla común con menú lateral en escritorio y Offcanvas Bootstrap en móvil.
   ============================================================
*/
declare(strict_types=1);

/** Conserva la navegación de las tres vistas existentes de la Actividad 4. */
function cabecera(string $titulo, string $activo): void
{
    $tituloEsc = escapar($titulo);
    $menu = [
        ['index.php', 'productos', 'Productos', '▦'],
        ['categorias.php', 'categorias', 'Categorías', '◈'],
        ['movimientos.php', 'movimientos', 'Movimientos', '↗'],
    ];
    echo '<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<meta name="description" content="IberoTech: CRUD PHP y MySQL con Bootstrap y diseño responsive para móvil">';
    echo '<title>' . $tituloEsc . ' | IberoTech</title><link rel="icon" type="image/svg+xml" href="frontend/favicon.svg">';
    // Bootstrap y su bundle se incluyen localmente; la hoja propia conserva la identidad IberoTech.
    echo '<link rel="stylesheet" href="frontend/vendor/bootstrap/css/bootstrap.min.css">';
    echo '<link rel="stylesheet" href="frontend/css/estilos.css"></head><body>';
    echo '<div class="app-layout">';
    // Barra lateral solo para pantallas de escritorio a partir de lg (992 px).
    echo '<aside class="sidebar d-none d-lg-flex"><a class="logo" href="index.php"><span class="logo-icon">IT</span><span><strong>IberoTech</strong><small>Gestor de inventario</small></span></a>';
    echo '<div class="sidebar-label">ADMINISTRACIÓN</div><nav class="nav" aria-label="Navegación principal de escritorio">';
    foreach ($menu as [$url, $item, $etiqueta, $icono]) {
        $clase = $activo === $item ? ' activo' : '';
        $actual = $activo === $item ? ' aria-current="page"' : '';
        echo '<a class="nav-link' . $clase . '" href="' . escapar($url) . '"' . $actual . '><span class="nav-icon" aria-hidden="true">' . escapar($icono) . '</span>' . escapar($etiqueta) . '</a>';
    }
    echo '</nav><div class="sidebar-note"><span class="note-dot"></span> PHP 8 + MySQL<br><small>Actividad 6 · Diplomado Full Stack</small></div></aside>';
    // Offcanvas nativo de Bootstrap 5: menú accesible y usable en móvil.
    echo '<div class="offcanvas offcanvas-start mobile-menu" tabindex="-1" id="menuMovil" aria-labelledby="menuMovilTitulo">';
    echo '<div class="offcanvas-header"><div class="d-flex align-items-center gap-2"><span class="logo-icon">IT</span><div><h2 class="offcanvas-title" id="menuMovilTitulo">IberoTech</h2><small>Gestor de inventario</small></div></div>';
    echo '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar menú"></button></div>';
    echo '<div class="offcanvas-body"><div class="sidebar-label">ADMINISTRACIÓN</div><nav class="nav flex-column" aria-label="Navegación principal móvil">';
    foreach ($menu as [$url, $item, $etiqueta, $icono]) {
        $clase = $activo === $item ? ' activo' : '';
        $actual = $activo === $item ? ' aria-current="page"' : '';
        echo '<a class="nav-link' . $clase . '" href="' . escapar($url) . '"' . $actual . '><span class="nav-icon" aria-hidden="true">' . escapar($icono) . '</span>' . escapar($etiqueta) . '</a>';
    }
    echo '</nav><div class="sidebar-note d-block mt-4"><span class="note-dot"></span> PHP 8 + MySQL<br><small>Actividad 6 · Proyecto final</small></div></div></div>';
    echo '<main class="main"><header class="topbar">';
    echo '<div class="d-flex align-items-center gap-2 min-w-0"><button type="button" class="btn nav-toggle d-inline-flex d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuMovil" aria-controls="menuMovil" aria-label="Abrir menú de navegación"><span aria-hidden="true">☰</span></button>';
    echo '<div class="topbar-crumb">Diplomado Desarrollador Full Stack <span>/</span> ' . $tituloEsc . '</div></div>';
    echo '<div class="topbar-status"><span class="status-dot"></span> Entorno local · Laragon</div></header><div class="page">';
}

function pie(): void
{
    echo '</div><footer class="footer">IberoTech · CRUD PHP, HTML, CSS, JavaScript, MySQL y Bootstrap <span>IBERO · Actividad 6</span></footer></main></div>';
    echo '<script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>';
    echo '<script src="frontend/js/app.js" defer></script></body></html>';
}
