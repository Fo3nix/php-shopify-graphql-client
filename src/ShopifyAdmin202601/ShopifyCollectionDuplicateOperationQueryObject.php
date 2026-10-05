<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionDuplicateOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionDuplicateOperation";

    public function selectCollectionRole()
    {
        $this->selectField("collectionRole");

        return $this;
    }

    public function selectJob(ShopifyCollectionDuplicateOperationJobArgumentsObject $argsObject = null)
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
