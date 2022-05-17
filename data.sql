drop database rechauffement_climatique;
create database rechauffement_climatique;
use rechauffement_climatique;

create table user (
	id int not null primary key auto_increment,
	nom varchar(100) not null,
	prenom varchar(100) not null,
	username varchar(255) not null,
	password varchar(255) not null
) engine = InnoDB;

create table categorie(
	id int not null primary key auto_increment,
	nom varchar(255) not null
) engine = InnoDB;

create table post(
	id int not null primary key auto_increment,
	id_categorie int not null,
	id_user int not null,
	titre varchar(255) not null,
	resume text not null,
	contenu text not null,
	date_ajout datetime not null,
	image varchar(255) not null,
	url varchar(255) not null,
	foreign key (id_categorie) references categorie(id),
	foreign key (id_user) references user(id)
) engine = InnoDB;


insert into user(nom, prenom, username, password) values ('Bob', 'Delamar', 'admin', sha1('admin'));
insert into user(nom, prenom, username, password) values ('Ainaharison', 'Manitra', 'manitra.ainaharison', sha1('admin'));

insert into categorie(nom) values ('actualites');
insert into categorie(nom) values ('evenements');

insert into post(id_categorie, id_user, titre, resume, contenu, date_ajout, image, url) 
	values 
	(
		1, 
		1, 
		QUOTE("Les 425 « bombes carbone » qui pourraient réduire à néant la lutte contre le dérèglement climatique"), 
		QUOTE("Des chercheurs ont identifié des projets d’extraction de charbon, pétrole et gaz, déjà en opération ou encore en construction, dont les émissions de CO₂ cumulées feraient exploser le budget carbone mondial."), 
		QUOTE("Le projet Red Hill en Australie, Montney Play ou Christina Lake au Canada, la mine de Hongshaquan en Chine, celles de Hambach et de Garzweiler en Allemagne… Cette liste déterminera, en grande partie, l’avenir de la planète. Pour la première fois, des chercheurs ont identifié et localisé les plus grands projets d’extraction de combustibles fossiles au monde. Ils leur ont aussi donné un nom : les « bombes carbone » ou « bombes climatiques », qu’ils définissent comme les infrastructures de charbon, pétrole et gaz qui pourraient émettre plus de 1 milliard de tonnes de CO2 sur leur durée d’exploitation.

Selon ces travaux, publiés jeudi 12 mai dans la revue Energy Policy, le monde compte aujourd’hui 425 « bombes climatiques », d’ores et déjà en opération ou encore à l’état de projet, réparties dans 48 pays. Si toutes étaient exploitées jusqu’à leur terme, leurs émissions potentielles combinées représenteraient deux fois le budget carbone mondial – c’est-à-dire le plafond d’émissions – à ne pas dépasser pour espérer maintenir le réchauffement climatique à 1,5 °C par rapport à l’ère préindustrielle. De quoi réduire à néant les objectifs de l’accord de Paris sur le climat et la lutte contre le dérèglement climatique."), 
		sysdate(),
		'img-test.jpg', 
		'les-425-bombes-carbone-qui-pourraient-reduire-a-neant-la-lutte-contre-le-dereglement-climatique');

insert into post(id_categorie, id_user, titre, resume, contenu, date_ajout, image, url) 
	values 
	(
		1, 
		1, 
		QUOTE("La sécheresse très précoce inquiète les agriculteurs français : « Il ne pleut pas depuis un mois et demi »"), 
		QUOTE("Sans atteindre des niveaux inédits, le déficit pluviométrique enregistré ces derniers mois, combiné à une vague de chaleur, fait planer une menace sur les récoltes céréalières et fourragères."), 
		QUOTE("« Nous avons les yeux rivés sur la météo pour voir si la pluie va arriver dans les prochains jours », affirme Benoît Piétrement, président du conseil spécialisé dans les grandes cultures de FranceAgriMer et céréalier dans la Marne. « On sait qu’il y a des terres où l’impact de la sécheresse est déjà là. Mais, pour l’instant, dans l’ensemble, tout ne se passe pas trop mal. Il faut voir dans la durée », ajoute-t-il.

Le mercure qui grimpe, les pluies qui se font attendre… l’inquiétude monte chez les agriculteurs, céréaliers comme éleveurs. Certes, selon le dernier pointage effectué dans les champs par FranceAgriMer, l’impact du manque d’eau ne se fait pas encore ressentir sur l’état des cultures céréalières d’hiver. Ainsi, l’observatoire Céré’Obs juge que 89 % des cultures de blé tendre sont dans un état bon et très bon, à comparer aux 79 % atteints un an plus tôt à la même période. Pour les orges d’hiver, ce taux est de 86 % contre 76 % en 2021, et de 83 % contre 69 % pour le blé dur. Mais ces données de terrain datent du 2 mai. Avant la forte montée des températures.

"), 
		sysdate(),
		'img-test-2.jpg', 
		'la-secheresse-tres-precoce-inquiete-les-agriculteurs-francais-il-ne-pleut-pas-depuis-un-mois-et-demi');

insert into post(id_categorie, id_user, titre, resume, contenu, date_ajout, image, url) 
	values 
	(
		1, 
		1, 
		QUOTE("EN IMAGES. Le Pakistan et l’Inde font face à une canicule extrême, 50 degrés atteints par endroits"), 
		QUOTE("Depuis plusieurs semaines, les habitants de ces deux pays sont confrontés à des épisodes de canicule. Au Pakistan, les températures ont même dépassé les 50 degrés."), 
		QUOTE("Depuis fin avril, de larges pans du Pakistan et de l’Inde connaissent une vague de chaleur record, dont l’Organisation météorologique mondiale (OMM) des Nations unies a estimé qu’elle était « cohérente » avec le changement climatique. Ces températures anormalement élevées perdurent – à certains endroits du Pakistan, les 50 degrés ont été atteints – alors que le mois de mai est habituellement le plus chaud dans ces régions de l’Asie du Sud."), 
		sysdate(),
		'img-test-3.jpg', 
		'en-images-le-pakistan-et-l-inde-font-face-a-une-canicule-extreme-50-degres-atteints-par-endroits');


insert into post(id_categorie, id_user, titre, resume, contenu, date_ajout, image, url) 
	values 
	(
		1, 
		1, 
		QUOTE("RÉDUCTION DES ÉMISSIONS DE GAZ À EFFET DE SERRE : CE QU'IL FAUT RETENIR DU RAPPORT DU GIEC"), 
		QUOTE("Le troisième volet du sixième rapport des experts climat de l'ONU (Giec), publié lundi 4 avril, se penche sur les solutions pour réduire les émissions responsables du réchauffement climatique. Voici ce qu’il faut retenir de ce document, long de 2.800 pages."), 
		QUOTE("Depuis l'ère pré-industrielle, la terre s’est déjà réchauffée de 1,1°C, alors que l'Accord de Paris de 2015 fixe comme objectif de contenir ce réchauffement nettement en dessous de 2°C et si possible 1,5°C.

ATTEINDRE LE PIC D’ÉMISSIONS EN 2025
Si les émissions de gaz à effet de serre ne sont pas sensiblement réduites d'ici à 2030, l'objectif de 1,5°C sera «hors de portée». Mais selon le rapport, les politiques actuelles ouvrent la voie à un réchauffement de 3,2°C d'ici à la fin du siècle.

Tenir l'objectif de +2°C s'annonce déjà extrêmement complexe : de 2030 à 2050, il faudrait réduire chaque année les émissions comme en 2020, année exceptionnelle où une bonne partie de l'économie mondiale s'est arrêtée en raison du Covid-19.

Pour ne pas dépasser +2,5°C, les émissions devront atteindre leur pic en 2025, ce qui semble improbable, la trajectoire étant repartie à la hausse dès 2021, retrouvant les niveaux records pré-pandémie. Or, au niveau d'émissions de 2019, le «budget carbone»  disponible pour conserver 66% de chances de rester sous les +1,5°C serait entièrement consommé en huit ans.

REMPLACER LES ÉNERGIES FOSSILES PAR DES SOURCES BAS-CARBONE OU NEUTRES
Si tous les gisements de pétrole, de gaz et de charbon actuellement en service sont exploités jusqu'à leur terme sans technologie de capture carbone, il sera impossible de tenir l’objectif d’un réchauffement climatique de +1,5°C.

Éliminer les subventions aux énergies fossiles pourrait permettre de faire baisser les émissions de 10%, selon les experts. 

Pour tenir l’objectif de +2°C il faudrait que 30% des réserves de pétrole, 50% de celles de gaz et 80% des celles de charbon ne soient pas utilisées. Seule solution pour pouvoir utiliser ces réserves, le développement de techniques de captage et stockage du CO2 émis.

Pour tenir les objectifs de l'Accord de Paris, le monde doit atteindre la «neutralité carbone» sur tous les plans d'ici à 2050.


SUR LE MÊME SUJET
CLIMATRéchauffement climatique : l’Antarctique frappé par une vague de chaleur 
La capacité des énergies photovoltaïque et éolienne a fortement augmenté, de 170% et 70% respectivement entre 2015 et 2019, grâce à la baisse des coûts, aux politiques publiques et à la pression sociale. Cependant malgré ces hausses spectaculaires, elles ne représentent ensemble que 8% de la production électrique mondiale, 21% de la production peu carbonée.

Au total, les énergies renouvelables et énergies peu carbonées - dont le nucléaire et l'hydroélectricité - comptent pour 37% de la production électrique mondiale, le reste provenant des énergies fossiles.

RÉDUIRE LA DEMANDE EN ÉNERGIE
Le basculement vers l'énergie moins carbonée ne doit pas faire passer au second plan les transformations structurelles - mobilités douces, véhicules électriques, télétravail, isolation des bâtiments, moins de vols en avion - qui permettraient de réduire les émissions de 40% à 70% d'ici à 2050.

«Des modifications profondes et rapides de la demande faciliteront la réduction à court et moyen terme des émissions dans tous les secteurs», souligne le rapport du Giec. Au niveau mondial, les 10% des ménages les plus riches représentent jusqu'à 45% des émissions totales.

RÉDUIRE LES ÉMISSIONS DE MÉTHANE
Les émissions de méthane, gaz à effet de serre à la durée de vie bien plus courte que le CO2 mais 21 fois plus puissant, contribuent pour environ un cinquième du réchauffement.

Les fuites dans la production d'énergies fossiles (par les puits ou les gazoducs) représentaient environ un tiers de ces émissions en 2019. L'élevage animal est également une source importante.

Tenir l'Accord de Paris implique de réduire de moitié les émissions de méthane d'ici à 2050 (par rapport au niveau de 2019).

DÉVELOPPER LES TECHNOLOGIES DE CAPTURE DE CO2
Même dans les meilleurs scénarios, la baisse des émissions devra s'accompagner de la mise en œuvre de techniques d'élimination du dioxyde de carbone (EDC), ou «émissions négatives», pour atteindre la neutralité carbone.

Les possibilités vont de la capture naturelle de CO2, en plantant des arbres par exemple, à l'extraction du CO2 de l'atmosphère, technologie qui n'est pas encore au point à ce jour.

Ces EDC devraient permettre de compenser les émissions de secteurs qui ne pourront pas suffisamment réduire leurs émissions d'ici à 2050 - aviation, transport maritime ou cimenteries - et seront également nécessaires pour espérer rétablir la situation en cas de dépassement des objectifs de l'Accord de Paris.

DES SOLUTIONS COÛTEUSES MAIS INDISPENSABLES SELON LE GIEC
Tenir l'objectif d’un réchauffement maximal de +1,5°C nécessitera des investissements de 2.300 milliards de dollars par an entre 2023 et 2052, rien que pour le secteur de l'électricité. Le chiffre tombe à 1.700 milliards de dollars pour l’objectif de +2°C.

En 2021, 750 milliards de dollars ont été dépensés dans le monde pour le développement d’énergies propres ou l'efficacité énergétique, selon l'Agence internationale de l'énergie.

A ce jour, le Giec estime que les pays riches dépensent deux à cinq fois moins que nécessaire et les investissements dans les pays en développement sont de quatre à huit fois moins élevés que nécessaire. Tenir l'objectif de +2°C entraînerait une baisse de 1,3% à 2,7% du PIB mondial, par rapport à la trajectoire actuelle, et une baisse de 2,6% à 4,2% pour tenir +1,5°C."), 
		sysdate(),
		'img-test-4.jpg', 
		'reduction-des-emissions-de-gaz-a-effet-de-serre-ce-qu-il-faut-retenir-du-rapport-du-giec');

create view post_detail as
select 
p.id,
id_categorie,
c.nom as nom_categorie,
id_user,
u.nom as nom_user,
u.prenom as prenom_user,
titre,
resume,
contenu,
date_ajout,
image,
url
from post p
join user u 
on u.id = p.id_user
join categorie c 
on c.id = p.id_categorie;
