create database dynamic_project;
use dynamic_project;

create table books(
 b_id int auto_increment primary key,
 book_name varchar(100) not null,
 author varchar(100) not null,
 publication date not null,
 genre varchar(100) not null, 
 pages varchar(100) not null
);

insert into books(b_id,book_name,author,publication,genre,pages) values
(01,'Metamorphosis','Franz Kafka','1912-10-1','Novella','144'),
(02,'Infinite Jest','David Foster Wallace','1996-2-1','Satire','1079'),
(03,'1984','George Orwell','1949-06-08','Science Fiction','330'),
(04,'Crime and Punishment','Fyodor Dostoevsky','1866-12-10','Crime Fiction','471');
