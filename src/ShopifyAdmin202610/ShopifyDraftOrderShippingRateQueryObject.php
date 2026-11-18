<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping rate is an additional cost added to the cost of the products that were ordered.
 */
class ShopifyDraftOrderShippingRateQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderShippingRate";

    /**
     * The code of the shipping rate.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * Unique identifier for this shipping rate.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The cost associated with the shipping rate.
     */
    public function selectPrice(?ShopifyDraftOrderShippingRatePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The source of the shipping rate.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
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
