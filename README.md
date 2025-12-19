Tarea: Desarrollo en Plataformas
Fecha: 19/12/2025
Estudiante: María Paulina Astudillo
Paralelo: 2

MIS DECISIONES DE DISEÑO

Tabla: trabajos_especiales

Campos de la tabla:

	id
	Tipo: int
	Obligatorio: Sí

	descripcion
	Tipo: varchar(200)
	Obligatorio: Sí

	nombre_cliente
	Tipo: varchar(100)
	Obligatorio: Sí

	telefono
	Tipo: varchar(10)
	Obligatorio: Sí

	fecha_entrega
	Tipo: date
	Obligatorio: Sí

	estado
	Tipo: varchar(20)
	Obligatorio: Sí

¿Se pueden eliminar registros?
No

Razón:
Se utiliza borrado lógico mediante el estado "cancelado" para conservar el historial de trabajos por posibles reclamos de los clientes.

Repositorio del proyecto:
https://github.com/MariAS-123/copyrapido-laravel.git
