hd<?php
function truePhrase($phrase){
    if(preg_match('/^[A-Z]{1}.+[.!?]$/',$phrase)){
        $resultat="phrase valide";
    }else{
        $resultat="phrase invalide";
    }
    return $resultat;
}
function decoupe_texte_en_phrase($chaine)
{
    $tabphrse= preg_split("#[.|!|?]{1,}#" ,$chaine);
    foreach($tabphrse as $value)
    {
        if(preg_match('/[A-Z]/',$value))
        {
            $tab[]=$value;
        }
    }
    print_r($tab);
    
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    
    <textarea name="chaine" placeholder="s'aisir un text"></textarea><br></br>
    <input type="submit" name="ok" value= valider>
    </form>
    <?php

  if(isset($_POST['ok'])){
      if (isset($_POST['chaine'])) {
        if (!empty($_POST['chaine']))
        {
                  $chaine=$_POST['chaine'];
                  
                  decoupe_texte_en_phrase($chaine);
        }else{
            echo "saissie please";
        }
    }
}
          
?>
    
</body>
</html>