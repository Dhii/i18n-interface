<?php

namespace Dhii\I18n\Exception;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\I18n\TranslatorInterface;

/**
 * Something that can represent an exception which occurs during or related to translation.
 *
 * @since [*next-version*]
 */
interface TranslationExceptionInterface extends I18nExceptionInterface
{
    /**
     * Retrieves the subject which is being translated.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The subject being translated.
     */
    public function getSubject();

    /**
     * Retrieves the translator doing the translation.
     *
     * @since [*next-version*]
     *
     * @return TranslatorInterface The translator instance.
     */
    public function getTranslator();

    /**
     * The context of the string
     *
     * @since [*next-version*]
     *
     * @return mixed|null The context of the string, if any.
     */
    public function getContext();

    /**
     * Retrieves params used for placeholder substitution.
     *
     * @since [*next-version*]
     *
     * @return array|null The array of params that is used, if any.
     */
    public function getParams();
}
