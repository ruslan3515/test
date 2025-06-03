<?php
class NumberAnalyzer {
    public function isEven($number) {
        return $number % 2 === 0 ? "$number is even" : "$number is odd";
    }
}
