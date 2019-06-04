INSERT INTO journal (journal_id, journal_name) VALUES (1, 'Spring 2019 Journal');

INSERT INTO journal (journal_id, journal_name) VALUES (2, 'Fall 2019 Journal');

INSERT INTO journal (journal_id, journal_name) VALUES (3, 'Winter 2019 Journal');

INSERT INTO user_entry (entry_id, entry_content, entry_date, userid, journal_id, media_id) VALUES (0, 'Today was honestly the worst day ever. I got a C in one of my classes, and I wish I had spent more time in that class.', now(), 0, 1, NULL);

INSERT INTO userinfo (userid, username, pass) VALUES (0, 'HHartzog', '6813');

INSERT INTO 