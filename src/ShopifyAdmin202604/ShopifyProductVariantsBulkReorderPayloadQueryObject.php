<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantsBulkReorder` mutation.
 */
class ShopifyProductVariantsBulkReorderPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantsBulkReorderPayload";

    /**
     * The updated product.
     */
    public function selectProduct(?ShopifyProductVariantsBulkReorderPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectUserErrors(?ShopifyProductVariantsBulkReorderPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductVariantsBulkReorderUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkReorderUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
