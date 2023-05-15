-- 


-- create a table 'notes', set id as the primary key
create table notes
(
    id   int auto_increment,
    body text not null,
    constraint id
        primary key (id)
);

-- create a table 'users', set the id as the primary
create table users
(
    id    int auto_increment,
    name  varchar(255) not null,
    email varchar(255) not null,
    constraint id
        primary key (id)
);

-- create a unique index 'email' on 'users' table 
create unique index email on users (email);

-- add a column named 'user_id' on 'notes' table
alter table notes 
add user_id int not null;

-- add foreign key reference to users (id)
alter table notes
add constraint user_id
foreign key (user_id) references users (id);