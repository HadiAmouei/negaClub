<?
namespace FwHtml\Bs4\TwoSyllableClasses;
use FwHtml\Bs4\Helpers\BsClasses;
use ReflectionMethod;
use FwHtml\Bs4\Helpers\BsColors;
if (!class_exists('FwHtml\Bs4\TwoSyllableClasses\ShadowClass')){
    final class ShadowClass extends BsClasses {
        final public static function None(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }

    }
}