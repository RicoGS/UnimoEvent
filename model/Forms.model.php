
<?php

include_once 'conection.php';

Class FormsModel {
    static public function getUser($idUsuario) {
        $pdo = Conexion::conectar();
        $sql = "SELECT * FROM usuarios WHERE idUsuario = :idUsuario";
        $smtp = $pdo->prepare($sql);
        $smtp->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        $smtp->execute();
        $response = $smtp->fetch();
        return $response;
    }

    static public function uploadUsers(
        $nombre,
        $Matricula,
        $Email,
        $Grupo,
        $Plantel,
        $pEducativo,
        $lOrigen,
        $cPago
    ){
        $pdo = Conexion::conectar();
        $sql = "INSERT INTO usuarios (Nombre, Matricula, Email, Grupo, Plantel, pEducativo, lOrigen, cPago) VALUES (:Nombre, :Matricula, :Email, :Grupo, :Plantel, :pEducativo, :lOrigen, :cPago)";
        $smtp = $pdo->prepare($sql);
        $smtp->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);
        $smtp->bindParam(':Matricula', $Matricula, PDO::PARAM_INT);
        $smtp->bindParam(':Email', $Email, PDO::PARAM_STR);
        $smtp->bindParam(':Grupo', $Grupo, PDO::PARAM_STR);
        $smtp->bindParam(':Plantel', $Plantel, PDO::PARAM_STR);
        $smtp->bindParam(':pEducativo', $pEducativo, PDO::PARAM_STR);
        $smtp->bindParam(':lOrigen', $lOrigen, PDO::PARAM_STR);
        $smtp->bindParam(':cPago', $cPago, PDO::PARAM_STR);
        if ($smtp->execute()){
            return 'ok';
        } else {
            return 'error';
        }
    }
}