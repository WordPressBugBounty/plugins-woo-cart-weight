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
namespace WCWeightVendor\Monolog\Handler;

use WCWeightVendor\Monolog\Logger;
use WCWeightVendor\Psr\Log\LoggerInterface;
use WCWeightVendor\Monolog\Formatter\FormatterInterface;
/**
 * Proxies log messages to an existing PSR-3 compliant logger.
 *
 * If a formatter is configured, the formatter's output MUST be a string and the
 * formatted message will be fed to the wrapped PSR logger instead of the original
 * log record's message.
 *
 * @author Michael Moussa <michael.moussa@gmail.com>
 */
class PsrHandler extends \WCWeightVendor\Monolog\Handler\AbstractHandler implements \WCWeightVendor\Monolog\Handler\FormattableHandlerInterface
{
    /**
     * PSR-3 compliant logger
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var FormatterInterface|null
     */
    protected $formatter;
    /**
     * @param LoggerInterface $logger The underlying PSR-3 compliant logger to which messages will be proxied
     */
    public function __construct(\WCWeightVendor\Psr\Log\LoggerInterface $logger, $level = \WCWeightVendor\Monolog\Logger::DEBUG, bool $bubble = \true)
    {
        parent::__construct($level, $bubble);
        $this->logger = $logger;
    }
    /**
     * {@inheritDoc}
     */
    public function handle(array $record) : bool
    {
        if (!$this->isHandling($record)) {
            return \false;
        }
        if ($this->formatter) {
            $formatted = $this->formatter->format($record);
            $this->logger->log(\strtolower($record['level_name']), (string) $formatted, $record['context']);
        } else {
            $this->logger->log(\strtolower($record['level_name']), $record['message'], $record['context']);
        }
        return \false === $this->bubble;
    }
    /**
     * Sets the formatter.
     *
     * @param FormatterInterface $formatter
     */
    public function setFormatter(\WCWeightVendor\Monolog\Formatter\FormatterInterface $formatter) : \WCWeightVendor\Monolog\Handler\HandlerInterface
    {
        $this->formatter = $formatter;
        return $this;
    }
    /**
     * Gets the formatter.
     *
     * @return FormatterInterface
     */
    public function getFormatter() : \WCWeightVendor\Monolog\Formatter\FormatterInterface
    {
        if (!$this->formatter) {
            throw new \LogicException('No formatter has been set and this handler does not have a default formatter');
        }
        return $this->formatter;
    }
}