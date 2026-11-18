<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketingEngagementCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["marketingEngagement"];

    protected $marketingActivityId;
    protected $remoteId;
    protected $marketingEngagement;

    /**
     * The identifier of the marketing activity for which the engagement metrics are being provided. Exactly one of marketingActivityId, remoteId, or the deprecated channelHandle must be set.
     */
    public function setMarketingActivityId($marketingActivityId): static
    {
        $this->marketingActivityId = $marketingActivityId;

        return $this;
    }

    /**
     * A custom unique identifier for the marketing activity, which can be used to manage the activity and send engagement metrics without having to store our marketing activity ID in your systems. Exactly one of marketingActivityId, remoteId, or the deprecated channelHandle must be set.
     */
    public function setRemoteId($remoteId): static
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * The marketing engagement's attributes.
     */
    public function setMarketingEngagement(ShopifyMarketingEngagementInputInputObject $shopifyMarketingEngagementInputInputObject): static
    {
        $this->marketingEngagement = $shopifyMarketingEngagementInputInputObject;

        return $this;
    }
}
