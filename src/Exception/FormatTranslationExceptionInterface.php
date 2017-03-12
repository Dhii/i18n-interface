<?php

namespace Dhii\I18n\Exception;

use ArrayAccess as Map;

/**
 * Something that can represent an exception which occurs during or related to translation of string formats.
 *
 * @since [*next-version*]
 */
interface FormatTranslationExceptionInterface extends TranslationExceptionInterface
{
    /**
     * Retrieves params used for interpolation.
     *
     * @since [*next-version*]
     *
     * @return array|Map|null The array of params used, if any.
     */
    public function getParams();

    /**
     * The context of the string.
     *
     * @since [*next-version*]
     *
     * @return Value|null The context of the string, if any.
     */
    public function getContext();
}
