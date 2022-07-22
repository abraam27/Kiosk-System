$(document).ready(function(){
   $("select").change(function(){
       // get data from select
       var name = $(this).val();
       // load ajax
       $.ajax({
            url:"data.php?name="+name,
            success:function(data){
                $("#info").html(data);
            },
            error:function(data){
                $("#info").html("data");
            }
        });
   });
});
function myFunction() {
  // Declare variables
  var input, filter, well , p, a, i, txtValue;
  input = document.getElementById('search');
  filter = input.value.toUpperCase();
  well = document.getElementById("well");
  p = well.getElementsByTagName('p');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < p.length; i++) {
    a = p[i].value.toUpperCase()[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      p[i].style.display = "";
    } else {
      p[i].style.display = "none";
    }
  }
}
