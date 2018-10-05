
DROP TABLE IF EXISTS `ranges`;
CREATE TABLE `ranges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY IDX_range_parent (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `unit_price` double DEFAULT NULL,
  `range_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_product_range` (`range_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `user_addresses`;
CREATE TABLE `user_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `human_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `order_addresses`;
CREATE TABLE `order_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `human_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_adress_id`  int(10) unsigned DEFAULT NULL,
  `delivery_adress_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_user_billing_adress` (`billing_adress_id`),
  KEY `IDX_user_delivery_adress` (`delivery_adress_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double DEFAULT NULL,
  `billing_adress_id`  int(10) unsigned DEFAULT NULL,
  `delivery_adress_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_user_billing_adress` (`billing_adress_id`),
  KEY `IDX_user_delivery_adress` (`delivery_adress_id`),
  KEY `IDX_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `order_products`;
CREATE TABLE `order_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `quantity` int(3) unsigned NOT NULL,
  `unit_price` double DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_order_product` (`order_id`),
  KEY `IDX_product_order` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ranges` (`name`,`parent_id`) VALUES ('Main range', null);
INSERT INTO `ranges` (`name`,`parent_id`) VALUES ('Second range', 1);
INSERT INTO `ranges` (`name`,`parent_id`) VALUES ('Third range', 1);

INSERT INTO `products` (`name`,`description`,`range_id`,`unit_price`) VALUES ('test','description',2,57.08);
INSERT INTO `products` (`name`,`description`,`range_id`,`unit_price`) VALUES ('test2','description2',3,46.22);

INSERT INTO `user_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Fred Eric', '2 impasse Duvet','3ieme étage', '59000', 'Lille', 'FRANCE');
INSERT INTO `user_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Eric Fred', '12 route Pleine','chez mon oncle', '59000', 'Lille', 'FRANCE');
INSERT INTO `user_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Frederic', '239 rue de Douai', null, '59000', 'Lille', 'FRANCE');
INSERT INTO `user_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Epicfred', '3 sans idée','oui oui', '59000', 'Lille', 'FRANCE');

INSERT INTO `users` (username, email, password, billing_adress_id, delivery_adress_id)
  VALUES ('Fred Eric', 'fred.eric@example.com','password',1,2);
INSERT INTO `users` (username, email, password, billing_adress_id, delivery_adress_id)
  VALUES ('Frederic', 'frederic@example.com','password',3,4);

INSERT INTO `order_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Fred Eric', '2 impasse Duvet','3ieme étage', '59000', 'Lille', 'FRANCE');
INSERT INTO `order_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Fred Eric', '120 Boulevard Vaubant','B506', '59000', 'Lille', 'FRANCE');
INSERT INTO `order_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Fred Eric', '2 impasse Duvet','3ieme étage', '59000', 'Lille', 'FRANCE');
INSERT INTO `order_addresses` (`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`)
  VALUES ('Fred Eric', '120 Boulevard Vaubant','B506', '59000', 'Lille', 'FRANCE');

INSERT INTO `orders` (`user_id`, `type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`)
  VALUES (1,'CART', 'CART', 149.52, 1, 2);
INSERT INTO `orders` (`user_id`, `type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`)
  VALUES (1,'ORDER', 'BILLED', 100, 3, 4);

INSERT INTO `order_products` (order_id, product_id, quantity, unit_price)
  VALUES (1,1,1,57.08);
INSERT INTO `order_products` (order_id, product_id, quantity, unit_price)
  VALUES (1,2,3,46.22);

INSERT INTO `order_products` (order_id, product_id, quantity, unit_price)
  VALUES (2,1,2,50);