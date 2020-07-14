
$(document).ready(function(){
  $("#create").click(function(){
    var month=$("#month").val();
    var year=$("#yr").val();

    // Check browser support
    if (typeof(Storage) !== "undefined") {
      // Store
      localStorage.setItem("month", month);
      localStorage.setItem("year", year);
      console.log(month);
      // location.reload();
    } else {
      document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    }
