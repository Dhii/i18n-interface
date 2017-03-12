<?php

namespace Dhii\I18n\Exception\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\I18n\Exception\TranslationExceptionInterface}.
 *
 * @since [*next-version*]
 */
class TranslationExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\I18n\\Exception\\TranslationExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\I18n\Exception\TranslationExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getSubject()
            ->getTranslator()
            ->getContext()
            ->getParams()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\I18n\\Exception\\I18nExceptionInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}
