<?php


class AreaLevel2Table extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AreaLevel2');
    }
}