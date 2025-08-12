

/*

  DDL => CREATE , ALTER , DROP, MODIFY , TRUNCATE, RENAME
  DML => INSERT , UPDATE , DELETE
  DQL => SELECT , JOINS , etc
  DCL => GRANT , REVOKE
  TCL => COMMIT , ROLLBACK 
*/


ALTER table users ADD CONSTRAINT fk_deptid FOREIGN KEY(deptid) REFERENCES departments(id) ON UPDATE SET NULL ON  DELETE  SET NULL;

/* INNER JOIN */
SELECT users.id , users.name , departments.name FROM users INNER JOIN departments
ON users.deptid = departments.id;

/* LEFT JOIN */
SELECT users.id , users.name , departments.name FROM users LEFT JOIN departments
ON users.deptid = departments.id;

/* RIGHT JOIN */
SELECT users.id , users.name , departments.name FROM users RIGHT JOIN departments
ON users.deptid = departments.id;