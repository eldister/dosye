<?php


class PersonTable extends MemberTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Person');
    }
}