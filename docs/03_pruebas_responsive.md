# Pruebas y evidencias responsive | Actividad 6

## Metodología

Se verificó la sintaxis de los 12 archivos PHP (11 originales más la prueba nueva) con `php -l` y la sintaxis de `frontend/js/app.js` con `node --check`. Se ejecutaron las pruebas originales de validación PHP (**13/13**) y las nuevas verificaciones de integración de Bootstrap (**14/14**). Las plantillas PHP se renderizaron con los cinco registros de la semilla en memoria, sin conexión a MySQL, y se inspeccionaron en Chromium usando el CSS/JS locales del repositorio.

**Importante:** los registros, contadores y la interfaz de las imágenes son datos ilustrativos de previsualización. El navegador no probó escritura en MySQL ni intercambio HTTP con PHP; estas pruebas siguen pendientes en Laragon.

## Resultados verificables

| Escenario | Resolución | Condición comprobada | Resultado |
|---|---:|---|---|
| Escritorio | 1440 × 1000 | Navegación lateral, 4 KPIs, formulario y tabla | OK |
| Escritorio pequeño | 1024 × 900 | Sidebar visible, elementos sin desbordamiento | OK |
| Tableta | 768 × 1024 | Menú móvil y columnas apiladas | OK |
| Móvil | 390 × 844 | Tarjetas, KPIs, formulario, menú Bootstrap abre/cierra | OK |
| Móvil estrecho | 320 × 720 | Contenido adaptable sin desbordamiento | OK |
| Categorías móvil | 390 × 844 | Formularios y tarjetas de categorías | OK |
| Movimientos móvil | 390 × 844 | Tabla de movimientos adaptable | OK |

Las inspecciones de viewport devolvieron `document.documentElement.scrollWidth <= window.innerWidth` y no se registraron excepciones JavaScript. La salida estructurada está en `docs/evidencias/resultado_responsive.json`.

## Capturas incluidas

- `EV_desktop_1440.png`: productos en pantalla grande.
- `EV_tablet_768.png`: estructura en tableta.
- `EV_movil_390.png`: vista móvil del CRUD.
- `EV_productos_tarjetas_movil.png`: tarjetas en la tabla del CRUD.
- `EV_menu_movil_abierto.png`: Offcanvas nativo Bootstrap.
- `EV_categorias_movil_390.png`: categorías en móvil.
- `EV_movimientos_movil_390.png`: historial en móvil.

## Reproducir localmente

1. Ejecutar los dos scripts PHP de `tests/`.
2. Ejecutar el proyecto en Laragon y abrirlo en Chrome/Edge.
3. Pulsar F12 → Ctrl+Shift+M y repetir los tamaños indicados.
4. Realizar capturas de las operaciones CRUD **sobre MySQL real**, siguiendo `04_checklist_laragon_mysql.md`.
