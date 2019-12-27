DROP TABLE IF EXISTS s1612601_tag;
CREATE TABLE s1612601_tag (
    tag INT NOT NULL, /*大分類のID*/
    class VARCHAR(20),/*大分類のカテゴリー名*/
    PRIMARY KEY(tag)
) ENGINE=InnoDB;
INSERT INTO s1612601_tag (tag,class)
VALUES (001,'食料費');
INSERT INTO s1612601_tag (tag,class)
VALUES (002,'生活費');
INSERT INTO s1612601_tag (tag,class)
VALUES (003,'娯楽費');
INSERT INTO s1612601_tag (tag,class)
VALUES (004,'光熱費');
INSERT INTO s1612601_tag (tag,class)
VALUES (005,'通信費');
INSERT INTO s1612601_tag (tag,class)
VALUES (006,'保険費');
INSERT INTO s1612601_tag (tag,class)
VALUES (007,'医療費');
INSERT INTO s1612601_tag (tag,class)
VALUES (008,'交際費');
INSERT INTO s1612601_tag (tag,class)
VALUES (009,'書籍費');
INSERT INTO s1612601_tag (tag,class)
VALUES (010,'その他');
