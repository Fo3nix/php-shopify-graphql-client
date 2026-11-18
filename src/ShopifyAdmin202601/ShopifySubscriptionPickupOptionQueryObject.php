<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A pickup option to deliver a subscription contract.
 */
class ShopifySubscriptionPickupOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionPickupOption";

    /**
     * The code of the pickup option.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The description of the pickup option.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The pickup location.
     */
    public function selectLocation(?ShopifySubscriptionPickupOptionLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether a phone number is required for the pickup option.
     */
    public function selectPhoneRequired(): static
    {
        $this->selectField("phoneRequired");

        return $this;
    }

    /**
     * The estimated amount of time it takes for the pickup to be ready. For example, "Usually ready in 24 hours".).
     */
    public function selectPickupTime(): static
    {
        $this->selectField("pickupTime");

        return $this;
    }

    /**
     * The presentment title of the pickup option.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    /**
     * The price of the pickup option.
     */
    public function selectPrice(?ShopifySubscriptionPickupOptionPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the pickup option.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
