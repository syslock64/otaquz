<?php
@ob_start('ob_gzhandler') ;
session_start();

/*
Niveles de usuarios:
0 = Usuario desactivado
1 = Usuario formal
2 = Usuario no confirmado
3 = Usuario desactivado (Desactivación por el mismo usuario)
4 = Usuario suspendido ( Suspensión por el administrador )
*/

define('__NOMB_WEB__', "EnMusica!");
define('__TIEMPO_COOKIE__', (time()+((60*60)*2)) );
define('__PREFIJO__', "web");
define('__DIR_INC__', "includes");
define('__DIR_CONT__', "cont.classes");
define('__DIR_CLASS__', __DIR_INC__."/inc.class");
define('__DIR_MYSQL__', __DIR_INC__."/inc.conexion");
define('__DIR_MODEL__', "modelo.vista");
define('__DIR_AJAX__', "ajax.classes");
define('__DIR_PANEL__', __DIR_MODEL__."/panel.boxfly");
define('__DIR_JSC__', "./static.jsc");
define('__DIR_CSS__', "./static.css");
define('__DIR_IMG__', "./static.img");
define('__DIR_FOT__', "./static.fotos");
define('__EXT_FOT__', ".jpg");
define('__DIR_TMP_F__', "./upload.syst/f_tmp");

?>