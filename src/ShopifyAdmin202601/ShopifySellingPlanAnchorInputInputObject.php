<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a selling plan anchor.
 */
class ShopifySellingPlanAnchorInputInputObject extends InputObject
{
    protected $type;
    protected $day;
    protected $month;
    protected $cutoffDay;

    /**
     * Represents the anchor type, must be one of WEEKDAY, MONTHDAY, YEARDAY.
     */
    public function setType($shopifySellingPlanAnchorType): static
    {
        $this->type = new RawObject($shopifySellingPlanAnchorType);

        return $this;
    }

    /**
     * The day of the anchor.
     *
     * If `type` is WEEKDAY, then the value must be between 1-7. Shopify interprets
     * the days of the week according to ISO 8601, where 1 is Monday.
     *
     * If `type` isn't WEEKDAY, then the value must be between 1-31.
     */
    public function setDay($day): static
    {
        $this->day = $day;

        return $this;
    }

    /**
     * The month of the anchor. If type is different than YEARDAY, then the value must
     * be `null` or between 1-12.
     */
    public function setMonth($month): static
    {
        $this->month = $month;

        return $this;
    }

    /**
     * The cutoff day of the anchor.
     *
     * If `type` is WEEKDAY, then the value must be between 1-7. Shopify interprets
     * the days of the week according to ISO 8601, where 1 is Monday.
     *
     * If `type` is MONTHDAY, then the value must be between 1-31.
     *
     * If `type` is YEARDAY, then the value must be `null`.
     *
     * This field should only be set if the cutoff field for the delivery policy is `null`.
     */
    public function setCutoffDay($cutoffDay): static
    {
        $this->cutoffDay = $cutoffDay;

        return $this;
    }
}
