/*drop schema sgc;*/
create schema SGC;
use SGC;

create table predio ( 
	idPredio integer primary key
); 

/*
SITUAÇÕES CHAVE:
0 - DISPONIVEL
1 - EM USO
2 - MANUTENÇÃO
*/
create table chave ( 
	idChave integer primary key,  
	situacao integer not null,  
	idPredio integer not null,
    descricao varchar(50) not null,
    foreign key(idPredio) references predio(idPredio)
    
);

/*Sala vai ser criada de acordo a Chave que vai ser criada,
ou seja, cria a chave e automáticamente a sala é criada*/
create table sala ( 
	idSala integer,
	foreign key (idSala) references chave(idChave),  
	idPredio integer not null,
	foreign key (idPredio) references predio(idPredio),
	primary key(idSala, idPredio)
); 