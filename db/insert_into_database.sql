INSERT INTO journal (journal_id, journal_name) VALUES (1, 'Spring 2019 Journal');

INSERT INTO journal (journal_id, journal_name) VALUES (2, 'Fall 2019 Journal');

INSERT INTO journal (journal_id, journal_name) VALUES (3, 'Winter 2019 Journal');

INSERT INTO user_entry (entry_id, entry_content, entry_date, userid, journal_id, media_id) VALUES (0, 'Today was honestly the worst day ever. I got a C in one of my classes, and I wish I had spent more time in that class.', now(), 0, 1, NULL);

INSERT INTO userinfo (userid, username, pass) VALUES (0, 'HHartzog', '6813');

INSERT INTO userinfo (userid, username, pass) VALUES (1, 'Heather', '1234');

INSERT INTO userinfo (userid, username, pass) VALUES (2, 'Justin', '9999');

INSERT INTO user_entry (entry_id, entry_content, entry_date, userid, journal_id, media_id) VALUES (1, 'I got some awesome pet rats today, they are awesome.', now(), 1, 2, NULL);

INSERT INTO user_entry (entry_id, entry_content, entry_date, userid, journal_id, media_id) VALUES (0, 'It rained a bit today, I forgot my umbrella at work.', now(), 0, 2, NULL);

INSERT INTO user_entry (entry_id, entry_content, entry_date, userid, journal_id, media_id) VALUES (0, 'I worked, it was great', now(), 2, 3, NULL);
