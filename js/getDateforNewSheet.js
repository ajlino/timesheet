
$(document).ready(function(){
  $("#create").click(function(){
    var mth=$("#mth").val();
    var yr=$("#yr").val();

    // Check browser support
    if (typeof(Storage) !== "undefined") {
      // Store
      localStorage.setItem("month", mth);
      localStorage.setItem("year", yr);
       location.reload();
    } else {
      document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    }
  });
});
