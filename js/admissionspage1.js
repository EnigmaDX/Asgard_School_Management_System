//personal information
var firstName = document.getElementById("fname");
var lastName = document.getElementById("lname");
var preferredName = document.getElementById("prefname");
var childAge = document.getElementById("age");
var childSex = document.getElementById("sex");
var childDOB = document.getElementById("dob");
var childCityOB = document.getElementById("city");
var childRegionOB = document.getElementById("region");
var childCountryOB = document.getElementById("country");
var childNationality = document.getElementById("nationality");
var childHome = document.getElementById("home");
var childPost = document.getElementById("postaladdress");

//guardian/parent information
//var guard1Title = document.getElementsByName("selector");
var guard1FName = document.getElementById("guard1fname");
var guard1LName = document.getElementById("guard1lname");
var guard1Relate = document.getElementById("guard1relate");
var guard1Nationality = document.getElementById("guard1nationality");
var guard1Reside = document.getElementById("guard1countryresidence");
var guard1Work = document.getElementById("guard1work");
var guard1Home = document.getElementById("guard1home");
var guard1Post1 = document.getElementById("guard1post1");
var guard1Post2 = document.getElementById("guard1post2");
var guard1Cell = document.getElementById("guard1tel");
var guard1Email = document.getElementById("guard1mail");


//validation function
function validateIndex()
{
  //personal information
  if (firstName.value == "")
  {
    alert("Please enter the applicant's first name");
  }

  else if (lastName.value == "")
  {
    alert (" Please enter the applicant's last name or surname");
  }

  else if (preferredName.value == "")
  {
    alert ("Please enter the name the applicant wants to be called by");
  }

  else if (childAge.value == "")
  {
    alert ("Please enter the applicant's age");
  }

  else if (childSex.value == "Select...")
  {
    alert("Please select the gender of the applicant");
  }

  else if (childDOB.value == "")
  {
    alert ("Please select the applicant's date of birth");
  }

  else if (childCityOB.value == "")
  {
    alert ("Please enter the city in which the applicant was born");
  }

  else if (childRegionOB.value == "")
  {
    alert ("Please enter the region or state the applicant was born in");
  }

  else if (childCountryOB.value == "")
  {
    alert ("Please enter the country the applicant was born in");
  }

  else if (childNationality.value == "")
  {
    alert ("Please enter the nationality of the applicant");
  }

  else if (childHome.value == "")
  {
    alert ("Please enter a home address for the applicant");
  }

  else if (childPost.value == "")
  {
    alert ("Please enter a postal address for the applicant");
  }
   else if (!(this.form.option1.checked || this.form.option2.checked || this.form.option3.checked || this.form.option4.checked))
   {
     alert ("Please select one of the titles");
   }
   else if (guard1FName.value == "")
   {
     alert("Please enter the first name of a parent or guardian");
   }
   else if (guard1LName.value == "")
   {
     alert ("Please enter " + guard1FName.value + "\'s last name");
   }
   else if (guard1Relate.value == "")
   {
     alert ("Please enter the relationship " + guard1FName.value + " has with the applicant");
   }
   else if (guard1Nationality.value == "")
   {
     alert ("Please enter " + guard1FName.value + "\'s nationaity");
   }
   else if (guard1Reside.value == "")
   {
     alert ("Please enter the country " + guard1FName.value + " permanently lives in");
   }
   else if (guard1Work.value == "")
   {
     alert ("Please enter " + guard1FName.value + "\'s occupation");
   }
   else if (guard1Home.value == "")
   {
     alert ("Please fill in the field for home address");
   }
   else if (guard1Post1.value == "Select...")
   {
     alert ("Please select an option under \"Postal address \"");
   }
   else if (guard1Cell.value == "")
   {
     alert ("Please enter " + guard1FName.value + "\'s telephone number");
   }
   else if (guard1Email.value == "")
   {
     alert ("Please enter " + guard1FName.value + "\'s Email address");
   }
   else
   {
     window.location.href = "../pages/admissionspage2.php";
   }

