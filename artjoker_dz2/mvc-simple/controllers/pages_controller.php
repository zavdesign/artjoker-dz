<?php

class PagesController
{
    public function home()
    {
        $first_name = 'Люк';
        $last_name = 'Скайвокер';
        require_once('views/pages/home.php');
    }

    public function error()
    {
        require_once('views/pages/error.php');
    }
}
?>