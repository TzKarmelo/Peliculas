-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-12-2022 a las 22:55:34
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ifcd02110`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tmdb_id` varchar(20) NOT NULL,
  `titulo` text NOT NULL,
  `imagen` longblob,
  `estado` enum('A','D','B') NOT NULL COMMENT 'A-activo D-desactivado  B-Borrar',
  `estreno` date NOT NULL,
  `overview` text NOT NULL,
  `opinion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `tmdb_id`, `titulo`, `imagen`, `estado`, `estreno`, `overview`, `opinion`) VALUES
(1, '120', 'El seÃ±or de los anillos: La comunidad del anillo', 0x696d672f3132302e6a7067, 'A', '2001-12-18', 'En la Tierra Media, el SeÃ±or Oscuro SaurÃ³n creÃ³ los Grandes Anillos de Poder, forjados por los herreros Elfos. Tres para los reyes Elfos, siete para los SeÃ±ores Enanos, y nueve para los Hombres Mortales. Secretamente, SaurÃ³n tambiÃ©n forjÃ³ un anillo maestro, el Anillo Ãšnico, que contiene en sÃ­ el poder para esclavizar a toda la Tierra Media. Con la ayuda de un grupo de amigos y de valientes aliados, Frodo emprende un peligroso viaje con la misiÃ³n de destruir el Anillo Ãšnico. Pero el SeÃ±or Oscuro Sauron, quien creara el Anillo, envÃ­a a sus servidores para perseguir al grupo. Si Sauron lograra recuperar el Anillo, serÃ­a el final de la Tierra Media.', NULL),
(2, '40027', 'Ninja terminator', 0x696d672f34303032372e6a7067, 'A', '1985-01-01', 'El lÃ­der Master Ninja enseÃ±a a su pequeÃ±o grupo de ninjas elitistas los poderes del Golden Ninja Warrior, una estatuilla compuesta por tres piezas doradas que unidas entre sÃ­ ofrecen un poder absoluto a quien las fusiona, pero rÃ¡pidamente es robada por los Red Ninjas, un grupo malvado que quiere dominar oriente a cualquier precio.', NULL),
(4, '296', 'Terminator 3: La rebeliÃ³n de las mÃ¡quinas', 0x696d672f3239362e6a7067, 'A', '2003-07-02', 'Ha pasado una dÃ©cada desde que John Connor salvara a la humanidad de la destrucciÃ³n. En la actualidad John tiene 25 aÃ±os y vive en la clandestinidad: no hay ninguna prueba documental de su existencia. AsÃ­ evita ser rastreado por Skynet, la sofisticada corporaciÃ³n de mÃ¡quinas que una vez intentÃ³ acabar con su vida. Pero, ahora, desde el futuro, ha sido enviado el T-X, la mÃ¡quina destructora cyborg mÃ¡s desarrollada de Skynet. Su misiÃ³n es completar el trabajo que no pudo terminar su predecesor, el T-1000. El T-X es una mÃ¡quina tan implacable como bello su aspecto humano. Ahora la Ãºnica esperanza de sobrevivir para Connnor es Terminator.', NULL),
(5, '280', 'Terminator 2: El juicio final', 0x696d672f3238302e6a7067, 'A', '1991-07-03', 'Ha pasado once aÃ±os desde que Sarah Connor fue marcada como objetivo para ser eliminada por un cyborg del futuro. Ahora su hijo John, el futuro lÃ­der de la resistencia, es el objetivo de un Terminator mÃ¡s moderno, mÃ¡s mortÃ­fero. Una vez mÃ¡s, la resistencia se las ha ingeniado para enviar un protector de vuelta al pasado para intentar salvar a John y a su madre Sarah.', NULL),
(7, '473793', 'The Making of \'Terminator 2: Judgment Day\'', 0x696d672f3437333739332e6a7067, 'A', '1991-01-01', '', NULL),
(8, '17692', 'TiburÃ³n 3', 0x696d672f31373639322e6a7067, 'A', '1983-07-22', 'Â¿Te imaginas quedar atrapado en un parque acuÃ¡tico con un gigantesco tiburÃ³n blanco asesino? La tercera parte de la clÃ¡sica saga de terror harÃ¡ que pienses dos veces antes de ir a un parque acuÃ¡tico.', NULL),
(10, '13475', 'Star Trek', 0x696d672f31333437352e6a7067, 'A', '2009-05-06', 'Todo estÃ¡ preparado para el viaje inaugural de la nave mÃ¡s moderna que jamÃ¡s se haya creado: la USS Enterprise. Su joven tripulaciÃ³n tiene una importante misiÃ³n: encontrar una manera de detener al malvado Nero que, movido por la venganza, amenaza a toda la humanidad. Pero el destino de la galaxia estÃ¡ en manos de dos jÃ³venes rivales, que nacieron en mundos diferentes. Uno de ellos, Tiberius James Kirk, humano, busca emociones y es un lÃ­der nato. El otro, Spock, medio humano y medio vulcaniano, es menospreciado por los vulcanianos, por sus emociones humanas.', NULL),
(11, '637', 'La vida es bella', 0x696d672f3633372e6a7067, 'A', '1997-12-20', 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo, en la Toscana, con la intenciÃ³n de abrir una librerÃ­a. AllÃ­ conoce a la encantadora Dora y, a pesar de que es la prometida del fascista Rodolfo, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido harÃ¡ lo imposible para hacer creer a su hijo que la terrible situaciÃ³n que estÃ¡n padeciendo es tan sÃ³lo un juego.', NULL),
(12, '576605', 'Mortal Kombat 04 - Terminator', 0x696d672f3537363630352e6a7067, 'A', '1998-10-03', 'Nos llega una nueva entrega basada en el video-juego â€œMortal Kombatâ€, Mortal Kombat Terminator, en la que los tres amigos Kung Lao (Paolo Montalban), Taja ( Kristinna Loken) y Siro ( Daniel Bernhardt) tendrÃ¡n que descubrir los a los impostores que Kung Lao les manda para ganarse su confianza y asÃ­ poder vencerlos. Per Kung Lao no puede contar con la gran amistas que les une.', NULL),
(13, '1895', 'La guerra de las galaxias. Episodio III: La venganza de los Sith', 0x696d672f313839352e6a7067, 'A', '2005-05-17', 'Ãšltimo capÃ­tulo de la saga de Star Wars, en el que Anakin Skywalker definitivamente se pasa al lado oscuro. En el Episodio III aparecerÃ¡ el General Grievous, un ser implacable mitad-alien mitad-robot, el lÃ­der del ejÃ©rcito separatista Droid. Los Sith son los amos del lado oscuro de la Fuerza y los enemigos de los Jedi. Ellos fueron prÃ¡cticamente exterminados por los Jedi hace mil aÃ±os, pero la orden del mal sobreviviÃ³ en la clandestinidad.', NULL),
(14, '222148', 'Terminator: Salvation The Machinima Series', 0x696d672f3232323134382e6a7067, 'A', '2009-05-18', '', NULL),
(15, '303857', 'Dragon Ball Z: La resurrecciÃ³n de Freezer', 0x696d672f3330333835372e6a7067, 'A', '2015-04-18', 'DespuÃ©s de que Bills, el Dios de la destrucciÃ³n, decidiera no destruir la Tierra, se vive una gran Ã©poca de paz. Hasta que Sorbet y Tagoma, antiguos miembros Ã©lite de la armada de Freezer, llegan a la Tierra con el objetivo de revivir a su lÃ­der por medio de las Bolas de DragÃ³n. Su deseo es concedido y ahora Freezer planea su venganza en contra de los Saiyajin. La historia hace que una gran oleada de hombres bajo el mando de Freezer lo acompaÃ±e.', NULL),
(16, '56029', 'ãƒ‰ãƒªãƒ•ãƒˆï¼—ã€€-ï¼²-', 0x696d672f35363032392e6a7067, 'A', '2008-07-04', '', NULL),
(17, '651', 'M.A.S.H.', 0x696d672f3635312e6a7067, 'A', '1970-02-18', 'M.A.S.H. narra las aventuras de dos cirujanos del ejÃ©rcito destinados a una unidad mÃ³vil mÃ©dica en Corea durante la guerra. Tanto ellos como su equipo de enfermeras se toman el trabajo muy en serio pero, en su tiempo libre, las bromas constantes y la ironÃ­a hacen mÃ¡s llevadera la situaciÃ³n.', NULL),
(18, '599521', 'Z-O-M-B-I-E-S 2', 0x696d672f3539393532312e6a7067, 'A', '2020-06-13', 'Zed y Addison estÃ¡n de vuelta en Seabrook High, donde, despuÃ©s de un semestre innovador, continÃºan dirigiendo su escuela y su comunidad hacia la unidad. Pero la llegada de un nuevo grupo de forasteros, misteriosos hombres lobo, amenaza con sacudir la paz reciÃ©n descubierta y provoca una grieta en el incipiente romance de Zed y Addison.', NULL),
(19, '420821', 'Chip y Chop: Los guardianes rescatadores', 0x696d672f3432303832312e6a7067, 'A', '2022-05-20', 'Treinta aÃ±os despuÃ©s, las estrellas de las series de animaciÃ³n de Disney de los aÃ±os 1990, Chip y Chop, viven en Los Ãngeles entre dibujos animados y humanos. Chip lleva una vida rutinaria y hogareÃ±a como vendedor de seguros, mientras que Chop se ha hecho la cirugÃ­a 3D y se dedica a explotar la nostalgia de convenciÃ³n en convenciÃ³n, desesperado por revivir sus dÃ­as de gloria. Cuando un antiguo compaÃ±ero de reparto desaparece misteriosamente, Chip y Chop se ven obligados a recuperar la amistad perdida y a hacer de detectives una vez mÃ¡s como Guardianes Rescatadores para salvar a su amigo.', NULL),
(20, '50300', 'La gran pelÃ­cula de Ed, Edd y Eddy', 0x696d672f35303330302e6a7067, 'A', '2009-11-08', 'Eddy se ha pasado esta vez y ha gastado una broma que tiene a toda la pandilla del vecindario tras Ã©l. Solo puede salvarle una persona, su hermano mayor que nunca ha visto.', NULL),
(21, '650', 'Los chicos del barrio', 0x696d672f3635302e6a7067, 'A', '1991-07-12', 'Sorprendente debut del jovencÃ­simo John Singleton -nominado al Oscar al mejor director con sÃ³lo 21 aÃ±os- en un drama que cuenta la historia de tres amigos de la infancia que viven en un peligroso barrio de Los Ãngeles. Los tres deberÃ¡n enfrentarse a difÃ­ciles dilemas para abrirse camino en la vida.', NULL),
(22, '13652', 'Cash', 0x696d672f31333635322e6a7067, 'A', '2008-04-23', 'Cash es un estafador que lo tiene todo: encanto, elegancia, atrevimiento... y hasta apego a la familia. Por eso cuando a su hermano le quita la vida un mal perdedor Cash decide vengarle a su manera: sin armas ni violencia, con estilo. Pero tampoco es momento de dar ningÃºn golpe: Cash estÃ¡ a punto de conocer a su futuro suegro y su pandilla estÃ¡ vigiladÃ­sima por la policÃ­a. TendrÃ¡ pues que arreglÃ¡rselas para hacer de &quot;yerno ejemplar&quot; y montar un golpe por todo lo alto sin despertar sospechas. Ya que cualquier estafador, por hÃ¡bil que sea, acaba midiÃ©ndose con otro que le supera. Cuando las cosas se ponen feas, todo el mundo miente, inventa o se hace pasar por otra persona, los cÃ³mplices pasan a traidores y los traidores a cÃ³mplices. Lo Ãºnico cierto es que al final siempre aparece algÃºn palomo...', NULL),
(23, '1375', 'Rocky V', 0x696d672f313337352e6a7067, 'A', '1990-11-16', 'Rocky vuelve de Rusia tras su pelea contra Ivan Drago para encontrarse con que ha perdido casi toda su fortuna. AdemÃ¡s, el boxeo le ha dejado ciertas secuelas que fuerzan su retiro. Para lograr salir de la bancarrota Rocky subasta sus cosas y le jura a su hijo que lo va a recuperar todo. Sin mÃ¡s opciones, los Balboa vuelven a su antiguo barrio y a vivir de nuevo en la antigua casa de su mujer con pocos recursos. Un boxeador, llamado Union Cane, gana el tÃ­tulo vacante.', NULL),
(24, '11421', 'C.R.A.Z.Y.', 0x696d672f31313432312e6a7067, 'A', '2005-05-27', 'Drama familiar. Cuando Zach entra en la adolescencia y descubre que es diferente a los demÃ¡s, reprimirÃ¡ sus tendencias mÃ¡s profundas para no perder el amor de su padre. Entre 1960 y 1980, vive rodeado de sus hermanos, de Pink Floyd y los Rolling Stones, los porros fumados a escondidas, las grandes y pequeÃ±as discusiones. Pero, sobre todo, lo que Zac busca es poder mantener la relaciÃ³n con su padre.', NULL),
(25, '9257', 'S.W.A.T.: Los hombres de Harrelson', 0x696d672f393235372e6a7067, 'A', '2003-08-08', 'Basada en la popular serie de televisiÃ³n de los aÃ±os setenta &quot;Los hombres de Harrelson&quot;. En su versiÃ³n cinematogrÃ¡fica Jim Street (Colin Farrell) es un agente de policÃ­a de Los Ãngeles que busca desesperadamente una oportunidad para vestir el uniforme del cuerpo de Ã©lite S.W.A.T. (Special Weapons and Tacticts Unit). La ocasiÃ³n llega cuando Hondo (Jackson), el jefe del comando, recibe la orden de reclutar a cinco policÃ­as para el cuerpo. Tras semanas de riguroso entrenamiento, el nuevo equipo entra inmediatamente en acciÃ³n: un notorio capo de la droga (Olivier Martinez) ofrece cien millones de dÃ³lares a quien lo libere del control policial. Mientras custodia al detenido, el equipo S.W.A.T. es perseguido por una implacable y bien armada banda de mercenarios.', NULL),
(26, '768726', 'D\'ArtacÃ¡n y los tres mosqueperros', 0x696d672f3736383732362e6a7067, 'A', '2021-06-25', 'Francia, siglo XVII, bajo el reinado de Luis XIII. D\'ArtacÃ¡n es un impetuoso e inocente campesino de GascuÃ±a, amÃ©n de un habilidoso espadachÃ­n, que viaja a ParÃ­s con el propÃ³sito de hacer realidad su sueÃ±o: ingresar en el Cuerpo de Mosqueperros de la Guardia Real.', NULL),
(27, '50426', 'Noches de Cleopatra', 0x696d672f35303432362e6a7067, 'A', '1954-02-04', 'Nisca, una bella esclava, es confundida por un guardia con Cleopatra, por su extraordinario parecido fÃ­sico a la reina.', NULL),
(28, '7555', 'John Rambo', 0x696d672f373535352e6a7067, 'A', '2008-01-24', 'John Rambo, el ex-boina verde con una ajetreada vida marcada por la guerra, vive ahora una solitaria y apacible existencia en la jungla del norte de Tailandia, pescando y cazando cobras para luego venderlas. Todo cambia cuando un grupo de misioneros catÃ³licos necesita que les guÃ­e hasta la frontera con Birmania para suministrar medicinas y alimentos a unos refugiados asediados por el ejÃ©rcito birmano, que ha hecho de las torturas y los asesinatos algo habitual. Rambo no tendrÃ¡ mÃ¡s remedio que volver a involucrarse. Se verÃ¡ obligado a hacer lo que mejor sabe porque, muy a su pesar, lleva la guerra en la sangre.', NULL),
(29, '1366', 'Rocky', 0x696d672f313336362e6a7067, 'A', '1976-11-21', 'Rocky Balboa es un desconocido boxeador a quien se le ofrece la posibilidad de pelear por el tÃ­tulo mundial de los pesos pesados. Con mucha fuerza de voluntad, Rocky se prepararÃ¡ concienzudamente para este combate, y tambiÃ©n para los cambios que producirÃ¡ en su vida.', NULL),
(30, '503718', 'T2: Reprogramming The Terminator', 0x696d672f3530333731382e6a7067, 'A', '2017-11-23', '', NULL),
(31, '671', 'Harry Potter y la piedra filosofal', 0x696d672f3637312e6a7067, 'A', '2001-11-16', 'Harry Potter es un huÃ©rfano que vive con sus desagradables tÃ­os, los Dursley, y su repelente primo Dudley. Se acerca su undÃ©cimo cumpleaÃ±os y tiene pocas esperanzas de recibir algÃºn regalo, ya que nunca nadie se acuerda de Ã©l. Sin embargo, pocos dÃ­as antes de su cumpleaÃ±os, una serie de misteriosas cartas dirigidas a Ã©l y escritas con una estridente tinta verde rompen la monotonÃ­a de su vida: Harry es un mago y sus padres tambiÃ©n lo eran.', NULL),
(32, '767', 'Harry Potter y el misterio del prÃ­ncipe', 0x696d672f3736372e6a7067, 'A', '2009-07-07', 'En medio de los desastres que azotan a Inglaterra, Harry y sus compaÃ±eros vuelven a Hogwarts para cursar su sexto aÃ±o de estudios; y aunque las medidas de seguridad han convertido al colegio en una fortaleza, algunos estudiantes son vÃ­ctimas de ataques inexplicables. Harry sospecha que Draco Malfoy es el responsable de los mismos y decide averiguar la razÃ³n. Mientras tanto, Albus Dumbledore y el protagonista exploran el pasado de Lord Voldemort mediante recuerdos que el director ha recolectado. Con esto, Dumbledore planea preparar al muchacho para el dÃ­a de la batalla final.', NULL),
(33, '674', 'Harry Potter y el cÃ¡liz de fuego', 0x696d672f3637342e6a7067, 'A', '2005-11-16', 'En el cuarto aÃ±o en Hogwarts, Harry se enfrenta al mayor de los desafÃ­os y peligros de la saga. Cuando es elegido bajo misteriosas circunstancias como el competidor que representarÃ¡ a Hogwarts en el Torneo Triwizard, Harry deberÃ¡ competir contra los mejores jÃ³venes magos de toda Europa. Pero mientras se prepara, aparecen pruebas que manifiestan que Lord Voldemort ha regresado. Antes de darse cuenta, Harry no solo estarÃ¡ luchando por el campeonato sino tambiÃ©n por su vida', NULL),
(34, '672', 'Harry Potter y la cÃ¡mara secreta', 0x696d672f3637322e6a7067, 'A', '2002-11-13', 'Harry regresa a su segundo aÃ±o a Hogwarts, pero descubre que cosas malas ocurren debido a que un sitio llamado la CÃ¡mara de los Secretos ha sido abierto por el heredero de Slytherin y harÃ¡ que los hijos de muggles, los impuros, aparezcan petrificados misteriosamente por un animal monstruoso.', NULL),
(35, '12445', 'Harry Potter y las Reliquias de la Muerte - Parte 2', 0x696d672f31323434352e6a7067, 'A', '2011-07-07', 'La segunda parte de la batalla final entre las fuerzas del bien y el mal. El juego nunca ha sido tan peligroso y nadie estÃ¡ a salvo. Se acerca el momento de la confrontaciÃ³n final entre Harry Potter y Lord Voldemort. Todo termina aquÃ­â€¦', NULL),
(36, '12444', 'Harry Potter y las Reliquias de la Muerte - Parte 1', 0x696d672f31323434342e6a7067, 'A', '2010-10-06', 'Una tarea casi imposible cae sobre los hombros de Harry: deberÃ¡ encontrar y destruir los horrocruxes restantes para dar fin al reinado de Lord Voldemort. En el episodio final de la saga, el hechicero de 17 aÃ±os parte junto con sus amigos Hermione Granger y Ron Weasley en un peligroso viaje por Inglaterra para encontrar los objetos que contienen los fragmentos del alma del SeÃ±or Tenebroso, los cuales garantizan su longevidad. Pero el camino no serÃ¡ fÃ¡cil pues el lado oscuro adquiere mÃ¡s poder con cada minuto que pasa y las lealtades serÃ¡n puestas a prueba. Harry deberÃ¡ usar todos los conocimientos que gracias a Dumbledore ha adquirido sobre su enemigo para poder encontrar la forma de sobrevivir a esta Ãºltima aventura.', NULL),
(37, '673', 'Harry Potter y el prisionero de Azkaban', 0x696d672f3637332e6a7067, 'A', '2004-05-31', 'Harry estÃ¡ deseando que termine el verano para comenzar un nuevo curso en Hogwarts, y abandonar lo antes posible la casa de sus despreciables tÃ­os, los Dursley. Lo que desconoce Harry es que va a tener que abandonar Privet Drive antes de tiempo e inesperadamente despuÃ©s de convertir a su tÃ­a Marge en un globo gigante. Un autobÃºs noctÃ¡mbulo, y encantado por supuesto, le llevarÃ¡ a la taberna El Caldero Chorreante, donde le espera nada menos que Cornelius Fudge, el Ministro de Magia.', NULL),
(38, '899082', 'Harry Potter, 20Âº Aniversario: Regreso a Hogwarts', 0x696d672f3839393038322e6a7067, 'A', '2022-01-01', 'Daniel Radcliffe, Rupert Grint y Emma Watson se unen al cineasta Chris Columbus y a otros miembros del reparto de las pelÃ­culas de Harry Potter para volver a Hogwarts por primera vez y celebrar el aniversario de la primera pelÃ­cula de la saga.', NULL),
(39, '675', 'Harry Potter y la Orden del FÃ©nix', 0x696d672f3637352e6a7067, 'A', '2007-06-28', 'Harry Potter regresa por quinto aÃ±o a Hogwarts aÃºn sacudido por la tragedia ocurrida en el Torneo de los Tres Magos. Debido a que el Ministro de la Magia niega el regreso de Lord Voldemort, Harry se convierte en el centro de atenciÃ³n de la comunidad mÃ¡gica. Mientras lucha con sus problemas en el colegio, incluyendo a la nueva profesora Dolores Umbridge, intentarÃ¡ aprender mÃ¡s sobre la misteriosa Orden del FÃ©nix.', NULL),
(40, '181812', 'Star Wars: El ascenso de Skywalker', 0x696d672f3138313831322e6a7067, 'A', '2019-12-18', 'La Resistencia sobreviviente se enfrenta a la Primera Orden una vez mÃ¡s mientras continÃºa el viaje de Rey, Finn y Poe Dameron. Con el poder y el conocimiento de las generaciones detrÃ¡s de ellos, comienza la batalla final.', NULL),
(41, '8989', 'Bigfoot y los Henderson', 0x696d672f383938392e6a7067, 'A', '1987-06-05', 'Volviendo de un viaje de caza en el bosque, el coche de la familia Henderson golpea a un animal en el camino. Al principio temen que sea un hombre, pero se dan cuenta que es un &quot;bigfoot&quot;. Pensando que estÃ¡ muerto, deciden llevarlo a su casa pensando en un posible beneficio econÃ³mico. Pero no estÃ¡ muerto y, ademÃ¡s, lejos de ser el monstruo feroz que temÃ­an, resulta ser un gigante amistoso.', NULL),
(42, '487702', 'F*&amp;% the Prom', 0x696d672f3438373730322e6a7067, 'A', '2017-12-05', 'Maddy y Cole fueron amigos inseparables hasta que comenzÃ³ la escuela secundaria y Maddy se convirtiÃ³ en la chica mÃ¡s popular en el campus. Cuando comienza a sentirse sola y desconsolada, se reconecta con Cole y el dÃºo conspira para destruir el concurso de popularidad adolescente final.', NULL),
(43, '441542', 'Plan B', 0x696d672f3434313534322e6a7067, 'A', '2016-06-08', 'Tres expertos en artes marciales se embarcan en la bÃºsqueda de un tesoro que les permita salvar a un amigo de las garras de un gÃ¡ngster sin escrÃºpulos. Pronto se verÃ¡n inmersos en una compleja conspiraciÃ³n que tiene como objetivo acabar con el capo de los bajos fondos berlineses.', NULL),
(44, '355547', 'Se armÃ³ el BelÃ©n', 0x696d672f3335353534372e6a7067, 'A', '2017-11-15', 'Bo es un burrito pequeÃ±o, pero valiente, que anhela una vida mÃ¡s allÃ¡ de su rutina diaria en el molino del pueblo. Un dÃ­a reÃºne el coraje necesario para cumplir la aventura de sus sueÃ±os. En su viaje conocerÃ¡ a Ruth, una adorable oveja que ha perdido su rebaÃ±o, y a Dave, una paloma con grandes aspiraciones. Durante su camino, en el que siguen una Estrella muy especial, encontrarÃ¡n ademÃ¡s a tres camellos y a otros excÃ©ntricos animales. Todos ellos se convertirÃ¡n en los hÃ©roes no reconocidos de la primera Navidad.', NULL),
(45, '181808', 'Star Wars: Los Ãºltimos Jedi', 0x696d672f3138313830382e6a7067, 'A', '2017-12-13', 'La fuerza siente un cambio y los Maestros Jedi saben que es el momento de regresar. La galaxia se encuentra perdida y separada, y deberÃ¡n unir fuerzas si no quieren que sea el fin de la paz. Con el rumor de una guerra, los pocos aliados que quedan emprenderÃ¡n la bÃºsqueda para aumentar sus aliados, mientras se enfrentan a la desconfianza y el temor de aquellos que no olvidan ni perdonan. Mundos casi olvidados, personajes misteriosos y viejas caras conocidas, una nueva aventura estÃ¡ a punto de comenzar para mantener la frÃ¡gil supervivencia de La RepÃºblica, mientras se preparan para lo que estÃ¡ por llegar.', NULL),
(46, '984', 'Harry el sucio', 0x696d672f3938342e6a7067, 'A', '1971-12-23', 'Harry Callahan es un duro policÃ­a que se ha criado en la calle. Sus compaÃ±eros le llaman Harry el Sucio por sus particulares mÃ©todos de lucha contra el crimen y porque siempre se encarga de los trabajos mÃ¡s desagradables. En San Francisco, un francotirador ha matado ya a dos personas. Harry serÃ¡ el encargado de resolver el caso.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(260) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estado` enum('A','D','B','I','P','N') NOT NULL COMMENT 'A:Administrador D:Desactivado B:Borrado  I:Impagado P:Pendiente\r\nN:Normal',
  `token` varchar(256) DEFAULT NULL,
  `fecha_limite_token` date DEFAULT '2022-11-10',
  `create_at` bigint(20) NOT NULL COMMENT 'fecha en UNIX TIME',
  `modified_at` bigint(20) NOT NULL COMMENT 'fecha en UNIX TIME',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `clave`, `mail`, `telefono`, `estado`, `token`, `fecha_limite_token`, `create_at`, `modified_at`) VALUES
(1, 'Javier', 'Espinosa', 'TzKarmelo', '1234', 'tzrtzr@hotmail.com', '630048672', 'A', '', '1970-01-01', 1670927467, 1670927467),
(33, 'luis', 'martin', 'l', 'l', 'tzrtzr@hotmail.com', '4567855', 'I', NULL, '2022-11-10', 1670845426, 1670845426),
(34, 'q', 'q', 'q', 'q', 'tzrtzr@hotmail.com', 'q', 'N', NULL, '2022-11-10', 1670845125, 1670845125),
(25, 'Javier', 'Espinosa Alguacil', 'Karmelo1', '1111', 'tzrtzr@hotmail.com', '630048672', 'D', NULL, '2022-11-10', 1670807122, 1670807122),
(30, 'Javier', 'popopopo', 's', 's', 'tzrtzr@hotmail.com', '630048672', 'N', NULL, '2022-11-10', 1671358816, 1671358816),
(31, 'Ramon', 'Espinosa Lopez', 'a', 'a', 'respinosa270854@gmail.com', '616436742', 'N', NULL, '2022-11-10', 1670844118, 1670844118),
(36, 'Manuel', 'Garrido', 'manu1980', '1234', 'tzrtzr@hotmail.com', '696969696', 'N', NULL, '2022-11-10', 1671356728, 1671356728),
(37, 'Manuel', 'Garrido', 'ffff', 'ffff', 'tzrtzr@hotmail.com', '696969696', 'N', NULL, '2022-11-10', 1671376996, 1671376996);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votaciones`
--

DROP TABLE IF EXISTS `votaciones`;
CREATE TABLE IF NOT EXISTS `votaciones` (
  `elemento_votado` int(10) UNSIGNED NOT NULL,
  `valoracion` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `votaciones`
--

INSERT INTO `votaciones` (`elemento_votado`, `valoracion`) VALUES
(1, 5),
(2, 4),
(1, 4),
(4, 3),
(1, 4),
(1, 4),
(1, 4),
(5, 4),
(7, 3),
(4, 5),
(13, 3),
(11, 3),
(10, 5),
(12, 4),
(1, 5),
(44, 4),
(1, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
