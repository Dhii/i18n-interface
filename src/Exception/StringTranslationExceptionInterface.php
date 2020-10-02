<?php

namespace Dhii\I18n\Exception;

/**
 * Something that can represent an exception which occurs during or related to translation of strings.
 */
interface StringTranslationExceptionInterface
{
    /**
     * Retrieve the context of subject translation.
     *
     * @return string|null The context of the string, if any.
     */
    public function getContext();

    /**
     * Retrieve the subject that was being translated.
     *
     * @return string The subject of translation
     */
    public function getSubject(): string;
}
