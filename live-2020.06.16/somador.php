<?php

  $numero1 = $_REQUEST["numero1"] ;
  $numero2 = $_REQUEST["numero2"] ;

  $soma = $numero1 + $numero2 ;

  //agora vamos montar o json
  $retornoJson = array( ) ;

  $retornoJson["operacao"]  = "soma" ;
  $retornoJson["numero1"]   = $numero1 ;
  $retornoJson["numero2"]   = $numero2 ;
  $retornoJson["resultado"] = $soma ;

  echo json_encode( $retornoJson ) ;