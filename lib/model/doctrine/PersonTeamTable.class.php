<?php


class PersonTeamTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PersonTeam');
    }
}