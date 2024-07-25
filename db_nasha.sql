use db_nasha;


CREATE TABLE `tb_add` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `reg_member` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tb_add` (`id`, `date`, `place`, `message`, `reg_member`) VALUES
(1, '2023-05-24', 'sangamner', 'About side-effect of alcohol', 2);


CREATE TABLE `tb_info` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `tb_info` (`id`, `name`, `email`, `message`) VALUES
(1, 'manthan', 'manthan2003@gmail', 'hi hello how');



CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tb_login` (`id`, `username`, `password`) VALUES
(1, 'manthan', '12345'),
(2, 'vishwa', '12345'),
(3, 'pradnya', '12345'),
(4, 'sakshi', '12345');


ALTER TABLE `tb_add`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tb_add`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `tb_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


