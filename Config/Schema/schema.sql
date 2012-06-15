

DROP TABLE IF EXISTS `cake_labs`.`sb_cidades`;
DROP TABLE IF EXISTS `cake_labs`.`sb_estados`;


CREATE TABLE `cake_labs`.`sb_cidades` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`estado_id` int(2) DEFAULT '00' NOT NULL,
	`nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	UNIQUE KEY `id` (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cake_labs`.`sb_estados` (
	`id` int(2) NOT NULL AUTO_INCREMENT,
	`uf` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`nome` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

