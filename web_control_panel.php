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
   error_reporting(0);
   $shell_detect_include = 'shell_detect.php';
   $shell_db_include = 'shell_detect.db';
   $shell_db_include2 = 'shell_detect_plaintext.db';
   $shell_ini_include = 'shell_detect.ini';
   $result_sort_include = 'result_sorter.sh';;
   $sorted_output_results_include = 'result_sorted_output.html';
   $languages_include = array("BR.php", "chinese.php", "french.php", "german.php", "italian.php", "spanish.php", "russian.php");
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
