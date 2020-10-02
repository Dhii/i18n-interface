<?php

namespace Dhii\I18n\Exception;

/**
 * Something that can represent an exception which occurs during or related to translation of string formats.
 */
interface FormatTranslationExceptionInterface extends StringTranslationExceptionInterface
{
    /**
     * Retrieves params used for interpolation.
     *
     * @return array|null The array of params used, if any.
     */
    public function getParams();
}
