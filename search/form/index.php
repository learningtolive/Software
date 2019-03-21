<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
/**
* Search Form in PHP MySQL using Ajax 
* @author Srinivas Katam http://www.sourceforcode.com, srinivaskatam1980@gmail.com
* @since 15/02/2018 
*/
<script type="text/javascript">

$(document).ready(function(){

    $('.search-box input[type="text"]').on("keyup input", function(){

        /* Get input value on change */

        var inputVal = $(this).val();

        var resultDropdown = $(this).siblings(".result");

        if(inputVal.length){

            $.get("backend-search.php", {term: inputVal}).done(function(data){

                // Display the returned data in browser

                resultDropdown.html(data);

            });

        } else{

            resultDropdown.empty();

        }

    });

    

    // Set search input value on click of result item

    $(document).on("click", ".result p", function(){

        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());

        $(this).parent(".result").empty();

    });

});

</script>

</head>
<body>
<div class="container">
   
       <div class="search-box">
        <br><br>
        <h3><b>Search:</b></h3>
        

        <input class="u-full-width" type="text" autocomplete="off" placeholder="Search country..." />

        <div class="result"></div>
   
</div>

  
</body>
</html>
