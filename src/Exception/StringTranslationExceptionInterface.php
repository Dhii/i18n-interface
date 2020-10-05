<?php


namespace Dhii\I18n\Exception;

use Throwable;

/**
 * Represents an exception thrown during string translation.
 */
interface StringTranslationExceptionInterface extends Throwable
{
    /**
     * Retrieves the string that was being translated.
     *
     * @return string The string that was being translated.
     */
    public function getSubject(): string;
}