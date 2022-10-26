SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE database Cadastro_Animais;
use Cadastro_Animais;

CREATE TABLE `animais` (
  `IDanimal` int(3) NOT NULL,
  `raca` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `animais`
  ADD PRIMARY KEY (`IDanimal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animais`
--
ALTER TABLE `animais`
  MODIFY `IDanimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
