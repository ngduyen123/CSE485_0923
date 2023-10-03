CREATE TABLE tacgia (
    ma_TacGia int unsigned not null ,
    ten_TacGia varchar(100) not null,
    hinh_TacGia varchar(100),
    primary key (ma_TacGia)
);

insert into tacgia (ma_TacGia, ten_TacGia,hinh_TacGia)
values (01,'NVA','h1'),
        (02,'NVB','h2');


CREATE TABLE theloai(
    ma_tloai int unsigned not null primary key ,
    ten_tloai varchar(50)
);
insert into theloai()
values (11,'pop'),
       (12,'hiphop');

CREATE TABLE baiviet(
    ma_bviet int unsigned not null ,
    tieude varchar(200)  not null,
    ten_bhat varchar(100) not null,
    ma_tloai int unsigned not null,
    tomtat text not null,
    noidung text,
    ma_TacGia int unsigned not null,
    ngayviet datetime not null default current_timestamp(),
    hinhanh varchar(200),
    primary key (ma_bviet)
--    foreign key ma_tloai references theloai(ma_tloai),
--    foreign key ma_TacGia references tacgia(ma_TacGia)
);
insert into baiviet()
values(1,'TD1','NS1',11,'abc','  ',01,'2023/10/3','h3'),
       (2,'TD2','NS2',12,'doremi','  ',02,'2023/10/2','h4');

CREATE TABLE nguoidung(
  ten varchar(50) not null,
  id int not null primary key,
  email varchar(50) not null,
  password varchar(50) not null
);
insert into nguoidung()
values ('PVN','001','nam@gmail.com','123*'),
       ('TVB','002','binh@gmail.com','#456');