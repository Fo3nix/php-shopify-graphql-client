<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The details of the arrangement of an item.
 */
class ShopifyReverseFulfillmentOrderDispositionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderDisposition";

    /**
     * The date and time when the disposition was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

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
     * The location where the disposition occurred.
     */
    public function selectLocation(?ShopifyReverseFulfillmentOrderDispositionLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of disposed units.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The final arrangement of an item.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
