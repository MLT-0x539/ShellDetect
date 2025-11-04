// CODE FOR RESULTS SORTER TO GO HERE

#!/bin/bash
 read shell_lang
  if [[ $shell_lang == "php" || "phtml" || "php3" || "php4" || "php5" || "MOAR TO GO HERE"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == ""asp"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "aspx"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "jsp"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "js"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "cfm"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "htaccess"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "ico"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "rb"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "pl"]]; then
    echo -e "code to go here"
  elif [[ $shell_lang == "cgi"]]; then
    echo -e "code to go here"
else 
   echo -e "language not yet detected or supported"
fi
