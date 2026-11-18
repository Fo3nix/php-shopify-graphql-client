<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderReportProgressArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $progressReport;

    /**
     * The ID of the fulfillment order for which the progress report is targeting.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The details of the progress report for the fulfillment order.
     */
    public function setProgressReport(ShopifyFulfillmentOrderReportProgressInputInputObject $shopifyFulfillmentOrderReportProgressInputInputObject): static
    {
        $this->progressReport = $shopifyFulfillmentOrderReportProgressInputInputObject;

        return $this;
    }
}
