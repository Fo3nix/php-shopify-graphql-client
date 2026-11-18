<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CurrencySetting and a cursor during pagination.
 */
class ShopifyCurrencySettingEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencySettingEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CurrencySettingEdge.
     */
    public function selectNode(?ShopifyCurrencySettingEdgeNodeArgumentsObject $argsObject = null): ShopifyCurrencySettingQueryObject
    {
        $object = new ShopifyCurrencySettingQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
