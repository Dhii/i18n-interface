<?php

declare(strict_types=1);

namespace Dhii\I18n;

use Dhii\I18n\Exception\FormatTranslationExceptionInterface;

/**
 * Something that can act as a translator, which can translate a string format
 */
interface FormatTranslatorInterface extends StringTranslatorInterface
{
    /**
     * Translates a string with context, interpolating parameters into the string.
     *
     * If values are given, MUST attempt to use them for interpolating placeholders in the string.
     *
     * @param string      $subject The string format to translate
     * @param array|null  $params  A map of values to use for placeholder substitution, if any.
     * @psalm-param array<positive-int, scalar>|null $params
     * @param string|null $context A context for the string, if any.
     *
     * @return string The translated string, with placeholders interpolated.
     * @throws FormatTranslationExceptionInterface If problem translating.
     */
    public function translate(string $subject, ?array $params = null, ?string $context = null): string;
}
