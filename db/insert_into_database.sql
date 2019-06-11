INSERT INTO journal (journal_name) VALUES ('Spring 2019 Journal');

INSERT INTO journal (journal_name) VALUES ('Fall 2019 Journal');

INSERT INTO journal (journal_name) VALUES ('Winter 2019 Journal');

INSERT INTO user_entry (entry_content, entry_date, userid, journal_id) VALUES ('Today was honestly the worst day ever. I got a C in one of my classes, and I wish I had spent more time in that class.', now(), 1, 1);

INSERT INTO userinfo (username, pass) VALUES ('HHartzog', '6813');

INSERT INTO userinfo (username, pass) VALUES ('Heather', '1234');

INSERT INTO userinfo (username, pass) VALUES ('Justin', '9999');

INSERT INTO user_entry (entry_content, entry_date, userid, journal_id) VALUES ('I got some awesome pet rats today, they are awesome.', now(), 2, 2);

INSERT INTO user_entry (entry_content, entry_date, userid, journal_id) VALUES ('It rained a bit today, I forgot my umbrella at work.', now(), 1, 2);

INSERT INTO user_entry (entry_content, entry_date, userid, journal_id) VALUES ('I worked, it was great', now(), 3, 3);



DELETE FROM user_entry
WHERE entry_id = 8;