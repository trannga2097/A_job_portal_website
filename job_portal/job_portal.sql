CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(111) NOT NULL,
  `admin_pass` varchar(150) NOT NULL,
  `admin_fullname` varchar(150) NOT NULL,
  `admin_phone` int(11) NOT NULL,
  `admin_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `admin_type` (
  `id` int(11) NOT NULL,
  `admin` varchar(111) NOT NULL,
  `type` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `admin_type` (`id`, `admin`, `type`) VALUES
(1, 'Company Admin', 2),
(2, 'Super Admin', 1);

CREATE TABLE `all_jobs` (
  `job_id` int(111) NOT NULL,
  `company_email` varchar(111) NOT NULL,
  `job_tittle` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `keyword` varchar(111) NOT NULL,
  `country` varchar(111) NOT NULL,
  `province` varchar(150) NOT NULL,
  `detail_address` varchar(150) NOT NULL,
  `category` varchar(111) NOT NULL,
  `job_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `apply_job` (
  `id` int(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `file` varchar(200) NOT NULL,
  `id_job` int(111) NOT NULL,
  `job_seeker` varchar(111) NOT NULL,
  `contact_number` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `jobseeker` (
  `id` int(11) NOT NULL,
  `email` varchar(111) NOT NULL,
  `fullname` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `mobile_number` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `category` varchar(111) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `profiles` (
  `id` int(111) NOT NULL,
  `img` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `contact_number` int(10) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user_email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_email`),
  ADD KEY `id` (`id`);

ALTER TABLE `admin_type`
  ADD PRIMARY KEY (`admin`),
  ADD KEY `id` (`id`);

ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `admin` (`admin`);

ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

ALTER TABLE `job_category`
  ADD PRIMARY KEY (`category`),
  ADD KEY `id` (`id`);

ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `admin_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `all_jobs`
  MODIFY `job_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `apply_job`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `jobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `profiles`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;