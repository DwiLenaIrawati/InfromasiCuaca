<?php
class View{
	public static function createView($view, $param, $layout)
    {
        ob_start();
        include 'view/' . $view;
        $content = ob_get_contents();
        ob_end_clean();

        ob_start();
        include 'view/layout/' . $layout;
        $include = ob_get_contents();
        ob_end_clean();
        return $include;
    }
    public static function createViewInformasi($view,$param,$param2, $kota, $fr, $to, $layout)
    {
        ob_start();
        include 'view/' . $view;
        $content = ob_get_contents();
        ob_end_clean();

        ob_start();
        include 'view/layout/' . $layout;
        $include = ob_get_contents();
        ob_end_clean();
        return $include;
    }
    public static function createViewGrafik($view,$param,$kota, $fr, $to, $layout)
    {
        ob_start();
        include 'view/' . $view;
        $content = ob_get_contents();
        ob_end_clean();

        ob_start();
        include 'view/layout/' . $layout;
        $include = ob_get_contents();
        ob_end_clean();
        return $include;
    }
}

?>