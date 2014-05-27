<?php

/**
 * Description of TimeClass
 *
 * @author simon
 */

namespace SimBase;

use DateTime;
use DateTimeZone;

class TimeClass {

    /**
     * returns a datetime object representing the current instant with microseconds
     *
     * @return \DateTime
     */
    public function getNow(){
        $timezone = new DateTimeZone(date_default_timezone_get() ? : 'UTC');

        return DateTime::createFromFormat('U.u', sprintf('%.6F', microtime(true)))->setTimezone($timezone);
    }

}
