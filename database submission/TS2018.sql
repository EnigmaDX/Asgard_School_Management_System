CREATE DATABASE `TS2018`;

CREATE TABLE `STUDENT`
(
  sID integer PRIMARY KEY NOT NULL,
  sFirstName varchar(30),
  sMiddleInitial varchar(6),
  sLastName varchar(50),
  sGender varchar(1),
  sDateOfBirth date, /*date takes yyyy-mm-dd */
  sPlaceOfBirth varchar(150),
  sNationality varchar(80),
);



CREATE TABLE `ACADEMIC_RECORD`
(
  sID FOREIGN KEY REFERENCES `STUDENT`,
  classCode FOREIGN KEY REFERENCES `CLASSES`,
  grade varchar(2),
  term varchar(15),
  year int(4)
);


CREATE TABLE `HEALTH_RECORD`
(
  healthID integer PRIMARY KEY NOT NULL,
  sID FOREIGN KEY REFERENCES `STUDENT`,
  bloodType varchar(5),
  Parent_or_Guardian_name varchar(50),
  Parent_or_Guardian_number int(10),
  Hospital varchar(100),
  DoctorName varchar(80),
  DoctorPhone int(10)
);


CREATE TABLE `CLASSES`
(
  classCode varchar(20) PRIMARY KEY NOT NULL,
  className varchar(100),
  classTeacher varchar (100),
  classVenue varchar(100)
);

CREATE TABLE `TEACHERS`
(
  ID integer PRIMARY KEY NOT NULL,
  FName varchar(20),
  LName varchar(50),
  PhoneNum integer(10),
  Address varchar(50)
);

CREATE TABLE `STAFF`
(
  staffID integer PRIMARY KEY NOT NULL,
  staffFName varchar(20),
  staffLName varchar(50),
  staffNum integer(10),
  staffAddress varchar(50)
);

CREATE TABLE `PARENT_OR_GUARDIAN`
(
  pId integer PRIMARY KEY NOT NULL,
  firstName varchar(20),
  lastName varchar(20),
  gender varchar(2),
  phoneNum int(10),
  wardID FOREIGN KEY REFERENCES `STUDENT`
);

CREATE TABLE `AUTHORISATION`
(
  sID FOREIGN KEY REFERENCES `STUDENT`,
  healthID FOREIGN KEY REFERENCES `HEALTH_RECORD`,
  consent? varchar(5)
);

CREATE TABLE `STUDENT_CLASSES`
(
  sID FOREIGN KEY REFERENCES `STUDENT`,
  classCode FOREIGN KEY REFERENCES `CLASSES`
);

CREATE TABLE `PARENT_CHILD`
(
  parentID FOREIGN KEY REFERENCES `PARENT_OR_GUARDIAN`,
  sID FOREIGN KEY REFERENCES `STUDENT`
);

CREATE TABLE `COURSE_TEACHERS`
(
  classCode FOREIGN KEY REFERENCES `CLASSES`,
  staffID FOREIGN KEY REFERENCES `STAFF`
);
