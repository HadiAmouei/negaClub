<?
namespace FwHtml\Bs4\TwoSyllableClasses;
use FwHtml\Bs4\Helpers\BsClasses;
use ReflectionMethod;
use FwHtml\Bs4\Helpers\BsColors;
if (!class_exists('FwHtml\Bs4\TwoSyllableClasses\MhClass')){
    final class MhClass extends BsClasses {
        final public static function OneHundred(){
            return new self('100');
        }

    }
}