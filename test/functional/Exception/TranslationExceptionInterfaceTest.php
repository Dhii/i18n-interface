<?php

namespace Dhii\I18n\Exception\FuncTest\Exception;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\I18n\Exception\TranslationExceptionInterface}.
 *
 * @since 0.1
 */
class TranslationExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\I18n\\Exception\\TranslationExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return Dhii\I18n\Exception\TranslationExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getSubject()
            ->getTranslator()
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
    }
}
