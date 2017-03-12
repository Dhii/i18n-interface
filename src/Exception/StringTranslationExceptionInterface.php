<?php

namespace Dhii\I18n\Exception;

use Dhii\Data\ValueAwareInterface as Value;

/**
 * Something that can represent an exception which occurs during or related to translation of strings.
 *
 * @since [*next-version*]
 */
interface StringTranslationExceptionInterface extends TranslationExceptionInterface
{
    /**
     * The context of the string.
     *
     * @since [*next-version*]
     *
     * @return Value|null The context of the string, if any.
     */
    public function getContext();
}
