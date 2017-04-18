// variables for personal info
var sLName = document.getElementById("slname");
var sFName = document.getElementById("sfname");
var sex = document.getElementsByName("choose");
var dateOB = document.getElementById("sdob");
var age = document.getElementById("sage");
var nationality = document.getElementById("snationality");

//variables for contact Info
var mumName = document.getElementById('mname');
var mumPhone = document.getElementById("mtel");
var dadName = document.getElementById("fname");
var dadPhone = document.getElementById("ftel");
var hospital = document.getElementById("hosname");
var doctor = document.getElementById("docname");
var docNumber = document.getElementById("doctel");

//variables for emergency contacts
var contact1Name = document.getElementById("con1name");
var contact1Phone = document.getElementById("con1tel");
var contact1Relate = document.getElementById("con1relate");

//variable for existing medical conditions
var medicalConditions = document.getElementsByName("conditions"); //check

//variable for medical history
var medicalHistory = document.getElementsByName("history"); //check

//variables for emergency medical information
var studentName = document.getElementById("studentname");
var grade = document.getElementById("studentgrade");
var parent = document.getElementById("parentname");
var phone = document.getElementById("parentnumber");
var check1 = document.getElementById("part1");
var check2 = document.getElementById("part2");

// variables for insurance information
var option = document.getElementById("insurance");
var insurer = document.getElementById("insurer");
var type = document.getElementById("insurancetype");


//function
function validatePage5()
{
  //personal info
  if (sLName.value == "")
  {
    alert ("Please enter the applicant's last name");
  }
  else if (sFName.value == "")
  {
    alert ("Please enter the applicant's first name");
  }
  else if (!(this.form.male.checked || this.form.female.checked))
  {
    alert ("Please select the gender of the applicant");
  }
  else if (dateOB.value == "")
  {
    alert ("Please enter the applicant's date of birth");
  }
  else if (age.value == "")
  {
    alert ("Please enter the applicant's age");
  }
  else if (nationality.value == "")
  {
    alert ("Please enter the applicant's nationality");
  }

  //contact Info

  else if (mumName.value == "")
  {
    alert("Please enter the name of the applicant's mother");
  }
  else if (mumPhone.value == "")
  {
    alert ("Please enter the telephone number of the applicant's mum");
  }
  else if (dadName.value == "")
  {
    alert ("Please enter the name of the applicant's father");
  }
  else if (dadPhone.value == "")
  {
    alert ("Please enter the telephone number of the applicant's father");
  }
  else if (hospital.value == "")
  {
    alert ("Please state the hospital you prefer your child be treated by in case of illness or injury");
  }
  else if (doctor.value == "")
  {
    alert ("Please state the name of your preferred doctor");
  }
  else if (docNumber.value == "")
  {
    alert ("Please enter the telephone number of your preferred doctor");
  }

  // emergency contacts
  else if (contact1Name.value == "")
  {
    alert ("Please enter the name of one person to be contacted in case of emergency");
  }
  else if (contact1Phone.value == "")
  {
    alert ("Please enter the telephone number of " + contact1Name.value);
  }
  else if (contact1Relate.value == "")
  {
    alert ("Please state the relationship between " + contact1Name.value + " and the applicant");
  }

  //existing medical conditions
  else if (!(this.form.c1.checked||this.form.c2.checked||this.form.c3.checked||this.form.c4.checked||this.form.c5.checked||this.form.c6.checked||this.form.c7.checked))
  {
    alert ("Please fill the portion under existing medical conditions");
  }

  //medical history
  else if (!(this.form.h1.checked||this.form.h2.checked||this.form.h3.checked||this.form.h4.checked||this.form.h5.checked||this.form.h6.checked||this.form.h7.checked||this.form.h8.checked||this.form.h9.checked))
  {
    alert ("You must select at least one of the options under \'Medical History\'");
  }

  // emergency medical information
  else if (studentName.value == "")
  {
    alert("Please enter the applicant's name under Emergency Medical Information");
  }
  else if (grade.value == "")
  {
    alert ("Please enter the current grade the applicant is in. Enter 'N/A' if not applicable");
  }
  else if (parent.value == "")
  {
    alert ("Please enter the name of a parent or guardian of the applicant");
  }
  else if (phone.value == "")
  {
    alert ("Please enter the telephone number of " + parent.value);
  }
  else if (!(this.form.part1.checked || this.form.part2.checked))
  {
    alert ("You must select one of the options: Part 1 or Part 2");
  }

  // insurance information
  else if (option.value == "Select...")
  {
    alert("Please select an option under 'Does your child have insurance?'");
  }
  else if (insurer.value == "")
  {
    alert ("Please enter the name of the insurance company");
  }
  else if (type.value == "")
  {
    alert ("Please enter the type of insurance your child has");
  }
  else
  {
    alert ("Thank you for filling out all the fields.");
  }
}
