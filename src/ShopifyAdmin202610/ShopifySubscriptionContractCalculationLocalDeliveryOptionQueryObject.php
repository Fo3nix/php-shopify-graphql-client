<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An available local delivery option for a subscription contract calculation.
 */
class ShopifySubscriptionContractCalculationLocalDeliveryOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationLocalDeliveryOption";

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
     * Whether a phone number is required for the delivery option.
     */
    public function selectPhoneRequired(): static
    {
        $this->selectField("phoneRequired");

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
    public function selectPrice(?ShopifySubscriptionContractCalculationLocalDeliveryOptionPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
