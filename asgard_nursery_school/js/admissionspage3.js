var anySiblings = document.getElementById("siblings");
var Sib1Name = document.getElementById("sibname1");
var Position1 = document.getElementsByName("selector");
var Sib1School = document.getElementById("sibsch1");
var Sib1Grade = document.getElementById("sibgrade1");
var Sib1Apply = document.getElementsByName("apply");
/*var Sib2Name = document.getElementById("sibname2");
var Position2 = document.getElementsByName("selector2");
var Sib2School = document.getElementById("sibsch2");
var Sib2Grade = document.getElementById("sibgrade2");
var Sib2Apply = document.getElementsByName("apply2");
var Sib3Name = document.getElementById("sibname3");
var Position3 = document.getElementsByName("selector3");
var Sib3School = document.getElementById("sibsch3");
var Sib3Grade = document.getElementById("sibgrade3");
var Sib3Apply = document.getElementsByName("apply3");
*/


function validateSiblings()
{
  if (anySiblings.value == "Select...")
  {
    alert ("Select whether the applicant has siblings or not");
  }
  else if (Sib1Name.value == "")
  {
    alert ("Please enter the name of one of the applicant's siblings");
  }
  else if (Sib1School.value == "")
  {
    alert ("Please enter the name of the school " + Sib1Name.value + " attends");
  }
  else if (Sib1Grade.value == "")
  {
    alert ("Please enter the grade " + Sib1Name.value + " is in");
  }
  //problem here
  else if (!(this.form.apply.checked || this.form.apply2.checked))
  {
    alert ("Please select one of the options under 'Are they also applying here?'");
  }
  else
  {
    window.location.href = "admissionspage4.html";
  }
}
