  <?php 
// i18n script 2 go here :)
   error_reporting(0);
   $shell_detect_include = 'shell_detect.php';
   $shell_db_include = 'shell_detect.db';
   $shell_db_include2 = 'shell_detect_plaintext.db';
   $shell_ini_include = 'shell_detect.ini';
   $result_sort_include = 'result_sorter.sh';;
   $sorted_output_results_include = 'result_sorted_output.html';
   $python_script_include = 'shell_detect.py'l
   $version_include = '/conf/version.db';
   $app_info_include = '/conf/app';
   $languages_include = array("BR.php", "chinese.php", "french.php", "german.php", "italian.php", "spanish.php", "russian.php");

   public function getVersionz1() {
       $ver = file_get_contents($version_include);
       $app_ver = file_get_contents($app_info_include);
    }

  public function getLanguage() {
    $form_input = $_POST['spoken_language'];
    if (isset($form_input) && $form_input == "1" {
      $chosen_lang = $release_edu_qual[0]["location"];
      include($chosen_lang);
   }
    else if (isset($form_input) && $form_input == "2" {
      $chosen_lang = $release_edu_qual[1][$language_include];
      include($chosen_lang);        
   }
    else if (isset($form_input) && $form_input == "3" {
      $chosen_lang = $release_edu_qual[2][$language_include];
      include($chosen_lang);
 }
    else if (isset($form_input) && $form_input == "4" {
      $chosen_lang = $release_edu_qual[3][$language_include];
      include($chosen_lang);
 }
    else if (isset($form_input) && $form_input == "5" {
      $chosen_lang = $release_edu_qual[4][$language_include];
      include($chosen_lang);
 }
    else if (isset($form_input) && $form_input == "6" {
      $chosen_lang = $release_edu_qual[5][$language_include];
      include($chosen_lang);
 }
    else if (isset($form_input) && $form_input == "7" {
      $chosen_lang = $release_edu_qual[6][$language_include];
      include($chosen_lang);
 }
    else {
      echo "<br /><b>INVALID USER INPUT</b>";
     }
}

public function runSorter1() {
 system("chmod +x result_sorter.sh");
 system("./result_sorter.sh");
} 

public function pyShellFind() {
 system("chmod +x shell_detect.py");
 system("python shell_detect.py -r True -d ./");
} 
  ?>
