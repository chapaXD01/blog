

CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(5200)
);

INSERT INTO posts
(content)
VALUE
("ziemassvetki nak"),
("Ōtrais bloga ieraksts"),
("ka pagatavot siermaizi?");





SELECT * FROM posts
WHERE id = 1;


SELECT * FROM posts 
WHERE content LIKE "%o%";

CREATE TABLE categories(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
category_name VARCHAR(25)
);blog_ipb23blog_ipb23

INSERT INTO categories
(category_name)categories
VALUE
("Svētki"),
("Mūzika"),
("Sports");