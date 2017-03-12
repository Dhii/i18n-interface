<?php

namespace Dhii\I18n\Exception\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\I18n\Exception\StringTranslationExceptionInterface}.
 *
 * @since 0.1
 */
class StringTranslationExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\I18n\\Exception\\StringTranslationExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return Dhii\I18n\Exception\StringTranslationExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getSubject()
            ->getTranslator()
            ->getContext()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\I18n\\Exception\\I18nExceptionInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\\I18n\\Exception\\TranslationExceptionInterface', $subject, 'Subject does not implement required interface');
    }
}
