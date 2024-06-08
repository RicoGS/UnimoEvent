<?php

    $Nombre = $_POST['Nombre'];
    $Matricula = $_POST['Matricula'];
    $Email = $_POST['Email'];
    $Grupo = $_POST['Grupo'];
    $Plantel = $_POST['Plantel'];
    $pEducativo = $_POST['pEducativo'];
    $lOrigen = $_POST['lOrigen'];
    $cPago = $_POST['cPago'];

    
    echo FormsController::uploadUsers(
        $Nombre,
        $Matricula,
        $Email,
        $Grupo,
        $Plantel,
        $pEducativo,
        $lOrigen,
        $cPago
    );