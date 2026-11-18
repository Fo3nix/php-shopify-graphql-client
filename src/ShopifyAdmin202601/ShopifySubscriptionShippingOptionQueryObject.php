<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping option to deliver a subscription contract.
 */
class ShopifySubscriptionShippingOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOption";

    /**
     * The carrier service that's providing this shipping option.
     * This field isn't currently supported and returns null.
     *
     * @deprecated This field has never been implemented.
     */
    public function selectCarrierService(?ShopifySubscriptionShippingOptionCarrierServiceArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The code of the shipping option.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The description of the shipping option.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * If a phone number is required for the shipping option.
     */
    public function selectPhoneRequired(): static
    {
        $this->selectField("phoneRequired");

        return $this;
    }

    /**
     * The presentment title of the shipping option.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    /**
     * The price of the shipping option.
     */
    public function selectPrice(?ShopifySubscriptionShippingOptionPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the shipping option.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
