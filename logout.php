<?php
    include('criasessao.php');
    // LIMPO AS VBARIÁVEIS DA SESSÃO
    session_unset();
    // DESTRÓI A SESSÃO
    session_destroy();
    // VOLTA PARA A PÁGINA INICIAL
    header('Location: index.php');
?>