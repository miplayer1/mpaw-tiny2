-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 04 jan. 2018 à 20:48
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.jpeg',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `posted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author`, `image`, `date`, `posted`) VALUES
(1, 'S\'organiser grâce au bullet journal', '\r\n<p class=\"lettrine\">L\'année dernière, j\'ai fait une dernière tentative en matière d\'organisation.\r\nJ\'avais tout testé : agenda papier, petit format, grand format,en passant par le kakebo, agenda numérique sur le téléphone, sur l\'ordi, synchronisé... vraiment tout.\r\n Mon soucis, c\'est la constance.\r\n  Je suis tombée un jour sur le bullet journal. J\'aimai l\'idée de repasser au papier (c’était après mes déboires avec mes outils numériques ). Mais je n\'avais vraiment aucun espoir...</p>\r\n<h2>Qu\'est ce que c\'est un bullet journal ?</h2>\r\n<p>Le bullet journal, ou bujo pour les initiés, est une sorte d\'agenda que l\'on construit soit même, selon ses besoins. \r\nEt c\'est ça qui fait toute la différence. On part d\'un carnet vierge, et on enchaine les mois. Comme ce sont des pages blanches, on y met ce que l\'on veut. Pour les plus créatifs d\'entre nous, il devient même une petite œuvre d\'art ! Mais quand on découvre tous ces magnifiques carnets, il faut se méfier : sera-t-on à la hauteur ? C\'est une question plutôt paralysante et c\'est très dommage. je ne pense pas que le bullet journal soit pour tout le monde. Mais il est peut être fait pour vous, et ça serait dommage de passer à côté.</p>  \r\n<h2>Pourquoi essayer le bullet journal ?</h2>\r\n<p>Le défi organisationnel que j\'avais, étant à mon compte, était de concilier vie privé et vie professionnelle. Dans mon bullet journal, j\'ai donc mis toute ma vie lol. On y trouve des idées de recettes, des rendez-vous clients, des idées pour le travail, des cartes mentales, des objectifs professionnels, des dessins de mon fils, des notes prises à la volée... Il me sert à tout !</p> \r\n<h2>Comment faire ?</h2>\r\n<img class=\"responsive-img\" src=\"assets/posts/journal.jpeg\" alt=\"\">\r\n<p>Au début, c\'est un peu la panique. Si vous souhaitez vous lancer dans la réalisation de votre bullet journal, vous avez dû découvrir sur le net une sorte de jargon  étrange autour du bujo (future log, clés, collections...). Pas de panique ! derrière ces mots, ce sont des concepts extrêmement simples.</p> \r\n<h3>Pour démarrer un bullet journal, il vous faudra : </h3>\r\n<ul>\r\n<li>Un carnet</li>\r\n<li>Un stylo</li>\r\n</ul>\r\n<p>Et c\'est tout !<br>\r\nLe choix du carnet n\'est pas évident. Mais ce qui importe à mon sens c\'est qu\'il vous plaise. Le mien est <a href=\"https://store.quovadis.eu/fr/notes-et-repertoires/carnets-de-notes/carnet-24-non-ligne-40448.html\" target=\"_blank\" >un carnet noir Quo Vadis </a>avec des pages beiges. La couverture est rigide, il y a un élastique pour le garder fermé et une pochette à l\'intérieur.</p>\r\n<h3>Une fois que vous avez ce fameux carnet, voici la base de ce qu\'il doit contenir : </h3>\r\n<ul>\r\n<li>1 ou 2 pages vides. Puis une page où se trouvera le sommaire de votre carnet, appelé l\'index. A partir de là, on numérote les pages.</li>\r\n<li>Sur la page suivante (l\'important est d\'avoir 2 pages face à face blanches)c\'est un planning annuel appelé future log. Le mien est très très simple : 3 cases par page. J\'ai donc une vision de l\'année en 2x 6mois.</li>\r\n<li>J\'aimerai faire un petit aparté ici : un carnet blanc, c\'est très intimidant. Il faut faire le premier pas et après c\'est parti ! Ne vous mettez pas la pression, votre bullet journal s\'améliorera avec le temps. N\'oublions pas qu\'il s\'agit d\'un outils !</li>\r\n<li>Voilà, on passe ensuite au mois en cours. Janvier, avril, décembre, qu\'importe ! Ce qui est bien avec cet agenda, c\'est qu\'on peut démarrer quand on veut ! \r\nSur une double page face à face : le calendrier du mois et les choses importantes qui le concerne. Le mien est encore une fois très très basic : \r\nsur la page de gauche j\'écris verticalement de 1 à 30/31, devant chaque numéro, j\'écris la première lettre du jour et le reste de la ligne me sert \r\nà mettre mes rendez-vous importants. Et sur la page de droite, je met les focus du mois. Ma page est divisée en 2 : pro/perso.</li>\r\n<li>Et enfin, sur une double page encore, c\'est au tour de la semaine. 7 cases qu\'on organise comme on veut. On peut aller un peut plus loin selon les besoins et faire des pages journalières ensuite.</li>\r\n</ul>\r\n<p>Voilà ! votre bullet journal est lancé ! <br>\r\nEt chaque semaine, on refait la double page. Et on peut même ne pas la faire ! Quand j\'ai la flemme et une semaine très calme, je ne la fais pas... </p>\r\n<p>Vous avez peut être entendu parlé des clés. Ce sont les petits signes que l\'on met devant les tâches (important, fait, reporté...). C\'était la partie compliquée pour moi. Du coup, je l\'ai simplifié : un point devant un évènement (rendez-vous, quelque chose à penser) et un petit carré pour les tâches. Si elle est réalisé, je met un petit check, si c\'est reporté, ça sera une petite flèche.  Ça me suffit. Mais il y a plein d\'autres possibilités sûrement très pertinentes !<p>\r\n<p>Quand vous vous sentirez, vous pourrez passer aux collections ! Un monde magique s\'offre à vous ;) </p>\r\n<h2>Ma Routine bullet journal</h2><img class=\"responsive-img\" src=\"assets/posts/routine.jpeg\" alt=\"\">\r\n<p>C\'est très personnel là encore (et c\'est pour cela qu\'on l\'aime notre bujo !). Je vous donne ma version très minimaliste : </p>\r\n<ul>\r\n<li>Le dimanche soir si je suis motivée ou le lundi matin quand je suis à la bourre (parfois le mercredi...), je prépare la semaine. Je fais mes cases, puis je regarde si dans le planning mensuel, il y a quelque chose de prévu pour cette semaine. Si c\'est le cas, je reporte dans le planning de la semaine. Après, je réfléchi un peu sur ce qu\'il serait important de faire. Je jette un œil sur la semaine précédente pour voir si je n\'aurai oublié quelque chose. (il y a des tâches que je reporte de semaine en semaine...la honte)\r\n</li>\r\n<li>La dernière semaine du mois, je me pose un petit peu pour faire le planning du mois suivant. J\'aime bien cette routine, elle me permet de voir si j\'ai atteint mes objectifs du mois précédent. Je les reporte si besoin/envie. Je regarde sur le planning annuel si des choses sont déjà calées pour le mois et je les met dans mon planning mensuel.\r\n</li>\r\n<li>Et de manière très aléatoire, je me fais une page \"collection\". Et si je suis d\'humeur, je la décore.\r\n</li>\r\n</ul>\r\n<h2>Bujo addict</h2>\r\n<img class=\"responsive-img\" src=\"assets/posts/bullet.jpeg\" alt=\"\">\r\n<p>Après 1 an d\'utilisation, j\'avoue que je suis devenue complètement addict à mon petit carnet noir. C\'est la première fois que je suis assidue avec un agenda. <br>\r\nLes bénéfices ont été très nombreux :</p>\r\n<ul>\r\n<li> Pas d\'oublies (anniversaires, paiement du loyer...)</li>\r\n <li>Un pouvoir d\'anticipation insoupçonné ! Puisque j\'ai mis la sortie scolaire à côté de mon rendez-vous client, ben en sortant, je suis passée prendre de quoi faire la lunchbox du petit. Fini les catastrophes matinales lol </li>\r\n <li>Un sentiment de maitriser un peu plus les choses. Les deadlines semblent arriver moins rapidement. Quand je me sent perdue dans mon activité professionnelle, que je ne sais plus vraiment ce que j\'ai à faire, pas de panique ! J\'ai une collection pour ça. </li>\r\n<li> Le sentiment du travail accompli. Les entrepreneurs connaissent cette impression d\'être improductif. C\'est parfois le cas, c\'est sûr. Mais je viens de parcourir l\'année 2017 de mon bullet journal avant de passer au nouveau. Je n\'ai pas chômé ! Je n\'en avais pas conscience.</li>\r\n<li> Vous connaissez <a href=\"http://fr.harrypotter.wikia.com/wiki/Pensine\" target=\"_blanck\">la Pensine de Dumbledor</a> ? Et bien pour moi,le bullet journal, c\'est exactement ça ! Un lieu où je pose les choses qui encombre mon esprit et ça fait un bien fou !</li>\r\n</ul>\r\n<p>Tout n\'a pas été parfait, bien sûr : </p>\r\n<ul>\r\n<li>J\'ai voulu utiliser ce qu\'on appelle les trackers. Je voulais gérer un peu plus mon budget. Je notais mes dépenses chaque jours. J\'ai tenu 3 semaines... trop contraignant pour moi. Et celui sur mon activité sportive (quasi inexistante) m\'a bien plus déprimé qu\'il était sensé me motiver... </li>\r\n<li>La fin de ce carnet est très anxiogène pour moi. Je ne vais pas me promener avec deux carnets dans mon sac. Il faudrait que je demande à Mme Rowling ce qu\'on fait quand la Pensine est pleine. </li>\r\n<li>J\'y glisse bien trop de documents dedans ! Ça déborde parfois.</li>\r\n<li>Il faudrait que je trouve un moyen d\'accrocher le stylo au carnet. Je perds pas mal de temps à le chercher au fond du sac !</li>\r\n</ul>\r\n<p>Bilan : le bullet journal est fait pour moi ! Je suis bien mieux organisée et productive. Est-il fait pour vous ? Testez :) </p>\r\n<p>Quelques liens utiles : <br><br>\r\n<a href=\"http://bulletjournal.com\" target=\"_blank\" >Site officiel </a>: En anglais mais très simple. Les illustrations aident à démarrer son bullet sans se mettre de pression \"artistique\"<br>\r\n\r\n<a href=\"http://bulletjournal.com/companion/\" target=\"_blank\" >L\'appli</a> pour les inconditionnels du smartphone. Juste pour Apple.<br>\r\nJe vous ai préparé un petit tableau d\'inspiration sur Pinterest : \r\n<br><a data-pin-do=\"embedBoard\" data-pin-lang=\"fr\" data-pin-board-width=\"360\" data-pin-scale-height=\"325\" data-pin-scale-width=\"80\" href=\"https://www.pinterest.fr/mpaweb/inspiration-bullet-journal/\"></a>\r\n</p>\r\n\r\n<p> Bientôt, vous pourrez poster des commentaires ici. Je l\'ai noté dans ma ToDo list du mois de janvier ;)</p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'mylene@mpaw.xyz', 'image-test.jpeg', '2018-01-03 06:00:00', 1),
(2, 'Créer un back office en PHP', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'james@gmail.com', 'post.jpeg', '2017-06-29 16:30:35', 0),
(3, 'Utiliser les variables css', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'lionel@test.com', 'post.jpeg', '2017-07-11 19:44:03', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
