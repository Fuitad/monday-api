<?php

namespace TBlack\MondayAPI\ObjectTypes;

class ObjectModel
{
    // Query scope
    static $scope = '';

    // Arguments
    static $arguments = array();

    // Fields
    static $fields = array();

    function __construct()
    {
        return $this;
    }

    public function getFields( Array $fields = [], $alt_fields = false )
    {
        return [ Query::buildFields(
            Query::buildFieldsArgs(
                ($alt_fields==false?static::$fields:$alt_fields),
                $fields
            )
        )];
    }

    public function getArguments( Array $arguments = [], $alt_arguments = false )
    {
        return Query::buildArguments(
            Query::buildArgsFields(
                ($alt_arguments==false?static::$arguments:$alt_arguments),
                $arguments
            )
        );
    }

    public function getBuildFieldsArgs()
    {
        //return '{ ... }';
        return false;
    }
}

?>
