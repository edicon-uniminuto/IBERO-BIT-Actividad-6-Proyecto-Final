<?php
/*
   ============================================================
   PROYECTO: IberoTech - Actividad 6 - Proyecto final
   INSTITUCIÓN: BIT - Corporación Universitaria Iberoamericana
   ESTUDIANTE: Edilberto Elias Contreras Sierra
   DOCENTE: Jairo Niño
   ARCHIVO: tests/test_estructura_bootstrap.php
   TECNOLOGÍAS: PHP 8, Bootstrap 5.3.6, HTML5
   DESCRIPCIÓN: Verificaciones estáticas y reproducibles de la integración responsive, sin MySQL.
   ============================================================
*/
declare(strict_types=1);
$raiz = dirname(__DIR__);
$css = file_get_contents($raiz . '/frontend/css/estilos.css');
$vistas = file_get_contents($raiz . '/backend/vistas.php');
$index = file_get_contents($raiz . '/index.php');
$categorias = file_get_contents($raiz . '/categorias.php');
$movimientos = file_get_contents($raiz . '/movimientos.php');
$verificaciones = [
    'Bootstrap CSS local incluido' => is_file($raiz . '/frontend/vendor/bootstrap/css/bootstrap.min.css') && filesize($raiz . '/frontend/vendor/bootstrap/css/bootstrap.min.css') > 100000,
    'Bootstrap JS local incluido' => is_file($raiz . '/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') && filesize($raiz . '/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') > 50000,
    'Licencia Bootstrap incluida' => is_file($raiz . '/frontend/vendor/bootstrap/LICENSE.txt'),
    'CSS Bootstrap enlazado en plantilla' => str_contains($vistas, 'frontend/vendor/bootstrap/css/bootstrap.min.css'),
    'JS Bootstrap enlazado en plantilla' => str_contains($vistas, 'frontend/vendor/bootstrap/js/bootstrap.bundle.min.js'),
    'Meta viewport para móviles' => str_contains($vistas, 'width=device-width, initial-scale=1'),
    'Offcanvas accesible con control de cierre' => str_contains($vistas, 'data-bs-toggle="offcanvas"') && str_contains($vistas, 'data-bs-dismiss="offcanvas"'),
    'Menú de escritorio visible en lg' => str_contains($vistas, 'd-none d-lg-flex'),
    'KPIs con rejilla Bootstrap' => str_contains($index, 'row-cols-2 row-cols-md-2 row-cols-xl-4'),
    'Columnas responsive del CRUD' => str_contains($index, 'col-12 col-xl-8') && str_contains($categorias, 'col-12 col-xl-8'),
    'Controles Bootstrap en productos' => str_contains($index, 'class="form-control"') && str_contains($index, 'class="form-select"'),
    'Tablas adaptables en tres vistas' => str_contains($index, 'table-responsive') && str_contains($categorias, 'table-responsive') && str_contains($movimientos, 'table-responsive'),
    'Etiquetas de tarjeta móvil en productos' => str_contains($index, 'data-label="Precio"') && str_contains($index, 'data-label="Existencias"'),
    'Media queries para móvil' => str_contains($css, '@media (max-width:575.98px)') && str_contains($css, '@media (max-width:991.98px)'),
];
$correctas = 0;
foreach ($verificaciones as $nombre => $resultado) {
    if ($resultado) ++$correctas;
    echo ($resultado ? '[OK] ' : '[ERROR] ') . $nombre . PHP_EOL;
}
echo PHP_EOL . "Resultado: $correctas/" . count($verificaciones) . " comprobaciones satisfactorias." . PHP_EOL;
exit($correctas === count($verificaciones) ? 0 : 1);
