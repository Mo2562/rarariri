DROP TABLE IF EXISTS s1612601_subtag;
CREATE TABLE s1612601_subtag (
    subtag INT NOT NULL, /*小分類のID*/
    subclass VARCHAR(20),/*小分類のカテゴリー名*/
    PRIMARY KEY(subtag)
) ENGINE=InnoDB;
INSERT INTO s1612601_subtag (subtag,subclass)
VALUES (08,'軽減税率対象内');
INSERT INTO s1612601_subtag (subtag,subclass)
VALUES (10,'軽減税率対象外');
