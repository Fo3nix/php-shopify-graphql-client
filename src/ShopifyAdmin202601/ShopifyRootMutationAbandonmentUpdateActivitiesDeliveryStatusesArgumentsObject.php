<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationAbandonmentUpdateActivitiesDeliveryStatusesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["abandonmentId", "marketingActivityId", "deliveryStatus"];

    protected $abandonmentId;
    protected $marketingActivityId;
    protected $deliveryStatus;
    protected $deliveredAt;
    protected $deliveryStatusChangeReason;

    /**
     * The ID of the abandonment that needs to be updated.
     */
    public function setAbandonmentId($abandonmentId): static
    {
        $this->abandonmentId = $abandonmentId;

        return $this;
    }

    /**
     * The ID of the marketing activity that needs to be updated.
     */
    public function setMarketingActivityId($marketingActivityId): static
    {
        $this->marketingActivityId = $marketingActivityId;

        return $this;
    }

    /**
     * The new delivery status of the marketing activity for this abandonment.
     */
    public function setDeliveryStatus($shopifyAbandonmentDeliveryState): static
    {
        $this->deliveryStatus = new RawObject($shopifyAbandonmentDeliveryState);

        return $this;
    }

    /**
     * The delivery timestamp if the activity delivered.
     */
    public function setDeliveredAt($deliveredAt): static
    {
        $this->deliveredAt = $deliveredAt;

        return $this;
    }

    /**
     * The reason why the activity was or was not delivered.
     */
    public function setDeliveryStatusChangeReason($deliveryStatusChangeReason): static
    {
        $this->deliveryStatusChangeReason = $deliveryStatusChangeReason;

        return $this;
    }
}
