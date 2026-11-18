<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryPromiseProviderUpsertArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId"];

    protected $active;
    protected $fulfillmentDelay;
    protected $timeZone;
    protected $locationId;

    /**
     * Whether the delivery promise provider is active. Defaults to `true` when creating a provider.
     */
    public function setActive($active): static
    {
        $this->active = $active;

        return $this;
    }

    /**
     * The number of seconds to add to the current time as a buffer when looking up delivery promises. Represents how long the shop requires before releasing an order to the fulfillment provider.
     */
    public function setFulfillmentDelay($fulfillmentDelay): static
    {
        $this->fulfillmentDelay = $fulfillmentDelay;

        return $this;
    }

    /**
     * The time zone to be used for interpreting day of week and cutoff times in delivery schedules when looking up delivery promises. Defaults to `UTC` when creating a provider.
     */
    public function setTimeZone($timeZone): static
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * The ID of the location that will be associated with the delivery promise provider.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
