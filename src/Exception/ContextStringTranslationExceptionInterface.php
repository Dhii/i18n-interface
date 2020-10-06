<?php

declare(strict_types=1);

namespace Dhii\I18n\Exception;

/**
 * Something that can represent an exception which occurs during or related to translation of strings.
 */
interface ContextStringTranslationExceptionInterface extends StringTranslationExceptionInterface
{
    /**
     * Retrieve the context of subject translation.
     *
     * @return string|null The context of the string, if any.
     */
    public function getContext(): ?string;
}
