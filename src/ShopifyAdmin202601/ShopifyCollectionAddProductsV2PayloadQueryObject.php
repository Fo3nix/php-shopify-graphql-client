<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `collectionAddProductsV2` mutation.
 */
class ShopifyCollectionAddProductsV2PayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionAddProductsV2Payload";

    /**
     * The asynchronous job adding the products.
     */
    public function selectJob(?ShopifyCollectionAddProductsV2PayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyCollectionAddProductsV2PayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCollectionAddProductsV2UserErrorQueryObject
    {
        $object = new ShopifyCollectionAddProductsV2UserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
