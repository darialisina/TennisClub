CREATE TABLE User
(
    id        INT(16) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname  VARCHAR(30) NOT NULL,
    email     VARCHAR(50),
    password  VARCHAR(50),
    phone     VARCHAR(50),
    isAdmin   BOOL
);

alter table user add constraint user_email_uniq unique (email);