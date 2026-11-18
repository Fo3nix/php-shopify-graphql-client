<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketingActivityUpdateExternalArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;
    protected $marketingActivityId;
    protected $remoteId;
    protected $utm;

    /**
     * The input field for updating an external marketing activity.
     */
    public function setInput(ShopifyMarketingActivityUpdateExternalInputInputObject $shopifyMarketingActivityUpdateExternalInputInputObject): static
    {
        $this->input = $shopifyMarketingActivityUpdateExternalInputInputObject;

        return $this;
    }

    /**
     * The ID of the marketing activity. Specify either the marketing activity ID, remote ID, or UTM to update the marketing activity.
     */
    public function setMarketingActivityId($marketingActivityId): static
    {
        $this->marketingActivityId = $marketingActivityId;

        return $this;
    }

    /**
     * A custom unique identifier for the marketing activity, which can be used to manage the activity and send engagement metrics without having to store our marketing activity ID in your systems. Specify either the marketing activity ID, remote ID, or UTM to update the marketing activity.
     */
    public function setRemoteId($remoteId): static
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * Specifies the [Urchin Traffic Module (UTM) parameters](https://en.wikipedia.org/wiki/UTM_parameters) that are associated with a related marketing campaign. Specify either the marketing activity ID, remote ID, or UTM to update the marketing activity.
     */
    public function setUtm(ShopifyUTMInputInputObject $shopifyUTMInputInputObject): static
    {
        $this->utm = $shopifyUTMInputInputObject;

        return $this;
    }
}
