<?php

$permission = array('/pages/infoCliente', 'index.php');

if(empty($pagina)){
    require_once __DIR__ . '/pages/viewClientes.php';
}elseif($pagina == 'infoCliente'){
    require_once __DIR__ . '/pages/infoCliente.php';
}elseif(isset($pagina ) && in_array($pagina,$permission)!= $permission){
    require_once __DIR__ . '/pages/404.php';
}else{
    require_once __DIR__ . '/pages/viewClientes.php';
}

require_once __DIR__ . '/pages/footer.php';
