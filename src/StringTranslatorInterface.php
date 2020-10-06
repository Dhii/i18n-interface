<?php

declare(strict_types=1);

namespace Dhii\I18n;

use Dhii\I18n\Exception\StringTranslationExceptionInterface;

/**
 * Something that can represent a translator, which can translate a subject.
 */
interface StringTranslatorInterface
{
    /**
     * Translates a string.
     *
     * Retrieves a translation string that corresponds to the subject string.
     *
     * @param string $subject The subject to translate.
     *
     * @throws StringTranslationExceptionInterface If could not translate string.
     *
     * @return mixed The translated subject.
     */
    public function translate(string $subject): string;
}
