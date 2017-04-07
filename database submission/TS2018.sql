
CREATE TABLE IF NOT EXISTS `STUDENT`
(
  sID integer PRIMARY KEY NOT NULL,
  sFirstName varchar(30),
  sMiddleInitial varchar(6),
  sLastName varchar(50),
  sGender varchar(1),
  sDateOfBirth date, /*date takes yyyy-mm-dd */
  sPlaceOfBirth varchar(150),
  sNationality varchar(80)
);

CREATE TABLE IF NOT EXISTS `CLASSES`
(
  classCode varchar(20) PRIMARY KEY NOT NULL,
  className varchar(100),
  classTeacher varchar (100),
  classVenue varchar(100)
);

CREATE TABLE IF NOT EXISTS `ACADEMIC_RECORD`
(
  sID integer,
  classCode varchar(15),
  grade varchar(2),
  term varchar(15),
  year int(4),
  FOREIGN KEY (sID) REFERENCES STUDENT(sID),
  FOREIGN KEY (classCode) REFERENCES CLASSES(classCode)
  );


CREATE TABLE IF NOT EXISTS `HEALTH_RECORD`
(
  healthID integer PRIMARY KEY NOT NULL,
  sID integer,
  bloodType varchar(5),
  Parent_or_Guardian_name varchar(50),
  Parent_or_Guardian_number int(10),
  Hospital varchar(100),
  DoctorName varchar(80),
  DoctorPhone int(10),
  FOREIGN KEY (sID) REFERENCES STUDENT(sID)
);



CREATE TABLE IF NOT EXISTS `TEACHERS`
(
  ID integer PRIMARY KEY NOT NULL,
  FName varchar(20),
  LName varchar(50),
  PhoneNum integer(10),
  Address varchar(50)
);

CREATE TABLE IF NOT EXISTS `STAFF`
(
  staffID integer PRIMARY KEY NOT NULL,
  staffFName varchar(20),
  staffLName varchar(50),
  staffNum integer(10),
  staffAddress varchar(50)
);

CREATE TABLE IF NOT EXISTS `PARENT_OR_GUARDIAN`
(
  pId integer PRIMARY KEY NOT NULL,
  firstName varchar(20),
  lastName varchar(20),
  gender varchar(2),
  phoneNum int(10),
  wardID integer,
  FOREIGN KEY (wardID) REFERENCES STUDENT(sID)

);

CREATE TABLE IF NOT EXISTS `AUTHORISATION`
(
  sID integer,
  healthID integer,
  consent varchar(5),
  FOREIGN KEY (sID) REFERENCES STUDENT(sID),
  FOREIGN KEY (healthID) REFERENCES HEALTH_RECORD(healthID)
);

CREATE TABLE IF NOT EXISTS `STUDENT_CLASSES`
(
  sID integer,
  classCode varchar(20),
  FOREIGN KEY (sID) REFERENCES STUDENT(sID),
  FOREIGN KEY (classCode) REFERENCES CLASSES(classCode)
);

CREATE TABLE IF NOT EXISTS `PARENT_CHILD`
(
  parentID integer,
  sID integer,
  FOREIGN KEY (parentID) REFERENCES PARENT_OR_GUARDIAN(pId),
  FOREIGN KEY (sID) REFERENCES STUDENT(sID)
);

CREATE TABLE IF NOT EXISTS `COURSE_TEACHERS`
(
  classCode varchar(20),
  staffID integer,
  FOREIGN KEY (classCode) REFERENCES CLASSES(classCode),
  FOREIGN KEY (staffID) REFERENCES STAFF(staffID)
);
