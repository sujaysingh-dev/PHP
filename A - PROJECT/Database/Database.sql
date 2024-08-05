create table admin
(
    Photo   varchar(100),
    Name    varchar(30),
    Dobirth varchar(15),
    Gender  varchar(10),
    Mobile  int(10),
    Email   varchar(50),
    Userid  varchar(50),
    Pass    varchar(50),
    ConPass varchar(50)
);

create table student
(
    Class   varchar(10),
    Section varchar(1),
    Roll    varchar(3),
    Student_name    varchar(30),
    Father_name     varchar(30),
    Mother_name     varchar(30),
    D_o_birth       varchar(15),
    Gender          varchar(10),
    Religion        varchar(15),
    Category        varchar(15),
    Aadhar_number   varchar(12),
    Mobile_number   varchar(10),
    Email_id        varchar(50),
    Address         varchar(100)
);