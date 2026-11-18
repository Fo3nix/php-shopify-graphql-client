<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A delivery promise provider. Currently restricted to select approved delivery promise partners.
 */
class ShopifyDeliveryPromiseProviderQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseProvider";

    /**
     * Whether the delivery promise provider is active. Defaults to `true` when creating a provider.
     */
    public function selectActive(): static
    {
        $this->selectField("active");

        return $this;
    }

    /**
     * The number of seconds to add to the current time as a buffer when looking up delivery promises. Represents how long the shop requires before releasing an order to the fulfillment provider.
     */
    public function selectFulfillmentDelay(): static
    {
        $this->selectField("fulfillmentDelay");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The location associated with this delivery promise provider.
     */
    public function selectLocation(?ShopifyDeliveryPromiseProviderLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time zone to be used for interpreting day of week and cutoff times in delivery schedules when looking up delivery promises.
     */
    public function selectTimeZone(): static
    {
        $this->selectField("timeZone");

        return $this;
    }
}
