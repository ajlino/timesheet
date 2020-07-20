$(document).ready(function(){

  $("#createReport").submit(function(event){
    console.log("Bozo");
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
        var jsonData = JSON.parse(response);
        console.log(jsonData);  //for debugging

        if (jsonData=="0results"){
          alert("No results");
        }
        else{
          var html="";
          var headers="";
          var lineEnd=","
          jsonData.forEach(myFunction);

          function myFunction(item, index){

            if (item=='End-Of-Row'){
              html+="\n"; //if end
            } else{
            html+=item+",";
            }
          }
           $("#data").append(html);


        // var html="";
        // var x=0;
        // html+="<tr>";
        //
        // jsonData.forEach(myFunction);
        //
        // function myFunction(item, index){
        //   html+="<td>" + item + "</td>";
        //   x++;
        // }
        // html+="</tr>";
        // // console.log(x);
        // $("#data").append(html);

        localStorage.setItem("results", html);
        $("#csvButton").prop("disabled", false);
      }
  	});
  });


});
