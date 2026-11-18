<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the selected shipping option on a subscription contract.
 */
class ShopifySubscriptionDeliveryMethodShippingOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodShippingOption";

    /**
     * The carrier service that's providing this shipping option.
     * This field isn't currently supported and returns null.
     *
     * @deprecated This field has never been implemented.
     */
    public function selectCarrierService(?ShopifySubscriptionDeliveryMethodShippingOptionCarrierServiceArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
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
     * The presentment title of the shipping option.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
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
