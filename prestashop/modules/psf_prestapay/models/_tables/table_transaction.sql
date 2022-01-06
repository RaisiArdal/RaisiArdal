CREATE TABLE `{$_DB_PREFIX_}psfpay_transaction` (

  `id_transaction` int(10) NOT NULL AUTO_INCREMENT,
  `trans_id_shop` int(10) NOT NULL,
  `trans_id_cart` int(10) DEFAULT NULL,
  `trans_id_order` int(10) DEFAULT NULL,
  `trans_id_customer` int(10) DEFAULT NULL,
  `trans_id_currency` int(3) NOT NULL,
  `trans_authority` varchar(256) DEFAULT NULL,
  `trans_reference` varchar(256) DEFAULT NULL,
  `trans_amount` double DEFAULT NULL,
  `trans_status` int(1) NOT NULL DEFAULT '2',
  `trans_ip` varchar(30) DEFAULT NULL,
  `trans_gate` varchar(30) DEFAULT NULL,
  `trans_card_number` varchar(256) NOT NULL,
  `trans_values` text,
  `trans_plugin` varchar(64) DEFAULT NULL,
	`trans_created` DATETIME NOT NULL,
	`trans_updated` DATETIME DEFAULT NULL,

	primary key(`id_transaction`)

) ENGINE = INNODB COLLATE utf8_general_ci;