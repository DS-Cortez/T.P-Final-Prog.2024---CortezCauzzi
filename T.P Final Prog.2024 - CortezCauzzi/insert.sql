
USE `alumno`;

INSERT INTO alumno1.alumno (nombre, apellido, dni, numero_legajo, email) VALUES
('Juan', 'Pérez', '30111222', 'LEG001', 'juan.perez@example.com'),
('María', 'González', '30222333', 'LEG002', 'maria.gonzalez@example.com'),
('Carlos', 'López', '30333444', 'LEG003', 'carlos.lopez@example.com'),
('Ana', 'Martínez', '30444555', 'LEG004', 'ana.martinez@example.com'),
('Luis', 'Ramírez', '30555666', 'LEG005', 'luis.ramirez@example.com');


INSERT INTO alumno1.examen (materia, nota, docente, fecha, alumno_id, alumno_numero_legajo) VALUES
('Matemática', 8, 'Prof. García', '2024-03-15', '1', 'LEG001'),
('Historia', 9, 'Prof. López', '2024-04-10', '2', 'LEG001'),
('Física', 7, 'Prof. Martínez', '2024-05-20', '3', 'LEG001'),
('Química', 6, 'Prof. Fernández', '2024-06-05', '4', 'LEG001'),
('Biología', 8, 'Prof. Gómez', '2024-07-12', '5', 'LEG001');

INSERT INTO alumno1.materia (idMateria, Nombre, Descripcion, alumno_id_alumno) VALUES
('MAT101', 'Matemática', 'Curso de matemáticas básicas', 1),
('HIS202', 'Historia', 'Curso de historia mundial', 2),
('FIS303', 'Física', 'Curso de física elemental', 3),
('QUI404', 'Química', 'Curso de química general', 4),
('BIO505', 'Biología', 'Curso de biología avanzada', 5);

INSERT INTO alumno1.usuario (usuario_empleado, clave_empleado) VALUES
('user1', 'password1'),
('user2', 'password2'),
('user3', 'password3'),
('user4', 'password4'),
('user5', 'password5');