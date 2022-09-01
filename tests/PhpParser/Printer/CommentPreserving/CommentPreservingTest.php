<?php

declare(strict_types=1);

namespace Rector\Core\Tests\PhpParser\Printer\CommentPreserving;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class CommentPreservingTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    /**
     * @return Iterator<array<string>>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilePathsFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
