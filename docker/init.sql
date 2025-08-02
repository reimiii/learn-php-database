create table user (
    id int auto_increment primary key,
    username varchar(50) not null,
    email varchar(100) not null unique,
    password varchar(100) not null,
    created_at timestamp default current_timestamp
);

create table customer (
    id int auto_increment primary key,
    name varchar(100) not null,
    address text,
    created_at timestamp default current_timestamp
);

create table comment (
    id int auto_increment primary key,
    name varchar(100) not null,
    comment_text text not null,
    created_at timestamp default current_timestamp
);

-- Insert dummy data
insert into user (username, email, password) values
('alice', 'alice@example.com', 'password'),
('bob', 'bob@example.com', 'password');

insert into customer (name, address) values
('Acme Corp', '123 Main St'),
('Globex', '456 Industrial Way');

insert into comment (comment_text, name) values
('This is a comment from Alice', 'Alice'),
('This is a comment from Bob', 'Bob');
