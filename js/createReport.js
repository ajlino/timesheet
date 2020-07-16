$(document).ready(function(){
  $("#createReport").submit(function(event){
    event.preventDefault();  //prevent default action (form submission to php)
    var post_url=$(this).attr("action");  //get from action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize();  //encode form elements for submission
    console.log(form_data); //for debugging

    $.ajax({
      url : post_url,
      type: request_method,
      data : form_data
    }).done(function(response){ //
  		$("#server-results").html(response);  //innerHTML for div id server-results
      var jsonData = JSON.parse(response);
      console.log(jsonData);
  	});
  });
});
