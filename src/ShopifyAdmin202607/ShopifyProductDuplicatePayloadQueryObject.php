<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productDuplicate` mutation.
 */
class ShopifyProductDuplicatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductDuplicatePayload";

    /**
     * The asynchronous job that duplicates the product images.
     */
    public function selectImageJob(?ShopifyProductDuplicatePayloadImageJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("imageJob");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The duplicated product.
     */
    public function selectNewProduct(?ShopifyProductDuplicatePayloadNewProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("newProduct");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product duplicate operation, returned when run in asynchronous mode.
     */
    public function selectProductDuplicateOperation(?ShopifyProductDuplicatePayloadProductDuplicateOperationArgumentsObject $argsObject = null): ShopifyProductDuplicateOperationQueryObject
    {
        $object = new ShopifyProductDuplicateOperationQueryObject("productDuplicateOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The user's shop.
     */
    public function selectShop(?ShopifyProductDuplicatePayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductDuplicatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
