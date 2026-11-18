<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the selected pickup option on a subscription contract.
 */
class ShopifySubscriptionDeliveryMethodPickupOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodPickupOption";

    /**
     * A custom reference to the delivery method for use with automations.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The details displayed to the customer to describe the pickup option.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The location where the customer will pick up the merchandise.
     */
    public function selectLocation(?ShopifySubscriptionDeliveryMethodPickupOptionLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The title of the pickup option.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
