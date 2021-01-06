<?
namespace FwHtml\Bs4\TwoSyllableClasses;
use FwHtml\Bs4\Helpers\BsClasses;
use ReflectionMethod;
use FwHtml\Bs4\Helpers\BsColors;
if (!class_exists('FwHtml\Bs4\TwoSyllableClasses\NavClass')){
    final class NavClass extends BsClasses {
        final public static function Fill(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }
		final public static function Item(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }
		final public static function Justified(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }
		final public static function Link(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }
		final public static function Pills(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }
		final public static function Tabs(){
            return new self(str_replace(' ', '_', strtolower(((new ReflectionMethod(__METHOD__))->getShortName()))));
        }

    }
}