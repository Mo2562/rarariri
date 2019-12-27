DROP TABLE IF EXISTS s1612601_zeikatsu;
CREATE TABLE s1612601_zeikatsu (
    memberId INT NOT NULL AUTO_INCREMENT,
    user   VARCHAR(50),  /*ユーザー名*/
    pass   VARCHAR(50),　/*パスワード*/
    PRIMARY KEY(memberId)
)ENGINE=InnoDB;
INSERT INTO s1612601_zeikatsu (memberId,user,pass)
VALUES(0,'neko','zyoho');
INSERT INTO s1612601_zeikatsu (memberId,user,pass)
VALUES(0,'inu','zyoho');
INSERT INTO s1612601_zeikatsu (memberId,user,pass)
VALUES(0,'test','test');
