
var schName1 = document.getElementById("schname1");
var nameOfHead1 = document.getElementById("headname1");
var schTel1 = document.getElementById("tel1");
var prevAttend = document.getElementsByName("selector");

/* */
function validatePage2()
{
  if(!(this.form.schyes.checked || this.form.schno.checked))
    {
     alert('You must select one of the options.');
   }
   else if (schName1.value == "")
  {
    alert ("Please enter the name of the most recent school the applicant has attended");
  }

  else if (nameOfHead1.value == "")
  {
    alert ("Please enter the name of the Head of the School");
  }

  else if (schTel1.value == "")
  {
    alert ("Please enter the telephone number of the school");
  }

   else
   {
     window.location.href = "admissionspage3.html";
   }

}
