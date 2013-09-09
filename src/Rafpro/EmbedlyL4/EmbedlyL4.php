<?php namespace Rafpro\EmbedlyL4;

use Embedly\Embedly;
use Config;


class EmbedlyL4 extends Embedly {

    public function __construct()
    {
        parent::__construct(Config::get('embedly-l4::api_config'));
    }

    function setVersion(array $args)
    {
        $this->api_version = array_merge($this->api_version, $args);
    }
}