<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An available pickup option for a subscription contract calculation.
 */
class ShopifySubscriptionContractCalculationPickupOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationPickupOption";

    /**
     * The code of the delivery option.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The description of the delivery option.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The location where the customer will pick up the merchandise.
     */
    public function selectLocation(?ShopifySubscriptionContractCalculationPickupOptionLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether a phone number is required for the delivery option.
     */
    public function selectPhoneRequired(): static
    {
        $this->selectField("phoneRequired");

        return $this;
    }

    /**
     * The estimated amount of time it takes for the pickup to be ready (e.g., "Usually ready in 24 hours").
     */
    public function selectPickupTime(): static
    {
        $this->selectField("pickupTime");

        return $this;
    }

    /**
     * The presentment title of the delivery option. This is the customer-facing title displayed at checkout.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    /**
     * The price of the delivery option.
     */
    public function selectPrice(?ShopifySubscriptionContractCalculationPickupOptionPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the delivery option.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
