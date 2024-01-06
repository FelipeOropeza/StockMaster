drop database db_StockMaster;
create database db_StockMaster;
use db_StockMaster;

create table tbl_login (
Id_login int primary key auto_increment,
Nome varchar(50) not null,
Email varchar(200) not null,
Senha varchar(200) not null,
Acesso boolean
);

create table tbl_produto(
CodigoBarras bigint primary key,
Nome varchar(200) not null,
ValorUnitario decimal(8, 2) not null,
Qtd int
);

create table tbl_fornecedor(
Codigo smallint auto_increment primary key,
Cnpj bigint unique,
Nome varchar(200) not null,
Telefone bigint unique
);

create table tbl_compra(
NotaFiscal int primary key,
DataCompra date not null,
ValorTotal decimal(8, 2) not null,
QtdTotal bigint not null,
CodComp smallint,
foreign key (CodComp) references tbl_fornecedor (Codigo)
);

create table tbl_pedidocomprar(
ValorItem decimal(5, 2) not null,
Qtd bigint not null,
primary key(NotaFiscal, CodigoBarras),
NotaFiscal int,
foreign key (NotaFiscal) references tbl_compra (NotaFiscal),
CodigoBarras bigint,
foreign key (CodigoBarras) references tbl_produto (CodigoBarras)
);

-- Tabela Venda, Pedido Venda, NotaFiscal e Cliente só vai ter insert direto no banco
create table tbl_cliente(
IdCli int primary key auto_increment not null,
NomeCli varchar(200) not null
);

create table tbl_notafiscal(
Nf int primary key auto_increment,
TotalNota decimal(7, 2) not null,
DataEmissao date not null
);

create table tbl_vendas(
NumeroVenda int primary key auto_increment,
DataVenda datetime,
totalVenda decimal (7, 2) not null,
Nf int,
foreign key (Nf) references tbl_Notafiscal (Nf),
idCli int,
foreign key (idCli) references tbl_cliente (idCli)
);

create table tbl_pedidovenda(
ValorItem decimal(6, 2) not null,
Qtd bigint not null,
primary key(NumeroVenda, CodigoBarras),
CodigoBarras bigint, 
foreign key (CodigoBarras) references tbl_produto (CodigoBarras),
NumeroVenda int, 
foreign key (NumeroVenda) references tbl_vendas (NumeroVenda)
);

create table tbl_relatorio(
Id_rela bigint primary key auto_increment,
Titulo varchar(50) not null,
Messagem text not null,
Data_rela date,
Id_login int,
foreign key (Id_login) references tbl_login (Id_login)
);

insert into tbl_login values(default, 'Felipe', 'felipe@gmail', '12345', 1);
-- insert into tbl_login values(default, 'Alex', 'alex@gmail', '12345', 0);

select * from tbl_login;