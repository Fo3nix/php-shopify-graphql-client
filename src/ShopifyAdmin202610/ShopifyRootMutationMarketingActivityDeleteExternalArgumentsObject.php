<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketingActivityDeleteExternalArgumentsObject extends ArgumentsObject
{
    protected $marketingActivityId;
    protected $remoteId;

    /**
     * The ID of the marketing activity. A marketing activity ID or remote ID must be provided.
     */
    public function setMarketingActivityId($marketingActivityId): static
    {
        $this->marketingActivityId = $marketingActivityId;

        return $this;
    }

    /**
     * A custom unique identifier for the marketing activity, which can be used to manage the activity and send engagement metrics without having to store our marketing activity ID in your systems. A marketing activity ID or remote ID must be provided.
     */
    public function setRemoteId($remoteId): static
    {
        $this->remoteId = $remoteId;

        return $this;
    }
}
