<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CountryHarmonizedSystemCode and a cursor during pagination.
 */
class ShopifyCountryHarmonizedSystemCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountryHarmonizedSystemCodeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CountryHarmonizedSystemCodeEdge.
     */
    public function selectNode(?ShopifyCountryHarmonizedSystemCodeEdgeNodeArgumentsObject $argsObject = null): ShopifyCountryHarmonizedSystemCodeQueryObject
    {
        $object = new ShopifyCountryHarmonizedSystemCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
