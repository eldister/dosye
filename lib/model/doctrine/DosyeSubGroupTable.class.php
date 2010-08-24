<?php


class DosyeSubGroupTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DosyeSubGroup');
    }
}