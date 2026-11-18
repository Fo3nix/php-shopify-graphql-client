<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for date and time range filter.
 */
class ShopifyCashDrawerDateRangeInputInputObject extends InputObject
{
    const REQUIRED = ["from", "to"];

    protected $from;
    protected $to;

    /**
     * The start of the date and time range.
     */
    public function setFrom($from): static
    {
        $this->from = $from;

        return $this;
    }

    /**
     * The end of the date and time range.
     */
    public function setTo($to): static
    {
        $this->to = $to;

        return $this;
    }
}
