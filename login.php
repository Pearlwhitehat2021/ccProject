<?php
   function checkpwd($usr,$pwd)
   {
     $pwd_file='info.txt';
     if(!$fh=fopen($pwd_file,"r"))
     {
         die("could not open pwd file");
     }
     $match=0;
     $password=$pwd;
     while(!feof($fh))
     {
         $line=fgets($fh,"")
         if($user_pass[0] == $username)
          { 
                if(rtrim($user_pass[1]) == $pwd) 
                {
                $match = 1; 
                break;
                }
            }
            $match = 2;
            }
            if($match == '1') {
            echo "<b>Login Success!</b>";
            }
            if($match == '2') {
             
            echo "<b>Login Failed!</b>";
            
            }
            fclose($fh);
            
   }

?>