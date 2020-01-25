CREATE TABLE `incentiva`.`projeto` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,
    `nome_proj` VARCHAR(255) NOT NULL ,
    `operador` VARCHAR(255) NOT NULL ,
    `telefone` VARCHAR(255) NOT NULL ,
    `tipo` INT(3) NOT NULL ,
    `data_inicio` varchar(50) NOT NULL ,
    `data_fim` VARCHAR(50) NOT NULL ,
    `observacao` VARCHAR(255) NOT NULL ,
    `info_status` VARCHAR(255) NOT NULL ,
    `protocolo` VARCHAR(30) NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

create table historico (
	id int not null,
    id_proj int not null AUTO_INCREMENT,
    responsavel varchar(50) not null,
    descricao varchar(300) not null,
    data timestamp not null,
    PRIMARY KEY	(id_proj),
    FOREIGN KEY (id) REFERENCES projeto(id)
)

CREATE TABLE `incentiva`. ( `id` INT NOT NULL AUTO_INCREMENT ,
    `nome` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(255) NOT NULL ,
    `senha` VARCHAR(255) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
