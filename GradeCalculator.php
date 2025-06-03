<?php
class GradeCalculator {
    public function getGrade($score) {
        if ($score >= 90) return "A";
        if ($score >= 80) return "B";
        return "C or lower";
    }
}
