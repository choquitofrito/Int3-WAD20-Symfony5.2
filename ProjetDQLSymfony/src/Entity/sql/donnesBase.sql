
INSERT INTO `livre` (`id`, `titre`, `prix`, `description`, `date_publication`, `isbn`) VALUES
(1, 'Life and fate', '20.00', 'Life and Fate (Russian: Жизнь и судьба) is a novel by Vasily Grossman, written in the Soviet Union in 1959 and published in 1980. Technically, it is the second half of the author\'s conceived two-part book under the same title. Although the first half, the novel For a Just Cause, written during the rule of Joseph Stalin and first published in 1952, expresses loyalty to the regime, Life and Fate sharply criticises Stalinism.[1] In 2021, the critic and editor Robert Gottlieb, writing in The New York Times, referred to Life and Fate as \"the most impressive novel written since World War II.\"[2] ', '1980-01-01 00:00:00', '1590172019'),
(2, 'Moby Dick', '20.00', 'Moby-Dick; or, The Whale is an 1851 novel by American writer Herman Melville. The book is the sailor Ishmael\'s narrative of the obsessive quest of Ahab, captain of the whaling ship Pequod, for revenge on Moby Dick, the giant white sperm whale that on the ship\'s previous voyage bit off Ahab\'s leg at the knee. A contribution to the literature of the American Renaissance, Moby-Dick was published to mixed reviews, was a commercial failure, and was out of print at the time of the author\'s death in 1891. Its reputation as a \"Great American Novel\" was established only in the 20th century, after the centennial of its author\'s birth. William Faulkner said he wished he had written the book himself,[1] and D. H. Lawrence called it \"one of the strangest and most wonderful books in the world\" and \"the greatest book of the sea ever written\".[2] Its opening sentence, \"Call me Ishmael\", is among world literature\'s most famous.[3] ', '1851-01-01 00:00:00', '9780393285000.'),
(3, 'Meditations', '15.00', 'Meditations (Medieval Greek: Τὰ εἰς ἑαυτόν, romanized: Ta eis he\'auton, lit. \'things to one\'s self\') is a series of personal writings by Marcus Aurelius, Roman Emperor from 161 to 180 AD, recording his private notes to himself and ideas on Stoic philosophy.\r\n\r\nMarcus Aurelius wrote the 12 books of the Meditations in Koine Greek[1] as a source for his own guidance and self-improvement.[2] It is possible that large portions of the work were written at Sirmium, where he spent much time planning military campaigns from 170 to 180. Some of it was written while he was positioned at Aquincum on campaign in Pannonia, because internal notes tell us that the first book was written when he was campaigning against the Quadi on the river Granova (modern-day Hron) and the second book was written at Carnuntum.\r\n\r\nIt is unlikely that Marcus Aurelius ever intended the writings to be published. The work has no official title, so \"Meditations\" is one of several titles commonly assigned to the collection. These writings take the form of quotations varying in length from one sentence to long paragraphs. ', '1559-01-01 00:00:00', '0674990641');



INSERT INTO `adresse` (`id`, `rue`, `numero`, `code_postal`, `ville`, `pays`) VALUES (NULL, 'Rue du Donut', '12', '2200', 'Rome', 'Italie');


INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `adresse_id`) VALUES
(3, 'Scaccia', 'Alessi', 'aaa@aa.it', 1),
(4, 'Lipowska', 'Joanna', 'lololo@coucou.pl', 1);


INSERT INTO `exemplaire` (`id`, `livre_id`, `etat`) VALUES
(1, 1, 'nouveau'),
(2, 2, 'vieux');

INSERT INTO `emprunt` (`id`, `client_emprunteur_id`, `exemplaire_emprunte_id`, `date_emprunt`, `date_retour`, `commentaires`) VALUES (NULL, '4', '2', '2021-03-09 11:34:36', '2021-03-26 11:34:36', 'lalalalal'), (NULL, '4', '2', '2021-03-21 11:34:36', '2021-03-26 11:34:36', 'lololo'); 
