<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Core\Tests\Unit\Database\Query\Restriction;

use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\Query\Expression\ExpressionBuilder;
use TYPO3\CMS\Core\Tests\Unit\Database\Mocks\MockPlatform;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class AbstractRestrictionTestCase extends UnitTestCase
{
    protected ExpressionBuilder $expressionBuilder;

    /**
     * Create a new database connection mock object for every test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $connection = $this->createMock(Connection::class);
        $connection->method('quoteIdentifier')->with(self::anything())->willReturnCallback(static function ($args) {
            return '"' . implode('"."', explode('.', $args)) . '"';
        });
        $connection->method('quote')->with(self::anything())->willReturnCallback(static function ($args) {
            return '\'' . $args . '\'';
        });
        $connection->method('getDatabasePlatform')->willReturn(new MockPlatform());

        $this->expressionBuilder = GeneralUtility::makeInstance(ExpressionBuilder::class, $connection);
    }
}
