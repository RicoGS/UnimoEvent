<?php
    Class FormsController {
        static public function getUser($idUser) {
            return FormsModel::getUser($idUser);
        }

        static public function uploadUsers(
                $Nombre,
                $Matricula,
                $Grupo,
                $Plantel,
                $pEducativo,
                $lOrigen
            ) {
                return FormsModel::uploadUsers(
                    $Nombre,
                    $Matricula,
                    $Grupo,
                    $Plantel,
                    $pEducativo,
                    $lOrigen
                );
        }
    }