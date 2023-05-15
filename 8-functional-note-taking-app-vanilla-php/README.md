# PHP Note Taking App

## Description

This page is cloned from [PHP For Beginners Series](https://github.com/laracasts/PHP-For-Beginners-Series) for educational purposes only.

## To Set Up

This app requires you to populate your own database and environment. The uses `MySQL` for database connections. Please refer to `Core/Database.php` and `config.php` to configure the database

MySQL database

```sql
-- after login, create database
create database my_database;

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

-- insert a record into 'notes' table
insert into my_database.notes (body, user_id) values ('example 1', 1)

-- insert a record into 'users' table 
insert into my_database.users (name, email) 

-- add one more column into 'users' table
alter table users
    add password varchar(255) null;

```

## To Run

1. Install dependencies

    ```bash
    composer install
    ```

2. Run on a local test server

    ```bash
    php -S localhost:8888 
    ```

3. Run the test (PestPHP)

   ```bash
   ./vendor/bin/pest
   ```
