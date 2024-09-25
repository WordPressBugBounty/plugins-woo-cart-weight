<?php

declare (strict_types=1);
/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WCWeightVendor\Monolog\Test;

use WCWeightVendor\Monolog\Logger;
use WCWeightVendor\Monolog\DateTimeImmutable;
use WCWeightVendor\Monolog\Formatter\FormatterInterface;
/**
 * Lets you easily generate log records and a dummy formatter for testing purposes
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @phpstan-import-type Record from \Monolog\Logger
 * @phpstan-import-type Level from \Monolog\Logger
 *
 * @internal feel free to reuse this to test your own handlers, this is marked internal to avoid issues with PHPStorm https://github.com/Seldaek/monolog/issues/1677
 */
class TestCase extends \WCWeightVendor\PHPUnit\Framework\TestCase
{
    public function tearDown() : void
    {
        parent::tearDown();
        if (isset($this->handler)) {
            unset($this->handler);
        }
    }
    /**
     * @param mixed[] $context
     *
     * @return array Record
     *
     * @phpstan-param  Level $level
     * @phpstan-return Record
     */
    protected function getRecord(int $level = \WCWeightVendor\Monolog\Logger::WARNING, string $message = 'test', array $context = []) : array
    {
        return ['message' => (string) $message, 'context' => $context, 'level' => $level, 'level_name' => \WCWeightVendor\Monolog\Logger::getLevelName($level), 'channel' => 'test', 'datetime' => new \WCWeightVendor\Monolog\DateTimeImmutable(\true), 'extra' => []];
    }
    /**
     * @phpstan-return Record[]
     */
    protected function getMultipleRecords() : array
    {
        return [$this->getRecord(\WCWeightVendor\Monolog\Logger::DEBUG, 'debug message 1'), $this->getRecord(\WCWeightVendor\Monolog\Logger::DEBUG, 'debug message 2'), $this->getRecord(\WCWeightVendor\Monolog\Logger::INFO, 'information'), $this->getRecord(\WCWeightVendor\Monolog\Logger::WARNING, 'warning'), $this->getRecord(\WCWeightVendor\Monolog\Logger::ERROR, 'error')];
    }
    protected function getIdentityFormatter() : \WCWeightVendor\Monolog\Formatter\FormatterInterface
    {
        $formatter = $this->createMock(\WCWeightVendor\Monolog\Formatter\FormatterInterface::class);
        $formatter->expects($this->any())->method('format')->will($this->returnCallback(function ($record) {
            return $record['message'];
        }));
        return $formatter;
    }
}
