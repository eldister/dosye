<?php


class DosyeAreaLevel3Table extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DosyeAreaLevel3');
    }
}