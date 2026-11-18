<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents operations involving a collection.
 */
class ShopifyCollectionOperationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionOperations";

    /**
     * Collection duplicate operations.
     */
    public function selectDuplicate(?ShopifyCollectionOperationsDuplicateArgumentsObject $argsObject = null): ShopifyCollectionDuplicateOperationQueryObject
    {
        $object = new ShopifyCollectionDuplicateOperationQueryObject("duplicate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
