# Instalación y ejecución | Actividad 6 - Proyecto final

**Proyecto:** IberoTech — CRUD PHP/MySQL con Bootstrap 5.3.6 responsive.  
**Equipo objetivo:** Windows con Laragon (Apache, MySQL, PHP 8.x), HeidiSQL y navegador.

## Montaje sin sobrescribir la Actividad 4

1. Extrae el ZIP de la Actividad 6 y coloca **solo la carpeta del repositorio** en `C:\laragon\www\crud-ibero-actividad6`.
2. Abre Laragon e inicia Apache/MySQL.
3. Si **ya existe** `ibero_tienda` de la Actividad 4, conserva sus tablas y datos: **no hay cambios en SQL**. Si la base no existe, importa `database/01_schema.sql` y después `database/02_seed.sql` desde HeidiSQL.
4. Revisa las credenciales en `conexion.php`, preferiblemente con variables de entorno `APP_DB_HOST`, `APP_DB_PORT`, `APP_DB_NAME`, `APP_DB_USER` y `APP_DB_PASSWORD`.
5. Abre `http://localhost/crud-ibero-actividad6/`.
6. Verifica productos, categorías, movimientos y exportación CSV.
7. En Chrome/Edge, pulsa F12, activa el modo dispositivo (Ctrl+Shift+M) y prueba 390 × 844 px, 768 × 1024 px y escritorio. El menú móvil Bootstrap debe abrirse/cerrarse correctamente.

## Comprobaciones locales

```powershell
php tests/test_validaciones.php
php tests/test_estructura_bootstrap.php
php -l index.php
php -l categorias.php
php -l movimientos.php
```

## Evidencias para entregar

- Capturas **reales** de Apache/MySQL activos en Laragon.
- Capturas **reales** del CRUD funcionando sobre `ibero_tienda` en escritorio y móvil.
- Capturas de HeidiSQL antes/después de crear, editar y eliminar un registro de prueba.
- Captura del repositorio GitHub después de publicar esta carpeta.

> Las capturas de `docs/previsualizaciones/` muestran el diseño en navegador con datos en memoria y **no deben presentarse como pruebas de persistencia MySQL**. Consulta `04_checklist_laragon_mysql.md`.
