CREATE
USER 'AJG_SaaS_FED_2025_S1'@'localhost'
    IDENTIFIED VIA mysql_native_password USING 'Password1';

GRANT USAGE ON *.* TO
'AJG_SaaS_FED_2025_S1'@'localhost'
    REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

DROP
DATABASE IF EXISTS `AJG_SaaS_FED_2025_S1`;
CREATE
DATABASE IF NOT EXISTS `AJG_SaaS_FED_2025_S1`;

GRANT ALL PRIVILEGES ON
       `AJG\_SaaS\_FED\_2025\_S1`.* TO
'AJG_SaaS_FED_2025_S1'@'localhost';



USE
AJG_SaaS_FED_2025_S1;

CREATE TABLE demo
(
    id     BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name   VARCHAR(255) NOT NULL,
    colour VARCHAR(128) DEFAULT "Unknown",
    owned  BOOLEAN      DEFAULT FALSE
);

create table `form_submissions`
(
    id      BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name    VARCHAR(255) NOT NULL,
    email   VARCHAR(255) NOT NULL,
    subject VARCHAR(64),
    message TEXT,
    privacy BOOLEAN
);

INSERT INTO demo VALUES (1, "Daffy", "Black", True);

INSERT INTO demo(name, colour, owned)
VALUES ("Donald", "White", False),
       ("Scrooge McDuck", "White", False),
       ("Orville", "Green", False),
       ("Mickey", "Black", True),
       ("Mini", "Black", False),
       ("Clifford", "Red", True);