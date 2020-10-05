<?php

namespace Dhii\I18n;

use Dhii\I18n\Exception\ContextStringTranslationExceptionInterface;

/**
 * Something that can translate a string with context.
 */
interface ContextStringTranslatorInterface extends StringTranslatorInterface
{
    /**
     * {@inheritDoc}
     *
     * Allows specifying additional context for the string.
     * If specified, will retrieve only translations that have the
     * same context.
     *
     * @param string $string  The string to translate.
     * @param string $context A context for the string, if any.
     *
     * @throws ContextStringTranslationExceptionInterface If problem translated.
     *
     * @return string The translated string.
     */
    public function translate(string $string, string $context = null): string;
}
