DROP TABLE IF EXISTS s1612601_session;
CREATE TABLE s1612601_session (
    sessionId INT NOT NULL AUTO_INCREMENT,
    day Date, /*選択した月日*/
    memberId INT,　
    tag INT,
    subtag INT,
    item VARCHAR(30),　　
    fee INT UNSIGNED NOT NULL,
    num INT UNSIGNED NOT NULL,
    feesum INT UNSIGNED NOT NULL,　/*データベースに保存する合計金額*/
    PRIMARY KEY(sessionId),
    FOREIGN KEY(memberId) REFERENCES s1612601_zeikatsu(memberId),
    FOREIGN KEY(tag) REFERENCES s1612601_tag(tag),
    FOREIGN KEY(subtag) REFERENCES s1612601_subtag(subtag)
) ENGINE=InnoDB;
