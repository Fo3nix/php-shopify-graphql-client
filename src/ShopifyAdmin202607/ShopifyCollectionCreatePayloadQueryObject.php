<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionCreate` mutation.
 */
class ShopifyCollectionCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionCreatePayload";

    /**
     * The collection that has been created.
     */
    public function selectCollection(?ShopifyCollectionCreatePayloadCollectionArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCollectionCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
