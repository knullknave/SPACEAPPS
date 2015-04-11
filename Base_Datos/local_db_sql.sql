create database if not exists forest_monitor;
use forest_monitor;

create table if not exists user(

  id int unsigned auto_increment primary key,
  password varchar(16) not null,
  email varchar(50) not null,
  comment varchar(140)
);

create table if not exists forest(

  id int unsigned auto_increment primary key,
  name varchar(50) not null,
  country varchar(50),
  state varchar(50),
  coords varchar(50) not null

);

create table if not exists photo(

  id int unsigned auto_increment primary key,
  name varchar(50) not null,
  size varchar(50) not null,
  px varchar(50) not null,
  comment varchar(140),
  id_user int unsigned,
  index (id_user),
		foreign key (id_user)
		references user (id)
		on update cascade on delete cascade,
  id_forest int unsigned, 
  index (id_forest),
		foreign key (id_forest)
		references forest (id)
		on update cascade on delete cascade

);
