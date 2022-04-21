<?php
namespace Teja\Blog\Plugin;

class ListDispatchedEvents
{
    public function beforeDispatch($subject, $eventName, array $data = [])
    {
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/event.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info($eventName);
    }
}