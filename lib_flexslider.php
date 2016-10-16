<?php
namespace LIB;
class lib_flexslider extends \LIB\lib_jscss{
    public static function get_class(){
        return self::class;}
    public static function js_path(){
        return new \PLIB('flexslider/lib/jquery.flexslider-min.js');}
    public static function css_path(){
        return new \PLIB('flexslider/lib/flexslider.css');}
    public static function version(){
        return '<a href="http://flexslider.woothemes.com/">2</a>';}
}
