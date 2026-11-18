<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionUpdate` mutation.
 */
class ShopifyCollectionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionUpdatePayload";

    /**
     * The updated collection.
     */
    public function selectCollection(?ShopifyCollectionUpdatePayloadCollectionArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The asynchronous job updating the products based on the new rule set.
     */
    public function selectJob(?ShopifyCollectionUpdatePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCollectionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
