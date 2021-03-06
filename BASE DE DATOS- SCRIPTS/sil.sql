
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2017 a las 16:53:53
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u322818984_dos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
  `nomb_asignatura` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horas_practica` int(11) DEFAULT NULL,
  `pre_requisito` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nro_creditos` int(11) DEFAULT NULL,
  `semestre_academico` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_asignatura` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `ciclo_academico` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facultad` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horas_teoria` int(11) DEFAULT NULL,
  `horas_laboratorio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `escuela` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sumilla` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`cod_asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`nomb_asignatura`, `horas_practica`, `pre_requisito`, `nro_creditos`, `semestre_academico`, `cod_asignatura`, `ciclo_academico`, `facultad`, `horas_teoria`, `horas_laboratorio`, `escuela`, `sumilla`) VALUES
('Algoritmos y programación paralela', 2, 'ninguno', 4, 'II', '041123', 'Cuarto ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológico profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en Ingeniería en Informática y Sistemas, conocimientos sobre la posibilidad de realizar múltiples tareas simultáneamente mediante hardware, que no es inmediatamente traducida al software, pues las aplicaciones deben ser diseñadas para aprovechar estas nuevas capacidades, mediante el uso de hebras y/o procesos, porque las arquitecturas de computadores están tendiendo a incluir cada vez más núcleos y/o procesadores por máquina como método de incrementar la capacidad computacional de cada unidad.\nCONTENIDOS:\nIntroducción a la concurrencia. Conceptos básicos. Programas concurrentes. Propiedades de la programación concurrente. Exclusión mutua. Mecanismos de Comunicación y sincronización en memoria compartida. Introducción a la Programación Paralela, Clasificación Lógica del Paralelismo, Clasificación Física de Computadores Paralelos, Paradigmas de Programación Paralela. Diseño de Programas Paralelos.'),
('Análisis de sistemas I', 0, 'ninguno', 4, 'II', '041121', 'Cuarto ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre el análisis de sistemas convencionales e informáticos para desarrollar habilidades de abstracción y entendimiento del funcionamiento de procesos, para luego realizar una serie de trabajos de adquisición de requerimientos.\nCONTENIDOS:\nEl rol del analista de sistemas, el estilo organizacional y su impacto en los sistemas de información, determinación de viabilidad y administración de las actividades de análisis y diseño, elaboración de prototipos RAD y programación extrema, uso de diagramas de flujo de datos, análisis de datos mediante diccionario de datos, descripción de las especificaciones de procesos y decisiones estructuradas. '),
('Análisis de sistemas II', 0, 'Análisis de sistemas', 4, 'I', '051127', 'Quinto ciclo', 'FAIN', 3, '2', 'ESIS', 'APORTE DE LA ASIGNATURA AL PERFIL PROFESIONAL\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre el análisis de sistemas convencionales e informáticos para desarrollar habilidades de abstracción y entendimiento del funcionamiento de procesos, para luego realizar una serie de trabajos de adquisición de requerimientos.\nCONTENIDOS:\nPreparación de la propuesta de sistemas, diseño de salida eficaz, diseño de procedimientos precisos de entrada de datos, aseguramiento de la calidad, implementación exitosa del sistema de información.\n'),
('Arquitectura de computadoras', 2, 'ninguno', 4, 'I', '051128', 'Quinto ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional de Ingeniería en Informática y Sistemas, conocimientos para resolver los problemas reales que le permita comprender el funcionamiento de una computadora, para la elección adecuada del hardware en el desarrollo de un sistema de información.\nPor otra parte, se promoverá la práctica de los valores éticos y profesionales tales como: responsabilidad, honestidad, solidaridad, respeto, a través de la supervisión y orientación de trabajos grupales tanto teóricos como de laboratorio.\nCONTENIDOS:\nEvolución del procesamiento de datos. Introducción a la arquitectura de computadores. Instrucciones: semestre de captación y ejecución, Direccionamiento de la memoria. Lenguaje ensamblador. Interfaz de memoria. Interfaz de  entrada y salida. Memoria interna. Arquitectura del microprocesador. Procesamiento paralelo. Tecnologías actuales de los nanoprocesadores.'),
('Base de datos I', 2, 'Estructura de datos', 4, 'I', '051130', 'Quinto ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO:\nLa asignatura Base de Datos I es propedéutica, formativa e instrumental de carácter técnico – práctico. Pretende dotar al estudiante de las herramientas metodológicas necesarias para poder diseñar bases de datos relacionales. También aspira a constituirse en un área integradora del resto de las asignaturas de la Carrera Profesional de Ingeniería en Informática y Sistemas.\nCONTENIDOS:\nLa asignatura corresponde al área de especialidad siendo de carácter teórico-práctico. Coadyuda al logro del perfil profesional en las COMPETENCIA(S)s Técnico instrumentales. Abarca los siguientes aspectos: Fundamentos de base de datos, modelo entidad-relación, modelo relacional, álgebra relacional.'),
('Base de datos II', 0, 'Base de datos I', 4, 'II', '061136', 'Sexto ciclo', 'FAIN', 2, '4', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nAPORTE DE LA ASIGNATURA AL PERFIL PROFESIONAL\nLa asignatura Base de Datos II es propedéutica, formativa e instrumental de carácter técnico – práctico. Pretende dotar al estudiante de las herramientas metodológicas necesarias para poder diseñar bases de datos relacionales. También aspira a constituirse en un área integradora del resto de las asignaturas de la Carrera Profesional de Ingeniería en Informática y Sistemas.\nCONTENIDOS:\nLa asignatura corresponde al área de especialidad siendo de carácter teórico-práctico. Coadyuda al logro del perfil profesional en las COMPETENCIA(S)s Técnico instrumentales. Abarca los siguientes aspectos: Programación SQL, diseño de consultas, vistas, funciones, procedimientos almacenados, desencadenadores, bases de datos multidimensionales, etc. '),
('Compiladores y teoría de lenguajes', 0, 'ninguno', 4, 'II', '061135', 'Sexto ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la elaboración de proyectos de desarrollo de software.\nCONTENIDOS:\nEl curso comprende :Teoría de Lenguajes y la construcción de compiladores por fases, conceptos, definiciones formales, Analizador Léxico, Analizador Sintáctico, Tipos, contexto de desarrollo, Análisis Semántico, Tabla de Símbolos, Generación de Código, tratamiento y recuperación de errores.'),
('Comunicación de datos', 0, 'ninguno', 4, 'II', '061134', 'Sexto ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la Comunicación de datos para gestionar y administrar las redes de computo de la organización en función a sus necesidades y requerimientos que requieren el en el área de la ingeniería informática y sistemas.\nCONTENIDOS:\nFundamentos de los sistemas de comunicación, señales de transmisión, arquitectura de las comunicaciones Modelo OSI, comunicaciones de datos en las Redes LAN y Redes WAN, protocolos del Nivel Enlace, protocolos de Control de Acceso al Medio (MAC), dispositivos de interconexión de Redes LAN de nivel 2 y una introducción al Nivel Red, protocolo IP.'),
('Contabilidad, costos y presupuestos', 2, 'ninguno', 4, 'II', '041124', 'Cuarto ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos básicos y fundamentales de contabilidad en lo referente a la normatividad contable, libros de inventarios y balances, registro de compras y ventas, libros de caja, bancos, planillas, retenciones, mayor y estados financieros.\nCONTENIDOS:\nEl curso comprende el estudio en detalle de los fundamentos de Contabilidad que sustentan las transformaciones mercantiles y la forma de representarlos por medio de cuentas. Registrarlos en libros contables que corresponda aplicando las técnicas instrumentales de acuerdo a la naturaleza de las operaciones y en concordancia con la legislación vigente en el país hasta la formulación de los Estados Financieros básicos. Conocer los sistemas informáticos gubernamentales y privados. Enfoque sistémico de una aplicación contable real. Principios de Costos y presupuestos gubernamentales y privados.'),
('Dinámica de sistemas', 0, 'ninguno', 4, 'I', '071143', 'Séptimo ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la Dinámica de Sistemas a desarrollar aplicaciones de dinámica de casos reales que se modela en el mundo real e interpretar los resultados de procesos de simulación dinámica y plantea alternativas de solución.\nCONTENIDOS:\nSistemas retroalimentados, Diagramas causales, diagrama de FORRESTER, Sistemas de retroalimentación positiva y negativa, Sistemas de primer orden y de segundo orden con realimentación positiva y/o negativa. Implementación de modelos de dinámica de sistemas utilizando software de propósito específico.'),
('Economía y desarrollo', 2, 'ninguno', 3, 'II', '041126', 'Cuarto ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos científicos y pragmáticos de la evolución y desarrollo de la economía en los países menos desarrollados en el marco del contexto mundial.\nCONTENDOS:\nLa asignatura, tiene como finalidad destacar los lineamientos de la subdisciplina científica de la teoría económica, que se ocupa del estudio de las economías de los países menos desarrollados, sus condiciones, características y políticas de desarrollo económico a través del tiempo. Surge, como subdisciplina científica a partir de la Segunda Guerra Mundial.\nSu naturaleza teórica-practica, contribuye al desarrollo de las cuatro unidades de aprendizaje, la primera, presenta fundamentos generales de la economía y desarrollo, la segunda crecimiento y desarrollo económico, la tercera las teorías modernas de crecimiento y la cuarta el círculo vicioso del subdesarrollo.'),
('Electromagnetismo y óptica', 0, 'ninguno', 3, 'II', '021109', 'Segundo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA :\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos en electromagnetismo, circuitos eléctricos y electrónicos, que son necesarios para la comprensión de las tecnologías electrónicas, informática, computación y sistemas.\nCONTENIDOS :\nElectromagnetismo: Carga eléctrica y el campo eléctrico. Ley de Gauss. Potencial eléctrico. Capacitancia y dieléctricos. Corriente, resistencia y fuerza electromotriz. Circuitos de corriente continúa. Campo magnético y fuerzas magnéticas. Fuentes de campo magnético. Inducción electromagnética. Inductancia. Corriente alterna. Ondas electromagnéticas y radiación.  \nCircuitos electrónicos: Teoría de semiconductores. Diodos. Circuitos con diodos. Transistores. Circuitos con transistores en corriente continúa. Circuitos con transistores en corriente alterna. \nÓptica: Naturaleza y la propagación de la luz. Óptica geométrica e instrumentos ópticos. Interferencia. Difracción. Polarización. Procesamiento de la luz.'),
('Estadística y probabilidades', 0, 'ninguno', 4, 'I', '031120', 'Tercer ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos básicos y fundamentales en estadística y probabilidades en altos niveles de COMPETENCIA(S). Se desarrollará en forma dinámica e interactiva, a través de ejemplos y aplicaciones comunes complementando el aprendizaje mediante el uso de programas para computadoras.\nCONTENIDOS:\nProporcionar las técnicas de la estadística, descriptiva e inferencial, y preparar al estudiante en su aplicación en el proceso de convertir datos numéricos aislados en información, útil para la toma de decisiones. También se da una introducción a la disciplina de probabilidad, que incluye nociones de probabilidad, variable aleatoria y modelos probabilísticos. Estadística descriptiva, distribución de probabilidades, Diseño experimental, Muestreos, intervalos de confianza, regresión lineal y no lineal. '),
('Estructura de datos', 2, 'Programación avanzada', 4, 'I', '031117', 'Tercer ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\r\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\r\nPROPÓSITO U OBJETIVO:\r\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos para desarrollar los algoritmos de distintos tipos de datos con énfasis en las modernas teorías de programación. Presenta las herramientas necesarias para el análisis y evaluación de eficiencia de programas y las distintas alternativas que pueden aplicarse para resolver problemas complejos. \r\nCONTENIDOS:\r\nAbarca los siguientes contenidos: arrays, registros, procesos recursivos, clases y objetos. Estructuras dinámicas tipo: listas  enlazadas, árbol, grafos.					'),
('Física general', 4, 'ninguno', 5, 'I', '011102', 'Primer ciclo', 'FAIN', 4, '4', 'ESIS', 'NATURALEZA: La asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\r\nPROPÓSITO U OBJETIVO:\r\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, aptitudes y habilidades para el razonamiento lógico riguroso, el cálculo, el análisis, la síntesis y la generalización de resultados así como desarrollar en el alumno la comprensión, el análisis crítico y la investigación de los fenómenos físicos para su aplicación en otras asignaturas y en el campo profesional\r\nCONTENIDOS\r\nLos tópicos generales de estudio son: Cálculo vectorial, Cinemática, Estática y Dinámica; Trabajo, Energía y potencia; Conservación de la Energía y el Momentum Lineal; Movimiento Armónico Simple.\r\n					'),
('Física moderna', 2, 'ninguno', 3, 'I', '031116', 'Tercer ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos básicos y fundamentales de la física moderna y profundizar en el conocimiento de los fenómenos físicos, con especial interés en materias propias de esta ingeniería, como la Física de Semiconductores, la Ciencias de Materiales, la Propagación de Ondas y la Fotónica. Se desarrollará en forma dinámica e interactiva, a través de ejemplos y aplicaciones comunes complementando el aprendizaje mediante el uso de programas para computadoras y realizando algunas experiencias de laboratorio en un ambiente propicio y adecuado.\nCONTENIDOS:\nIntroducción a la Física Cuántica. Mecánica Cuántica. Fotones y ondas electromagnéticas. La Ecuación de Schrödinger. Moléculas y sólidos. Enlaces en sólidos. Teoría de bandas de sólidos. Teoría de electrones libres de metales. Conducción  eléctrica en metales, aisladores y semiconductores. Dispositivos semiconductores.'),
('Formulación y evaluación de proyectos informáticos', 2, 'ninguno', 3, 'II', '061138', 'Sexto ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística u cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos sobre la formulación y evaluación de proyectos en tecnologías de información.\nCONTENIDOS:\nProcesos de Inicio, Planificación, Ejecución, Control y Cierre, aplicando la guía del Project Management Institute, como estándar de American National Standard Institute – ANSI en la gestión de proyectos, esto permitirá a los participantes un buen desempeño en la administración de los proyectos informáticos y asegurar su éxito. En la parte práctica se desarrollará el plan de gestión de un proyecto informático, mediante casos reales y/o de estudio, adicionalmente se desarrollará la habilidad en el uso de una herramienta de software para la planeación y control de proyectos como el MS-Project.'),
('Fundamentos de programación', 2, 'ninguno', 4, 'I', '011103', 'Primer ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, para  comprender los fundamentos de la ciencia de la computación (lógica, teoría de autómatas y lenguajes formales, paradigmas y lenguajes de programación), así como su aplicación al desarrollo de software (métodos formales en ingeniería de software).\nCONTENIDOS:\nIntroducción. Ingeniería de Sistemas, Ciencia de la Informática, Ciencias de la Computación. Programación Basada en métodos formales. Diseño y complejidad algorítmica. Programación estructurada.\n'),
('Gestión empresarial', 2, 'ninguno', 3, 'I', '071142', 'Séptimo ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas una visión general y especializada de la gestión empresarial dentro del marco de una perspectiva operacional, constituyendo las bases de la gestión empresarial en la mejora de la productividad y por ende la competitividad de las empresas o negocios.\nCONTENIDOS:\nConceptos básicos de administración de empresas. Procesos Administrativos. Desarrollo de los procesos administrativos. La empresa como enfoque sistémico. Funciones empresariales. Función Logística. Función de Recursos Humanos. Función Contable y financiera. '),
('Ingeniería de software I', 2, 'Análisis de sistemas', 4, 'II', '061133', 'Sexto ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la elaboración de proyectos de desarrollo de software.\nCONTENIDOS:\nEl proceso del software: una visión general. El proceso de desarrollar software. Planificación y Gestión del  Proyecto. Requerimientos. Diseño del Sistema. Escribiendo los programas. Verificación y Validación. Liberando el sistema.'),
('Ingeniería de software II', 0, 'Ingeniería de software', 4, 'I', '071139', 'Séptimo ciclo', 'FAIN', 2, '4', 'ESIS', 'NATURALEZA\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la elaboración de proyectos de desarrollo de software.\nCONTENIDOS:\nEl proceso del software: una visión general. El proceso de desarrollar software. Planificación y Gestión del  Proyecto. Requerimientos. Diseño del Sistema. Escribiendo los programas. Verificación y Validación. Liberando el sistema.   '),
('Ingeniería económica', 2, 'ninguno', 3, 'I', '051132', 'Quinto ciclo', 'FAIN', 1, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en Ingeniería Informática y Sistemas los principios fundamentales de la tasa de interés y de las herramientas de la Ingeniería Económica que les permita aplicar el cálculo económico y utilizar los modelos de evaluación de proyectos tecnológicos y toma de decisiones de inversión.\nCONTENIDOS:\nValor del dinero en el tiempo – Interés compuesto – Uso de factores múltiples – Costo de capital – Depreciación – Flujo de Caja – Métodos de evaluación de alternativas – Análisis de reemplazo – Periodo de recuperación de la inversión – Punto de equilibrio - Cálculo de equivalencia con Inflación - Análisis económico con limitación de capital – Análisis de sensibilidad económica.'),
('Ingeniería web', 2, 'ninguno', 4, 'II', '081145', 'Octavo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nLa asignatura de Ingeniería Web es propedéutica, formativa e instrumental de carácter técnico – práctico. Pretende dotar al estudiante de las herramientas metodológicas necesarias para poder diseñar artefactos web siguiendo una metodología adecuada que fortalezca el proceso de navegación fundamentalmente y considerando estándares de calidad web. También aspira a constituirse en un área integradora del resto de las asignaturas de la Carrera Profesional de Ingeniería en Informática y Sistemas.\nCONTENIDOS:\nLa asignatura corresponde al área de especialidad siendo de carácter teórico-práctico. Coadyuda al logro del perfil profesional en las COMPETENCIA(S)s Técnico instrumentales. Abarca los siguientes aspectos: Arquitectura de aplicaciones y servicios sobre Internet, Metodología OOHDM, Modelo conceptual, modelo navegacional, modelo de interfaz abstracta, aplicación, métricas web. '),
('Investigación operativa I', 2, 'ninguno', 4, 'I', '051131', 'Quinto ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos para resolver situaciones y problemas determinando técnicas de solución basadas en teorías matemáticas usadas en la toma de decisiones.\nCONTENIDOS:\nEl curso de Investigación Operativa I está basado en el uso de métodos matemáticos aplicados a la gestión de las organizaciones con el fin de lograr el uso óptimo de los recursos que se disponen. El curso es de naturaleza teórico – Práctico y brinda a los alumnos los principios fundamentales de una organización a través de la construcción de modelos de optimización lineal. Trata lo temas: Sistemas, modelos, formulación de modelos de optimización lineal, métodos de solución, dualidad y sensibilidad de los modelos lineales, transporte, transbordo y asignación.'),
('Investigación operativa II', 2, 'Investigación operativa', 3, 'II', '061137', 'Sexto ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos para resolver situaciones y problemas determinando técnicas de solución basadas en teorías matemáticas usadas en la toma de decisiones.\nCONTENIDOS:\nEl objetivo del curso de Investigación Operativa II desarrollar los Modelos y Algoritmos de Investigación de Operaciones a un nivel avanzado, desarrollando lo correspondiente a instrumentos estadísticos de Análisis Multivariable, Modelos de programación PERT-CPM, teoría de inventarios. Simulación Montecarlo y Teoría de Líneas de Espera, de modo tal que les permita estimar y modelar con propiedad los datos (cualquiera que sea su variedad y volumen), resultados del proceso del análisis en la Arquitectura del Negocio, para el diseño de las Arquitecturas del Sistema de Información.'),
('Legislación industrial e informática', 2, 'ninguno', 3, 'I', '071144', 'Séptimo ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos sobre. El estudio de las diversas normas legales tanto nacionales como internacionales; así como de los estándares internacionales y las buenas prácticas que regulan el buen uso de las Tecnologías de la Información y Comunicaciones.\nCONTENIDOS:\nEl desarrollo del curso describe determinados problemas que se van presentando al generar o desarrollar programas informáticos, al compartir información y en el actuar en función a ella de muchas maneras en la era digital, de la velocidad dentro de una economía globalizada. \n'),
('Lenguaje y comunicación', 2, 'ninguno', 2, 'I', '011106', 'Primer ciclo', 'FAIN', 1, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, las capacidades para la comunicación tanto oral y escrita. Lo prepara para la comunicación oral, considerando especialmente las necesidades de interlocución con personas de diversas condiciones socioculturales, así como para organizar la presentación de datos y de información cuantitativa, en el contexto de la comunicación profesional, técnica y organizacional. \nCONTENIDOS:\nLa comunicación. Procesos mentales de lectura. Evidencias de comprensión. Clases y técnica de lectura. Expresión escrita. Ortografía: sintaxis, semántica, acentuación. Proceso de producción de un texto escrito: Normas IEEE y Nacionales para presentación de trabajos escritos: Monografías, artículos científicos, informes de práctica  de laboratorios. Redacción comercial. Expresión oral. Técnicas de exposición. Ayudas visuales. Oratoria y técnica de desenvolvimiento.'),
('Matemática discreta I', 2, 'ninguno', 4, 'I', '011104', 'Primer ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:Tiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos sobre la teoría de la computación para desarrollar habilidades y estrategias de razonamiento matemático, resolver y aplicar los problemas a la ingeniería  en informática y sistemas\nCONTENIDOS:\nIntroducción a la Teoría de conjuntos. Lógica matemática: Proposiciones, operaciones lógicas,  Álgebra de  Boole, Circuitos lógicos y representación de datos. Conceptos básicos de conteo. Relaciones y Grafos dirigidos. Orden, relaciones y estructuras. Árboles. Probabilidad discreta.'),
('Matemática discreta II', 2, 'Matemática discreta I', 4, 'II', '021111', 'Segundo ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la teoría de la computación para desarrollar habilidades y estrategias de razonamiento matemático, resolver y aplicar los problemas a la ingeniería informática y sistemas.\nCONTENIDOS:\nTeoría de grupos. Teoría de anillos. Algebra lineal. Espacios  Vectoriales reales y complejos. Transformaciones lineales. Lenguajes y máquinas de estado finito. Grupos y codificación. Criptografía.'),
('Matemática I', 2, 'ninguno', 4, 'I', '011105', 'Primer ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA: \nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, aptitudes y habilidades para el razonamiento lógico riguroso, el cálculo, el análisis, la síntesis y la generalización de resultados\nCONTENIDOS:\nSistema de números reales. Propiedades. Ecuaciones e inecuaciones lineales y cuadráticas. Ecuaciones e inecuaciones polinómicas y fraccionarias. Ecuaciones e inecuaciones con radicales. Ecuaciones e inecuaciones con valor absoluto. Geometría analítica: sistema coordenado rectangular. La circunferencia y sus ecuaciones. La elipse y sus ecuaciones. La hipérbola y sus ecuaciones. Funciones de variable real: relación binaria y sus gráficas.  Cálculo diferencial: límite de una función. Límites laterales. Derivada de orden superior.\n'),
('Matemática II', 2, 'Matemática I', 4, 'II', '021112', 'Segundo ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos de matemáticas avanzadas, que utilizando un software especializado de matemática, optimizará la solución de problemas concretos de ingeniería.\nCONTENIDOS:\nCálculo integral. Integrales indefinidas, integrales definidas y ecuaciones diferenciales: lineales de primer orden, de variable separable, homogénea y exacta, segundo orden con coeficientes constantes, homogéneo y no homogéneo. Sucesiones y serie numéricas. Criterios de convergencia. Desarrollos polinomiales de Taylor. Aplicaciones a la ingeniería de informática y Sistemas. Uso de software algebraico e integral.'),
('Matemática III', 2, 'Matemática II', 4, 'I', '031119', 'Tercer ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos de matemáticas avanzadas, que utilizando un software especializado de matemática, optimizará la solución de problemas concretos de ingeniería.\nCONTENIDOS :\nFunciones de varias variables: Derivadas parciales.- Integrales múltiples.- Funciones vectoriales, Calculo vectorial.- Derivadas, Integrales vectoriales y sus Aplicaciones, Series.'),
('Matemática IV', 2, 'Matemática III', 4, 'II', '041125', 'Cuarto ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos de matemáticas avanzadas, que utilizando un software especializado de matemática, optimizará la solución de problemas concretos de ingeniería.\nCONTENIDOS:\nDefinición. Teorema de existencia y unicidad. Aplicaciones y soluciones numéricas. Transformadas de Laplace. Soluciones de ecuaciones diferenciales ordinarias mediante series de potencias. Puntos ordinarios y puntos singulares regulares. Series de Fourier y ecuaciones diferenciales en derivadas parciales. Sistemas de ecuaciones diferenciales Lineales.'),
('Metodología de investigación para ingeniería', 2, 'ninguno', 2, 'II', '021108', 'Segundo ciclo', 'FAIN', 1, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación en investigación, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO :\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, tener conocimientos básicos de la investigación científica para que aprenda a utilizar la razón para adquirir conocimientos, pensar con lógica, manejar conceptos y medirlos para solucionar problemas y la investigación en cualquier campo hace avanzar el conocimiento y mejora la práctica.\nCONTENIDOS :\nFundamentos de la investigación científica, tipos de investigación, investigación tecnológica, procedimientos, técnicas e instrumentos de investigación aplicados a la Ingeniería en Informática y Sistemas en base a COMPETENCIA(S)s y en base a hipótesis.'),
('Metodología del estudio', 2, 'ninguno', 2, 'I', '011107', 'Primer ciclo', 'FAIN', 1, '0', 'ESIS', 'NATURALEZA : \nLa asignatura corresponde al área de formación en investigación, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas,  comprender la exigencia del trabajo universitario y dominar las variadas formas de estudiar, para que puedan seleccionar los métodos más convenientes a su personal estilo de aprender y a la naturaleza de cada asignatura.\nCONTENIDOS :\nMetodología de estudio universitario.  Auto evaluación de recursos y uso de métodos. Análisis de texto y técnica de lectura, El subrayado y el resumen. La toma de apuntes. Los esquemas y cuadros sintácticos. Los mapas conceptuales. Los mapas mentales. Las inteligencias múltiples. La conducta asertiva. El estilo personal de trabajo.\n'),
('Métodos cuantitativos para investigación', 2, 'ninguno', 4, 'II', '081146', 'Octavo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación en investigación, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, para apoyo y soporte en la elaboración de la tesis universitaria, siguiendo el proceso de la metodología de la investigación científica, Utilizando la estadística paramétrica y no paramétrica, utilizar software estadística que le permita reunir, manipular información y tener la literatura correspondiente para preparar y presentar el informe de investigación final.\nCONTENIDOS:\nRecolección de información, muestreo, validación de instrumentos, confiabilidad del instrumento. Prueba de la hipótesis. Paramétricos y no paramétricos. Interpretación de resultados utilizando software estadístico, presentación de los resultados.'),
('Métodos numéricos para ingeniería', 2, 'ninguno', 4, 'I', '031118', 'Tercer ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito, brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos sobre métodos numéricos que constituyen técnicas mediante las cuales es posible solucionar numéricamente modelos matemáticos de la naturaleza mediante algoritmos secuenciales y paralelos. \nCONTENIDOS:\nAnálisis de error, Raíces de ecuaciones, Sistemas de ecuaciones algebraicas lineales, Optimización, Sistemas de ecuaciones  lineales con métodos directos, con métodos iterativos y aproximación polinomial e interpolación. Ajuste de curvas, Diferenciación e integración numérica, Ecuaciones diferenciales ordinarias, Ecuaciones diferenciales parciales y Métodos numéricos no Heurísticos. Integración Numérica. Métodos numéricos y algoritmos: Desarrollo de algoritmos computacionales secuenciales y paralelos. Computación evolutiva. Computación basada en lógica difusa.'),
('Programación avanzada', 2, 'Fundamentos de programación', 4, 'II', '021110', 'Segundo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, la capacidad de desarrollar modelos orientados a objetos que ayuden a la solución de problemas mediante programas computacionales. Asimismo, será capaz de implementar los programas utilizando un lenguaje orientado a objetos, y de implementar interfaces de ventanas orientadas a objetos, controladas por eventos.\nCONTENIDOS:\nTeoría sobre el manejo de eventos y excepciones. Implementación de Aplicaciones orientadas a objetos para la resolución de problemas. Búsqueda y ordenamiento de datos en memoria interna  y externa. Resolución de problemas utilizando archivos: flujos de bytes, flujos de caracteres, archivos de acceso aleatorio, serialización, flujos de tokens. Introducción al desarrollo de aplicaciones Web y XML.'),
('Programación gráfica', 0, 'ninguno', 3, 'II', '021113', 'Segundo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en Ingeniería Informática y Sistemas los principios fundamentales de la programación gráfica en la resolución de problemas reales en el ámbito ingenieril.\nCONTENIDOS:\nFundamentos de gráficos tridimensionales. Matemáticas para videojuegos. Gráficos en escena, Recursos gráficos y sistema de archivos. APIS de gráficos 3D. Gestión Manual OGRE 3D. Materiales y texturas. Partículas y billboards. Iluminación. Animación Shaders.\n'),
('Realidad y defensa nacional', 2, 'ninguno', 2, 'II', '021114', 'Segundo ciclo', 'FAIN', 1, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación básica, humanística y cultura general, es de carácter teórico-práctica.\nAPORTE DE LA ASIGNATURA AL PERFIL PROFESIONAL\nAsignatura orientada a conocer y comprender la realidad nacional en sus aspectos más significativos, reflexionar y opinar sobre la situación del país y su proceso de desarrollo y manifestar actitudes de un desenvolvimiento social crítico, participativo y de defensa.\nCONTENIDOS:\nGlobalización, características y efectos en la economía y sociedad latinoamericana y peruana. Territorio Nacional: principales características naturales geoestratégicas y ecológicas, y las principales tendencias de crecimiento y distribución poblacional, políticas. Modelos económicos implementados en las últimas décadas por los diferentes gobiernos de Perú, naturaleza y resultados. Principales problemas sociales y contradicciones de la sociedad peruana como la pobreza y la exclusión, la migración interna e internacional, el proceso de urbanización y los movimientos sociales. Naturaleza y articulación de la diversidad cultural peruana. Estado, democracia y  descentralización.'),
('Seguridad informática', 0, 'ninguno', 3, 'II', '081149', 'Octavo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO\nLa asignatura Seguridad Informática es propedéutica, formativa e instrumental de carácter técnico – práctico. Pretende dotar al estudiante de las bases fundamentales de la criptografía y los estándares de seguridad física, lógica y humana. También aspira a constituirse en un área integradora del resto de las asignaturas de la Carrera Profesional de Ingeniería en Informática y Sistemas.\nCONTENIDOS:\nLa asignatura corresponde al área de especialidad siendo de carácter teórico-práctico. Coadyuda al logro del perfil profesional en las COMPETENCIA(S)s Técnico instrumentales. Abarca los siguientes aspectos: Criptografía, control de accesos, autenticación, seguridad en redes, seguridad a nivel de aplicaciones, seguridad a nivel de operaciones, control de ataques, administración de la seguridad.'),
('Simulación de sistemas', 0, 'Estadística y probabilidades', 4, 'II', '081148', 'Octavo ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO:\nLa asignatura Simulación de Sistemas es propedéutica, formativa e instrumental de carácter técnico – práctico. Pretende dotar al estudiante de las herramientas metodológicas necesarias para poder diseñar artefactos web siguiendo una metodología adecuada que fortalezca el proceso de navegación fundamentalmente y considerando estándares de calidad web. También aspira a constituirse en un área integradora del resto de las asignaturas de la Carrera Profesional de Ingeniería en Informática y Sistemas.\nCONTEINDOS:\nLa asignatura corresponde al área de especialidad siendo de carácter teórico-práctico. Coadyuda al logro del perfil profesional en las COMPETENCIA(S)s Técnico instrumentales. Abarca los siguientes aspectos: Generadores congruenciales mixtos, pruebas de aleatoriedad, modelos de simulación, pruebas de bondad de ajuste, generación de variables aleatorias, método de la transformada inversa, método de convolución, método de composición, intervalos confidenciales. '),
('Sistemas de información', 2, 'ninguno', 4, 'I', '071141', 'Séptimo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre los distintos Sistemas de Información que vienen transformado a las organizaciones públicas y privadas como producto de la evolución de la tecnología de la información como el proceso de negocios dentro y fuera de las organizaciones.\nCONTENIDOS:\nSistemas de información para obtener ventaja estratégica. Cómo funciona un sistema de Información gerencial. Cómo desarrollar un sistema efectivo de información gerencial Administración del SIG Gerencia empresarial y global. Planeación e implementación del cambio,  desafíos éticos y de seguridad. Optimización de un sistema de información gerencial Herramientas y técnicas.'),
('Sistemas electrónicos digitales', 0, 'ninguno', 3, 'II', '041122', 'Cuarto ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológico profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional de Ingeniería en Informática y Sistemas, conocimientos para resolver los problemas diseño e implementación de circuitos electrónicos digitales, que permita comprender el funcionamiento lógico de una computadora.\nCONTENIDOS :\nMagnitudes analógicas y digitales, Compuertas Lógicas y circuitos integrados, Funciones Lógicas, Análisis y Diseño de Circuitos Combinacionales, Fundamentos de Circuitos Secuenciales, Análisis y Diseño de Circuitos Secuenciales: Análisis y diseño de registros, Análisis y diseño de contadores, Registros de desplazamiento y memorias, Software y lógica programable.'),
('Sistemas operativos', 0, 'ninguno', 3, 'I', '051129', 'Quinto ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nAPORTE DE LA ASIGNATURA AL PERFIL PROFESIONAL\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre el funcionamiento de los sistemas operativos para desarrollar habilidades y estrategias en la implementación de las ciencias computacionales.\nCONTENIDOS:\nConceptos arquitectónicos del computador. Introducción a sistema operativo. Estructura de un sistema operativo: procesos, planificación del procesador, gestión de memoria, comunicación y sincronización de procesos, interbloqueos, entrada/salida, gestión de fichero y directorios. Introducción a los sistemas distribuidos, Seguridad y protección. Algoritmos de sistemas operativos paralelos. Instalación de sistemas operativos que resuelven problemas reales que surgen en las instalaciones empresariales e industriales, con aplicaciones en Windows (tm), GNU/Linux (tm) y sistemas operativos paralelos. Sistemas operativos para servidores Web.  '),
('Taller de emprendimiento e innovación', 0, 'ninguno', 3, 'II', '081147', 'Octavo ciclo', 'FAIN', 2, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nEl Taller de Emprendimiento e Innovación permitirá al alumno tener aplicar los conocimientos de los procesos organizacionales tanto privados como públicos, de tal forma que permita plantear y aportar soluciones a través del uso de las TICs apoyando a cualquiera de los procesos que se llevan a cabo en las organizaciones.\nCONTENIDOS:\nPYME en el Perú. Marco legal. Regímenes Tributarios. Potencialidad y sectores de acción de la PYME. Proyecto de negocios en la PYME: Perfil, idea, proyecto, la asistencia técnica. Constitución de Pequeñas Empresas: Procesos, licencias y funcionamiento. Estrategias y Marketing aplicables a PYME´s. Planeamiento estratégico. La PYME Exportadora. Rol de los centros de promoción: PROMPEX, PROMPYME, COPEI, BSCL, COFIDE, ONG´s y otros. Casos prácticos.'),
('Telemática', 0, 'Comunicación de dato', 4, 'I', '071140', 'Séptimo ciclo', 'FAIN', 3, '7', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO Y OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre Telemática para gestionar y administrar la información con los diferentes dispositivos de comunicación, formación en redes de datos avanzadas, en el diseño, puesta en producción y monitoreo de sistemas de telecomunicaciones.\nCONTENIDOS:\nModelo de Referencia OSI aplicado a las Redes LAN y WAN, tecnologías de capa 2, x25, Frame Relay y ATM, Direccionamiento, Equipos de funcionalidades de capa 2 y 3, Introducción a las redes de acceso, transporte, servicios y/o servidores. Estructura de ISP, transmisión de redes avanzadas, FDMA, TDMA, CDMA y GSM, evolución de los sistemas de telecomunicaciones, sistemas de móviles de nueva generación.'),
('Teoría general de sistemas', 2, 'ninguno', 3, 'I', '031115', 'Tercer ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, conocimientos sobre la Teoría General de Sistemas, en el análisis de problemas de la actividad humana y decidir cuál es la metodología que más se ajusta a cada situación problema en la búsqueda de soluciones holísticas. \nCONTENIDOS:\nFilosofía de Sistemas. Teoría de General de Sistemas: Naturaleza y Fundamentos. Modelos. Proceso Decisorio. Clasificación de sistemas y sus propiedades. Paradigma científico de sistemas. Métodos y metodologías sistémicas. Metodologías de sistemas blandos y duros. Metodologías de desarrollo de sistemas. Sistemas de Información. Perspectivas de Ingeniería de Sistemas. Sistemas Inteligentes'),
('Electivo I: Diseño asistido por computador', 0, 'ninguno', 4, 'I', '0811E1', 'Octavo ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre el Diseño Asistido por Computador en los diferentes áreas de aplicación e investigación de la Ingeniería. Así como el conocimiento de los diversos software utilizados para actividades de diseño en 2D y 3D.\nCONTENIDOS:\nFundamentos y Aplicación de Algoritmos para el diseño de reconocimiento de formas y figuras, primitivas gráficas, transformación geométricas 2D y 3D, Algoritmos de curvas y superficies, desarrollo de una aplicación utilizando como herramienta de lenguajes de programación en C/C++.');
INSERT INTO `asignatura` (`nomb_asignatura`, `horas_practica`, `pre_requisito`, `nro_creditos`, `semestre_academico`, `cod_asignatura`, `ciclo_academico`, `facultad`, `horas_teoria`, `horas_laboratorio`, `escuela`, `sumilla`) VALUES
('Electivo I: Gestión de ecoeficiencia en la empresa', 0, 'ninguno', 4, 'II', '0811E2', 'Octavo ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación tecnológica profesional, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre el diseño de sistemas de ecoeficiencia, además de una visión del concepto de Ecoefiencia como una nueva tendencia así como las principales herramientas que una empresa puede aplicar para demostrar que es Ecoeficiente..\nCONTENIDOS:\nEquilibrio del ecosistema, población, relación y recursos humanos,Contaminación y desarrollo sostenible, Tecnología Ecológica, Ecología Industrial,Gestión Medio ambiental proyecto de gestión medio ambiental, Ingeniería del diseño Medio Ambiental,Diseño de experimentos en la ecología, Sistemas Ecológicos, Biotecnología, Ingeniería Genética.'),
('Taller de tesis I', 2, 'Métodos cuantitativos para investigación', 4, 'I', '091150', 'Noveno ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación en investigación, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas , la elaboración de la tesis universitaria, siguiendo el proceso de la metodología de la investigación científica, Utilizando herramientas informáticas  que le permita reunir, manipular información y tener la literatura correspondiente para preparar y presentar un proyecto de investigación y escribir proyecto de tesis.\nCONTENIDOS:\nConocimiento. Filosofía de la ciencia. Problemas Epistemológicos de la investigación. Planteamiento del problema de investigación. Elaboración del marco teórico. Taxonomía de la investigación. Hipótesis y operacionalización de Variables. Diseño de la Investigación. Selección de la muestra. Diseño y validación de instrumentos. Recolección de datos. Métodos cuantitativos y cualitativos para prueba de hipótesis. Análisis de datos. Elaboración y presentación del Proyecto de tesis a la Escuela Académica Profesional de Ingeniería de Informática y Sistemas como parte del proceso de acreditación de la Escuela. Artículo científico del Proyecto de tesis.'),
('Práctica pre profesional I', 8, 'ninguno', 6, 'I', '091151', 'Noveno ciclo', 'FAIN', 2, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de prácticas pre-profesionales, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, está orientado a que los estudiantes ejerzan en la modalidad de práctica dirigida la Profesión y logren integrar los procesos teóricos y prácticos dando solución a una realidad problemática de las organizaciones mediante el desarrollo de una solución informática con la aplicación de las herramientas tecnológicas y metodologías adquiridas a lo largo de la carrera.\nCONTENIDOS:\nEl alumno aplica, en un contexto real, la Ciencia y la técnica sobre la cual se sustenta el perfil profesional de la carrera de Ingeniería en Informática y Sistemas. Durante la realización, el alumno define el ámbito de la práctica, consigue la aceptación formal, mediada por una carta de presentación, define el problema a resolver, formula un plan de trabajo( que se constituye en buena cuenta en el plan de la práctica pre-profesional), ejecuta las tareas previstas, empleando las COMPETENCIA(S)s adquiridas, hace los ajustes de acuerdo a la guía de los facilitadores o profesores de taller, presenta avances en las fechas programadas y coordinadas con los facilitadores, presenta la solución en el contexto real y sustenta ante un Jurado el trabajo realizado, el mismo que debe contar con la aceptación de la empresa o institución, ámbito del estudio.'),
('Realidad virtual', 0, 'ninguno', 4, 'I', '091152', 'Noveno ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVOS:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre el conocimiento y aplicación de la Realidad Virtual  en las distintas área de la ingeniería.\nCONTENIDOS\nAplicación Teórico - Práctico para aplicar algoritmos de computación gráfica. Graficas por computador. Niveles de estandarización de los gráficos. Modelado e iluminación de los entornos gráficos. Animación, Gráficos tridimensionales distribuidos. Aplicación de modelado de realidad virtual. Nodos primitivos, nodos avanzados. Manipulación de nodos y texturas. Transformaciones. Animación de ambientes virtuales. Interacción con objetos tridimensionales.'),
('Sistemas expertos', 0, 'ninguno', 4, 'I', '091153', 'Noveno ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la aplicación de los Sistemas Expertos para ofrecer las capacidades necesarias para entender la dinámica entorno, proponer  sistemas eficientes e inteligentes en el desarrollo de los sistemas de información en las organizaciones.\nCONTENIDOS:\nLa asignatura de Sistemas Expertos es de naturaleza TEORICO PRACTICA, y constituye una de las bases para que el alumno se encuentre en capacidad de representar y modelar el conocimiento humano a través del uso de la computadora Es parte fundamental del curso lograr que el alumno se motive por medio de la transmisión de conocimientos y experiencias de la vida real, para que investigue y se sienta inmerso de la representación del conocimiento por medio de Bases de Conocimiento.'),
('Electivo II: Computación en la nube', 0, 'ninguno', 4, 'I', '0911E3', 'Noveno ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre la Computación en la Nube y poseer una sólida formación especializada que le permiten implementar soluciones de sistemas en la web solucionando problemáticas de las organizaciones.\nCONTENIDOS: \nLa asignatura pertenece al área de Formación Especializada, aplicando teórico práctico, y tiene como propósito modelar bases de datos relacionales en la web usando software libre y/o comercial, plataforma de diseño de base de datos web.'),
('Electivo II: Programación de dispositivos móviles', 0, 'ninguno', 4, 'I', '0911E4', 'Noveno ciclo', 'FAIN', 3, '2', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nEn este curso se brindará a los participantes una introducción a los problemas que conlleva la comunicación usando dispositivos móviles, a través del estudio e implementación de aplicativos; tomando como referencia otros aplicativos móviles creados por diferentes grupos de investigación, y también de la industria\nCONTENIDOS: \nSe estudian las arquitecturas, componentes, principios y funciones de los sistemas operativos para dispositivos móviles. Se describen los conceptos de ubicuidad y movilidad del usuario. Se estudian y comparan los principales sistemas operativos móviles como el Android, Linux, BlackBerry OS, Windows Mobile, iphone OS, entre otros. Se desarrolla en forma práctica, la instalación del sistema operativo y se estudian las interfaces de programación y aplicaciones, así como el impacto en el desarrollo de servicios inalámbricos.'),
('Taller de tesis II', 2, 'Taller de tesis I', 4, 'II', '101154', 'Décimo ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de investigación, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, para la elaboración de la tesis universitaria, siguiendo el proceso de la metodología de la investigación científica, Utilizando herramientas informáticas  que le permita reunir, manipular información y tener la literatura correspondiente para preparar y presentar el informe de investigación final (Tesis).\nCONTENIDOS: \nElaboración de Planteamiento de la investigación. Elaboración y desarrollo del marco teórico, Diseño metodológico experimental o no experimental. Desarrollo de la tesis de acuerdo al reglamento de grados y títulos de la Facultad vigente, Análisis, diseño e implementación. Discusión de resultados. Prueba de Hipótesis. Conclusiones y recomendaciones, Bibliografía, Anexos. Presentación del informe final de Tesis a la Escuela Académica Profesional de Ingeniería de Informática y Sistemas como parte del proceso de acreditación de la ESIS.'),
('Práctica pre profesional II', 10, 'Práctica pre profesional I', 8, 'II', '101155', 'Décimo ciclo', 'FAIN', 3, '0', 'ESIS', 'NATURALEZA\nLa asignatura corresponde al área de prácticas de pre-profesionales, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas, está orientado a que los estudiantes ejerzan en la modalidad de práctica dirigida la Profesión, resolviendo problemas o planteando propuestas de solución, aplicando los conocimientos y COMPETENCIA(S)s adquiridas durante su formación (metodologías, métodos, técnicas y herramientas),en instituciones públicas o privadas, que les permitan consolidar lo aprendido y obtener experiencias preliminares, validando de esta manera el logro del perfil Profesional de la carrera. En este nivel, las prácticas se orientarán a la solución de problemas vinculados a las principales áreas de conocimiento e investigación de la Ingeniería en Informática y Sistemas como son: Ingeniería de Software, Sistemas de Información, Base de datos, Redes y Sistemas de telecomunicaciones, Ciencias de la Computación y Gestión de TI.\nCONTENIDOS: \nEl alumno aplica, en un contexto real, la Ciencia y la técnica sobre la cual se sustenta el perfil profesional de la carrera de Ingeniería en Informática y Sistemas. Durante la realización, el alumno define el ámbito de la práctica, consigue la aceptación formal, mediada por una carta de presentación, define el problema a resolver, formula un plan de trabajo( que se constituye en buena cuenta en el plan de la práctica pre-profesional), ejecuta las tareas previstas, empleando las COMPETENCIA(S)s adquiridas, hace los ajustes de acuerdo a la guía de los facilitadores o profesores de taller, presenta avances en las fechas programadas y coordinadas con los facilitadores, presenta la solución en el contexto real y sustenta ante un Jurado el trabajo realizado, el mismo que debe contar con la aceptación de la empresa o institución, ámbito del estudio.'),
('Auditoría de sistemas', 2, 'ninguno', 5, 'II', '101156', 'Décimo ciclo', 'FAIN', 4, '0', 'ESIS', 'NATURALEZA:\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos sobre la auditoría de sistemas.\nCONTENIDOS:\nLa asignatura es teórica y práctica, y se orienta a desarrollar en el alumno habilidades para comprender y aplicar con propiedad los enfoques, técnicas, glosarios y herramientas que se utilizan para definir, diseñar, rediseñar y organizar el control vía informático mediante el uso de computadoras desde el enfoque de la seguridad de la información, sobre el control interno operativo mediante aplicativos de cómputo empresariales. '),
('Electivo III: Robótica', 0, 'ninguno', 5, 'II', '1011E5', 'Décimo ciclo', 'FAIN', 4, '2', 'ESIS', 'NATURALEZA\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas conocimientos, sobre Robótica orientada bajo metodología de proyectos, modelamiento y diseño de estructuras desarrollando diversas etapas del aprendizaje desde la exploración, investigación y resolver, aplicar  los problemas a la ingeniería en informática y sistemas.\nCONTENIDOS:\nIntroducción a la robótica, atributos y morfología de robots, componentes y subsistemas de un robot, cinemática, dinámica y control de  robot, configuración I/O con periféricos, ingeniería de procesos robotizados, automatización de robots, casos de estudios de aplicaciones convencionales robóticas.'),
('Electivo III: Minería de datos', 0, 'ninguno', 5, 'II', '1011E6', 'Décimo ciclo', 'FAIN', 4, '2', 'ESIS', 'NATURALEZA\nLa asignatura corresponde al área de formación especializada, es de carácter teórico-práctica.\nPROPÓSITO U OBJETIVO:\nTiene como propósito brindar al futuro profesional en ingeniería Informática y Sistemas los conceptos básicos y fundamentales de la minería de datos tales como aprendizaje, patrones, conocimiento, modelos y que comprenda y conozca los estándares, las herramientas, las metodologías y el proceso de la minería de datos. \nCONTENIDOS:\nReconocimiento de Patrones, Ejemplos reconocimiento de patrones ( text ),  Introducción a la minería de datos, repaso de estadística descriptiva (data), El proceso de la minería de datos, evaluación del desempeño, entendimiento de los datos, preparación de datos, limpieza de datos, transformación de datos, Modelos de clasificación, construcción de un árbol de decisión, Modelos de regresión.'),
('Seminario de ética y sociedad', 5, 'Ninguno', 4, 'I', '011101', 'Primer ciclo', 'FAIN', 4, '3', 'ESIS', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_competencia`
--

CREATE TABLE IF NOT EXISTS `banco_competencia` (
  `cod_competencia` int(5) NOT NULL AUTO_INCREMENT,
  `competencia` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_competencia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `banco_competencia`
--

INSERT INTO `banco_competencia` (`cod_competencia`, `competencia`) VALUES
(1, 'Inspira confianza en un grupo, lo guía hacia el logro de una visión compartida y genera en ese proceso desarrollo personal y social.'),
(3, 'Trabaja en cooperación con otros de manera coordinada, supera conflictos y utiliza sus habilidades en favor de objetivos comunes.'),
(4, 'Intercambia información a través de diversas formas de expresión y asegura la comprensión mutua del mensaje.'),
(5, 'Asegura que sus acciones producirán un impacto general positivo en la sociedad y en la promoción y protección de los derechos humanos.'),
(6, 'Analiza e Interpreta, en contextos específicos, argumentos o proposiciones. Evalúa y argumenta juicios de valor.'),
(7, 'Busca, identifica, evalúa, extrae y utiliza eficazmente información contenida en diferentes fuentes para satisfacer una necesidad personal de nuevo conocimiento.'),
(8, 'Reconoce y comprende un problema, diseña e implementa un proceso de solución y evalúa su impacto.'),
(9, 'Transforma ideas en oportunidades y acciones concretas de creación de valor para la organización y la sociedad.'),
(10, 'Conoce el trabajo en el laboratorio, el uso de la instrumentación, tecnología y métodos experimentales más utilizados, adquiriendo la habilidad y experiencia para realizar experimentos de forma independiente. '),
(17, 'Observa, cataloga y modela los fenómenos de la naturaleza.'),
(11, 'Adquiere una sólida base teórica, matemática y numérica, que permita la aplicación de la Física a la solución de problemas complejos mediante modelos sencillos.'),
(12, 'Desarrolla una clara percepción de situaciones aparentemente diferentes pero que muestran evidentes analogías físicas, lo que permite la aplicación de soluciones conocidas a nuevos problemas.'),
(13, 'Desarrolla la habilidad de identificar los elementos esenciales de un proceso o una situación compleja que le permita construir un modelo simplificado que describa, con la aproximación necesaria, el objeto de estudio y permita realizar predicciones sobre su evolución futura.'),
(14, 'Conoce las posibilidades de aplicar la Física en el mundo laboral, docente y de investigación, desarrollo tecnológico e innovación y en las actividades de emprendeduría.'),
(15, 'Observa fenómenos naturales y realiza experimentos científicos.'),
(16, 'Desarrolla una visión panorámica de la Física actual y sus aplicaciones.'),
(18, 'Diferencia la ciencia de sistemas, Informática y Computación, expresando mediante un algoritmo computacional, un modelo matemático y el diseño correspondiente del diagrama de flujo y codifica en un lenguaje de programación para resolver las aplicaciones por micro-computadora.'),
(19, 'Conoce los sistemas, tipos de datos y los códigos que se utilizan en la ciencia de la computación.'),
(20, 'Identifica los diferentes recursos necesarios para el desarrollo de páginas web desde una perspectiva actual.'),
(21, 'Analiza, abstrae, crea y diseña algoritmos computacionales orientados a resolver problemas mediante el uso del ordenador.'),
(22, 'Optimiza el desempeño de los algoritmos usando la recursividad en los procesos.'),
(23, 'Aplica técnicas de análisis de algoritmos para estructurar datos en memoria del ordenador. Planea y diseña experiencias y actividades traducidas en algoritmos que luego implementa mediante la Programación Orientada a Objetos.'),
(24, 'Proporcionar un soporte matemático que permita construir estructuras de razonamiento normal para aplicar al análisis de procesos informáticos.'),
(25, 'Aplicar las relaciones y grafos dirigidos y teoría de árboles a la informática y a una solución de problemas básicos.'),
(26, 'Adquiere un soporte matemático que le permitirá construir estructuras de razonamiento formal que podrá aplicar el análisis de procesos matemáticos en el diseño y construcción de modelos recursivos que conduzcan a la instrumentación en sistemas de flujo de información para aplicarlas a la elaboración futura de algoritmos informáticos.'),
(27, 'Resuelve y formula problemas de la vida real cuya solución requiera del cálculo diferencial, argumentando con seguridad, los procesos empleados y comunicándolos en lenguaje matemático.'),
(28, 'Resuelve ecuaciones e inecuaciones. Reconoce y grafica las cónicas. Determina el dominio y rango de una función y desarrolla limites y derivadas de funciones.'),
(29, 'Resuelve ecuaciones e inecuaciones lineales, cuadráticas, polinómicas, fraccionarias, con radicales y valor absoluto utilizando propiedades del sistema de los números reales.'),
(30, 'Reconoce y grafica las cónicas (la recta, circunferencia, parábola, elipse y la hipérbola) a partir de una ecuación de segundo grado.'),
(31, 'Identifica el concepto de límite de una función y calcula la derivada de una función utilizando propiedades.'),
(32, 'Resuelve problemas de aplicaciones del cálculo diferencial; grafica y establece las características de las superficies cuádricas; aplica las funciones de varias variables para resolver problemas de optimización mediante las derivadas parciales.'),
(33, 'Desarrolla habilidades que le ayudarán a comunicarse en forma adecuada, durante su estancia universitaria, así como profesional y miembro de una sociedad participativa.'),
(34, 'Muestra y pone en práctica las diferentes técnicas de comunicación y expresión de las ideas, plasmándolas en forma correcta de manera oral y escrita.'),
(35, 'Conoce diversos formatos de comunicación escrita y domina su redacción.'),
(36, 'Conoce diversos formatos de comunicación oral y los aplica en exposiciones claras y concretas.'),
(37, 'Establece estrategias de comunicación escrita profesional.'),
(38, 'Establece estrategias de comunicación oral profesional.'),
(39, 'Produce textos con cohesión, coherencia, propiedad y corrección, aplicando las reglas para el uso correcto de la ortografía y de los signos de puntuación, manifestando satisfacción por el correcto empleo de la lengua escrita.'),
(40, 'Interpreta y valora los textos denotativos y connotativos identificando las ideas principales y secundarias, mejorando su comprensión y corrección lectora, y demostrando aprecio por la lectura.'),
(41, 'Organiza y aplica las estrategias de estudio - aprendizaje, útiles a su formación académica - profesional.'),
(42, 'Identifica sus propios hábitos y velocidad de lectura y pone en práctica las técnicas que le permiten adquirir mayor rapidez y comprensión.'),
(43, 'Maneja las técnicas de señalización de textos, elaboración de resúmenes y el fichaje.'),
(44, 'Identifica las características del trabajo en equipo y sus principales modalidades.'),
(45, 'Diferencia los conocimientos ordinarios, científicos y tecnológicos así como otras formas de expresiones culturales.'),
(46, 'Realiza una investigación monográfica en el marco del método científico.'),
(47, 'Explica y analiza los conceptos fundamentales del origen y desarrollo de la ética y la moral en las distintas sociedades y momentos de la historia de la humanidad.'),
(48, 'Explica, analiza y cuestiona el comportamiento ético y moral, llegando a reflexionar acerca del quehacer de las profesiones frente al bien común y los valores para hacer una opción fundamental.'),
(49, 'Identifica, explica y asume coherentemente los principios éticos en relación con la tecnología y la sociedad.'),
(50, 'Explica el origen y desarrollo de la ética y moral en las culturas y momentos de la historia.'),
(51, 'Identifica y diferencia las conceptualizaciones de ética, valor moral, razón y libertad.'),
(52, 'Identifica las características y practica valores en las acciones del quehacer diario.'),
(53, 'Analiza las fortalezas de cada estudiante para mejorar en su aspecto personal.'),
(54, 'Determina y analiza el objeto de estudio de la ética profesional.'),
(55, 'Identifica los principios éticos de la deontología que engloban al profesional, al cliente y a la sociedad.'),
(56, 'Identifica, analiza y discute la presencia de valores en la actividad profesional de las ciencias, el arte y la cultura.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_estrategia`
--

CREATE TABLE IF NOT EXISTS `banco_estrategia` (
  `codigo_estrategia` int(5) NOT NULL AUTO_INCREMENT,
  `estrategia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo_estrategia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `banco_estrategia`
--

INSERT INTO `banco_estrategia` (`codigo_estrategia`, `estrategia`) VALUES
(1, 'Discusión guiada'),
(2, 'Planteo de situaciones y problemas'),
(4, 'Gráficas'),
(5, 'Preguntas intercaladas'),
(6, 'Organizadores graficos'),
(7, 'Juegos'),
(8, 'Cuestionarios'),
(9, 'Resumenes'),
(10, 'Ilustraciones'),
(11, 'Analogías'),
(12, 'Exposiciones'),
(13, 'Interacción con la realidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia_asignatura`
--

CREATE TABLE IF NOT EXISTS `competencia_asignatura` (
  `cod_competencia` int(2) NOT NULL,
  `cod_asignatura` varchar(18) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `competencia_asignatura`
--

INSERT INTO `competencia_asignatura` (`cod_competencia`, `cod_asignatura`) VALUES
(10, '011102'),
(11, '011102'),
(12, '011102'),
(13, '011102'),
(14, '011102'),
(15, '011102'),
(16, '011102'),
(17, '011103'),
(18, '011103'),
(19, '011103'),
(20, '011103'),
(21, '011103'),
(22, '011103'),
(23, '011103'),
(24, '011104'),
(25, '011104'),
(26, '011104'),
(27, '011105'),
(28, '011105'),
(29, '011105'),
(30, '011105'),
(31, '011105'),
(32, '011105'),
(33, '011106'),
(34, '011106'),
(35, '011106'),
(36, '011106'),
(37, '011106'),
(38, '011106'),
(39, '011106'),
(40, '011106'),
(41, '011107'),
(42, '011107'),
(43, '011107'),
(44, '011107'),
(45, '011107'),
(46, '011107'),
(47, '011101'),
(48, '011101'),
(49, '011101'),
(50, '011101'),
(51, '011101'),
(52, '011101'),
(53, '011101'),
(54, '011101'),
(55, '011101'),
(56, '011101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia_silabo`
--

CREATE TABLE IF NOT EXISTS `competencia_silabo` (
  `cod_silabo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cod_competencia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_silabo`,`cod_competencia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dicta`
--

CREATE TABLE IF NOT EXISTS `dicta` (
  `cod_asignatura` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `interno_docente` int(11) NOT NULL,
  `fecha_limite` date DEFAULT NULL,
  `fecha_dicta` date NOT NULL,
  `observaciones` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cod_asignatura`,`interno_docente`),
  KEY `R_2` (`interno_docente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dicta`
--

INSERT INTO `dicta` (`cod_asignatura`, `interno_docente`, `fecha_limite`, `fecha_dicta`, `observaciones`) VALUES
('011101', 7, '2017-06-10', '2017-06-10', 'ninguna'),
('011101', 3, '2017-06-10', '2017-06-10', 'ninguna'),
('011101', 6, '2017-06-10', '2017-06-10', 'ninguna'),
('021114', 6, '2017-06-10', '2017-06-10', 'ninguna'),
('011105', 7, '2017-06-10', '2017-06-10', 'ninguna'),
('031115', 1, '2017-06-22', '2017-06-10', 'ninguna'),
('031116', 4, '2017-06-10', '2017-06-10', 'ninguna'),
('011105', 3, '2017-06-16', '2017-06-10', 'ninguna'),
('011102', 1, '2017-06-11', '2017-06-11', 'ninguna'),
('021111', 4, '2017-06-11', '2017-06-11', 'ninguna'),
('011102', 2, '2017-06-22', '2017-06-16', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `Cod_docente` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interno_docente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fnacimiento` date DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono_docente` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ruta_imagen` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`interno_docente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`Cod_docente`, `interno_docente`, `nombre`, `apellido`, `dni`, `direccion`, `tipo`, `email`, `fnacimiento`, `password`, `telefono_docente`, `ruta_imagen`) VALUES
('EHinojosa', 1, 'Edwin', 'Hinojosa', '71562094', 'Av. Ejército #205', 'docente', 'ehr65@gmail.com', '1965-05-21', 'EHinojosa', '931235685', ''),
('GMalaga', 2, 'Gianfranco', 'MálagaS', '78410050', 'Alfonso ugarte Lte 3', 'admin', 'fmt59@gmail.com', '1959-04-11', 'GMalaga', '784512325', 'imagenes/GMalagaFoto-perfi.jpg'),
('ACori', 3, 'Ana', 'Cori', '74300057', 'Urb. Nardos A-2', 'docente', 'cori12@gmail.com', '1968-06-04', 'ACori', '454545123', ''),
('MBarraza', 4, 'Manuel Hugo', 'Barrazass', '78950300', 'Villa hermosa N-21', 'docente', 'barraza28@gmail.com', '1985-01-28', 'MBarraza', '052111222', ''),
('KSupo', 5, 'Karin', 'Supo', '68510255', 'Calle grau #303', 'docente', 'karin_supo@gmail.com', '1972-02-22', 'KSupo', '123456789', ''),
('ETaya', 6, 'Edgar', 'Taya', '51258745', 'Urb. Zela 6565', 'docente', 'Taya70@gmail.com', '1970-06-20', 'ETaya', '996584214', ''),
('MGauna', 7, 'Mario', 'Gauna', '70156884', 'Av Cuzco N-4', 'docente', 'gaunaunjbg@gmail.com', '1966-04-15', 'MGauna', '956321478', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edita`
--

CREATE TABLE IF NOT EXISTS `edita` (
  `cod_silabo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `interno_docente` int(11) NOT NULL,
  `fecha_edit` date DEFAULT NULL,
  PRIMARY KEY (`cod_silabo`,`interno_docente`),
  KEY `R_4` (`interno_docente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrategia_silabo`
--

CREATE TABLE IF NOT EXISTS `estrategia_silabo` (
  `cod_silabo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_estrategia` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `silabo`
--

CREATE TABLE IF NOT EXISTS `silabo` (
  `cod_silabo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `datos_inf` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capacidades` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evaluacion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `competencias` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prog_contenido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estrategia_dinamica` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sumilla_silabo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `archivo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_silabo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `silabo`
--

INSERT INTO `silabo` (`cod_silabo`, `datos_inf`, `capacidades`, `evaluacion`, `competencias`, `prog_contenido`, `estrategia_dinamica`, `descripcion`, `sumilla_silabo`, `archivo`) VALUES
('se00114', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seminariodeetica14.pdf'),
('an00214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AnalisisdesistemasII14.pdf'),
('au00314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Auditoriadesistemas14.pdf'),
('el00414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Electromagnetismoyoptica14.pdf'),
('es00514', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Estadistica14.pdf'),
('es00614', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Estadistica214.pdf'),
('fi00714', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fisicageneral14.pdf'),
('fi00814', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fisicageneral214.pdf'),
('fi00914', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fisicamoderna14.pdf'),
('fi01014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fisicamoderna214.pdf'),
('fo01114', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Formulaciondeproyectos14.pdf'),
('fu01214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fundamentosdeprogramacion14.pdf'),
('in01314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ingenieriadesoftware14.pdf'),
('in01414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ingenieriadesoftware214.pdf'),
('in01514', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ingenieriaeconomica14.pdf'),
('le01614', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lenguaje14.pdf'),
('ma01714', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MateII14.pdf'),
('ma01814', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MatematicadiscretaI14.pdf'),
('ma01914', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MatematicadiscretaII14.pdf'),
('ma02014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MatematicaI14.pdf'),
('ma02114', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MatematicaI214.pdf'),
('ma02314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MatematicaIV14.pdf'),
('me02414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Metodologiadelainvestigacion14.pdf'),
('me02514', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Metodosnumericos14.pdf'),
('al02614', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Algoritmosyprogramacionparalela14.pdf'),
('re02714', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Realidadnacional14.pdf'),
('re02814', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Redes14.pdf'),
('si02914', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sistemasdeinformacion14.pdf'),
('si03014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sistemasoperativos14.pdf'),
('te03114', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teoriageneraldesistemas14.pdf'),
('te03214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teoriageneraldesistemas214.pdf'),
('te03314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TesisI14.pdf'),
('ma02214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MatematicaIII14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usa`
--

CREATE TABLE IF NOT EXISTS `usa` (
  `cod_silabo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_uso` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cod_silabo`,`cod_asignatura`),
  KEY `R_7` (`cod_asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usa`
--

INSERT INTO `usa` (`cod_silabo`, `cod_asignatura`, `fecha_uso`) VALUES
('an00214', '051127', '2014'),
('el00414', '021109', '2014'),
('es00514', '031120', '2014'),
('es00614', '031120', '2014'),
('fi00714', '011102', '2014'),
('fi00814', '011102', '2014'),
('fi00914', '031116', '2014'),
('fi01014', '031116', '2014'),
('fo01114', '061138', '2014'),
('fu01214', '011103', '2014'),
('in01314', '061133', '2014'),
('in01414', '061133', '2014'),
('in01514', '051132', '2014'),
('le01614', '011106', '2014'),
('ma01714', '021112', '2014'),
('ma01814', '011104', '2014'),
('ma01914', '021111', '2014'),
('ma02014', '011105', '2014'),
('ma02114', '011105', '2014'),
('ma02214', '031119', '2014'),
('ma02314', '041125', '2014'),
('me02414', '021108', '2014'),
('me02514', '031118', '2014'),
('al02614', '041123', '2014'),
('re02714', '021114', '2014'),
('se00114', '011101', '2014'),
('si02914', '071141', '2014'),
('si03014', '051129', '2014'),
('te03114', '031115', '2014'),
('te03214', '031115', '2014'),
('te03314', '091150', '2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
