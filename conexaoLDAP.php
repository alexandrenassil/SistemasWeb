<?php
#liberação linux para LDAP -> setsebool -P httpd_can_connect_ldap 1
    // error_reporting(E_ALL);
    // ini_set('display_errors', 'On');

    $usuario=$_POST['login'];
    $senha=$_POST['senha'];

    // LAP variables
    $ldaphost = "dominio.matriz";  // your ldap servers
// echo ("IP :'".$ldaphost ."'</br>");
    $ldapdomain = "dominio.matriz";
    $domain = "@dominio";
    $ldapport = 389;                 // your ldap server's port number

    $ldapconfig['host'] = $ldaphost;
    $ldapconfig['domain'] = $ldapdomain;
    $ldapconfig['port'] = $ldapport;
    $ldapconfig['basedn'] = 'dc=dominio,dc=matriz';

    $ldaprdn  = $usuario.$domain;     // ldap rdn or dn
    $ldappass = $senha;  // associated password

    $ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);
    $dn="cn=".$ldaprdn.",ou=Redes,OU=Tecnologia_Informacao,OU=DOMINIO,".$ldapconfig['basedn'];

    ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION,7);
    ldap_set_option($ds, LDAP_OPT_REFERRALS,0);

    if ($ds) {
        echo "<script>console.log('Conectado ao LDAP...')</script>";
        // binding to ldap server
        $ldapbind = ldap_bind($ds, $ldaprdn, $ldappass);
        // verify binding
        echo("<script>console.log('msg:'".ldap_error($ds)."')</script>");
        echo("<script>console.log('msg:'".$ldapbind."')</script>");
        if ($ldapbind) {
            echo "<script>console.log('Conexão efetuada com sucesso...')</script>";
            header("Location: index2.php?login=".$usuario);
                } else {
            echo "<script>console.log('Falha na conexão com o AD/LDAP...')</script>";
            echo "<script>alert('Login e ou senha invalido!\\nFavor tentar novamente');history.back()</script>";
        }
    }
?>


