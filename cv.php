<?php

function prepareName():string{

   $name = "zurab poladashvili";

   $author = $name;

   echo "Name: $author";

   return $author;
}
prepareName();


function aboutMe():string{

  $personalInformation="I'm responsible person who is detail oriented and hardwork";
  
  echo "<br> <br> About me: $personalInformation";

  return $personalInformation;

}
aboutMe();

function education():string{
    $haha=1;
    $hoho=2;
    $knowledge= $haha + $hoho;
    echo "<br> <br>Education: Business school/a basic programming course";
    return $knowledge;
}
education();

function language():string{
    $know = "Georgian , English";
    echo "<br> <br> Language: $know";
    return $know;
}
language();

function skills($a,$b,$c):string{
    $abilites= $a + $b + $c;
    
    echo "<br> <br>Skills: responsibility , detail oriented , hard work , nice abscraption capability";

    return $abilites;
}
skills(1,2,3);

function experience():string{
    $work = "Lifeguard, Sales specialist";
    
    echo "<br> <br>Experience: $work";

    return $work;

}
experience();

function previousJobs($v,$n,$m):string{
    $lastJobs= $v + $n+ $m;

    echo "<br> <br> Jobs: Gino Paradise , Alta Retail";

    return $lastJobs;
}
previousJobs(1,2,3);


function contact():string{
    $contact= "TEL:593454562 , GMAIL:zurab.poladashvili@gau.edu.ge";

    echo "<br><br> Contact: $contact";

    return $contact;
}
contact();








?>