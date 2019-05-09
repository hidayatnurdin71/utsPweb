use utsweb;

create TABLE tbl_user(
id int primary key not null,
username varchar(25) not null,
password varchar(25) not null);

insert into tbl_user values 
('admin','asdf');

SELECT*FROM tbl_user;

create table tbl_post (
id_barang char(5) primary key not null,
nama_barang varchar(25) not null,
harga_barang int not null,
jumlah int not null);

create table tbl_galeri (
id_galeri char(5) primary key not null,
id_barang char(5) not null,
nama_barang varchar(25) not null,
tanggal date not null,
foreign key (id_barang) references tbl_post (id_barang)); 