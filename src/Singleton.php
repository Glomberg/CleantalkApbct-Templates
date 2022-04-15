<?php

namespace CleantalkApbct\Templates;

trait Singleton
{
    protected static $instance;

    public function __construct()
    {
    }

    public function __wakeup()
    {
    }

    public function __clone()
    {
    }

    /**
     * Constructor
     * @return $this
     */
    public static function getInstance($params = array())
    {
        if ( ! isset(static::$instance) ) {
            static::$instance = new static();
            static::$instance->init($params);
        }
        return static::$instance;
    }

    /**
     * Alternative constructor
     */
    abstract protected function init();
}
