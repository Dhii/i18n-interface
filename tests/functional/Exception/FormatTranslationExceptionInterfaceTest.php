<?php

namespace Dhii\I18n\Test\Func\Exception;

use Dhii\I18n\Exception\FormatTranslationExceptionInterface as Subject;
use Dhii\I18n\Exception\StringTranslationExceptionInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class FormatTranslationExceptionInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @return Subject&MockObject
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(Subject::class)
            ->getMockForAbstractClass();

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

        $this->assertInstanceOf(Subject::class, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf(StringTranslationExceptionInterface::class, $subject, 'Subject does not implement required interface');
    }
}
