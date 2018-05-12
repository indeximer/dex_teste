/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : dex_teste

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-05-12 15:34:52
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for `noticias`
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `data` date NOT NULL,
  `imagem_principal` varchar(255) NOT NULL,
  `resumo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES ('24', 'Mario Kart 8 Deluxe review: the best, most versatile game in the series', 'mario-kart-8-deluxe-review-the-best-most-versatile-game-in-the-series', 'Douglas Fortunato', 'HQ', '2018-12-05', '1526144476.jpg', 'Vivamus eu lorem auctor, dapibus arcu sed, laoreet magna. Phasellus eleifend rhoncus nunc quis congue. Sed in lacinia lacus, id rutrum velit. Nam nulla quam, porttitor a consequat consectetur, bibendum ac mauris. Proin accumsan ullamcorper hendrerit.', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">In neque lacus, porta vitae leo non, luctus congue erat. Morbi ut sodales urna. Vivamus lectus metus, ullamcorper sit amet nisi a, tempor dignissim nibh. Curabitur quis nulla elit. Duis mollis velit vel enim luctus rutrum. Aliquam luctus euismod sem, vel dictum augue posuere a. Nullam efficitur, ligula in facilisis cursus, enim massa tempor sem, ut tristique sapien leo a diam.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Curabitur ultrices ac risus eget aliquet. Aenean vel leo suscipit, condimentum metus ut, ornare urna. Fusce sed nunc non quam egestas rutrum. Ut hendrerit eros sem, sit amet iaculis massa rhoncus scelerisque. Vivamus vehicula libero eu dignissim commodo. Etiam semper erat a libero volutpat tincidunt. Duis id finibus elit, et tincidunt ligula. Maecenas pellentesque elementum odio id aliquam. Nunc condimentum nibh non odio interdum, tincidunt ultrices felis maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Ut ut volutpat dolor, in accumsan diam. In mollis dignissim eros, eu cursus tortor viverra vitae. Maecenas sit amet molestie elit. Aenean dignissim hendrerit ex, eget tincidunt mauris volutpat vel. Donec condimentum ligula leo, ut pharetra magna suscipit at. Nullam pharetra, nisi ac ultrices gravida, risus velit tempus ex, porta rhoncus purus leo eget risus. Integer tempor ipsum nisi, sed rhoncus arcu tristique in. Nulla hendrerit tortor eu libero pretium sodales. Pellentesque scelerisque ante id luctus rhoncus. Praesent a magna sit amet augue semper condimentum nec sed mi. Cras eu commodo mi. Vestibulum in ligula ut massa aliquet pharetra. Ut semper ut lacus et mollis.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Aliquam arcu nunc, pellentesque sed vulputate eget, interdum non eros. Sed feugiat ante tellus, nec ultrices mauris tempus ac. Sed imperdiet massa et odio placerat, eget faucibus diam vulputate. Ut a interdum massa, a vulputate leo. Sed dapibus elit vel quam lobortis, et consectetur felis rhoncus. Quisque dapibus, tortor quis maximus congue, mi lorem sodales erat, lobortis fermentum metus lectus at diam. Vivamus eu lorem auctor, dapibus arcu sed, laoreet magna. Phasellus eleifend rhoncus nunc quis congue. Sed in lacinia lacus, id rutrum velit. Nam nulla quam, porttitor a consequat consectetur, bibendum ac mauris. Proin accumsan ullamcorper hendrerit.</p>');
INSERT INTO `noticias` VALUES ('23', 'Xenoblade Chronicles 2 - Review - Duas forças que se atraem', 'xenoblade-chronicles-2-review-duas-forcas-que-se-atraem', 'Douglas Fortunato', 'Games', '2018-11-05', '1526144371.jpg', 'Maecenas pellentesque elementum odio id aliquam. Nunc condimentum nibh non odio interdum, tincidunt ultrices felis maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Curabitur ultrices ac risus eget aliquet. Aenean vel leo suscipit, condimentum metus ut, ornare urna. Fusce sed nunc non quam egestas rutrum. Ut hendrerit eros sem, sit amet iaculis massa rhoncus scelerisque. Vivamus vehicula libero eu dignissim commodo. Etiam semper erat a libero volutpat tincidunt. Duis id finibus elit, et tincidunt ligula. Maecenas pellentesque elementum odio id aliquam. Nunc condimentum nibh non odio interdum, tincidunt ultrices felis maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Ut ut volutpat dolor, in accumsan diam. In mollis dignissim eros, eu cursus tortor viverra vitae. Maecenas sit amet molestie elit. Aenean dignissim hendrerit ex, eget tincidunt mauris volutpat vel. Donec condimentum ligula leo, ut pharetra magna suscipit at. Nullam pharetra, nisi ac ultrices gravida, risus velit tempus ex, porta rhoncus purus leo eget risus. Integer tempor ipsum nisi, sed rhoncus arcu tristique in. Nulla hendrerit tortor eu libero pretium sodales. Pellentesque scelerisque ante id luctus rhoncus. Praesent a magna sit amet augue semper condimentum nec sed mi. Cras eu commodo mi. Vestibulum in ligula ut massa aliquet pharetra. Ut semper ut lacus et mollis.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Aliquam arcu nunc, pellentesque sed vulputate eget, interdum non eros. Sed feugiat ante tellus, nec ultrices mauris tempus ac. Sed imperdiet massa et odio placerat, eget faucibus diam vulputate. Ut a interdum massa, a vulputate leo. Sed dapibus elit vel quam lobortis, et consectetur felis rhoncus. Quisque dapibus, tortor quis maximus congue, mi lorem sodales erat, lobortis fermentum metus lectus at diam. Vivamus eu lorem auctor, dapibus arcu sed, laoreet magna. Phasellus eleifend rhoncus nunc quis congue. Sed in lacinia lacus, id rutrum velit. Nam nulla quam, porttitor a consequat consectetur, bibendum ac mauris. Proin accumsan ullamcorper hendrerit.</p>');
INSERT INTO `noticias` VALUES ('22', 'O que os reviews dizem sobre Super Mario Odyssey', 'o-que-os-reviews-dizem-sobre-super-mario-odyssey', null, null, '2018-12-05', '1526144255.jpg', 'Aliquam luctus euismod sem, vel dictum augue posuere a. Nullam efficitur, ligula in facilisis cursus, enim massa tempor sem, ut tristique sapien leo a diam.', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">In neque lacus, porta vitae leo non, luctus congue erat. Morbi ut sodales urna. Vivamus lectus metus, ullamcorper sit amet nisi a, tempor dignissim nibh. Curabitur quis nulla elit. Duis mollis velit vel enim luctus rutrum. Aliquam luctus euismod sem, vel dictum augue posuere a. Nullam efficitur, ligula in facilisis cursus, enim massa tempor sem, ut tristique sapien leo a diam.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Curabitur ultrices ac risus eget aliquet. Aenean vel leo suscipit, condimentum metus ut, ornare urna. Fusce sed nunc non quam egestas rutrum. Ut hendrerit eros sem, sit amet iaculis massa rhoncus scelerisque. Vivamus vehicula libero eu dignissim commodo. Etiam semper erat a libero volutpat tincidunt. Duis id finibus elit, et tincidunt ligula. Maecenas pellentesque elementum odio id aliquam. Nunc condimentum nibh non odio interdum, tincidunt ultrices felis maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Ut ut volutpat dolor, in accumsan diam. In mollis dignissim eros, eu cursus tortor viverra vitae. Maecenas sit amet molestie elit. Aenean dignissim hendrerit ex, eget tincidunt mauris volutpat vel. Donec condimentum ligula leo, ut pharetra magna suscipit at. Nullam pharetra, nisi ac ultrices gravida, risus velit tempus ex, porta rhoncus purus leo eget risus. Integer tempor ipsum nisi, sed rhoncus arcu tristique in. Nulla hendrerit tortor eu libero pretium sodales. Pellentesque scelerisque ante id luctus rhoncus. Praesent a magna sit amet augue semper condimentum nec sed mi. Cras eu commodo mi. Vestibulum in ligula ut massa aliquet pharetra. Ut semper ut lacus et mollis.</p>');
INSERT INTO `noticias` VALUES ('21', 'Zelda: Breath of the Wild ganha prêmio de Jogo do Ano', 'zelda-breath-of-the-wild-ganha-premio-de-jogo-do-ano', 'Douglas Fortunato', 'Games', '2018-12-05', '1526143973.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit diam nec mauris bibendum pharetra. Nunc consectetur purus vel imperdiet congue. Sed porta erat eu tristique consectetur.', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit diam nec mauris bibendum pharetra. Nunc consectetur purus vel imperdiet congue. Sed porta erat eu tristique consectetur. Cras venenatis rhoncus neque, ut laoreet nisi faucibus ac. Mauris nec nisi varius, elementum dolor in, ornare risus. Maecenas ut lorem eget leo porttitor lacinia. Ut interdum felis at mi ultricies fringilla. Mauris non fringilla arcu. Donec dolor sem, ornare sit amet risus a, consequat rutrum felis. Praesent eget dignissim sapien, pretium sollicitudin quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec posuere est eu justo venenatis sollicitudin. Ut tincidunt dui vitae purus lacinia vulputate a at metus. Phasellus euismod dui quis ipsum sagittis semper. Nulla ultrices tempus risus id auctor.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">In neque lacus, porta vitae leo non, luctus congue erat. Morbi ut sodales urna. Vivamus lectus metus, ullamcorper sit amet nisi a, tempor dignissim nibh. Curabitur quis nulla elit. Duis mollis velit vel enim luctus rutrum. Aliquam luctus euismod sem, vel dictum augue posuere a. Nullam efficitur, ligula in facilisis cursus, enim massa tempor sem, ut tristique sapien leo a diam.</p>');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('douglasfortunato@hotmail.com', '$2y$10$LpPNT5miJIJZeziCuVf4keLs5edco6N0Xu5QEqkI3sRaKBLUB2Wq6', '2018-05-12 15:58:03');
INSERT INTO `password_resets` VALUES ('fortunato.douglas@gmail.com', '$2y$10$cDc.2vW9wc6m437Dw8H2gOKVnXGJFe.b/2LirDhHM8JrXnX.usiQu', '2018-05-12 16:23:20');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Douglas Fortunato', 'douglasfortunato@hotmail.com', '$2y$10$Prl.U2xQNcJ3/ScoMNhna.UZl9v10CLIErijWGHevGzu.4Du..VU.', 'vuVoprkrUnt2LFHhw3wDb0Mp7F0Yu7HbKFgRQxFhAuqnk9RzzT7MWXi68k0r', '2018-05-12 15:45:57', '2018-05-12 15:45:57');
INSERT INTO `users` VALUES ('2', 'Douglas Fortunato', 'fortunato.douglas@gmail.com', '$2y$10$WVAafGHM5ixzuNFEGlIwmugph20i7/ACwijk/ery0YSbNGMxr0lOK', 'ZOezH06gHmWebLN9F2WjLwUCmXDNGavoyvNzgUXyrl2jtTbXFuPuLLdWSPnz', '2018-05-12 16:23:01', '2018-05-12 16:23:01');
