-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Machine: mysql03.hosting.widexs.nl
-- Genereertijd: 14 dec 2016 om 13:54
-- Serverversie: 5.5.40
-- PHP-versie: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `strateradv`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adw_battle_commanders`
--

CREATE TABLE IF NOT EXISTS `adw_battle_commanders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `battle_id` int(11) NOT NULL,
  `commander_id` int(11) NOT NULL,
  `command_id` int(11) NOT NULL,
  `side` enum('english','dutch') NOT NULL,
  `ships` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Gegevens worden uitgevoerd voor tabel `adw_battle_commanders`
--

INSERT INTO `adw_battle_commanders` (`id`, `battle_id`, `commander_id`, `command_id`, `side`, `ships`) VALUES
(1, 1, 1, 2, 'english', 25),
(2, 1, 2, 3, 'dutch', 40),
(3, 2, 3, 2, 'english', 47),
(4, 2, 4, 6, 'dutch', 37),
(5, 3, 1, 2, 'english', 68),
(6, 3, 5, 4, 'dutch', 62),
(7, 4, 1, 2, 'english', 42),
(8, 4, 2, 3, 'dutch', 93),
(9, 5, 1, 2, 'english', 80),
(10, 5, 2, 3, 'dutch', 80),
(11, 6, 6, 7, 'english', 6),
(12, 6, 7, 7, 'english', 8),
(13, 6, 8, 6, 'dutch', 16),
(14, 7, 9, 2, 'english', 50),
(15, 7, 10, 2, 'english', 50),
(16, 7, 2, 3, 'dutch', 49),
(17, 7, 5, 4, 'dutch', 49),
(18, 8, 9, 2, 'english', 120),
(19, 8, 2, 3, 'dutch', 100),
(20, 8, 5, 4, 'dutch', 27),
(21, 9, 11, 1, 'english', 109),
(22, 9, 12, 3, 'dutch', 103),
(23, 10, 13, 4, 'english', 30),
(24, 10, 14, 6, 'dutch', 50),
(25, 11, 9, 2, 'english', 79),
(26, 11, 4, 3, 'dutch', 84),
(27, 12, 15, 2, 'english', 45),
(28, 12, 9, 2, 'english', 45),
(29, 12, 4, 3, 'dutch', 89),
(32, 14, 4, 3, 'dutch', 20),
(33, 14, 17, 3, 'dutch', 20),
(34, 14, 16, 3, 'dutch', 20),
(35, 13, 18, 5, 'english', 8),
(36, 15, 4, 3, 'dutch', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adw_battles`
--

CREATE TABLE IF NOT EXISTS `adw_battles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `year` smallint(4) NOT NULL,
  `war` enum('First','Second','Third','Fourth') NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `winner` enum('english','dutch') NOT NULL,
  `background` text NOT NULL,
  `battle` text NOT NULL,
  `aftermath` text NOT NULL,
  `result` text NOT NULL,
  `ocd_source` varchar(255) NOT NULL,
  `ocd_id` varchar(255) NOT NULL,
  `x_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Gegevens worden uitgevoerd voor tabel `adw_battles`
--

INSERT INTO `adw_battles` (`id`, `name`, `year`, `war`, `lat`, `lng`, `winner`, `background`, `battle`, `aftermath`, `result`, `ocd_source`, `ocd_id`, `x_id`) VALUES
(1, 'Battle of Goodwin Sands', 1652, 'First', '51.27400000', '1.50800000', 'english', '<p>\r\n The English Parliament had passed the first of the Navigation Acts in October 1651, aimed at hampering the shipping of the highly trade-dependent Dutch. Agitation among the Dutch merchants had been further increased by George Ayscue&#39;s capture in early 1652 of 27 Dutch ships trading with the royalist colony of Barbados in contravention of an embargo. Both sides had begun to prepare for war, but conflict might have been delayed if not for an unfortunate encounter on 29 May 1652 (19 May in the Julian calendar then in use in England) near the Straits of Dover between a Dutch convoy escorted by 40 ships under Lieutenant-Admiral Maarten Tromp and an English fleet of 25 ships under General-at-Sea Robert Blake.</p>\r\n', '<p>\r\n An ordinance of Cromwell required all foreign fleets in the North Sea or the Channel to dip their flag in salute, but when Tromp did not comply because he saw no reason to lower his flag for the English, Blake fired three warning shots. When the third hit his ship, wounding some sailors, Tromp replied with a warning broadside from his flagship <em>Brederode</em>. Blake then fired a broadside in anger and a five-hour battle ensued.</p>\r\n', '<p>\r\n Both fleets were damaged, but as darkness fell the Dutch fleet withdrew in a defensive line to protect the convoy, and the English captured two Dutch stragglers: Sint Laurens, which was taken back by them but not used, and Sint Maria, which was abandoned in a sinking condition and later made its way to the Netherlands. Tromp then offered his excuses to Blake and asked for the return of the prize, but this was refused by Blake.</p>\r\n<p>\r\n War was declared by the Commonwealth on 10 July 1652.</p>\r\n', '<p>\r\n Both fleets were damaged, but as darkness fell the Dutch fleet withdrew in a defensive line to protect the convoy, and the English captured two Dutch stragglers: <em>Sint Laurens</em>, which was taken back by them but not used, and <em>Sint Maria</em>, which was abandoned in a sinking condition and later made its way to the Netherlands.</p>\r\n', '', '', 5),
(2, 'Battle of Plymouth', 1652, 'First', '49.96400000', '-4.21000000', 'dutch', '<p>\r\n On 19 July De Ruyter was appointed Vice-Commodore, an originally Dutch creation between Captain and Rear-Admiral, with the confederate Dutch fleet and shortly after took over command, in the absence of Vice-Admiral Witte de With, of a squadron assembling in the Wielingen, off the coast of Zealand, to escort a large convoy. Around 10 August, De Ruyter took sea before the merchantmen had arrived, to seek out an English fleet of forty ships, commanded by Ayscue, which he knew had left The Downs on 19 July.</p>\r\n<p>\r\n Reaching the English Channel, he soon discovered that Ayscue was not interested in fighting the Dutch squadron, but avoided it in the hope of intercepting the convoy. To lure Ayscue out De Ruyter started to cruise off the coast of Sussex, causing an uproar with the local population, but Ayscue, despite his fleet having grown to 42 ships, did not react.</p>\r\n', '<p>\r\n On 15 August, the English spotted the Dutch fleet off the coast of Plymouth, and took sea. Ayscue the next day, off the coast of Brittany, around 13:30 attempted a direct attack from the north against the convoy, having the weather gauge. He hoped it would scatter, allowing him to capture some very profitable prizes, but De Ruyter unexpectedly separated his naval squadron and changed course to meet Ayscue&rsquo;s attack, shielding the merchantmen. Ayscue&rsquo;s ships were on average more heavily armed, but extremely disorganised because the fastest vessels, among them Ayscue&#39;s flagship the George and the Vanguard of his vice-admiral William Haddock, had broken formation in the hope of catching, during a running battle, straggling Dutch merchantmen; they were now unable to form a line of battle and fully exploit their advantage in firepower over the Dutch.</p>\r\n<p>\r\n The largest Dutch vessel, the Dutch East India Company warship <i>Vogelstruys</i>, by Dutch standards heavily armed with a lower tier of 18-pounders, got separated from the rest of the Dutch fleet and was attacked by three English ships at once and boarded. Her crew was close to surrendering when her captain, the Frisian Douwe Aukes, threatened to blow her up first. Faced with this alternative the crew rallied, drove off the English boarding team and put up such a fight that the English vessels, much damaged and two even in a sinking condition, broke off the attack. The Dutch employed their favourite tactic of disabling enemy vessels by firing at their masts and rigging with chain shot; at the end of the afternoon Ayscue, feeling rather unsupported, decided to break off the unsuccessful engagement and to retreat to Plymouth to repair his ships before any became so damaged they would be captured. The <i>Bonadventure</i> could only disengage after an English fireship, the <i>Charity</i> commanded by Captain Simon Orton, set itself alight and frightened off the attacking Dutch vessels.De Ruyter in his journal concluded:</p>\r\n<dl>\r\n <dd>\r\n  <i>If our fireships had been with us &mdash; they remained leeward &mdash; we would with the help of God have routed the enemy; but praised be God who has blessed us in that our enemy fled by himself, though 45 sails strong and of great force</i></dd>\r\n</dl>\r\n<p>\r\n Neither side lost a warship, but both sides suffered heavy casualties among their crews.</p>\r\n', '<p>\r\n The English ships had expected to easily defeat the Dutch in a set battle because of their superiority in armament and numbers. While the failure came as an unpleasant surprise to the English, the Dutch populace rejoiced in the tactical draw, hailing De Ruyter, who had not been well known among the larger public, as a naval hero. The English accused some merchantmen captains of cowardice. Ayscue was blamed for poor leadership and organisation: his attempt to present the encounter as a victory failed to convince. He lost command after this battle, though probably for political reasons: he had known royalist sympathies. Less important was his emphasis on capturing prizes while avoiding battle; in the first year of the war this was a very common attitude, the English mainly seeing the conflict as one large privateering campaign, allowing them to gain riches at the expense of the Dutch; only with the Battle of the Gabbard would they really try to establish naval dominion.</p>\r\n<p>\r\n This victory was very important to the naval career of De Ruyter: it was the first time he commanded an independent force as a fleet commander. Before, he only had had subcommand of a flotilla aiding Portugal in 1641. As a result of the battle he acquired the nickname <em>The Sea Lion</em>. Before he could return home, De Ruyter was first involved in the Battle of the Kentish Knock but arriving in Middelburg he was received by the States of Zealand and rewarded with a golden honorary chain of a hundred Flemish pounds for both battles because he in the first had shown &quot;masculine courage&quot; and in the second &quot;courageous prudence&quot; &mdash; having convinced Witte de With to a timely retreat.</p>\r\n', '<p>\r\n Neither side lost a warship, but both sides suffered heavy casualties among their crews. The Dutch had about sixty dead and fifty wounded. The reports on the English losses differ: one set the number as high as seven hundred casualties including the wounded (most from the failed attack on the <em>Vogelstruys</em>), another mentioned 91 dead, among them Ayscue&#39;s flag captain Thomas Lisle.</p>\r\n', 'rijksmuseum', 'dfc2a6e4c9198ae10f23feedbbdd30cb87c8d321', 0),
(3, 'Battle of the Kentish Knock', 1652, 'First', '51.50000000', '1.20000000', 'english', '<p>\r\n Dutch Lieutenant-Admiral Maarten Tromp had been suspended by the States-General of the Netherlands after his failure to bring the English to battle off the Shetland Islands in August, and replaced as supreme commander of the confederate Dutch fleet by the Hollandic Vice-Admiral Witte de With of the Admiralty of the Maze.<br />\r\n <br />\r\n De With, having for months advocated a more aggressive naval policy aimed at destroying the enemy fleet instead of passively defending the merchant convoys against English attack, now saw an opportunity to concentrate his forces, joining the squadron of Vice-Commodore Michiel de Ruyter, and gain control of the seas. De Ruyter suggested that under the circumstances it was better to simply keep luring away the English from merchant fleets while declining to really fight, but De With insisted on delivering a decisive battle, stating: &quot;I shall lustily lead the fleet to the enemy; the devil may bring it back again!&quot;.</p>\r\n', '<p>\r\n When the fleets finally met on 28 September, the United Provinces had 62 ships and about 1,900 cannon and 7,000 men; the Commonwealth of England 68 ships under General at Sea Robert Blake with about 2,400 cannon and 10,000 men. The van of the Dutch fleet was to be commanded by Michiel de Ruyter, the centre by De With himself and the rear by temporary Rear-Admiral Gideon de Wildt of the Admiralty of Amsterdam.<br />\r\n <br />\r\n Blake intended to break the Dutch line, but on the approach of the English fleet the mass of Dutch ships began to give way to the east. At the same time the wind slackened considerably. As a result both fleets slowly passed each other in opposite tack. This was very unfavourable for the Dutch; normally being in a leeward position would have given them a longer range, but with such gentle winds this advantage was absent while the English ships were larger and better armed than their opponents, inflicting severe damage.</p>\r\n<p>\r\n The next day, early in the morning, about ten Dutch ships, mostly commanded by captains from Zealand who resented the domination of Holland and severely disliked De With, had broken off the engagement and simply sailed home. This is usually attributed to the fact that De With in the battle council in the morning of the second day had called all Zealandic captains cowards and had warned them that in Holland there was still sufficient wood left to erect gallows for any of them. The situation had become hopeless for the Dutch who now had 49 ships left in their fleet while the English fleet had during the night been reinforced to 84, yet De With still wanted to make a last effort.<br />\r\n <br />\r\n On his directions the Dutch fleet, now positioned to the southeast of the English force, sailed farther south in the hope of gaining the weather gauge. This design failed however: first some ships, with difficulty beating up the wind, coursed too far to the west and were badly mauled by the fire of the English rear; and hardly had the Dutch fleet moved to its intended position when it all proved to have been in vain because the wind turned to the northeast, giving the English the weather gauge again. Michiel de Ruyter and Cornelis Evertsen now managed to convince De With to accept the inevitable and the Dutch fleet late in the afternoon withdrew to the east followed by Blake; as De With angrily described it: &quot;like a herd of sheep fleeing the wolves&quot;. Assisted by a westerly De With and De Ruyter nicely covered the retreat with a dozen ships and the Dutch would not lose any more vessels.<br />\r\n <br />\r\n The English fleet halted its pursuit when the Flemish shoals were reached; De With now decided to quickly repair the fleet at sea in the Wielingen basin and then make another attempt at defeating the enemy. This order was met with utter disbelief by his fellow flag officers. De Ruyter tactfully pointed out: &quot;Such courage is too perilous&quot;. Understanding he was alone in his opinion De With at last agreed to withdraw the fleet to Hellevoetsluis, where it arrived on 2 September (12 October).</p>\r\n', '<p>\r\n The Dutch recognized after their defeat that they needed larger ships to take on the English, and instituted a major building program that never really came to pass until the Second Anglo-Dutch War. According to De With this, besides a lack of a sufficient number of fireships, had been the main cause of the Dutch failure; he pointed out that many a light English frigate could outshoot the average Dutch warship. However according to public opinion there was only one to blame for the defeat: De With himself.<br />\r\n <br />\r\n The same evening of the 12th the States-General learned of the defeat, they sent a letter to both Tromp and Johan Evertsen, asking them to return.<br />\r\n <br />\r\n The English believed that the Dutch had been all but defeated, and sent twenty ships away to the Mediterranean, a mistake that led to a defeat at the Battle of Dungeness but didn&#39;t prevent the defeat of the not yet reinforced English Mediterrenean fleet at the Battle of Leghorn. In the former battle the Dutch were led again by Tromp; De With had suffered a mental breakdown and would be officially replaced as supreme commander in May 1653.</p>\r\n', '<p>\r\n Blake intended to break the Dutch line, but on the approach of the English fleet the mass of Dutch ships began to give way to the east. At the same time the wind slackened considerably. As a result both fleets slowly passed each other in opposite tack. This was very unfavourable for the Dutch; normally being in a leeward position would have given them a longer range, but with such gentle winds this advantage was absent while the English ships were larger and better armed than their opponents, inflicting severe damage.</p>\r\n', 'rijksmuseum', '590e81be4bfe80b64618ccfc3b4f9bd541524bbc', 0),
(4, 'Battle of Dungeness', 1652, 'First', '50.99777800', '0.99416700', 'dutch', '<p>\r\n In September 1652 the English government, mistakenly believing that the United Provinces after their defeat at the Battle of the Kentish Knock would desist from bringing out a fleet so late in the season, sent away ships to the Mediterranean. This left the English badly outnumbered in home waters. Meanwhile the Dutch were making every effort to reinforce their fleet.</p>\r\n', '<p>\r\n On 21 November 1652 Lieutenant-Admiral Maarten Tromp, again (unofficial) supreme commander after his successor Vice-Admiral Witte de With had suffered a breakdown because of his defeat at the Battle of the Kentish Knock, set sail from Hellevoetsluis with 88 men of war and 5 fireships, escorting a vast convoy bound for the Indies. With the convoy safely delivered through the Straits of Dover, Tromp turned in search of the English, and on 29 November 1652 he encountered the English fleet of 42 ships commanded by General at Sea Robert Blake. The English promptly left their anchorage in the Downs, either because Blake did not realize how large the Dutch fleet was, or he did not want to become trapped like the Spanish had some years earlier in the Battle of the Downs. The wind was now strong from the north-west, so the English could not return to the Downs in either case, having to settle for Dover. Next morning, the two fleets moved south-west, with the English hugging the coast and the Dutch unable to engage until the curve of the shoreline forced the English to turn on a southerly course. At about 15:00, near the cape of Dungeness, the leading ships of both fleets met in a &quot;bounteous rhetoric of powder and bullet&quot; (according to a contemporary account).</p>\r\n<p>\r\n The wind prevented a large part of the Dutch fleet from engaging Blake, whose fleet by nightfall had lost five ships of which the Dutch captured two, and damaged many more. The Dutch lost one ship through fire. Blake retreated under cover of darkness to his anchorage in the Downs. Tromp could not be satisfied with the result however as the Dutch had missed an opportunity to annihilate the English.</p>\r\n', '<p>\r\n The battle resulted in several reforms in the English Fleet. Part of Blake&#39;s force consisted of impressed merchant vessels that retained their civilian captains. Many of them refused to participate in the battle. Some naval captains insisted on their traditional right to enter and leave the battle at times of their choosing, and to leave formation in order to secure any prize. Blake threatened to resign if something was not done. The Lords Commissioners of the Admiralty responded by:</p>\r\n<ul>\r\n <li>\r\n  requiring all impressed vessels to be under the command of captains appointed by the navy;</li>\r\n <li>\r\n  dividing the fleet into squadrons under junior flag officers for better command and control;</li>\r\n <li>\r\n  issuing Sailing and Fighting Instructions which significantly enhanced an admiral&#39;s authority over his fleet.</li>\r\n</ul>\r\n<p>\r\n The victory gave the Dutch temporary control of the English Channel and so control of merchant shipping. A legend says that Tromp attached a broom to his mast as a sign that he had swept the sea clean of his enemies, but in his book The Command of the Ocean, N.A.M. Roger doubts the legend as such a boasting action would have been out of character for Tromp. Additionally, at the time, a broom attached to a mast was the way of showing that a ship was for sale. Also Dutch contemporaneous sources make no mention of it. The battle not only showed the folly of dividing forces while the Dutch still possessed a large fleet in home waters, but exposed &quot;much baseness of spirit, not among the merchantmen only, but many of the state&#39;s ships&quot;. It seemed that the captains of hired merchant ships were reluctant to risk their vessels in combat, while the state&#39;s ships lacked the men to sail and fight them.</p>\r\n', '<p>\r\n The wind prevented a large part of the Dutch fleet from engaging Blake, whose fleet by nightfall had lost five ships of which the Dutch captured two, and damaged many more. The Dutch lost one ship through fire. Blake retreated under cover of darkness to his anchorage in the Downs.</p>\r\n', 'rijksmusuem', '1886e9580d94de0776ba5e131b8feda7f0b3145e', 0),
(5, 'Battle of Portland', 1653, 'First', '50.40000000', '-2.50000000', 'dutch', '', '', '', '', 'rijksmuseum', '26644870f3a07bc77b74c69bac91a6e36836e113', 0),
(6, 'Battle of Leghorn', 1653, 'First', '43.55000000', '10.31666700', 'dutch', '', '', '', '', 'rijksmuseum', '9bdfafdff6bf4f43e27987770d7e4d378e145671', 0),
(7, 'Battle of the Gabbard', 1653, 'First', '51.95000000', '1.75000000', 'english', '', '', '', '', '', '', 7),
(8, 'Battle of Scheveningen', 1653, 'First', '52.10833300', '4.27777800', 'english', '<p>\r\n After their victory at the Battle of the Gabbard in June 1653, the English fleet of 120 ships under General at Sea George Monck blockaded the Dutch coast, capturing many merchant vessels. The Dutch economy began to collapse immediately: mass unemployment and even starvation set in. On 24 July (3 August Gregorian calendar), Dutch Lieutenant-Admiral Maarten Tromp put to sea in the Brederode with a fleet of 100 ships to lift the blockade at the island of Texel, where Vice-Admiral Witte de With&#39;s 27 ships were trapped by the English. On 8 August, the English sighted Tromp and pursued to the south, sinking two Dutch ships before dark, but allowing De With to slip out and rendezvous the next day with Tromp off Scheveningen, right next to the small village of Ter Heijde, after Tromp had positioned himself by some brilliant manoeuvering to the north of the English fleet.</p>\r\n', '<p>\r\n The winds were fierce on 30 July and overnight, giving both fleets pause. Around 7 in the morning of 31 July, the Dutch gained an advantage from the weather and attacked, led by the Brederode. The ensuing battle was ferocious, with both fleets moving through each other four times. Tromp was killed early in the fight by a sharpshooter in the rigging of William Penn&#39;s ship. His death was kept secret to keep up the morale of the Dutch, but by late afternoon, twelve of their ships had either been sunk or captured and many were too heavily damaged to continue the fight. In the end, morale broke and a large group of vessels under the command of merchant captains fled to the north. De With tried to halt their flight, but had to limit himself to covering the retreat to the island of Texel. However, the English fleet, also heavily damaged and with many wounded in urgent need of treatment, had to return to port to refit and were unable to maintain the blockade.</p>\r\n', '<p>\r\n Both sides claimed a victory: the English because of their tactical superiority, the Dutch because the strategic goal of their attack, the lifting of the blockade, had been achieved. However, Tromp&#39;s death was a severe blow to the Dutch &ndash; few now expected to beat the English; the Orangist faction lost political influence and Grand Pensionary Johan de Witt was willing to give formal treaty assurances to Cromwell that the infant William III of Orange would never become stadtholder, thus turning the Netherlands into a base for a Stuart restoration. Peace negotiations began in earnest, leading to the 1654 Treaty of Westminster.</p>\r\n<p>\r\n The damage done to the Dutch fleet effectively ended the first war. The Dutch capitulated to several English demands.</p>\r\n', '<p>\r\n Both sides claimed a victory: the English because of their tactical superiority, the Dutch because the strategic goal of their attack, the lifting of the blockade, had been achieved. However, Tromp&#39;s death was a severe blow to the Dutch &ndash; few now expected to beat the English</p>\r\n', 'rijksmuseum', 'fb7b5ca79c2f66303dcc0a03ea0f57c1647c4f18', 0),
(9, 'Battle of Lowestoft', 1665, 'Second', '52.05000000', '2.40000000', 'english', '', '', '', '', '', '', 8),
(10, 'Battle of Vågen', 1665, 'Second', '60.39777800', '5.31722200', 'dutch', '', '', '', '', 'rijksmuseum', 'e9306f2ebdea6ce2bfac9a3a99c78964b231c5ed', 0),
(11, 'Four Days'' Battle', 1666, 'Second', '51.40000000', '2.00000000', 'dutch', '', '', '', '', 'rijksmusuem', '5b463f3dc1b8e3b52eaac8cbda8e636d0f480657', 0),
(12, 'St James'' Day Battle', 1666, 'Second', '51.36700000', '1.60000000', 'english', '', '', '', '', 'rijksmuseum', '9531fba9925d029031be93e97c15886543426a36', 0),
(13, 'Holmes''s Bonfire', 1666, 'Second', '53.36083300', '5.21555600', 'english', '', '', '', '', 'rijksmusuem', 'e2b916540f41a624dfaff117084d79157e195502', 0),
(14, 'Raid on the Medway', 1667, 'Second', '51.40390000', '0.53194400', 'dutch', '', '', '', '', 'rijksmusuem', 'c03c541be33a4b961b642eacf3ae2e0e77455758', 0),
(15, 'Battle of Landguard Fort', 1667, 'Second', '51.93888600', '1.32111000', 'english', '', '', '', '', '', '', 0),
(16, 'Battle of Solebay', 1672, 'Third', '52.40000000', '1.80000000', 'dutch', '', '', '', '', 'rijksmusuem', '95fe5f48832513c06f31a7b0368aaaff0479d30e', 0),
(17, 'Battle of Schooneveld', 1673, 'Third', '51.43080000', '3.52890000', 'dutch', '', '', '', '', 'rijksmusuem', 'cea4f32b21183546defa4e1106957556a0e37983', 0),
(18, 'Battle of Texel', 1673, 'Third', '53.15000000', '4.60000000', 'dutch', '', '', '', '', 'rijksmusuem', 'f425d4f2af36b017bcf4bcab99d2b76ad8e0dfc5', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adw_command`
--

CREATE TABLE IF NOT EXISTS `adw_command` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `command` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `adw_command`
--

INSERT INTO `adw_command` (`id`, `command`) VALUES
(1, 'Lord High Admiral '),
(2, 'General-at-Sea'),
(3, 'Lieutenant-Admiral'),
(4, 'Vice-Admiral'),
(5, 'Rear-Admiral'),
(6, 'Commodore'),
(7, 'Captain');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adw_commanders`
--

CREATE TABLE IF NOT EXISTS `adw_commanders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `ocd_source` varchar(255) NOT NULL,
  `ocd_id` varchar(255) NOT NULL,
  `x_id` int(11) NOT NULL DEFAULT '0',
  `death_battle_id` int(11) NOT NULL,
  `death_ocd_source` varchar(255) NOT NULL,
  `death_ocd_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Gegevens worden uitgevoerd voor tabel `adw_commanders`
--

INSERT INTO `adw_commanders` (`id`, `name`, `avatar`, `nationality`, `ocd_source`, `ocd_id`, `x_id`, `death_battle_id`, `death_ocd_source`, `death_ocd_id`) VALUES
(1, 'Robert Blake', 'rblake.jpg', 'english', '', '', 1, 0, '', ''),
(2, 'Maarten Tromp', 'mtromp.jpg', 'dutch', 'rijksmuseum', '5ffc655f54feb298ee989b7208237a8ffe3d4252', 0, 8, 'amsterdammuseum', 'a809206e20a8e9b3c9be5d8fdd058ae76d0c05b1'),
(3, 'George Ayscue', 'gayscue.jpg', 'english', '', '', 2, 0, '', ''),
(4, 'Michiel de Ruyter', 'mderuyter.jpg', 'dutch', 'rijksmuseum', 'c82ba5d5217bdb392ad9c5259004b9c99636cf5a', 0, 0, '', ''),
(5, 'Witte de With', 'wdewith.jpg', 'dutch', 'rijksmuseum', 'a60a28f29a11dee5f507e3468392d08bdaa75baa', 0, 0, '', ''),
(6, 'Henry Appleton', 'unknown.jpg', 'english', '', '', 0, 0, '', ''),
(7, 'Richard Badiley', 'unknown.jpg', 'english', '', '', 0, 0, '', ''),
(8, 'Johan van Galen', 'jvangalen.jpg', 'dutch', 'rijksmuseum', '84855f71bae8785bc203fc3a14ae68fe44abe2d0', 0, 0, '', ''),
(9, 'George Monck', 'gmonck.jpg', 'english', '', '', 3, 0, '', ''),
(10, 'Richard Deane', 'rdeane.jpg', 'english', '', '', 4, 0, '', ''),
(11, 'James Stuart', 'jstuart.jpg', 'english', 'rijksmuseum', '3c8ffdfd2505a8d756d3a0ab461861e7d99bc34c', 0, 0, '', ''),
(12, 'Jacob van Wassenaer Obdam', 'jobdam.jpg', 'dutch', 'rijksmuseum', '8a5b24ac879fcab3135d9383bfe1a5fce76b4a06', 0, 9, 'rijksmuseum', 'cef09fe8a2a45a876d055e73e6dc805c002d105a'),
(13, 'Thomas Teddiman', 'tteddiman.jpg', 'english', '', '', 0, 0, '', ''),
(14, 'Pieter de Bitter', 'pdebitter.jpg', 'dutch', '', '', 0, 0, '', ''),
(15, 'Prince Rupert', 'unknown.jpg', 'english', 'rijksmuseum', 'ae849a93b27fde20ad59a266fdacd31af80969c5', 0, 0, '', ''),
(16, 'Willem Joseph van Ghent', 'unknown.jpg', 'dutch', '', '', 0, 0, '', ''),
(17, 'Aert Jansse van Nes', 'unknown.jpg', 'dutch', 'rijksmuseum', '3ebc6e01c93ecbf92707c493d252fd916f5c3e0b', 0, 0, '', ''),
(18, 'Robert Holmes', 'unknown.jpg', 'english', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adw_users`
--

CREATE TABLE IF NOT EXISTS `adw_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `adw_users`
--

INSERT INTO `adw_users` (`id`, `username`, `password`) VALUES
(4, 'frank', '$2a$09$GrOrPI29nEqI8eBT81G1.eTQnL0v9pYNiP47c7okRMiSMlYWoA8eK');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adw_wars`
--

CREATE TABLE IF NOT EXISTS `adw_wars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `adw_wars`
--

INSERT INTO `adw_wars` (`id`, `name`, `description`) VALUES
(1, 'First', '<p>\r\n To protect its position in North America, in October 1651 the Parliament of the Commonwealth of England passed the first of the Navigation Acts, which mandated that all goods imported into England must be carried by English ships or vessels from the exporting countries, thus excluding (mostly Dutch) middlemen. This typical mercantilist measure as such did not hurt the Dutch much as the English trade was relatively unimportant to them, but it was used by the many pirates operating from British territory as an ideal pretext to legally take any Dutch ship they encountered. The Dutch responded to the growing intimidation by enlisting large numbers of armed merchantmen into their navy. The English, trying to revive an ancient right they perceived they had to be recognised as the &#39;lords of the seas&#39;, demanded that other ships strike their flags in salute to their ships, even in foreign ports. On 29 May 1652, Lieutenant-Admiral Maarten Tromp refused to show the respectful haste expected in lowering his flag to salute an encountered English fleet. This resulted in a skirmish, the Battle of Goodwin Sands, after which the Commonwealth declared war on 10 July.<br />\r\n <br />\r\n After some inconclusive minor fights the English were successful in the first major battle, General at Sea Robert Blake defeating the Dutch Vice-Admiral Witte de With in the Battle of the Kentish Knock in October 1652. Believing that the war was all but over, the English divided their forces and in December were routed by the fleet of Lieutenant-Admiral Maarten Tromp at the Battle of Dungeness in the English Channel. The Dutch were also victorious in March 1653 at the Battle of Leghorn near Italy and had gained effective control of both the Mediterranean and the English Channel. Blake, recovering from an injury, rethought, together with George Monck, the whole system of naval tactics, and after the winter of 1653 used the line of battle, first to drive the Dutch navy out of the English Channel in the Battle of Portland and then out of the North Sea in the Battle of the Gabbard. The Dutch were unable to effectively resist as the States General of the Netherlands had not in time heeded the warnings of their admirals that much larger warships were needed. In the final Battle of Scheveningen on 10 August 1653 Tromp was killed, a blow to Dutch morale, but the English had to end their blockade of the Dutch coast. As both nations were by now exhausted and Cromwell had dissolved the warlike Rump Parliament, ongoing peace negotiations could be brought to fruition, albeit after many months of slow diplomatic exchanges.<br />\r\n <br />\r\n The British captured about 1200 to 1500 Dutch merchant ships. The war ended on 5 April 1654 with the signing of the Treaty of Westminster (ratified by the States General on 8 May), but the commercial rivalry was not resolved, the English having failed to replace the Dutch as the world&#39;s dominant trade nation. The treaty contained a secret annexe, the Act of Seclusion, forbidding the infant Prince William III of Orange from becoming stadtholder of the province of Holland, which would prove to be a future cause of discontent. In 1653 the Dutch had started a major naval expansion programme, building sixty larger vessels, partly closing the qualitative gap with the English fleet. Cromwell, having started the war against Spain without Dutch help, during his rule avoided a new conflict with the Republic, even though the Dutch in the same period defeated his Portuguese and Swedish allies.</p>\r\n'),
(2, 'Second', '<p>\r\n After the English Restoration in 1660, Charles II tried to serve his dynastic interests by attempting to make Prince William III of Orange, his nephew, stadtholder of The Republic, using some military pressure. This led to a surge of patriotism in England, the country being, as Samuel Pepys put it, &quot;mad for war&quot;. King Charles promoted a series of anti-Dutch mercantilist policies, expecting that advancing British trade and shipping would strengthen their political and financial position. British merchants and chartered companies, such as the East India Company, Royal Adventurers Trading into Africa, and Levant Company, calculated that economic primacy could be seized from the Dutch. They figured that a combination of English naval force and privateering would cripple the Dutch Republic and force the States General to agree to a favourable peace.<br />\r\n <br />\r\n This war, provoked in 1664, contained quite a few great English victories in battle such as James II&#39;s taking of the Dutch colony of New Netherland (present day New York), but also Dutch victories, such as the capture of the Prince Royal during the Four Days Battle in 1666 which was the subject of a famous painting by Willem van de Velde. However, the Raid on the Medway, in June 1667, ended the war with a Dutch victory. It is considered one of the most humiliating defeats in British military history: a flotilla of ships led by Admiral de Ruyter sailed up the river Thames, broke through the defensive chains guarding the Medway, burned part of the English fleet docked at Chatham and towed away the Unity and the Royal Charles, pride and normal flagship of the English fleet. The greatly expanded Dutch navy was for numerous years after the world&#39;s strongest. The Dutch Republic was at the zenith of its power.<br />\r\n <br />\r\n The British managed to capture about 450 Dutch merchantmen, far fewer than they expected. In 1665 many Dutch ships were intercepted, and Dutch trade and industry was hurt. The Dutch soon recovered as Dutch traders took precautions and benefited from the absence of the English fleet. Dutch maritime trade recovered from 1666 onward, but English commercial interests were badly hurt and King Charles faced virtual bankruptcy.<br />\r\n <br />\r\n The Dutch success made a major psychological impact throughout England, with London feeling especially vulnerable just a year after the Great Fire (which was generally interpreted in the Dutch Republic as divine retribution for Holmes&#39;s Bonfire). This, together with the cost of the war, of the Great Plague and the extravagant spending of Charles&#39;s court, produced a rebellious atmosphere in London. Clarendon ordered the English envoys at Breda to sign a peace quickly, as Charles feared an open revolt.</p>\r\n'),
(3, 'Third', ''),
(4, 'Fourth', '<p>\r\n The Glorious Revolution of 1688 ended the 17th century conflict by placing Prince William III of Orange on the English throne as co-ruler with his wife Mary. This proved to be a pyrrhic victory for the Dutch cause. William&#39;s main concern had been getting the English on the same side as the Dutch in their competition against France. After becoming King of England, he granted many privileges to the English navy in order to ensure their loyalty and cooperation. William ordered that any Anglo-Dutch fleet be under English command, with the Dutch navy having 60% of the strength of the English.<br />\r\n <br />\r\n The Dutch merchant elite began to use London as a new operational base. Dutch economic growth slowed. From about 1720 Dutch wealth ceased to grow. Around 1780 the per capita gross national product of the Kingdom of Great Britain surpassed that of the Dutch. Whereas in the 17th century the commercial success of the Dutch had inspired English jealousy and admiration, in the late 18th century the growth of British power, and the concurrent loss of Amsterdam&#39;s preeminence, led to Dutch resentment. When the Dutch Republic began to support the American rebels, this led to the fourth war, and the loss of the alliance made the Dutch Republic fatally vulnerable to the French. Soon it would be subject to regime change itself.<br />\r\n <br />\r\n The Dutch navy was by now only a shadow of its former self, having only about twenty ships of the line, so there were no large fleet battles. The British tried to reduce the Republic to the status of a British protectorate, using Prussian military pressure and gaining factual control over the Dutch colonies, those conquered during the war given back at war&#39;s end. The Dutch then still held some key positions in the European trade with Asia, such as the Cape Colony, Ceylon and Malacca. The war sparked a new round of Dutch ship building (95 warships in the last quarter of the 18th century), but the British kept their absolute numerical superiority by doubling their fleet in the same time.<br />\r\n <br />\r\n Although this war is technically an Anglo-Dutch war (as it was between Britain and the Netherlands), many respectable historians, such as Steven Pincus, argue that this later war stemmed from completely different causes and therefore should not be included in a discussion of these earlier wars.</p>\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adw_xobjects`
--

CREATE TABLE IF NOT EXISTS `adw_xobjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` smallint(4) NOT NULL,
  `rights` varchar(255) NOT NULL,
  `collection` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `adw_xobjects`
--

INSERT INTO `adw_xobjects` (`id`, `title`, `author`, `year`, `rights`, `collection`, `url`) VALUES
(1, 'Robert Blake, General at Sea (1599-1657)', 'Henry Perronet Briggs', 1829, '©', 'National Maritime Museum, Greenwich, London, Greenwich Hospital Collection', 'Robert_Blake.jpg'),
(2, 'Flagmen of Lowestoft: Admiral Sir George Ayscue (active 1646-1671)', 'Sir Peter Lely', 1665, '©', 'National Maritime Museum, Greenwich, London, Greenwich Hospital Collection', 'George_Ayscue.jpg'),
(3, 'Flagmen of Lowestoft: George Monck, 1st Duke of Albemarle (1608-1670)', 'Sir Peter Lely', 1665, '&copy;', 'National Maritime Museum, Greenwich, London, Greenwich Hospital Collection', 'George_Monck.jpg'),
(4, 'Richard Deane, General at Sea (1610-1653)', 'Robert Walker', 1653, '&copy;', 'National Maritime Museum, Greenwich, London', 'Richard_Deane.jpg'),
(5, 'The ''Brederode'' off Hellevoetsluis', 'Simon de Vlieger', 1652, '&copy;', 'National Maritime Museum, Greenwich, London', 'Brederode.jpg'),
(6, 'Action between ships in the First Dutch War, 1652-1654', 'Abraham Willaerts', 1654, '&copy;', 'National Maritime Museum, Greenwich, London', 'Kentish_Knock.jpg'),
(7, 'The Battle of the Gabbard', 'Heerman Witmont', 1653, '&copy;', 'National Maritime Museum, Greenwich, London, Caird Collection', 'Gabbard.jpg'),
(8, 'The Battle of Lowestoft', 'Adriaen van Diest', 1670, 'Public domain', 'Denver Art Musuem', 'Lowestoft.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
