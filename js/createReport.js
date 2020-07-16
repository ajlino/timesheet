
$("#createReport").submit(function(event)){
  event.preventDefault();  //prevent default action (form submission to php)
  var post_url=$(this).attr("action");  //get from action url
  var form_data = ($this). serialize();  //encode form elements for submission

  $.getJSON( post_url, form_data, function(response){
      //iterate json response
      $.each(response, function(key, val){
          $("#server-results").append(val+"<br/>");  //append results to element

      })
  })
});


    
