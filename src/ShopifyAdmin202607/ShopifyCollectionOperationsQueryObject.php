<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionOperationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionOperations";

    public function selectDuplicate(ShopifyCollectionOperationsDuplicateArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionDuplicateOperationQueryObject("duplicate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
