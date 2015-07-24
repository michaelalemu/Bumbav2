-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jul 2015 um 23:15
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `bumba`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `post_comment`
--

CREATE TABLE IF NOT EXISTS `post_comment` (
  `comment_id` int(11) NOT NULL COMMENT 'Unique comment id',
  `comment` text COLLATE latin1_general_ci NOT NULL,
  `user_id` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Daten für Tabelle `post_comment`
--

INSERT INTO `post_comment` (`comment_id`, `comment`, `user_id`, `date`, `post_id`) VALUES
(1, 'This comment section is still very problematic', 'Me', '0000-00-00', 1),
(2, 'Comments don\\''t show after you click submit, you have to either go back to main page and then click on the post again or reload. By reloading the sql statement is sent again', 'Me', '0000-00-00', 1),
(3, 'sdadasdasdasd', 'Jard', '0000-00-00', 1),
(4, 'lalala', 'new topic', '0000-00-00', 2),
(5, 'hello', 'DLSteve', '0000-00-00', 4),
(6, 'Hola', '', '0000-00-00', 4),
(7, 'Ey du spasst was soll das', 'Norman', '0000-00-00', 7),
(8, 'Ich nehme dich Anal lo\r\n', '', '0000-00-00', 7),
(9, 'Ich nehme dich Anal lo\r\n', '', '0000-00-00', 7),
(10, 'es gibt ein bug wenn du page reloadest dann komm die Nachricht 2 mal', 'Admin', '0000-00-00', 7),
(11, 'Hahahahahahahahahahaha wer hat das gemacht hahahaha norman', 'Norman mah', '0000-00-00', 6),
(12, 'Hahahahahahahahahahaha wer hat das gemacht hahahaha norman', 'Norman mah', '0000-00-00', 6),
(13, 'Absolut gutwr Rapper finde ich!!!\r\n', '', '0000-00-00', 3),
(14, 'Programm wololo konnte nicht gestartet werden!\r\n', '', '0000-00-00', 4),
(15, 'wololo konnte nicht gestartet werden\r\n', 'Kaykay21', '0000-00-00', 4),
(16, 'Wer nimmt mich anal ich will anal genommen werden :0 pls i am notgeil hahahaahahaha lol xD rape ', 'Norman', '0000-00-00', 7),
(17, 'I suck Dicks!', 'Dicksucker', '0000-00-00', 9),
(18, 'I suck Dicks!', 'Dicksucker', '0000-00-00', 9),
(19, 'Du Fotze\r\n', 'Deine Mudd', '0000-00-00', 14),
(20, 'Fickt euch alle xD', 'Mutterbang', '0000-00-00', 13),
(21, 'Fickt euch alle xD', 'Mutterbang', '0000-00-00', 13),
(22, 'Hahahahahahahahahaha ja man bevor deine Blase platzt', '#Norman #d', '0000-00-00', 14),
(23, 'Mutterbang xD ich will schwanz in arsch wie reyad\r\n', 'Normen dic', '0000-00-00', 13),
(24, 'Haram laßt ihm mal inrue wiso makht ihr sowas ich will seienen dick sucken!\r\n', 'Norman *-*', '0000-00-00', 9),
(25, 'ey man', 'was', '0000-00-00', 16),
(26, 'U WOOT M8 I ALREDI IZ', 'Niko', '0000-00-00', 15),
(27, 'op is a fag', 'no', '0000-00-00', 17),
(28, 'i call the police on you m8 get ready to get #rekted', 'op', '0000-00-00', 17),
(29, 'we are just backtracing your ip', 'Cyberpolic', '0000-00-00', 17),
(30, 'we are just backtracing your ip', 'Cyberpolic', '0000-00-00', 17),
(31, 'no pls i just kidding we aint real', 'op', '0000-00-00', 17),
(32, 'spaß i am normen the lover of schwänze', 'raper 56', '0000-00-00', 17),
(33, 'Tahir ndu Kack', '', '0000-00-00', 18),
(34, 'hahaha', 'raper 56', '0000-00-00', 18),
(35, 'karam steht auf 14 jähirge', 'op', '0000-00-00', 18),
(36, 'ich fick euch alle amk\r\n', 'GILETTE AB', '0000-00-00', 13),
(37, 'hahahah gaylord\r\n', '', '0000-00-00', 19),
(38, 'hahahah gaylord\r\n', '', '0000-00-00', 19),
(39, 'here i am rock you like a hurricane\r\n', 'cool dude', '0000-00-00', 20),
(40, 'jettzt', 'test', '0000-00-00', 21),
(41, 'ich bin ein hurensohn', 'karam', '0000-00-00', 21),
(42, 'I suck dicks\r\n', 'Norman', '0000-00-00', 21),
(43, 'i like big dicks and i cannot lie', 'max', '0000-00-00', 21),
(44, 'I liek chocolate milk', 'Batman', '0000-00-00', 21),
(45, 'Spaß dasch uar isch met hurensohn \r\nisch ben ain asshole\r\n', 'Norman', '0000-00-00', 21),
(46, 'was sollen wir machen grad', 'Aufgabe', '0000-00-00', 21),
(47, 'Meine mutter ist Fett', 'Norman', '0000-00-00', 21),
(48, 'Hdf Norman', 'Aufgabe2', '0000-00-00', 21),
(49, 'spaß ich steh selber auf U12\r\n', 'OP', '0000-00-00', 18),
(50, 'fick euch alle', 'wtf', '0000-00-00', 21),
(51, 'i like big dicks and i can not lie*-*', 'Norman', '0000-00-00', 17),
(52, 'Check your privilege, faget', 'Saquatch Platypus', '0000-00-00', 21),
(53, 'fuck off queer faggot', 'moot', '0000-00-00', 24),
(54, 'I\\''m a Tri-Omnipotent-Gender-Queer-Transnigger, that triggers me!', 'Fuck You', '0000-00-00', 24),
(55, 'spaß isch ben´s norman ir errs isch uill schuanz\r\n', 'Hacker Boss', '0000-00-00', 24),
(56, 'mein arsch ist voll leer habt einer von euch eine 17\\" dildo', 'karam', '0000-00-00', 24),
(57, 'main arsh ischt vool lähr habt aina vom eusch eine 17 cm deldu? *0*\r\n', 'Norman', '0000-00-00', 24),
(60, 'fuck off you facking faggot go suck yo mamas tities', 'bitch ass punk', '0000-00-00', 25),
(61, 'i am norman\r\n', 'fuck my ass lan', '0000-00-00', 25),
(63, 'Norman ist sehr hübsch', 'hot chick', '0000-00-00', 22),
(65, 'abooo dankä shön hot chick ish holle mer aine down\r\n', 'norman', '0000-00-00', 22),
(119, '', '', '0000-00-00', 32),
(120, 'hmm funktioniert nicht', '', '0000-00-00', 32),
(121, '', 'mike', '0000-00-00', 33),
(122, 'last test', 'mike', '0000-00-00', 33),
(123, 'ok', '', '0000-00-00', 33),
(124, 'hm', '', '0000-00-00', 32),
(125, 'okaay', '', '0000-00-00', 32),
(126, 'perfekt', '', '0000-00-00', 10),
(127, 'hmm', '', '0000-00-00', 10),
(128, 'hmmmm', '0', '0000-00-00', 10),
(129, 'ok', 'hi', '0000-00-00', 10),
(130, 'und jetzt?', 'hi', '0000-00-00', 10),
(131, 'waait', 'hi', '0000-00-00', 10),
(132, 'ich gebs auf', 'mike', '0000-00-00', 10),
(133, 'jeah', 'norman', '0000-00-00', 33),
(134, 'now my user_id is saved when i post this comment', '1', '0000-00-00', 33),
(67, 'You mean the penis he does not have', '#rekt', '0000-00-00', 26),
(68, '/thread', '', '0000-00-00', 26),
(69, '10/10 would shit again', '', '0000-00-00', 26),
(70, 'norman i luv u', 'big fan', '0000-00-00', 22),
(71, 'ehehehe ich bin ein giraffe eheheheh', 'max', '0000-00-00', 27),
(73, 'Hilfe amk !\r\n', 'GILETTE ABDI', '0000-00-00', 23),
(74, 'ich stechh euch alle ab amk\r\nmacht ma scheiß info', 'Gillet amk', '0000-00-00', 23),
(75, 'hey geh mal schalfen kidner', 'gillette baba', '0000-00-00', 23),
(76, 'ja man danke für die frage reyad', '', '0000-00-00', 23),
(77, 'Erklär mal wie das geht amk !\r\nIch rasier euch alle amk !\r\nIhr Pimmelberger', 'GILETTE ABDI', '0000-00-00', 23),
(78, 'formular erstellen und einfach damit spielen', 'der allwissender', '0000-00-00', 23),
(79, 'amk duibist nicht gillette du bist aller höchstens wegwerfrasierer amk\r\n', '', '0000-00-00', 23),
(80, 'turkish ppl ...', 'smh', '0000-00-00', 29),
(81, 'Keine Ahnung bruder\r\n', 'Ein Hurensohn', '0000-00-00', 23),
(82, 'ey labar mal nicht', 'gilette penisrassierer', '0000-00-00', 23),
(83, 'Ish fieg äusch amk', 'Norman Abdi', '0000-00-00', 23),
(85, 'Karam ist Haram\r\n', 'Karam', '0000-00-00', 9),
(86, 'bahahah was mit ihn', 'duud', '0000-00-00', 30),
(87, 'u mean daniel SPULMITTELman', 'bosh', '0000-00-00', 30),
(89, 'i love norman omg', '', '0000-00-00', 22),
(90, 'hi', '', '0000-00-00', 33),
(91, 'this is a test comment', '', '0000-00-00', 31),
(92, 'this is a test comment', '', '0000-00-00', 31),
(93, 'This a comment posted with the new design', 'Michael', '0000-00-00', 31),
(94, 'Very cool', 'Mike', '0000-00-00', 33),
(95, 'Now i''ve added onClick=window.location.reload() to automatically refresh page after submit', '', '0000-00-00', 33),
(96, 'but it doesn''t work hmm :/', '', '0000-00-00', 33),
(97, 'hi', '', '0000-00-00', 33),
(98, 'new comment', '', '0000-00-00', 33),
(99, 'Does this work?', '', '0000-00-00', 33),
(100, 'Hi', '', '0000-00-00', 33),
(101, 'Yes this works', '', '0000-00-00', 33),
(102, 'But in Chrome it doesnt work', '', '0000-00-00', 33),
(105, 'hey', '', '0000-00-00', 0),
(106, 'hey', '', '0000-00-00', 0),
(107, 'hmm', '', '0000-00-00', 0),
(108, 'hmm', '', '0000-00-00', 0),
(109, 'ok i think this is finished', '', '0000-00-00', 33),
(110, 'now the user login works', '', '0000-00-00', 33),
(111, 'test2', '', '0000-00-00', 33),
(112, 'still works', '', '0000-00-00', 33),
(113, 'hallo', '', '0000-00-00', 32),
(114, 'soo', '', '0000-00-00', 32),
(115, 'hmm', '', '0000-00-00', 32),
(116, 'but now it should work', 'yeah mikechale', '0000-00-00', 32),
(117, 'ehmm yeah', '', '0000-00-00', 32),
(118, 'okaay', '', '0000-00-00', 32);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(150) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Saves date & time of user creation.',
  `user_surname` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='This tabelle contains all user information.';

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_created`, `user_surname`) VALUES
(1, 'mike', '098f6bcd4621d373cade4e832627b4f6', '2015-07-22 00:00:00', 'Michael'),
(2, 'norman', '098f6bcd4621d373cade4e832627b4f6', '2015-07-23 13:38:41', 'Norman');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_post`
--

CREATE TABLE IF NOT EXISTS `user_post` (
  `post_id` int(11) NOT NULL COMMENT 'Unique post id',
  `user_id` int(11) NOT NULL COMMENT 'Posted by user_id',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Post created time',
  `post_content` text COLLATE latin1_general_ci NOT NULL COMMENT 'Content of post'
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Daten für Tabelle `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `time`, `post_content`) VALUES
(1, 1, '2015-07-22 19:57:43', 'Hello Jardyn: I have been expecting you...'),
(2, 1, '2015-07-22 20:23:02', 'New Topic upper righ: to add new post click on the up right'),
(3, 1, '2015-07-22 20:36:26', 'Hola Karam: Kaykay21 ist ein'),
(5, 2, '2015-07-23 15:35:11', 'Jazzimus primmeeee: Elooooo niko sion dnis mac'),
(6, 0, '2015-07-21 16:16:09', 'tahir ist ein spasst: huahahahahahahahahahahahahah'),
(7, 0, '2015-07-22 20:23:21', 'Norman ist ein *****'),
(8, 2, '2015-07-23 15:35:19', 'testing 2: this shouild redirect to front page'),
(9, 0, '2015-07-21 16:16:09', 'Ich bin Karam: Ich bin schwul und ich mag penis meine lieblings farbe ist rosa'),
(10, 0, '2015-07-21 16:16:09', 'Neue Update: Jetzt mit ID und timestamp!'),
(11, 0, '2015-07-21 16:16:09', 'Test new: doh forgot to set to auto'),
(12, 0, '2015-07-21 16:16:09', 'test time: test time'),
(13, 0, '2015-07-21 16:16:09', 'Reyad ein scwuchtel: hahahaha'),
(14, 0, '2015-07-21 16:16:09', 'max du trottle: geh mal pissen'),
(15, 0, '2015-07-21 16:16:09', 'Niko du dickhead: gehmal bongo spielen'),
(16, 0, '2015-07-21 16:16:09', 'Wer das liest ist do: Wer das liest ist dööfer'),
(17, 0, '2015-07-21 16:16:09', 'stop bullying: pls no #realliferealproblems'),
(18, 0, '2015-07-21 16:16:09', 'Tahir du kack: '),
(19, 0, '2015-07-21 16:16:09', 'joshi ist hässlich: geh mal spiegel guecken'),
(20, 0, '2015-07-21 16:16:09', 'New stuff: now comment section works properly'),
(21, 0, '2015-07-21 16:16:09', 'Informatik hier topic: aaaaaaaaa'),
(22, 0, '2015-07-21 16:16:09', 'Norman appreciation thread: gute Kommentare über Norman hier'),
(23, 0, '2015-07-21 16:16:09', 'Informatik aufgabe thread: hier hilfe zur aktueller aufgabe bei ifno gk'),
(24, 0, '2015-07-21 16:16:09', ': Is this the real life?'),
(25, 0, '2015-07-21 16:16:09', 'Is this the real life?: Is this just Fantasy?'),
(26, 0, '2015-07-21 16:16:09', 'Denis mega thread: or should i say penis heheheheh'),
(27, 0, '2015-07-21 16:16:09', 'Huehuehuehuehue: Norman sucks major cock'),
(28, 0, '2015-07-21 16:16:09', 'My cock is too big: Wat do?'),
(29, 0, '2015-07-21 16:16:09', 'BOSS AYSE: Ich weiß etwas was du nicht weißt was ich nicht weiß das macht dich heiß ich beiß in die Chickenwings rein und trinke ne Coke und reim'),
(30, 0, '2015-07-21 16:16:09', 'Daniel Spürman: jajhahahaha'),
(31, 0, '2015-07-21 16:16:09', 'Norman Err: Errrrrrrrrr...'),
(32, 0, '2015-07-21 16:16:09', 'my eir is too big: ohne flax'),
(33, 0, '2015-07-21 16:16:09', 'test: yes test agian');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indizes für die Tabelle `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique comment id',AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique post id',AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
