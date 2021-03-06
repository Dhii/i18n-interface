<?php

namespace Dhii\I18n\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\I18n\FormatTranslatorInterface}.
 *
 * @since 0.1
 */
class FormatTranslatorInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\I18n\\FormatTranslatorInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return Dhii\I18n\FormatTranslatorInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->translate()
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
        $this->assertInstanceOf('Dhii\\I18n\\TranslatorInterface', $subject, 'Subject does not implement required interface');
    }

    /**
     * Tests arg count and types for `translate()`.
     *
     * @since 0.1
     */
    public function testTranslate()
    {
        $subject = $this->createInstance();
        $arg1 = 'apple';
        $arg2 = array('banana');
        $arg3 = 'strawberry';

        $subject->translate($arg1, $arg2, $arg3);
    }
}
