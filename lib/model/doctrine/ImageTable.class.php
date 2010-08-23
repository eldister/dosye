<?php


class ImageTable extends FileTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Image');
    }
}