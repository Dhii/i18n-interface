<?php

declare(strict_types=1);

namespace Dhii\I18n\Exception;

/**
 * Something that can represent an exception which occurs during or related to translation of string formats.
 */
interface FormatTranslationExceptionInterface extends ContextStringTranslationExceptionInterface
{
    /**
     * Retrieves params used for interpolation.
     *
     * @return array|null The array of params used, if any.
     */
    public function getParams(): ?array;
}
