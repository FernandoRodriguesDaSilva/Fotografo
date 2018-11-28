create database if not exists fotografias default character set utf8 default collate utf8_general_ci;
-- Tabela para entrar em contato 
create table if not exists tb_contato(
id int auto_increment not null primary key,
nome varchar(50) not null,
telefone varchar(15) not null,
email varchar(50) not null,
endereco varchar(50) not null,
data date
)default character set utf8 default collate utf8_general_ci;

-- Tabela para registrar novos usuarios
create table if not exists tb_usuarios(

id_usuario int auto_increment not null primary key,
nome varchar(255) not null,
sobrenome varchar(255) not null,
telefone varchar(20)not null,
email varchar(50)not null unique,
senha varchar(50)not null
)default character set utf8 default collate utf8_general_ci;

--- Tabela para registrar comentários
create table if not exists tb_comentarios(
id_comentario int auto_increment not null primary key,
resposta varchar(30)not null,
comentario varchar(500) not null
)default character set utf8 default collate utf8_general_ci;
