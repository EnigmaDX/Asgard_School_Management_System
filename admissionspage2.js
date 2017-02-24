
var schName1 = document.getElementById("schname1");
var nameOfHead1 = document.getElementById("headname1");
var schTel1 = document.getElementById("tel1");
var prevAttend = document.getElementsByName("selector");

/* */
function validatePage2()
{

 if (schName1.value == "")
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

  else if(!(this.form.schyes.checked || this.form.schno.checked))
    {
     alert('You must select one of the options.');
     return false;
   }
   else if (this.form.schyes.checked || this.form.schno.checked)
   {
     window.location.href = "admissionspage3.html";
   }

}

/*  else
  {
    window.location.href = "admissionspage3.html";
  }
/*
function checkRadio2(check)
{

for (var i = 0, len = check.length; i < len; i++)
  {
    if (!check[i].checked)
      {
        alert ("Please select whether the applicant has been to school before");
      }
   }

   /*
     else if (!prevAttend)
     {
       alert ("Please select whether the applicant has been to school before");
     }


   if(!this.form.checkbox.checked)
  {
      alert('You must agree to the terms first.');
      return false;
  }
}*/
