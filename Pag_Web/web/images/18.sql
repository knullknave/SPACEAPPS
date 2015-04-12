create database if not exists forest_monitor;
use forest_monitor;

create table if not exists users
(
  id int unsigned auto_increment primary key,
  email varchar(50) unique not null,
  pass varchar(16) not null
);

create table if not exists forest
(
  id int unsigned auto_increment primary key,
  name varchar(50) not null,
  country varchar(50),
  states varchar(50),
  coords varchar(50) not null
);

create table if not exists photo
(
  id int unsigned auto_increment primary key,
  name varchar(50) not null,
  tamano varchar(50) not null,
  px varchar(50) not null,
  comentario varchar(140),
  id_users int unsigned,
  index (id_users),
  foreign key (id_users)
	references users (id)
	on update cascade on delete cascade,
  id_forest int unsigned, 
  index (id_forest),
  foreign key (id_forest)
	references forest (id)
	on update cascade on delete cascade
);
