# Inventario de archivos | Actividad 6 - Proyecto final

Se mantiene la estructura heredada de la Actividad 4. Los archivos PHP/JS/CSS/SQL comienzan con cabeceras de identificación académica; las dependencias oficiales de Bootstrap conservan su cabecera y licencia original.

| Archivo/carpeta | Función | Cambio frente a Actividad 4 |
|---|---|---|
| `index.php` | CRUD productos, KPIs, búsqueda, movimientos de stock | Clases Bootstrap para cuadrícula, controles y tabla adaptable; sin cambios de lógica |
| `categorias.php` | CRUD categorías | Grid Bootstrap, controles y tabla en tarjetas móviles |
| `movimientos.php` | Consulta movimientos de stock | Tabla Bootstrap y tarjetas en móvil |
| `backend/vistas.php` | Cabecera, sidebar, topbar y pie de página | Bootstrap local y menú Offcanvas para móvil |
| `frontend/css/estilos.css` | Estilos personalizados | Nuevas reglas de coexistencia con Bootstrap y breakpoints para móvil/tableta |
| `frontend/js/app.js` | Confirmación de borrado | Misma lógica, cabecera actualizada |
| `frontend/vendor/bootstrap/css/bootstrap.min.css` | CSS oficial de Bootstrap 5.3.6 | Dependencia nueva, incluida localmente |
| `frontend/vendor/bootstrap/js/bootstrap.bundle.min.js` | JS oficial Bootstrap y Popper | Dependencia nueva, incluida localmente |
| `frontend/vendor/bootstrap/LICENSE.txt` | Atribución y licencia MIT | Nuevo |
| `tests/test_estructura_bootstrap.php` | Comprobaciones estáticas de responsive | Nuevo |
| `tests/test_validaciones.php` | 13 verificaciones de servidor | Conservado, solo cabecera académica actualizada |
| `backend/funciones.php`, `backend/inventario.php`, `backend/categorias.php`, `backend/inicio.php`, `conexion.php`, `exportar.php` | Backend y persistencia | Lógica conservada |
| `database/01_schema.sql`, `database/02_seed.sql` | Base de datos original | Esquema y sentencias conservadas |
| `docs/previsualizaciones/` | Capturas del diseño de las plantillas PHP | Evidencia visual actualizada para Actividad 6 |
| `docs/evidencias/` | Resultados técnicos JSON/TXT y capturas | Nuevas evidencias |
| `docs/03_pruebas_responsive.md`, `docs/04_checklist_laragon_mysql.md` | QA y pruebas pendientes de persistencia | Nuevos |

> El documento Word **no está dentro de la carpeta del repositorio**: se entrega como archivo independiente junto al ZIP final.
