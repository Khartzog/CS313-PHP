CREATE TABLE userinfo (
    userid          int PRIMARY KEY,
    username        varchar(60),
    pass            varchar(60)
);

CREATE TABLE journal (
    journal_id      int PRIMARY KEY,
    journal_name    varchar(50)
);

CREATE TABLE media (
    media_id        int PRIMARY KEY,
    media_name      varchar(80)
);

CREATE TABLE user_entry (
    entry_id        int,
    entry_content   TEXT,
    entry_date      date,
    userid          int REFERENCES userinfo(userid),
    journal_id      int REFERENCES journal(journal_id),
    media_id        int REFERENCES media(media_id)
);


SELECT eu.*, j.journal_name FROM user_entry eu LEFT JOIN journal j ON eu.journal_id = j.journal_id WHERE eu.userid = 0;