<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Pricing\V2\Voice;

use Twilio\Options;
use Twilio\Values;

abstract class NumberOptions {
    /**
     * @param string $originationNumber The origination_number
     * @return FetchNumberOptions Options builder
     */
    public static function fetch($originationNumber = Values::NONE) {
        return new FetchNumberOptions($originationNumber);
    }
}

class FetchNumberOptions extends Options {
    /**
     * @param string $originationNumber The origination_number
     */
    public function __construct($originationNumber = Values::NONE) {
        $this->options['originationNumber'] = $originationNumber;
    }

    /**
     * The origination_number
     * 
     * @param string $originationNumber The origination_number
     * @return $this Fluent Builder
     */
    public function setOriginationNumber($originationNumber) {
        $this->options['originationNumber'] = $originationNumber;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Pricing.V2.FetchNumberOptions ' . implode(' ', $options) . ']';
    }
}