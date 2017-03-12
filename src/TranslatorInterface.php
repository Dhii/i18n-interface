<?php

namespace Dhii\I18n;

use Dhii\Util\String\StringableInterface as Stringable;
use ArrayAccess;
use Dhii\Data\ValueAwareInterface;

/**
 * Something that can act as a string translator.
 *
 * @since 0.1
 */
interface TranslatorInterface
{
    /**
     * Translates a string.
     *
     * If values are given, MUST attempt to use them for substituting placeholders in the string.
     *
     * @since 0.1
     *
     * @param string|Stringable               $string  The string to translate.
     * @param array|ArrayAccess|null          $params  A map of values to use for placeholder substitution, if any.
     * @param string|ValueAwareInterface|null $context A context for the string, if any.
     *
     * @return string The translated string, possibly with placeholders substituted.
     */
    public function translate($string, $params = null, $context = null);
}
