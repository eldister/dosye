CREATE TABLE area_level1 (id BIGINT AUTO_INCREMENT, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE area_level2 (id BIGINT AUTO_INCREMENT, area1_id BIGINT, description TEXT, INDEX area1_id_idx (area1_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE area_level3 (id BIGINT AUTO_INCREMENT, area2_id BIGINT, description TEXT, INDEX area2_id_idx (area2_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE comment (id BIGINT AUTO_INCREMENT, record_model VARCHAR(255) NOT NULL, user_id INT, record_id BIGINT NOT NULL, author_name VARCHAR(255) NOT NULL, author_email VARCHAR(255), author_website VARCHAR(255), body LONGTEXT NOT NULL, is_delete TINYINT(1) DEFAULT '0', edition_reason LONGTEXT, reply BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX reply_idx (reply), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE comment_report (id BIGINT AUTO_INCREMENT, reason LONGTEXT NOT NULL, referer VARCHAR(255), state VARCHAR(255) DEFAULT 'untreated', id_comment BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_comment_idx (id_comment), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE educational_level (id BIGINT AUTO_INCREMENT, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE file (id BIGINT AUTO_INCREMENT, original_filename VARCHAR(255) NOT NULL, internal_filename VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(255), image_width BIGINT, image_height BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX file_type_idx (type), INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE grouping (id BIGINT AUTO_INCREMENT, name VARCHAR(100) NOT NULL, photo_image_id BIGINT, description VARCHAR(255) NOT NULL, due_date DATE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX photo_image_id_idx (photo_image_id), INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE grouping_file (grouping_id BIGINT, file_id BIGINT, visible TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(grouping_id, file_id)) ENGINE = INNODB;
CREATE TABLE file (id BIGINT AUTO_INCREMENT, original_filename VARCHAR(255) NOT NULL, internal_filename VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(255), image_width BIGINT, image_height BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE marital_status (id BIGINT AUTO_INCREMENT, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE nationality (id BIGINT AUTO_INCREMENT, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE person (id BIGINT AUTO_INCREMENT, internal_id VARCHAR(20) NOT NULL UNIQUE, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, photo_image_id BIGINT, date_of_birth DATE, cell_phone VARCHAR(50), home_phone VARCHAR(50), job_phone VARCHAR(50), other_phone VARCHAR(50), email VARCHAR(100), nationality_id BIGINT, identification VARCHAR(50), gender VARCHAR(1), marital_status_id BIGINT, has_a_job TINYINT(1), employment VARCHAR(50), paid_job TINYINT(1), temporal_job TINYINT(1), address_area1 BIGINT, address_area2 BIGINT, address_area3 BIGINT, address_neighborhood VARCHAR(100), address_directions VARCHAR(100), church VARCHAR(100), educational_level BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX nationality_id_idx (nationality_id), INDEX marital_status_id_idx (marital_status_id), INDEX address_area1_idx (address_area1), INDEX address_area2_idx (address_area2), INDEX address_area3_idx (address_area3), INDEX educational_level_idx (educational_level), INDEX photo_image_id_idx (photo_image_id), INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE person_file (person_id BIGINT, file_id BIGINT, visible TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(person_id, file_id)) ENGINE = INNODB;
CREATE TABLE person_grouping (person_id BIGINT, grouping_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(person_id, grouping_id)) ENGINE = INNODB;
CREATE TABLE sub_grouping (supergrouping_id BIGINT, subgrouping_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by BIGINT, updated_by BIGINT, INDEX created_by_idx (created_by), INDEX updated_by_idx (updated_by), PRIMARY KEY(supergrouping_id, subgrouping_id)) ENGINE = INNODB;
CREATE TABLE user_login_history (id BIGINT AUTO_INCREMENT, ip VARCHAR(16), state VARCHAR(6), user_id BIGINT, created_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE area_level2 ADD CONSTRAINT area_level2_area1_id_area_level1_id FOREIGN KEY (area1_id) REFERENCES area_level1(id);
ALTER TABLE area_level3 ADD CONSTRAINT area_level3_area2_id_area_level2_id FOREIGN KEY (area2_id) REFERENCES area_level2(id);
ALTER TABLE comment ADD CONSTRAINT comment_reply_comment_id FOREIGN KEY (reply) REFERENCES comment(id);
ALTER TABLE comment_report ADD CONSTRAINT comment_report_id_comment_comment_id FOREIGN KEY (id_comment) REFERENCES comment(id) ON DELETE CASCADE;
ALTER TABLE file ADD CONSTRAINT file_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE file ADD CONSTRAINT file_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE grouping ADD CONSTRAINT grouping_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE grouping ADD CONSTRAINT grouping_photo_image_id_file_id FOREIGN KEY (photo_image_id) REFERENCES file(id);
ALTER TABLE grouping ADD CONSTRAINT grouping_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE grouping_file ADD CONSTRAINT grouping_file_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE grouping_file ADD CONSTRAINT grouping_file_grouping_id_grouping_id FOREIGN KEY (grouping_id) REFERENCES grouping(id);
ALTER TABLE grouping_file ADD CONSTRAINT grouping_file_file_id_file_id FOREIGN KEY (file_id) REFERENCES file(id);
ALTER TABLE grouping_file ADD CONSTRAINT grouping_file_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE person ADD CONSTRAINT person_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE person ADD CONSTRAINT person_photo_image_id_file_id FOREIGN KEY (photo_image_id) REFERENCES file(id);
ALTER TABLE person ADD CONSTRAINT person_nationality_id_nationality_id FOREIGN KEY (nationality_id) REFERENCES nationality(id);
ALTER TABLE person ADD CONSTRAINT person_marital_status_id_marital_status_id FOREIGN KEY (marital_status_id) REFERENCES marital_status(id);
ALTER TABLE person ADD CONSTRAINT person_educational_level_educational_level_id FOREIGN KEY (educational_level) REFERENCES educational_level(id);
ALTER TABLE person ADD CONSTRAINT person_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE person ADD CONSTRAINT person_address_area3_area_level3_id FOREIGN KEY (address_area3) REFERENCES area_level3(id);
ALTER TABLE person ADD CONSTRAINT person_address_area2_area_level2_id FOREIGN KEY (address_area2) REFERENCES area_level2(id);
ALTER TABLE person ADD CONSTRAINT person_address_area1_area_level1_id FOREIGN KEY (address_area1) REFERENCES area_level1(id);
ALTER TABLE person_file ADD CONSTRAINT person_file_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE person_file ADD CONSTRAINT person_file_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE person_file ADD CONSTRAINT person_file_file_id_file_id FOREIGN KEY (file_id) REFERENCES file(id);
ALTER TABLE person_file ADD CONSTRAINT person_file_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE person_grouping ADD CONSTRAINT person_grouping_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE person_grouping ADD CONSTRAINT person_grouping_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE person_grouping ADD CONSTRAINT person_grouping_grouping_id_grouping_id FOREIGN KEY (grouping_id) REFERENCES grouping(id);
ALTER TABLE person_grouping ADD CONSTRAINT person_grouping_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE sub_grouping ADD CONSTRAINT sub_grouping_updated_by_sf_guard_user_id FOREIGN KEY (updated_by) REFERENCES sf_guard_user(id);
ALTER TABLE sub_grouping ADD CONSTRAINT sub_grouping_supergrouping_id_grouping_id FOREIGN KEY (supergrouping_id) REFERENCES grouping(id);
ALTER TABLE sub_grouping ADD CONSTRAINT sub_grouping_subgrouping_id_grouping_id FOREIGN KEY (subgrouping_id) REFERENCES grouping(id);
ALTER TABLE sub_grouping ADD CONSTRAINT sub_grouping_created_by_sf_guard_user_id FOREIGN KEY (created_by) REFERENCES sf_guard_user(id);
ALTER TABLE user_login_history ADD CONSTRAINT user_login_history_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;