<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an in-progress collection duplication operation. Collection duplication is a synchronous operation for simple collections, and an asynchronous operation for collections containing too many products to process synchronously.
 */
class ShopifyCollectionDuplicateOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionDuplicateOperation";

    /**
     * Whether the collection is the source that products are being duplicated from, or the target collection that products are being duplicated onto.
     */
    public function selectCollectionRole(): static
    {
        $this->selectField("collectionRole");

        return $this;
    }

    /**
     * The background job performing the duplication.
     */
    public function selectJob(?ShopifyCollectionDuplicateOperationJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
