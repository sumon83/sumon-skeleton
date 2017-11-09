//$(document).ready(function () {
//    $('.delete').on('click', function () {
//        var choice = confirm('Do you really want to delete this record?');
//        if (choice === true) {
//            return true;
//              location.reload();
//        }
//        return false;
//    });
//});

function checkDelete() {
    var choice = confirm('Are you sure?');
    if (choice === true) {        
        
        //location.href
      //window.location.href.reload();
       return true;

    }
    return false;  
}


 
  //$(document).ready(function() {
    //$(".zwsdatepicker").datepicker();
   // $("#days_available").multiDatesPicker();
    
  //});