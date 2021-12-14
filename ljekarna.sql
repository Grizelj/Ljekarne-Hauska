drop database if exists ljekarnaHauska;
create database ljekarnaHauska;

use ljekarnaHauska;

create table zaposlenik(
	id int not null primary key auto_increment,
	ime varchar(30) not null,
	prezime varchar(30) not null,
	email varchar(30),
	lozinka char(32) not null,
	uloga varchar (20),
	aktivan boolean not null default false
);

create table notes(
	id int not null primary key auto_increment,
    title varchar(50) not null,
    textArea varchar(500),
    createdAt timestamp not null default current_timestamp on update current_timestamp,
    updatedAt timestamp not null default current_timestamp on update current_timestamp
);

create table noted(
	zaposlenik int not null,
    notes int not null
);

create table lijek(
	id int not null primary key auto_increment,
    ime varchar(30) not null,
    opis varchar(500) not null,
    kolicina int not null,
    cijena varchar(20),
    image blob
);

alter table noted add foreign key (zaposlenik) references zaposlenik(id);
alter table noted add foreign key (predavac) references notes(id);

insert into zaposlenik (ime,prezime,email,lozinka,uloga,aktivan) values 
('Zvonimir','Grizelj','admin@admin.hr',md5('a'),'admin',true);

