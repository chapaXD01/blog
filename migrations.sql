DROP DATABASE IF EXISTS blog_ipb23;

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



SELECT * FROM posts;