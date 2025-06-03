<?php
class WeekdayChecker {
    public function isWeekend($day) {
        return in_array($day, ['Saturday', 'Sunday']) ? "Weekend" : "Weekday";
    }
}
