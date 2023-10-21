<?php
// namespace lib\TemplateEngine;
//Шаблонизатор на PHP

class TemplateEngine
{
    private $variables = array();
    private $pathtempl = "templates/";

    function __construct($vars)
    {
        if (isset($vars['vars']) && is_array($vars['vars']))
            $this->set($vars['vars']);
    }
    public function set($vars)
    {
        foreach ($vars as $k => $v)
            $this->variables[$k] = $v;
    }

    public function render($template, $layer = "")
    {
        // echo $this->pathtempl . $template;
        ob_start();
        extract($this->variables);
        include $this->pathtempl . $template;
        $bodycontent = ob_get_clean();

        if( $layer )
        {
            ob_start();
            include $this->pathtempl . $layer;
            $content = ob_get_clean();
        }
        else $content = $bodycontent;

        return $content;
    }
}

?>