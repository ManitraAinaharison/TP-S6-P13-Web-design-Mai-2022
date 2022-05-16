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
	date_evenement datetime,
	image varchar(255) not null,
	url varchar(255) not null,
	foreign key (id_categorie) references categorie(id),
	foreign key (id_user) references user(id)
) engine = InnoDB;


insert into user(nom, prenom, username, password) values ('Bob', 'Delamar', 'admin', sha1('admin'));
insert into user(nom, prenom, username, password) values ('Ainaharison', 'Manitra', 'manitra.ainaharison', sha1('admin'));

insert into categorie(nom) values ('actu');
insert into categorie(nom) values ('event');

insert into post(id_categorie, id_user, titre, resume, contenu, date_ajout, date_evenement, image, url) 
	values 
	(
		1, 
		1, 
		QUOTE("Les 425 « bombes carbone » qui pourraient réduire à néant la lutte contre le dérèglement climatique"), 
		QUOTE("Des chercheurs ont identifié des projets d’extraction de charbon, pétrole et gaz, déjà en opération ou encore en construction, dont les émissions de CO₂ cumulées feraient exploser le budget carbone mondial."), 
		QUOTE("Le projet Red Hill en Australie, Montney Play ou Christina Lake au Canada, la mine de Hongshaquan en Chine, celles de Hambach et de Garzweiler en Allemagne… Cette liste déterminera, en grande partie, l’avenir de la planète. Pour la première fois, des chercheurs ont identifié et localisé les plus grands projets d’extraction de combustibles fossiles au monde. Ils leur ont aussi donné un nom : les « bombes carbone » ou « bombes climatiques », qu’ils définissent comme les infrastructures de charbon, pétrole et gaz qui pourraient émettre plus de 1 milliard de tonnes de CO2 sur leur durée d’exploitation.

Selon ces travaux, publiés jeudi 12 mai dans la revue Energy Policy, le monde compte aujourd’hui 425 « bombes climatiques », d’ores et déjà en opération ou encore à l’état de projet, réparties dans 48 pays. Si toutes étaient exploitées jusqu’à leur terme, leurs émissions potentielles combinées représenteraient deux fois le budget carbone mondial – c’est-à-dire le plafond d’émissions – à ne pas dépasser pour espérer maintenir le réchauffement climatique à 1,5 °C par rapport à l’ère préindustrielle. De quoi réduire à néant les objectifs de l’accord de Paris sur le climat et la lutte contre le dérèglement climatique."), 
		sysdate(), 
		null, 
		'', 
		'');

