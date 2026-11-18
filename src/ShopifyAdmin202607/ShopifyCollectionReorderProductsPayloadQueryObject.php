<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionReorderProducts` mutation.
 */
class ShopifyCollectionReorderProductsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionReorderProductsPayload";

    /**
     * The asynchronous job reordering the products.
     */
    public function selectJob(?ShopifyCollectionReorderProductsPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyCollectionReorderProductsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCollectionReorderProductsUserErrorQueryObject
    {
        $object = new ShopifyCollectionReorderProductsUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
