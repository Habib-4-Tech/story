CREATE DATABASE Story;



CREATE TABLE user_data
(
 user_id VARCHAR(50) NOT NULL,
 password VARCHAR(20) NOT NULL,
 full_name VARCHAR(70) NOT NULL, 
  PRIMARY KEY (user_id)
);

CREATE TABLE story
(
  id BIGINT NOT NULL AUTO_INCREMENT,
  title TEXT(500) NOT NULL,
  body VARCHAR(max) NOT NULL,
  p_date DATE NOT NULL,
  user_id VARCHAR(50),
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES user_data(user_id) ON DELETE CASCADE
);