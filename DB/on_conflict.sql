INSERT INTO user_meta (user_id,meta_key,meta_value,up_date)
VALUES (12,'出身地','沖縄県','now')
ON CONFLICT (user_id,meta_key)
DO UPDATE SET meta_value = '沖縄県', up_date = 'now';
