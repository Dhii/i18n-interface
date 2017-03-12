<?php

namespace Dhii\I18n;

use ArrayAccess as Map;
use Dhii\Data\ValueAwareInterface as Value;

/**
 * Something that can act as a translator, which can translate a string format.
 *
 * @since 0.1
 */
interface FormatTranslatorInterface extends TranslatorInterface
{
    /**
     * {@inheritdoc}
     *
     * If values are given, MUST attempt to use them for interpolating placeholders in the string.
     *
     * @since 0.1
     *
     * @param string|Stringable $format  The string format to translate
     * @param array|Map|null    $params  A map of values to use for placeholder substitution, if any.
     * @param string|Value|null $context A context for the string, if any.
     *
     * @return string The translated string, with placeholders interpolated.
     */
    public function translate($format, $params = null, $context = null);
}
