function load_data(query)
   {
    $.ajax({
     url:"http://localhost/Asgard_School_Management_System/asgard_nursery_school/ajax/fetch.php",
     method:"POST",
     data:{searchKey:query},
     dataType: 'json',

     success:function(response)
     {
      var jParse = response;
       var userID = jParse.userID;
        var userFirstName = jParse.userFirstName;
        var userLastName = jParse.userLastName;

        console.log('Got em');
        console.log('Data obtained : ' + jParse);
      console.log('ID : ' + userID);
      console.log('FirstName : ' + userFirstName);
      console.log('LastName : ' + userLastName);
     
    
      
      //$('#result').html();
    },

    error:function(){
      console.log('bruh, got nunin');
    }
  });
  
  }

$(document).ready(function(){


  $('#searchtxt').keyup(function(){
    var search = $(this).val();
    console.log(search);
    if(search != '')
    {
     load_data(search);
   }
   else
   {
     load_data();
   }
 });


});
