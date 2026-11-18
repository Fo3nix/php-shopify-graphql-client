<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping option associated with order delivery that includes pricing and service information.
 */
class ShopifyShippingRateQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingRate";

    /**
     * Human-readable unique identifier for this shipping rate.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The cost associated with the shipping rate.
     */
    public function selectPrice(?ShopifyShippingRatePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the shipping rate.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
