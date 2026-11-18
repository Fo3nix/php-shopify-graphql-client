<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A local delivery option for a subscription contract.
 */
class ShopifySubscriptionLocalDeliveryOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLocalDeliveryOption";

    /**
     * The code of the local delivery option.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The description of the local delivery option.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * Whether a phone number is required for the local delivery option.
     */
    public function selectPhoneRequired(): static
    {
        $this->selectField("phoneRequired");

        return $this;
    }

    /**
     * The presentment title of the local delivery option.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    /**
     * The price of the local delivery option.
     */
    public function selectPrice(?ShopifySubscriptionLocalDeliveryOptionPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the local delivery option.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
