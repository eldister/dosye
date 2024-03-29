<?php

/**
 * Person
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Person extends BasePerson {

    public function getFullName() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function getAge() {
        list($year, $month, $day) = explode("-", $this->getDateOfBirth());
        $year_diff = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff = date("d") - $day;
        if ($day_diff < 0 || $month_diff < 0)
            $year_diff--;
        return $year_diff;
    }

}
