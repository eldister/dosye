<?php


class GroupTable extends MemberTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Group');
    }
}