<?php
class Weather {
    public function checkTemperature($temp) {
        return $temp > 25 ? "It's hot." : "It's not too hot.";
    }
}
