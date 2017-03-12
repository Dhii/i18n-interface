<?php

namespace Dhii\I18n;

use Dhii\Util\String\StringableInterface as Stringable;
use ArrayAccess;
use Dhii\Data\ValueAwareInterface;
use Dhii\I18n\Exception\TranslationExceptionInterface;
use Dhii\I18n\Exception\I18nExceptionInterface;

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
     * @throws TranslationExceptionInterface If could not translate string.
     * @throws I18nExceptionInterface        If a problem occurs that is not directly related to the translation process.
     *
     * @return string The translated string, possibly with placeholders substituted.
     */
    public function translate($string, $params = null, $context = null);
}
