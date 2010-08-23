<?php


class AreaLevel3Table extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AreaLevel3');
    }
}