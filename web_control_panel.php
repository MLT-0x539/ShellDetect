<!-- PRIMARY WEB BASED UI TO GO HERE -->

<!DOCTYPE html>
<html>
<head>
 <title>WEB SHELL DETECTOR</title>
 <meta charset="UTF-8">
 <script src="live_output.js"></script>
 <script src="dosplay_iframe.js"</script>
 <link rel="stylesheet" href="live_output.css">
</head>
<body>
  <center>
    <h1><u> WEB SHELL DETECTION TOOL </u></h1>
    <br />
    <br />
    <h5>Select choice of spoken language:</h5>
    <!-- FORM TO GO HERE -->
    <br />
    <br />
    <h5>Select choice of language that shell is written in:</h5>
    <!-- FORM TO GO HERE -->
  </center>
  
  <?php 
   include("INIT.php");
  ?>

 <br />
 <br />
  
 <a href="javascript:toBeUpdated();"> Display sorted output results: </a>
 <!-- IFRAME REMAINS HIDDEN UNTIL HYPERLINK IS CLICKED -->
 <!-- 'display_iframe.js' SCRIPT IS CALLED ONCE HYPERLINK IS CLICKED -->
 <style>
   iframe {
    display: none;
    }
 </style>
 <iframe src="result_sorted_output.html" width="40%" height="35%" frameborder="0"></iframe>
</body>
</html>
