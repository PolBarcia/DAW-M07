<?php
if (($_POST['tipus'])== 'Alumne'){
    echo 'Usuari ha introduït: '. $_POST['usuari']. '<br/>';
    echo 'Clau introduïda :'. $_POST['clau']. '<br/>';
    echo 'Tipus Usuari: ' . $_POST['tipus'] . '<br/>';
}else if (($_POST['tipus'])== 'Professor'){
    echo 'Usuari ha introduït: '. $_POST['usuari']. '<br/>';
    echo 'Clau introduïda :'. $_POST['clau']. '<br/>';
    echo 'Tipus Usuari: ' . $_POST['tipus'] . '<br/>';
}else{
    echo 'Es requereix un tipus Usuari';
}
