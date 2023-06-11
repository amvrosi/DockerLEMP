USE university;

CREATE TABLE students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    surname VARCHAR(40) NOT NULL,
    index_number VARCHAR(5) NOT NULL
);

INSERT INTO students (name, surname, index_number)
VALUES ('Ivan', 'Sobol', '96526');
