<?php
    $ajax = false;
    require_once ("./controllers/viewController.php");
    $get_v = new viewController;
    $view = $get_v->get_admin_view_controller();

    if($view == "index" || $view == "404"){
        if($view == "index"){
            require_once ("./views/admin/contents/index.php");
        }else{
            require_once ("./views/index.php");
        }
    }else{
        require_once $view;
    }
?>