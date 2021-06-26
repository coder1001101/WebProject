$(document).ready(function()
{
  // alert("jquery is conected") // testing parpus
  $("#loginbtn").on("click", function(e)
  {
    $.ajax(
    {
      url: "login.html",
      type: "POST",
      success: function(data)
      {
        $("#table-data").html(data);

      }
    });
  });
});

