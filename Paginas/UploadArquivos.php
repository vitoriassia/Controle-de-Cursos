<form method="POST" enctype="multipart/form-data">

Arquivo: <br/><br/>
<input type="file" name="arquivo[]" multiple> <br/><br/>

<input type="submit" value="Enviar arquivos">

</form>
<?php

        if (isset($_FILES['arquivo'])) {

            if (count($_FILES['arquivo']['tmp_name']) > 0) {

                for($q=0; $q<count($_FILES['arquivo']['tmp_name']);$q++){

                    $divisao = explode(".", $_FILES['arquivo']['name'][$q]);
                    $extencao = end($divisao);
                    //echo $extencao;
                    array_pop($divisao);
                    $nomear = md5($_FILES['arquivo']['tmp_name'][$q].time().rand(0, 99));
                    move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomear.".".$extencao);

                    $pasta = 'arquivos/';

                    if(is_dir($pasta)) {
                        foreach(glob("$pasta*.".$extencao) as $arquivo) {
                            echo "Arquivo: <a href='$arquivo' download>$arquivo</a><br />";
                        }
                    } else {
                        echo 'A pasta não existe.';
                    }

                }

            }
        }

        ?>

