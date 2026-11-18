<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productDelete` mutation.
 */
class ShopifyProductDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductDeletePayload";

    /**
     * The ID of the deleted product.
     */
    public function selectDeletedProductId(): static
    {
        $this->selectField("deletedProductId");

        return $this;
    }

    /**
     * The product delete operation, returned when run in asynchronous mode.
     */
    public function selectProductDeleteOperation(?ShopifyProductDeletePayloadProductDeleteOperationArgumentsObject $argsObject = null): ShopifyProductDeleteOperationQueryObject
    {
        $object = new ShopifyProductDeleteOperationQueryObject("productDeleteOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop associated with the product.
     */
    public function selectShop(?ShopifyProductDeletePayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
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
    public function selectUserErrors(?ShopifyProductDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
