<?php

namespace Spirit\Core\Logger;

use Magento\Framework\Filesystem\DriverInterface;
use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::INFO;
    
    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/spirit.log';
    
    public function __construct(
        DriverInterface $filesystem,
        \Magento\Framework\Stdlib\DateTime\DateTime $dateTime,
        $filePath = null,
        $fileName = null
    ) {
        $filename = 'spirit-' . $dateTime->gmtDate('d-m-Y', $dateTime->timestamp()) . '.log';
        parent::__construct($filesystem, $filePath, '/var/log/' . $filename);
    }
}
