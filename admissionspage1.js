
var childFname = document.getElementById("fname");
//var childMname = document.getElementById("midname");
var childLname = document.getElementById("lname");
var childPrefname = document.getElementById("prefname");
var childAge = document.getElementById("age");
var childSex = document.getElementById("sex");
var childDOB = document.getElementById("dob");
var childCityOB = document.getElementById("city");
var childRegionOB = document.getElementById("region");
var childCountryOB = document.getElementById("country");
var childNationality = document.getElementById("nationality");
var childHome = document.getElementById("home");
var childPost = document.getElementById("postaladdress");
var childContactName = document.getElementById("contactname");
var childContactRelate = document.getElementById("relationship");
var childContactTel1 = document.getElementById("pnumber");
var childContactTel2 = document.getElementById("snumber");
var childReside = document.getElementsByName("selector");



function validateIndex()
{
  if (childFname.value == "")
  {
    alert("Please enter the applicant's first name");
  }

  else if (childLname.value == "")
  {
    alert (" Please enter the applicant's last name or surname");
  }

  else if (childPrefname.value == "")
  {
    alert ("Please enter the name the applicant wants to be called by");
  }

  else if (childAge.value == "")
  {
    alert ("Please enter the applicant's age");
  }

  else if (childSex.value == "Select")
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

  else if (childContactName.value == "")
  {
    alert ("Please enter the name of a contact person in case of emergency");
  }

  else if (childContactRelate.value == "")
  {
    alert ("Please state the relationship the contact person has with the child");
  }

  else if (childContactTel1.value == "")
  {
    alert ("Please enter a reliable phone number that can be contacted in case of emergency");
  }
  else if(!(this.form.oneparent.checked || this.form.twoparents.checked || this.form.guardian.checked))
    {
     alert('You must select one of the options under "\The applicant live with ...\".');
     return false;
   }
   else  (this.form.oneparent.checked || this.form.twoparents.checked || this.form.guardian.checked)
   {
     window.location.href = "admissionspage2.html";
   }
  /*else
  {
    window.location.href = "admissionspage2.html";
  }*/
}


/*var selectValue = false;

for (var i=0; i<selector.length; i++)
{
  if (selector[i].checked == true)
  {
    selectValue = true;
  }
}
http://stackoverflow.com/questions/10339073/radio-button-validation-in-javascript */
