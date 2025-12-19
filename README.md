# Prueba: Desarrollo en Plataformas
**Caso 14: CopyRapido**

**Fecha:** 19/12/2025  
**Estudiante:** María Paulina Astudillo  
**Paralelo:** 2

## Mis decisiones de diseño

### Nombre de la tabla
**trabajos_especiales**

### Campos de la tabla

| Campo          | Tipo          | Obligatorio |
|----------------|---------------|-------------|
| id             | int           | Sí          |
| descripcion    | varchar(200)  | Sí          |
| nombre_cliente | varchar(100)  | Sí          |
| telefono       | varchar(10)   | Sí          |
| fecha_entrega  | date          | Sí          |
| estado         | varchar(20)   | Sí          |

### ¿Se pueden eliminar registros?
**No**

### Razón
Se utiliza borrado lógico mediante el estado **"cancelado"** para conservar el historial de trabajos por posibles reclamos de los clientes.

### Repositorio del proyecto
https://github.com/MariAS-123/copyrapido-laravel.git
