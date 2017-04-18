
CREATE TABLE `PREVIOUS_ACADEMIC_INFO`
(
  sID FOREIGN KEY REFERENCES `STUDENT`,
  OtherSchools varchar(1),
  SchoolName varchar(100),
  SchoolHead varchar(60),
  SchoolTel int(10)
);


CREATE TABLE `SIBLINGS`
(
  sID FOREIGN KEY REFERENCES `STUDENT`,
  anySiblings varchar(1),
  SiblingName varchar(50),
  SiblingPlace varchar(15),
  SiblingSchool varchar(100),
  SiblingGrade varchar(6)
  Applying? varchar(5)
);



CREATE TABLE `PARENT_OR_GUARDIAN_INFO`
(
  parentID integer PRIMARY KEY NOT NULL,
  pTitle varchar(5),
  pName varchar(100),
  pRelate varchar(15),
  pNationality varchar(50),
  pHomeCountry varchar(50),
  pOccupation varchar(50),
  pHomeAddress varchar(100),
  pPostalAddress1 varchar(100),
  pPostalAddress2 varchar(100),
  pTelephone int(10),
  pEmail varchar(50)
);

CREATE TABLE `BASIC_HEALTH_BIODATA`
(
  healthID integer PRIMARY KEY NOT NULL,
  sID FOREIGN KEY REFERENCES `STUDENT`,
  bloodType varchar(5),
  MumName varchar(100),
  MumWorkPhone int(10),
  MumMobile int(10),
  DadName varchar(100),
  DadWorkPhone int(10),
  DadMobile int(10),
  Hospital varchar(100),
  DoctorName varchar(80),
  DoctorPhone int(10)
);

CREATE TABLE `ALLERGIES`
(
  healthID FOREIGN KEY REFERENCES `BASIC_HEALTH_BIODATA`,
  sID FOREIGN KEY REFERENCES `STUDENT`,
  aID integer PRIMARY KEY NOT NULL,
  allergyType varchar(80),
  specificAllergy varchar(80),
  severity varchar(10),
  reaction varchar(50),
  medicineName varchar(50),
  dose varchar(100)
);

CREATE TABLE `INSURANCE`
(
  sID FOREIGN KEY REFERENCES `STUDENT`,
  healthID FOREIGN KEY REFERENCES `BASIC_HEALTH_BIODATA`,
  hasInsurance? varchar(5),
  companyName varchar(80),
  insuranceType varchar(80)
);

















