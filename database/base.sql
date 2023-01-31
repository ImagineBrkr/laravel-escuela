drop database if exists unt;
create database unt;
use unt;

create table noticia(idNoticia int auto_increment,titulo varchar(100),resumen varchar(500), descripcion varchar(3000),
primary key(idNoticia));

create table cursos(idCurso int auto_increment, nombre varchar(100), creditos int, ciclo int,
primary key(idCurso));

create table comunicado(idComunicado int auto_increment, titulo varchar(100), resumen varchar(500), descripcion varchar(3000),
primary key(idComunicado));

create table investigacion(idInvestigacion int auto_increment, titulo varchar(100), autor varchar(100), descripcion varchar(300), url varchar(100),
primary key(idInvestigacion));

create table usuario(idUsuario int auto_increment, nombres varchar(100), codigo varchar(20), 
contraseña varchar(100), DNI char(8), tipoUsuario varchar(15),
primary key(idUsuario));

create table docente(idUsuario int, logros varchar(600),
foreign key(idUsuario) references usuario(idUsuario));

create table tramites(idUsuario int, idTramite int auto_increment, nombre varchar(100), descripcion varchar(100), fecha date,
primary key(idTramite),
foreign key (idUsuario) references usuario(idUsuario));

insert into noticia(titulo, resumen, descripcion) values('UNT ENTRE LAS MEJORES UNIVERSIDADES DE LATINOAMÉRICA', 
'Una vez más, nuestra emblemática Universidad Nacional de Trujillo confirma su compromiso de ofrecer una educación superior de calidad sobre la base de la investigación científica, tecnológica y humanística, que cumple con los más altos estándares académicos en el ámbito nacional e internacional.', 
'<p>Una vez más, nuestra emblemática Universidad Nacional de Trujillo confirma su compromiso de ofrecer una educación superior de calidad sobre la base de la investigación científica, tecnológica y humanística, que cumple con los más altos estándares académicos en el ámbito nacional e internacional.</p>
<p>Así lo demuestra uno de los rankings universitarios más prestigiosos del mundo: QS Latin America University 2022, donde nuestra Casa Superior de Estudios figura en la lista de las 418 mejores universidades de Latinoamérica.</p>
<p>En dicha medición internacional se encuentran 20 universidades públicas y privadas de nuestro país, de entre las cuales la UNT se ubica en el sobresaliente puesto 16. Además, si solo se cuentan las universidades públicas, se posiciona en el puesto 5, después de la Universidad Nacional Federico Villarreal (Lima) y la Universidad Nacional del Altiplano (Puno).</p>
<p>El rector de la UNT, Dr. Carlos Vásquez Boyer refirió que, a pesar del actual contexto de la pandemia, la Universidad Nacional de Trujillo sigue alcanzando resultados contundentes que demuestran su grandeza académica e institucional.</p>
<p>“Este importante logro indica de manera objetiva el nivel de excelencia e impacto internacional que posee nuestra Universidad, la cual está históricamente comprometida con los desafíos de la región y el país. Por eso, es nuestra responsabilidad, desde la Alta Dirección, seguir impulsando el desarrollo de nuestra alma mater”, acotó Vásquez Boyer.</p>
<p>El ranking de universidades de América Latina es uno de los más grandes a nivel mundial. Es una clasificación que elabora anualmente la QS Quacquarelli Symonds, institución británica especializada en educación universitaria.</p>
<p>Este ranking QS se fundamenta en la medición de cinco indicadores: reputación académica, reputación del empleador, proporción de profesores por estudiantes, personal con doctorado y red de investigación internacional, en los cuales nuestra Universidad demostró un destacado desempeño.</p>
<p>La casa de Simón Bolívar y José Faustino Sánchez Carrión sigue consolidando su prestigio, gracias a la formación integral y óptima de profesionales que aportan, desde su campo de acción, a la sociedad en temas de investigación, responsabilidad social e innovación tecnológica.</p>
<p>Enlace del ranking: https://cutt.ly/kWvTZVR</p>'),
('DOCENTE UNT PUBLICA ARTÍCULO EN PRESTIGIOSA REVISTA CIENTÍFICA PLOS ONE',
'El Dr. Carlos Alberto Minchón Medina, docente del Departamento Académico de Estadística, Facultad de Ciencias Físicas y Matemáticas de la Universidad Nacional de Trujillo, como integrante de una red de investigación universitaria, ha publicado el artículo “Políticas de investigación y producción científica: un estudio de 94 universidades peruanas” en la revista PLOS ONE en su edición de mayo de este año.',
'<p>El Dr. Carlos Alberto Minchón Medina, docente del Departamento Académico de Estadística, Facultad de Ciencias Físicas y Matemáticas de la Universidad Nacional de Trujillo, como integrante de una red de investigación universitaria, ha publicado el artículo “Políticas de investigación y producción científica: un estudio de 94 universidades peruanas” en la revista PLOS ONE en su edición de mayo de este año.</p>
<p>La red de prestigiosos investigadores científicos, además de nuestro docente investigador, está conformada por Pablo Alejandro Millones-Gómez, Judith Soledad Yangali-Vicente, Claudia Milagros Arispe-Alburqueque, Oriana Rivera-Lozada, Kriss Melody Calla-Vásquez, Roger Damaso Calla-Poma y Margarita Fe Requena-Mendizábal, docentes de la Universidad Norbert Wiener y la Universidad Nacional Mayor de San Marcos.</p>
<p>El objetivo de la investigación fue evaluar la influencia de las políticas de investigación en la producción científica de las universidades públicas y privadas peruanas en Scopus y Web of Science, por investigadores certificados por Concytec, comprendiendo 92 universidades y dos escuelas de posgrado licenciadas por la Superintendencia Nacional de Educación Superior del Perú (Sunedu) para el período 2016-2020. Para lecturas y citas, el artículo se puede descargar de https://doi.org/10.1371/journal.pone.0252410</p>
<p>El artículo publicado en PLOS ONE, a la fecha presenta más de 1100 vistas, está registrado en Scopus, pero también puede accederse a través de Web of Science y PubMed, entre otras bases de datos indexadas. En Google Académico, puede encontrarse en 11 versiones, o direcciones web para acceso.</p>
<p>El Departamento Académico de Estadística, a través de sus docentes, contribuye a que la Universidad Nacional de Trujillo mejore tanto en el ranking general de Web of Science como el ranking de Scopus realizado por Sunedu, promoviendo el incremento de su índice h de impacto.</p>');

insert into comunicado(titulo, resumen, descripcion) values('CONIMERA 2021',
'El Colegio de Ingenieros del Perú, Consejo Departamental de Lima, Capítulo de Ingeniería Mecánica y Mecánica Eléctrica, invitan a la comunidad académica de la FIS UNCP, a participar del CONIMERA 2021 XXIV',
'<p>El Colegio de Ingenieros del Perú, Consejo Departamental de Lima, Capítulo de Ingeniería Mecánica y Mecánica Eléctrica, invitan a la comunidad académica de la FIS UNCP, a participar del CONIMERA 2021 XXIV Congreso Nacional de Ingeniería, Mecánica y Ramas Afines.</p> 
<p>Convocatoria al concurso de trabajos técnicos 11,12,13 de #Octubre de 2021. BASES: http://cdlima.org.pe/conimera/</p>');

insert into investigacion(titulo, autor, descripcion, url) values('Capacidad en Sistemas Celulares
W-CDMA', 'Luis Mendo Tomás', 'En esta Tesis Doctoral se lleva a cabo un análisis de las redes celulares de
Tercera Generación basadas en W-CDMA, desde el punto de vista de capacidad. Un análisis de este tipo es una tarea compleja, debido a la gran cantidad
de factores que intervienen. El estudio abarca la interfaz radio, y considera
únicamente detección monousuario (basada en receptores Rake).', 'http://oa.upm.es/599/1/LUIS_MENDO_TOMAS.pdf'), ('Estudio y automatización del proceso y monitoreo de elaboración de tesis de estudiantes de la carrera de Ingeniería de Sistemas',
'Almeida Murillo, Zaira Janeth',
'En la presente investigación se desarrolló sistema web para el Monitoreo y seguimiento del proceso de Tesis lo cual permitirá a la Universidad Politécnica Salesiana de la ciudad de Guayaquil carrera sistemas simplificar las actividades y optimizar recursos mejorando el tiempo de ejecución de procesos, planificación, coordinación y control de las diferentes actividades que se realiza diariamente',
'https://dspace.ups.edu.ec/handle/123456789/4691');

insert into usuario(nombres, codigo, contraseña, DNI, tipoUsuario) values('Salvattore Razzeto', '88664422', '$2y$10$PuV0AuYH0SuRHy5D0cXss.71YJsqTWGiQL8Yo/zAZCpVVi4yyrKyG', '74466379', 'Administrador'),
('Miguel Benites', '123456', '$2y$10$xCTj/ciOcqqfZew9EOwRt.kkXQYm735kgTq9ocfHaZV7TW4in9gR6', '78945612', 'Docente'),
('Gerardo Avalos', '11335577', '$2y$10$zXAIoXb.uwJWZE8v9db3K.GKvvxyccNYwBMnKWQg1rFob.4XK0lse', '45678912', 'Estudiante');

insert into tramites(idUsuario, nombre, descripcion, fecha) values(3, 'Certificado de estudios', 'Certificado de estudios de 1 año, en primera especialidad', '2021-08-05'),
(3, 'Grados y títulos', 'Titulo profesional en Ingeniería de Sistemas', '2021-05-06');

insert into docente(idUsuario, logros) values(2, 'PhD en Ingeniería del Agua y Medioambiente por la Universidad Politécnica de Valencia, España. Doctor en Medioambiente y Desarrollo Sostenible. Maestría en Ciencias con mención en Minería y Medio Ambiente, Estancia de investigación en Adam Mickiewicz University, Polonia. Título profesional en la Facultad de Ingeniería Ambiental de la Universidad Nacional de Ingeniería. Actualmente es investigador en la Universidad de Ciencias y Humanidades.');

insert into cursos(nombre, creditos, ciclo) values('DESARROLLO DEL PENSAMIENTO LOGICO MATEMATICO', 3, 1),
('DESARROLLO PERSONAL', 3, 1),
('ESTADISTICA GENERAL', 4, 1),
('INTRODUCCION A LA INGENIERIA DE SISTEMAS', 2, 1),
('INTRODUCCION A LA PROGRAMACION', 3, 1),
('INTRODUCCION AL ANALISIS MATEMATICO', 4, 1),
('LECTURA CRITICA Y REDACCION DE TEXTOS ACADEMICOS', 3, 1),
('TALLER DE TECNICAS DE COMUNICACION EFICAZ (E)', 1, 1),
('TALLER DE MÚSICA (E)', 1, 1),
('TALLER DE LIDERAZGO (E)', 1, 1),

('CULTURA INVESTIGATIVA Y PENSAMIENTO CRITICO', 3, 2),
('ETICA, CONVIVENCIA HUMANA Y CIUDADANIA', 4, 2),
('FISICA GENERAL', 4, 2),
('PROGRAMACION ORIENTADO A OBJETOS I', 4, 2),
('SOCIEDAD CULTURA Y ECOLOGIA', 3, 2),
('TALLER DE MANEJO DE TIC (E)', 1, 2),
('TALLER DE DANZAS FOLKLÓRICAS (E)', 1, 2),
('TALLER DE DEPORTE (E)', 1, 2),
('ANALISIS MATEMATICO', 4, 2),

('FISICA ELECTRONICA', 3, 3),
('ADMINISTRACION GENERAL', 3, 3),
('ESTADISTICA APLICADA', 3, 3),
('SISTEMICA', 3, 3),
('PROGRAMACION ORIENTADA A OBJETOS II', 4, 3),
('MATEMATICA APLICADA', 3, 3),
('INGENIERIA GRAFICA (E)', 3, 3),
('SICOLOGÍA ORGANIZACIONAL (E)', 3, 3),

('DISEÑO WEB', 3, 4),
('ECONOMIA GENERAL', 3, 4),
('GESTIÓN DE PROCESOS', 3, 4),
('PENSAMIENTO DE DISEÑO', 3, 4),
('SISTEMAS DIGITALES', 3, 4),
('ESTRUCTURA DE DATOS ORIENTADO A OBJETOS', 4, 4),
('COMPUTACIÓN GRÁFICA Y VISUAL (E)', 3, 4),
('PLATAFORMAS TECNOLÓGICAS (E)', 3, 4),

('ARQUITECTURA Y ORGANIZACIÓN DE COMPUTADORAS', 3, 5),
('CONTABILIDAD GERENCIAL', 3, 5),
('INGENIERIA DE DATOS I', 4, 5),
('INVESTIGACIÓN DE OPERACIONES', 3, 5),
('SISTEMAS DE INFORMACIÓN', 4, 5),
('TECNOLOGIAS WEB', 3, 5),
('TRANSFORMACIÓN DIGITAL (E)', 3, 5),
('TELEINFORMÁTICA (E)', 3, 5),


('SISTEMAS INTELIGENTES', 3, 6),
('INGENIERÍA ECONÓMICA', 2, 6),
('CADENA DE SUMINISTRO', 3, 7),
('GESTIÓN DE MANEJO DE TIC', 3, 7),
('SEGURIDAD DE LA INFORMACIÓN', 2, 8),
('MARKETING Y MEDIOS SOCIALES', 3, 8),
('GESTIÓN DE PROYECTOS DE TIC', 4, 9),
('AUDTORÍA INFORMÁTICA', 4, 9),
('GOBIERNO DE TIC', 3, 10),
('PRÁCTICAS PRE PROFECIONALES', 3, 10);