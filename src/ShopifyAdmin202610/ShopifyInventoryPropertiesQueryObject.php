<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryPropertiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryProperties";

    public function selectQuantityNames(ShopifyInventoryPropertiesQuantityNamesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryQuantityNameQueryObject("quantityNames");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
