/*DDL*/
CREATE DATABASE IF NOT EXISTS online_library;

USE online_library;

CREATE TABLE books(
    book_id int NOT NULL AUTO_INCREMENT,
    title varchar(512),
    author varchar(256),
    publisher varchar(256),
    publish_date date,
    location varchar(16),
    quantity int,
    PRIMARY KEY (book_id)
);

CREATE TABLE roles(
    role_id int NOT NULL AUTO_INCREMENT,
    role varchar(256),
    PRIMARY KEY (role_id)
);

CREATE TABLE transactions(
    transaction_id int NOT NULL AUTO_INCREMENT,
    loan_date date,
    due_date date,
    return_date date,
    fine int(128),
    PRIMARY KEY (transaction_id)
);

CREATE TABLE users(
    user_id int NOT NULL AUTO_INCREMENT,
    role_id int,
    student_id varchar(16),
    name varchar(256),
    email varchar(256),
    password varchar(512),
    phone varchar(16),
    address varchar(512),
    PRIMARY KEY (user_id)
);

/*DML*/
INSERT INTO roles VALUES (1, 'Member');
INSERT INTO roles VALUES (2, 'Administrator');

INSERT INTO users VALUES (1, 1, 1234567890, 'User', 'user@localhost', 'user', '', '');
INSERT INTO users VALUES (2, 2, 9876543210, 'Administrator', 'admin@localhost', '$2y$10$F/bLZWRNwpg/6CCEL2moVuVYG3P04UFV665vMkoptKmVQH3s5hzp6', '', '');