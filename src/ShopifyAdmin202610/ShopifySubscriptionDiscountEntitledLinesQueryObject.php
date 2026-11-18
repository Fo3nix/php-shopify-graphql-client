<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the subscription lines the discount applies on.
 */
class ShopifySubscriptionDiscountEntitledLinesQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountEntitledLines";

    /**
     * Specify whether the subscription discount will apply on all subscription lines.
     */
    public function selectAll(): static
    {
        $this->selectField("all");

        return $this;
    }

    /**
     * The list of subscription lines associated with the subscription discount.
     */
    public function selectLines(?ShopifySubscriptionDiscountEntitledLinesLinesArgumentsObject $argsObject = null): ShopifySubscriptionLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
