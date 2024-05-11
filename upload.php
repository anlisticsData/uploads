<?php
$uploaddir =__DIR__. '/files/';
$ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
$uploadfile = $uploaddir . sprintf("%s_%s.%s",uniqid(),date("Y_d_m_H_m_s"),$ext);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>";
