<?php


class DosyeImageTable extends DosyeFileTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DosyeImage');
    }
}