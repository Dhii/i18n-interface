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
     * @return string[]|null The array of params used, if any.
     * @psalm-return array<positive-int, scalar>|null
     */
    public function getParams(): ?array;
}
