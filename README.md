# Actividad 6 - Proyecto final

## IberoTech | CRUD de inventario con Bootstrap y diseño responsive

**Diplomado Desarrollador Full Stack — Corporación Universitaria Iberoamericana (IBERO)**  
**Estudiante:** Edilberto Elias Contreras Sierra · **Docente:** Jairo Niño

### Consigna académica

> Se entrega CRUD de actividad 4, completo, con Bootstrap, responsive para móvil.

Este repositorio parte **directamente de la entrega final de la Actividad 4 – Registro y control de información**. Se conservaron sus operaciones CRUD, validaciones, consultas PDO y scripts SQL. **La ampliación exigida para la Actividad 6 es visual y de adaptabilidad:** Bootstrap 5.3.6 integrado localmente y diseño responsive para móvil, tableta y escritorio.

### Tecnologías y requisitos

| Capa | Herramientas |
|---|---|
| Interfaz | HTML5, CSS3, JavaScript ES6, **Bootstrap 5.3.6** (archivos locales con licencia MIT) |
| Servidor | PHP 8.x / PDO MySQL |
| Persistencia | MySQL 8.x, base de datos `ibero_tienda` |
| Entorno objetivo | Laragon + Apache + HeidiSQL en Windows |

### Funciones conservadas de la Actividad 4

- CRUD de **productos**: registrar, consultar, buscar/filtrar, modificar y eliminar.
- CRUD de **categorías**: crear, listar, editar y eliminar cuando estén libres.
- Control de existencias: botones **+1/−1**, alertas de stock y registro de movimientos.
- Tablero de indicadores y exportación CSV.
- Validación de datos del lado del servidor, sesiones y CSRF, consultas preparadas y escape HTML.
- Datos semilla: cinco productos, 34 unidades y valor de inventario **COP 21.670.000**.

### Mejoras específicas de la Actividad 6

1. **Bootstrap real y local** en `frontend/vendor/bootstrap/` (CSS + JS bundle, sin CDN obligatorio).
2. **Grid responsive** de Bootstrap en el tablero de indicadores y distribución formulario/listado.
3. **Offcanvas móvil** de Bootstrap con botón accesible para abrir y cerrar navegación a partir de pantallas menores a 992 px.
4. **Formularios con `form-control` y `form-select`** y tablas con `table-responsive`, `table`, `table-hover` y `align-middle`.
5. **Vista en tarjetas** para cada registro del inventario, categorías y movimientos en móviles de hasta 575 px. Las acciones siguen disponibles y utilizables.
6. **Ajustes específicos** para tamaños de 320, 390, 768, 1024 y 1440 px, conservando la identidad IberoTech.

### Cómo ejecutarlo en Laragon

1. Coloca esta carpeta en `C:\laragon\www\crud-ibero-actividad6` (puedes renombrarla a ese nombre sin modificar código).
2. Inicia **Apache** y **MySQL** desde Laragon.
3. En HeidiSQL ejecuta `database/01_schema.sql` y luego `database/02_seed.sql` **si se trata de una base nueva**. Si ya tienes la base del proyecto de la Actividad 4, **no reinicies ni borres los datos**: utiliza la misma base `ibero_tienda`, porque esta Actividad 6 no altera el esquema SQL.
4. Comprueba los valores de conexión en `conexion.php`: host `127.0.0.1`, puerto `3306`, usuario `root` y contraseña local correspondiente, preferiblemente mediante variables de entorno `APP_DB_*`.
5. Abre `http://localhost/crud-ibero-actividad6/` desde el navegador. Se necesita servidor PHP; GitHub **no ejecuta** PHP ni MySQL.
6. Activa la vista adaptable del navegador (F12 → Ctrl+Shift+M) y revisa 390 px y 768 px. El botón de menú debe abrir y cerrar el Offcanvas.

> **Atención:** Si ya trabajas con `ibero_tienda` para la Actividad 4, evita ejecutar nuevamente scripts que puedan modificar sus datos. Esta entrega no requiere migración ni nuevas tablas.

### Organización del repositorio

```text
IBERO-BIT-Actividad-6-Proyecto-Final/
├── index.php                       # CRUD principal de productos + grid Bootstrap
├── categorias.php                  # CRUD de categorías + presentación responsive
├── movimientos.php                 # Historial + presentación responsive
├── exportar.php                    # Exportación CSV (sin cambios funcionales)
├── conexion.php                    # Conexión PDO (sin cambios funcionales)
├── backend/                        # Operaciones, validaciones y plantilla compartida
│   └── vistas.php                  # Navegación desktop/móvil con Offcanvas Bootstrap
├── frontend/
│   ├── css/estilos.css             # Identidad visual + media queries para móviles
│   ├── js/app.js                   # Confirmaciones de eliminación
│   ├── favicon.svg
│   └── vendor/bootstrap/           # Bootstrap local y licencia MIT
├── database/                       # Scripts originales, sin alteraciones funcionales
├── tests/                          # Pruebas de validación y estructura responsive
├── docs/
│   ├── previsualizaciones/         # Imágenes renderizadas de las plantillas PHP
│   ├── evidencias/                 # Imágenes complementarias de las pruebas responsive
│   ├── 01_instalacion_laragon.md
│   ├── 02_archivos.md
│   └── 03_pruebas_responsive.md
└── README.md
```

### Pruebas incluidas

Desde la terminal con PHP 8.x disponible:

```powershell
php tests/test_validaciones.php
php tests/test_estructura_bootstrap.php
php -l index.php
php -l categorias.php
php -l backend/vistas.php
```

Se conservaron las **13/13 pruebas originales** y se añadieron **14/14 verificaciones estáticas de Bootstrap**. Se inspeccionaron siete escenarios de navegador: 1440, 1024, 768, 390 y 320 px, incluidos módulos complementarios, sin desbordamiento horizontal.

**Alcance de la evidencia:** las capturas de interfaz son previsualizaciones obtenidas al renderizar las plantillas PHP con datos semilla en memoria. No son capturas de una base de datos MySQL real. En este entorno no fue posible probar PDO MySQL; los INSERT/UPDATE/DELETE deben verificarse en Laragon y registrarse siguiendo `docs/04_checklist_laragon_mysql.md`.

### Publicación y entregables

El **repositorio GitHub contiene solo el proyecto de código, documentos Markdown y evidencias técnicas**. El informe institucional Word de la Actividad 6 se entrega **por separado**, fuera de Git, siguiendo el formato de la Actividad 4.

### Créditos

Basado en el CRUD IberoTech desarrollado en clase y en la entrega de la Actividad 4. Bootstrap 5.3.6: The Bootstrap Authors, licencia MIT; https://getbootstrap.com/ y https://github.com/twbs/bootstrap.
