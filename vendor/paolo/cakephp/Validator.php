<?php

/**
 * Created by PhpStorm.
 * User: pault_000
 * Date: 25/08/2016
 * Time: 21:32
 */
class Validator {

    public static function concatValidationErrors($errors, $withTitle = true) {
        ($withTitle == true) ? $buff = "<h3>Validation Errors: </h3>" : "";
        foreach ($errors as $field => $value) {
            // $buff .= "<br><h4>{$field}</h4>";
            foreach ($value as $err => $desc) {
                $buff .= "<br>- {$desc}";
            }
        }
        return $buff;
    }

}