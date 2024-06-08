<?php

    Class TemplateForm{

        public function template() {
            $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'main';

            if ($pagina == 'main') {
                include 'view/pages/main.php';
            } elseif ($pagina == 'form') {
                include 'view/pages/form.php';
            } elseif ($pagina == 'upload') {
                include 'back/upload.php';
            } else {
                include 'view/pages/404.php';
            }
        }

    }