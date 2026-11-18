<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * General inventory properties for the shop.
 */
class ShopifyInventoryPropertiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryProperties";

    /**
     * All the quantity names.
     */
    public function selectQuantityNames(?ShopifyInventoryPropertiesQuantityNamesArgumentsObject $argsObject = null): ShopifyInventoryQuantityNameQueryObject
    {
        $object = new ShopifyInventoryQuantityNameQueryObject("quantityNames");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
