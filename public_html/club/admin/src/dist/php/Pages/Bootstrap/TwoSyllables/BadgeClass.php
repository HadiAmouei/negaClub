<?
namespace FwHtml\Bs4\TwoSyllableClasses;
use FwHtml\Bs4\Helpers\BsClasses;
use ReflectionMethod;
use FwHtml\Bs4\Helpers\BsColors;
if (!class_exists('FwHtml\Bs4\TwoSyllableClasses\BadgeClass')){
    final class BadgeClass extends BsClasses {
        use BsColors;
		final public static function Pill(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }

    }
}