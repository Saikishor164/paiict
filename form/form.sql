CREATE TABLE registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nameinst VARCHAR(255) NOT NULL,
    instadd VARCHAR(255) NOT NULL,
    instemail VARCHAR(255) NOT NULL,
    principal VARCHAR(255) NOT NULL,
    principalno VARCHAR(15) NOT NULL,
    teamname VARCHAR(255) NOT NULL,
    mentorname VARCHAR(255) NOT NULL,
    mentorno VARCHAR(15),
    mentorquali VARCHAR(255),
    mentoradhar VARCHAR(255),
    stdfirstna VARCHAR(255),
    stdfirstph VARCHAR(255),
    stdagefirst INT,
    stddivfirst VARCHAR(255),
    stdsecna VARCHAR(255),
    stdsecph VARCHAR(255),
    stdagesec INT,
    stddivsec VARCHAR(255),
    stdthridna VARCHAR(255),
    stdthridph VARCHAR(255),
    stdagethrid INT,
    stddivthrid VARCHAR(255),
    stdfourtna VARCHAR(255),
    stdfourtph VARCHAR(255),
    stdagefourt INT,
    stddivfourt VARCHAR(255),
    stdfifthna VARCHAR(255),
    stdfifthph VARCHAR(255),
    stdagefifth INT,
    stddivfifth VARCHAR(255),
    amount INT
);


CREATE TABLE `maindata` (
  `id` int(11) NOT NULL,
  `nameinst` varchar(255) NOT NULL,
  `instadd` varchar(255) NOT NULL,
  `instemail` varchar(255) NOT NULL,
  `principal` varchar(255) NOT NULL,
  `principalno` int(11) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `mentorname` varchar(255) NOT NULL,
  `mentorno` int(11) NOT NULL,
  `mentorquali` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `maindata` (`id`, `nameinst`, `instadd`, `instemail`, `principal`, `principalno`, `teamname`, `mentorname`, `mentorno`, `mentorquali`) VALUES
(1, 'saikishor Rasala', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 'df@gmail.com', 'hjevgf', 2147483647, 'DJBVFASJDFV', 'DVAVF@gmail.com', 2147483647, 'sjfsjdvg4`'),
(2, 'saikishor Rasala', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 'df@gmail.com', 'hjevgf', 2147483647, 'DJBVFASJDFV', 'DVAVF@gmail.com', 2147483647, 'sjfsjdvg4`'),
(3, 'saikishor Rasala', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 'df@gmail.com', 'hjevgf', 2147483647, 'DJBVFASJDFV', 'DVAVF@gmail.com', 2147483647, 'sjfsjdvg4`'),
(4, 'saikishor Rasala', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 'df@gmail.com', 'hjevgf', 2147483647, 'DJBVFASJDFV', 'DVAVF@gmail.com', 2147483647, 'sjfsjdvg4`'),
(5, 'saikishor Rasala', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 'df@gmail.com', 'hjevgf', 2147483647, 'DJBVFASJDFV', 'DVAVF@gmail.com', 2147483647, 'sjfsjdvg4`');


CREATE TABLE `studenttable` (
  `id` int(11) NOT NULL,
  `main_id` int(11) DEFAULT NULL,
  `stdname` varchar(255) NOT NULL,
  `stdphoto` varchar(255) NOT NULL,
  `stdage` int(11) NOT NULL,
  `stddiv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `studenttable` (`id`, `main_id`, `stdname`, `stdphoto`, `stdage`, `stddiv`) VALUES
(1, 1, '', 'uploads', 0, ''),
(2, 1, '', 'uploads', 0, ''),
(3, 1, '', 'uploads', 0, ''),
(4, 1, '', 'uploads', 0, ''),
(5, 1, '', 'uploads', 0, '');