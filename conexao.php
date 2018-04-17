<?php

#############################

// Arquivo de Conexão com o BD
// BD: login

#############################

// Conexão ao servidor do Banco
mysql_connect("localhost", "root", "") or die(mysql_error());

// Seleção do Banco
mysql_select_db("pronatec_login") or die(mysql_error());