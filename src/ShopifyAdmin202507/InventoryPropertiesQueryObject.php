<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryPropertiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryProperties";

    public function selectQuantityNames(InventoryPropertiesQuantityNamesArgumentsObject $argsObject = null)
    {
        $object = new InventoryQuantityNameQueryObject("quantityNames");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
