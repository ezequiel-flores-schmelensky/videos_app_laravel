CREATE DATABASE IF NOT EXISTS videoslaravel;
USE videoslaravel;

CREATE TABLE users(
id int(255) auto_increment not null,
role varchar(20),
name varchar(225),
surname varchar(225),
email varchar(225),
password varchar(225),
image varchar(225),
created_at datetime,
updated_at datetime,
remember_token varchar(225),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE = InnoDb;

CREATE TABLE videos(
id int(255) auto_increment not null,
user_id int(225) not null,
title varchar(225),
description text,
status varchar(20),
image varchar(225),
video_path varchar(225),
created_at datetime,
updated_at datetime ,
CONSTRAINT pk_videos PRIMARY KEY(id),
CONSTRAINT fk_videos_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE = InnoDb;

CREATE TABLE comments(
id int(255) auto_increment not null,
user_id int(225) not null,
video_id int(225) not null,
body text,
created_at datetime,
updated_at datetime ,
CONSTRAINT pk_comment PRIMARY KEY(id),
CONSTRAINT fk_comment_video FOREIGN KEY(video_id) REFERENCES videos(id),
CONSTRAINT fk_comment_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE = InnoDb;