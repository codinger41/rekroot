CREATE TABLE `employers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `Job_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `Job_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `job_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
 `salary` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `job_description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,  
 `company_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `company_website` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `tagline` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
 `company_description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
