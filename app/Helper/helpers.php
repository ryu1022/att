<?php

use App\Helpers\DayFrame;
use App\Patient;
use App\Section;
use Carbon\CarbonImmutable;

$WEEK_DAYS = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];

define('WEEK_DAYS', $WEEK_DAYS);

function dates($month)
{
    $weekDay = date('w', strtotime($month));
    
    $dates = [];
    
    for ($weekDay; $weekDay >= 1; $weekDay -= 1){
        
        $dates[] = new CarbonImmutable("$month -$weekDay day");
    }
    
    $lastDay = date('d', strtotime("last day of $month"));
    
    for ($day = 1; $day <= $lastDay; $day += 1) {
        
        $dates[] = new CarbonImmutable("$month-$day");
    }
    
    $weekDay = date('w', strtotime("$month-$lastDay"));
    
    for ($day = 1; $day <= 6 - $weekDay; $day += 1) {
        
        $dates[] = new CarbonImmutable("$month-$lastDay +$day day");
    }
    
    return $dates;
}

function calendar(Section $section, Patient $patient, String $month)
{
    $dates = dates($month);
    
    $start = CarbonImmutable::today();
  
    $end = CarbonImmutable::now()->add($section->reservable_hours, 'hour');
    
    for ($i = 0; $i < count($dates); $i += 7) {
        
        $week = [];

    foreach (array_slice($dates, $i, 7) as $date) {
        
        $hasThisMonthDate = date('m', strtotime($month)) == $date->month;

    
        if ($date >= $start && $date <= $end) {
            $week[] = new DayFrame($section, $patient, $date, $hasThisMonthDate);
        } else {
        
            $frame = new stdClass();

            $frame->date = $date;
            $frame->hasThisMonthDate = $hasThisMonthDate;
            if ($date > $end && $patient->reservedDate($section, $date)) {
                $frame->state = 'patient_reserved_date';
            } else {
                $frame->state = 'disable';
            }

            $week[] = $frame;
        }
    }
    
    yield $week;
   }
  
}











