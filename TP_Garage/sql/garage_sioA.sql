drop database if exists garage_sioA;
create database garage_sioA;
use garage_sioA;

create table client (
  idclient int(3) not null auto_increment,
  nom varchar(50),
  prenom varchar(50),
  adresse varchar(100),
  email varchar(50),
  tel varchar(20),
  primary key(idclient)
);

create table technicien (
  idtechnicien int(3) not null auto_increment,
  nom varchar(50),
  prenom varchar(50),
  qualification varchar(100),
  email varchar(50),
  tel varchar(20),
  mdp varchar(50),
  primary key(idtechnicien)
);

create table vehicule (
  idvehicule int(3) not null auto_increment,
  matricule varchar(50),
  marque varchar(50),
  nbkm int(10),
  energie varchar(50),
  idclient int(3) not null,
  primary key(idvehicule),
  foreign key(idclient) references client(idclient)
);

create table intervention (
  idintervention int(3) not null auto_increment,
  dateinter date,
  heure time,
  prix float,
  description varchar(100),
  idvehicule int(3) not null,
  idtechnicien int(3) not null,
  primary key (idintervention),
  foreign key (idvehicule) references vehicule(idvehicule),
  foreign key (idtechnicien) references technicien(idtechnicien)
);
