create database exercice_blog_groupe;
use exercice_blog_groupe;
create table admin(
admin_id INT AUTO_INCREMENT PRIMARY KEY not null,
admin_username varchar(30) unique,
admin_email varchar(100) unique,
admin_password varchar(255));

use exercice_blog_groupe;

create table type(
type_id INT AUTO_INCREMENT PRIMARY KEY not null,
type_name varchar(30));

use exercice_blog_groupe;

create table article(
article_id INT AUTO_INCREMENT PRIMARY KEY not null,
article_title varchar(150),
article_content text,
article_date date,
article_type_id  int not null,
article_admin_id  int not null,
constraint foreign key (article_type_id)
references type(type_id),
constraint foreign key (article_admin_id)
references admin(admin_id)
);

use exercice_blog_groupe;

create table comment(
comment_id INT AUTO_INCREMENT PRIMARY KEY not null,
comment_date date,
comment_content varchar(255),
comment_author varchar(250),
comment_article_id int not null,
constraint foreign key (comment_article_id)
references article(article_id)
);
