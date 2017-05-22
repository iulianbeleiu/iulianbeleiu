<?php

/**
 * Created by PhpStorm.
 * User: iulianbeleiu
 * Date: 22/05/17
 * Time: 23:01
 * Description: add loader for controller to load header and footer for a template without
 * loading header and footer for each view
 */
class MY_Loader extends CI_Loader
{
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content  = $this->view('templates/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else:
            $this->view('templates/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        endif;
    }

    public function __construct() {
        parent::__construct();
    }

}