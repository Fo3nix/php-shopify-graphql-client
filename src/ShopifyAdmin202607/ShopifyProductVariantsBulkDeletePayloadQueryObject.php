<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantsBulkDelete` mutation.
 */
class ShopifyProductVariantsBulkDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantsBulkDeletePayload";

    /**
     * The updated product object.
     */
    public function selectProduct(?ShopifyProductVariantsBulkDeletePayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductVariantsBulkDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductVariantsBulkDeleteUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
