CREATE TABLE user (
    kid CHAR(7),
    pass_word VARCHAR(255) NOT NULL,
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45),
    email VARCHAR(100) NOT NULL,
    contact VARCHAR(13) NOT NULL,
    college_name VARCHAR(100) NOT NULL,
    college_city VARCHAR(100) NOT NULL,
    yr INT NOT NULL DEFAULT 0,
    dept VARCHAR(100) NOT NULL DEFAULT '',
    PRIMARY KEY(kid)
);

CREATE TABLE events (
    kid CHAR(7),
    kodestorm BOOLEAN,
    manager BOOLEAN,
    techmaster BOOLEAN,
    event4 BOOLEAN,
    PRIMARY KEY(kid),
    FOREIGN KEY(kid) REFERENCES USER(kid)
);

CREATE TABLE workshops (
    kid CHAR(7) NOT NULL,
    email VARCHAR(100) NOT NULL,
    workshop_name VARCHAR(50),
    PRIMARY KEY(kid),
    FOREIGN KEY(kid) REFERENCES USER(kid)
);

CREATE TABLE payment (
    kid CHAR(7),
    transaction_id VARCHAR(1000),
    workshop VARCHAR(50),
    paid INT(1),
    PRIMARY KEY(kid),
    FOREIGN KEY(kid) REFERENCES USER(kid)
);

CREATE TABLE prev(
    prev CHAR(6) NOT NULL DEFAULT '211000',
    PRIMARY KEY(prev)
);

CREATE TABLE queries (
    f_name VARCHAR(50) NOT NULL,
    l_name VARCHAR(45),
    email VARCHAR(25) NOT NULL,
    msg VARCHAR(750) NOT NULL
);