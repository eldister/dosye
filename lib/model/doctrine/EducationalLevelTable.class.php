<?php


class EducationalLevelTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('EducationalLevel');
    }
}