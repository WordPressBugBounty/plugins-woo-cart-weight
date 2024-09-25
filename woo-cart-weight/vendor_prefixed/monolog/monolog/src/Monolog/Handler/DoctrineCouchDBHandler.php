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
use WCWeightVendor\Monolog\Formatter\NormalizerFormatter;
use WCWeightVendor\Monolog\Formatter\FormatterInterface;
use WCWeightVendor\Doctrine\CouchDB\CouchDBClient;
/**
 * CouchDB handler for Doctrine CouchDB ODM
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class DoctrineCouchDBHandler extends \WCWeightVendor\Monolog\Handler\AbstractProcessingHandler
{
    /** @var CouchDBClient */
    private $client;
    public function __construct(\WCWeightVendor\Doctrine\CouchDB\CouchDBClient $client, $level = \WCWeightVendor\Monolog\Logger::DEBUG, bool $bubble = \true)
    {
        $this->client = $client;
        parent::__construct($level, $bubble);
    }
    /**
     * {@inheritDoc}
     */
    protected function write(array $record) : void
    {
        $this->client->postDocument($record['formatted']);
    }
    protected function getDefaultFormatter() : \WCWeightVendor\Monolog\Formatter\FormatterInterface
    {
        return new \WCWeightVendor\Monolog\Formatter\NormalizerFormatter();
    }
}
