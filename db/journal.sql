CREATE TABLE userinfo (
    userid          int PRIMARY KEY,
    username        varchar(60),
    pass            varchar(60)
);

CREATE TABLE new_journal (
    journal_name    varchar(50) PRIMARY KEY
);

CREATE TABLE media (
    media_id        int PRIMARY KEY,
    media_name      varchar(80)
);

CREATE TABLE new_entry (
    entry_id        int,
    entry_content   TEXT,
    entry_date      date,
    userid          int REFERENCES userinfo(userid),
    journal_name    varchar(50) REFERENCES new_journal(journal_name),
    media_id        int REFERENCES media(media_id)
);


