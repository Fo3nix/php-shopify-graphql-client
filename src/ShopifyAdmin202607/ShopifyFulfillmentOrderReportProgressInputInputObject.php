<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the progress report for the fulfillment order.
 */
class ShopifyFulfillmentOrderReportProgressInputInputObject extends InputObject
{
    protected $reasonNotes;

    /**
     * Additional information for the progress report.
     */
    public function setReasonNotes($reasonNotes): static
    {
        $this->reasonNotes = $reasonNotes;

        return $this;
    }
}
