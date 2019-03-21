<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP, jQuery search demo</title>
<link rel="stylesheet" type="text/css" href="my.css">
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
 
$(function() {
 
    $(".search_button").click(function() {
        // getting the value that user typed
        var searchString    = $("#search_box").val();
        // forming the queryString
        var data            = 'search='+ searchString;
         
        // if searchString is not empty
        if(searchString) {
            // ajax call
            $.ajax({
                type: "POST",
                url: "do_search.php",
                data: data,
                beforeSend: function(html) { // this happens before actual call
                    $("#results").html(''); 
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ // this happens after we get results
                    $("#results").show();
                    $("#results").append(html);
              }
            });    
        }
        return false;
    });
});
</script>
 <?php
//if we got something through $_POST
if (isset($_POST&#91;'search'&#93;)) {
    // here you would normally include some database connection
    include('db.php');
    $db = mysqli_connect("localhost","root","","");
    // never trust what user wrote! We must ALWAYS sanitize user input
    $word = mysql_real_escape_string($_POST&#91;'search'&#93;);
    $word = htmlentities($word);
    // build your search query to the database
    $sql = "SELECT title, url FROM pages WHERE content LIKE '%" . $word . "%' ORDER BY title LIMIT 10";
    // get results
    $row = $db->select_list($sql);
    if(count($row)) {
        $end_result = '';
        foreach($row as $r) {
            $result         = $r['title'];
            // we will use this to bold the search word in result
            $bold           = '<span class="found">' . $word . '</span>';    
            $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';            
        }
        echo $end_result;
    } else {
        echo '<li>No results found</li>';
    }
}
?>
</head>
<body>
<div id="container">
<div style="margin:20px auto; text-align: center;">
<form method="post" action="do_search.php">
    <input type="text" name="search" id="search_box" class='search_box'/>
    <input type="submit" value="Search" class="search_button" /><br />
</form>
</div>      
<div>
 
<div id="searchresults">Search results :</div>
<ul id="results" class="update">
</ul>
 
</div>
</div>
   
</body>
</html>