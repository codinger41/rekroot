CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
 `jobs` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `gender` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,  
 `DOB` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `location` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `skills` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
 `experience` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
 `education` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
