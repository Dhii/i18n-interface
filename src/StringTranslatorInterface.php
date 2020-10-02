<?php

namespace Dhii\I18n;

/**
 * Something that can act as a translator, which can translate whole strings.
 */
interface StringTranslatorInterface
{
    /**
     * Translates a string with context.
     *
     * @param string $string  The string to translate.
     * @param string $context A context for the string, if any.
     *
     * @return string The translated string.
     */
    public function translate(string $string, string $context = null);
}
