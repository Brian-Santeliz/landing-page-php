CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);
