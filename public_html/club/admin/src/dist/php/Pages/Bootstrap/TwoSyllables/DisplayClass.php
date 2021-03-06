<?
namespace FwHtml\Bs4\TwoSyllableClasses;
use FwHtml\Bs4\Helpers\BsClasses;
use ReflectionMethod;
use FwHtml\Bs4\Helpers\BsColors;
if (!class_exists('FwHtml\Bs4\TwoSyllableClasses\DisplayClass')){
    final class DisplayClass extends BsClasses {
        final public static function One(){
            return new self('1');
        }
		final public static function Two(){
            return new self('2');
        }
		final public static function Three(){
            return new self('3');
        }
		final public static function Four(){
            return new self('4');
        }

    }
}