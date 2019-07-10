-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bdiegb
-- ------------------------------------------------------
-- Server version	5.7.18-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) NOT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `dni` char(8) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `fechanac` date DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(90) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `programaestudios_codigo` varchar(12) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alumnos_programaestudios1_idx` (`programaestudios_codigo`),
  CONSTRAINT `fk_alumnos_programaestudios1` FOREIGN KEY (`programaestudios_codigo`) REFERENCES `programaestudios` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'NANDO','DAMAZO','LAURENTE','','MASCULINO',NULL,NULL,NULL,NULL,'001',1),(2,'JESICA','DE LA CRUZ','SOLIS','','FEMENINO',NULL,NULL,NULL,NULL,'001',1),(3,'ALEX','LLIUYA','DE PAZ','','MASCULINO',NULL,NULL,NULL,NULL,'001',1),(4,'CARLOS','GUERRERO','GAMERO','','MASCULINO',NULL,NULL,NULL,NULL,'001',1),(5,'NANDO','DAMAZO','LAURENTE','','MASCULINO',NULL,NULL,NULL,NULL,'001',1),(6,'NANDO','DAMAZO','LAURENTE','','MASCULINO',NULL,NULL,NULL,NULL,'001',1);
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciclo`
--

DROP TABLE IF EXISTS `ciclo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciclo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciclo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciclo`
--

LOCK TABLES `ciclo` WRITE;
/*!40000 ALTER TABLE `ciclo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciclo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) NOT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `dni` char(8) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `fechanac` date DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(90) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `programaestudios_codigo` varchar(12) NOT NULL,
  `profesiones_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_docentes_profesiones1_idx` (`profesiones_id`),
  KEY `fk_docentes_programaestudios1_idx` (`programaestudios_codigo`),
  CONSTRAINT `fk_docentes_profesiones1` FOREIGN KEY (`profesiones_id`) REFERENCES `profesiones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_docentes_programaestudios1` FOREIGN KEY (`programaestudios_codigo`) REFERENCES `programaestudios` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='			';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
INSERT INTO `docentes` VALUES (1,'Ricardo','Oncoy','Ramirez','1321321','Masculino','1989-08-06','45654','carhuaz','roncoy@iegb.edu.pe',1,'001',12),(2,'Alcides','Garcia','Huanuco','','Masculino','1990-12-12','','','',1,'002',131),(3,'Oncoy','Oncoy','Oncoy','Oncoy','Masculino','2000-02-02','','','',1,'001',1);
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiencias`
--

DROP TABLE IF EXISTS `experiencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experiencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulos_id` int(11) NOT NULL,
  `alumnos_id` int(11) NOT NULL,
  `fechaini` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `horastotal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_experiencias_modulos1_idx` (`modulos_id`),
  KEY `fk_experiencias_alumnos1_idx` (`alumnos_id`),
  CONSTRAINT `fk_experiencias_alumnos1` FOREIGN KEY (`alumnos_id`) REFERENCES `alumnos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_experiencias_modulos1` FOREIGN KEY (`modulos_id`) REFERENCES `modulos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiencias`
--

LOCK TABLES `experiencias` WRITE;
/*!40000 ALTER TABLE `experiencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `experiencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itinerarios`
--

DROP TABLE IF EXISTS `itinerarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itinerarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(15) DEFAULT NULL,
  `horasteoricas` int(11) NOT NULL,
  `horaspracicas` int(11) NOT NULL,
  `periodo_inicio` varchar(8) NOT NULL,
  `periodo_fin` varchar(8) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `programaestudios_codigo` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_itinerarios_programaestudios_idx` (`programaestudios_codigo`),
  CONSTRAINT `fk_itinerarios_programaestudios` FOREIGN KEY (`programaestudios_codigo`) REFERENCES `programaestudios` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itinerarios`
--

LOCK TABLES `itinerarios` WRITE;
/*!40000 ALTER TABLE `itinerarios` DISABLE KEYS */;
INSERT INTO `itinerarios` VALUES (1,'COMPU1',0,0,'2000-1','',1,'001'),(2,'CONTA1',0,0,'2000-1','',1,'002'),(3,'ENFER1',0,0,'2000-1','',1,'003'),(4,'FARMA1',0,0,'2000-1','',1,'004'),(5,'AGROP1',0,0,'2000-1','',1,'005'),(6,'INDUST1',0,0,'2000-1','',1,'006'),(7,'ELECT1',0,0,'2000-1','',1,'007'),(8,'MECAN1',0,0,'2000-1','',1,'008'),(9,'TURIS1',0,0,'2000-1','',1,'009');
/*!40000 ALTER TABLE `itinerarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matriculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `turno` varchar(15) NOT NULL,
  `periodos_id` int(11) NOT NULL,
  `alumnos_id` int(11) NOT NULL,
  `unidaddidactica_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_matriculas_periodos1_idx` (`periodos_id`),
  KEY `fk_matriculas_alumnos1_idx` (`alumnos_id`),
  KEY `fk_matriculas_unidaddidactica1_idx` (`unidaddidactica_id`),
  KEY `fk_matriculas_users1_idx` (`users_id`),
  CONSTRAINT `fk_matriculas_alumnos1` FOREIGN KEY (`alumnos_id`) REFERENCES `alumnos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_periodos1` FOREIGN KEY (`periodos_id`) REFERENCES `periodos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_unidaddidactica1` FOREIGN KEY (`unidaddidactica_id`) REFERENCES `unidaddidactica` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `itinerarios_id` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_modulos_itinerarios1_idx` (`itinerarios_id`),
  CONSTRAINT `fk_modulos_itinerarios1` FOREIGN KEY (`itinerarios_id`) REFERENCES `itinerarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos`
--

LOCK TABLES `modulos` WRITE;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(8) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesiones`
--

DROP TABLE IF EXISTS `profesiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesiones`
--

LOCK TABLES `profesiones` WRITE;
/*!40000 ALTER TABLE `profesiones` DISABLE KEYS */;
INSERT INTO `profesiones` VALUES (1,'ACUICULTURA',''),(2,'ADMINISTRACIÓN AERONÁUTICA',''),(3,'ADMINISTRACIÓN AGROPECUARIA',''),(4,'ADMINISTRACIÓN DE AEROLÍNEAS',''),(5,'ADMINISTRACIÓN DE BIENES RAÍCES',''),(6,'ADMINISTRACIÓN DE EMPRESAS',''),(7,'ADMINISTRACIÓN DE NEGOCIOS',''),(8,'ADMINISTRACIÓN DE OBRAS CIVILES',''),(9,'ADMINISTRACIÓN DE PERSONAL',''),(10,'ADMINISTRACIÓN DE SEGUROS',''),(11,'ADMINISTRACIÓN DE SERVICIOS',''),(12,'ADMINISTRACIÓN DE SISTEMAS INFORMÁTICOS',''),(13,'ADMINISTRACIÓN DE TRANSPORTE',''),(14,'ADMINISTRACIÓN FINANCIERA',''),(15,'ADMINISTRACIÓN HOSPITALARIA',''),(16,'ADMINISTRACIÓN INDUSTRIAL',''),(17,'ADMINISTRACIÓN PÚBLICA',''),(18,'ADMINISTRACIÓN TRIBUTARIA',''),(19,'ADMINISTRACIÓN TURÍSTICA HOTELERA',''),(20,'AGROLOGÍA',''),(21,'AGRONOMÍA',''),(22,'ANTROPOLOGÍA',''),(23,'ARQUEOLOGÍA',''),(24,'ARQUITECTURA',''),(25,'ARTE Y DECORACIÓN',''),(26,'ARTES PLÁSTICAS',''),(27,'AUXILIAR DE VUELO',''),(28,'BACHILLERATO COMERCIAL',''),(29,'BACHILLERATO TÉCNICO',''),(30,'BACTERIOLOGÍA',''),(31,'BIBLIOTECOLOGÍA',''),(32,'BIOLOGÍA',''),(33,'BIOLOGÍA MARINA',''),(34,'CIENCIAS POLÍTICAS',''),(35,'COMERCIO INTERNACIONAL',''),(36,'COMUNICACIÓN PUBLICITARIA',''),(37,'COMUNICACIÓN SOCIAL Y PERIODISMO',''),(38,'CONSTRUCCIÓN',''),(39,'CONTADURÍA',''),(40,'CULTURA FÍSICA DEPORTE Y RECREACIÓN',''),(41,'DERECHO ABOGADO',''),(42,'DESPACHADOR',''),(43,'DISEÑO DE INTERIORES',''),(44,'DISEÑO DE LA COMUNICACIÓN GRÁFICA',''),(45,'DISEÑO DE MODAS Y PATRONAJE',''),(46,'DISEÑO GRÁFICO',''),(47,'DISEÑO INDUSTRIAL',''),(48,'DISEÑO TEXTIL',''),(49,'DOCENTE',''),(50,'ECONOMÍA',''),(51,'ENFERMERÍA',''),(52,'ENTOMOLOGÍA',''),(53,'ESTADISTA',''),(54,'FILOSOFÍA',''),(55,'FINANZAS ',''),(56,'FÍSICA',''),(57,'FISIOTERAPIA',''),(58,'FITOMEJORAMIENTO',''),(59,'FITOPATOLOGÍA',''),(60,'FONOAUDIOLOGÍA',''),(61,'GEOFÍSICO',''),(62,'GEOGRAFÍA',''),(63,'GEOLOGÍA',''),(64,'HISTORIA',''),(65,'HOTELERÍA Y TURISMO',''),(66,'IDIOMAS LENGUAS MODERNAS',''),(67,'INGENIERÍA ADMINISTRATIVA',''),(68,'INGENIERÍA AERONÁUTICA',''),(69,'INGENIERÍA AGRÓNOMA',''),(70,'INGENIERÍA AMBIENTAL  FORESTAL',''),(71,'INGENIERÍA BIOMÉDICA',''),(72,'INGENIERÍA CATASTRAL  GEODESIA',''),(73,'INGENIERÍA CIVIL',''),(74,'INGENIERÍA DE ALIMENTOS',''),(75,'INGENIERÍA DE MERCADOS',''),(76,'INGENIERÍA DE MINAS',''),(77,'INGENIERÍA DE MOTORES',''),(78,'INGENIERÍA DE PETRÓLEOS',''),(79,'INGENIERÍA DE PRODUCCIÓN AGROINDUSTRIAL',''),(80,'INGENIERÍA DE REDES Y TELECOMUNICACIONES',''),(81,'INGENIERÍA DE SISTEMAS  COMPUTACIÓN',''),(82,'INGENIERÍA DE TELECOMUNICACIONES',''),(83,'INGENIERÍA DE TRANSPORTES Y VÍAS',''),(84,'INGENIERÍA ELÉCTRICA',''),(85,'INGENIERÍA ELECTROMECÁNICA',''),(86,'INGENIERÍA ELECTRÓNICA',''),(87,'INGENIERÍA FINANCIERA',''),(88,'INGENIERÍA FÍSICA',''),(89,'INGENIERÍA INDUSTRIAL',''),(90,'INGENIERÍA MECÁNICA',''),(91,'INGENIERÍA MECATRÓNICA',''),(92,'INGENIERÍA METALÚRGICA',''),(93,'INGENIERÍA NAVAL',''),(94,'INGENIERÍA QUÍMICA',''),(95,'INGENIERIA SANITARIA',''),(96,'INGENIERÍA TELEMÁTICA',''),(97,'LICENCIATURAS',''),(98,'LITERATURA',''),(99,'MATEMÁTICAS',''),(100,'MEDICINA',''),(101,'MICROBIOLOGÍA',''),(102,'MILITAR ',''),(103,'MÚSICA',''),(104,'NUTRICIÓN Y DIETÉTICA',''),(105,'OCEANOGRAFÍA',''),(106,'ODONTOLOGÍA',''),(107,'OPTOMETRÍA',''),(108,'OTRA',''),(109,'PILOTO',''),(110,'PREESCOLAR',''),(111,'PRODUCCIÓN CINE  TELEVISIÓN',''),(112,'PROFESIONAL EN GASTRONOMÍA',''),(113,'PROFESIONAL EN LOGÍSTICA',''),(114,'PSICOLOGÍA',''),(115,'PUBLICIDAD Y MERCADEO',''),(116,'QUÍMICA',''),(117,'QUÍMICA FARMACÉUTICA',''),(118,'SECRETARIADO',''),(119,'SIN PROFESIÓN',''),(120,'SOCIOLOGÍA',''),(121,'TECN ADMINISTRACIÓN DE PERSONAL',''),(122,'TECN ELECTRICISTA',''),(123,'TECN ELECTRÓNICO',''),(124,'TECN EN SEGUROS',''),(125,'TECN MECÁNICO',''),(126,'TECN METALMECÁNICO',''),(127,'TECN QUÍMICA',''),(128,'TECN REGENCIA FARMACIA',''),(129,'TECN RELACIONES INDUSTRIALES',''),(130,'TECN SEGURIDAD INDUSTRIAL',''),(131,'TECN SISTEMAS COMPUTACIÓN',''),(132,'TÉCNICO DE MANTENIMIENTO',''),(133,'TÉCNICO EN DESARROLLO Y MANTENIMIENTO DE SOFTWARE',''),(134,'TÉCNICO EN GESTIÓN CONTABLE',''),(135,'TÉCNICO EN GESTIÓN EMPRESARIAL',''),(136,'TÉCNICO EN LOGÍSTICA',''),(137,'TÉCNICO EN RADIOLOGÍA E IMÁGENES DIAGNOSTICAS',''),(138,'TÉCNICO EN SALUD OCUPACIONAL',''),(139,'TECNOLOGÍA DE ALIMENTOS',''),(140,'TECNOLOGÍA EN ELECTRÓNICA',''),(141,'TERAPIA OCUPACIONAL',''),(142,'TERAPIA RESPIRATORIA',''),(143,'TRABAJO SOCIAL',''),(144,'VETERINARIA',''),(145,'ZOOTECNIA','');
/*!40000 ALTER TABLE `profesiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programaestudios`
--

DROP TABLE IF EXISTS `programaestudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programaestudios` (
  `codigo` varchar(12) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `creditosmin` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programaestudios`
--

LOCK TABLES `programaestudios` WRITE;
/*!40000 ALTER TABLE `programaestudios` DISABLE KEYS */;
INSERT INTO `programaestudios` VALUES ('001','COMPUTACION E INFORMATICA',120,1),('002','CONTABILIDAD',120,1),('003','ENFERMERIA TECNICA',120,1),('004','TECNICA EN FARMACIA',120,1),('005','PRODUCCION AGROPECUARIA',120,1),('006','ELECTROTECNIA INDUSTRIAL',120,1),('007','ELECTRONICA INDUSTRIAL',120,1),('008','MECANICA AUTOMOTRIZ',120,1),('009','GUIA OFICIAL DE TURISMO',120,1);
/*!40000 ALTER TABLE `programaestudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador','Administrador'),(2,'Docente','Docente'),(3,'Alumno','Alumno'),(4,'Administrativo','Administrativo');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipocursos`
--

DROP TABLE IF EXISTS `tipocursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipocursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocursos`
--

LOCK TABLES `tipocursos` WRITE;
/*!40000 ALTER TABLE `tipocursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipocursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidaddidactica`
--

DROP TABLE IF EXISTS `unidaddidactica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidaddidactica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(8) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `horasteoria` int(11) NOT NULL,
  `horaspractica` int(11) NOT NULL,
  `creditos` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `itinerarios_id` int(11) NOT NULL,
  `modulos_id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `tipocursos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_unidaddidactica_itinerarios1_idx` (`itinerarios_id`),
  KEY `fk_unidaddidactica_ciclo1_idx` (`ciclo_id`),
  KEY `fk_unidaddidactica_modulos1_idx` (`modulos_id`),
  KEY `fk_unidaddidactica_tipocursos1_idx` (`tipocursos_id`),
  CONSTRAINT `fk_unidaddidactica_ciclo1` FOREIGN KEY (`ciclo_id`) REFERENCES `ciclo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_unidaddidactica_itinerarios1` FOREIGN KEY (`itinerarios_id`) REFERENCES `itinerarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_unidaddidactica_modulos1` FOREIGN KEY (`modulos_id`) REFERENCES `modulos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_unidaddidactica_tipocursos1` FOREIGN KEY (`tipocursos_id`) REFERENCES `tipocursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidaddidactica`
--

LOCK TABLES `unidaddidactica` WRITE;
/*!40000 ALTER TABLE `unidaddidactica` DISABLE KEYS */;
/*!40000 ALTER TABLE `unidaddidactica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `roles_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_roles1_idx` (`roles_id`),
  CONSTRAINT `fk_users_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ricardo','admin','admin@gmail.com',1,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-10 15:54:54
