<?php
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>.
 * on 18.02.16 at 14:17
 */
namespace samsonframework\view;

/**
 * View file metadata.
 *
 * @package samsonframework\view
 */
class Metadata
{
    /** @var string View class name */
    public $className;

    /** @var string View class name space */
    public $namespace;

    /** @var array Collection of view file used variables */
    public $variables = array();

    /** @var string Full path to file */
    public $path;
}
