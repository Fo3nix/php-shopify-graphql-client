<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A new [shipping line](https://shopify.dev/api/admin-graphql/latest/objects/shippingline)
 * added as part of an order edit.
 */
class ShopifyOrderStagedChangeAddShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeAddShippingLine";

    /**
     * The phone number at the shipping address.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The shipping line's title that's shown to the buyer.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    /**
     * The price that applies to the shipping line.
     */
    public function selectPrice(?ShopifyOrderStagedChangeAddShippingLinePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the shipping line.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
