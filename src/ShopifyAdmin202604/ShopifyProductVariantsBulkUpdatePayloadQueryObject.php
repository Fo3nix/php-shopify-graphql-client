<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantsBulkUpdate` mutation.
 */
class ShopifyProductVariantsBulkUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantsBulkUpdatePayload";

    /**
     * The updated product object.
     */
    public function selectProduct(?ShopifyProductVariantsBulkUpdatePayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The updated variants.
     */
    public function selectProductVariants(?ShopifyProductVariantsBulkUpdatePayloadProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductVariantsBulkUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductVariantsBulkUpdateUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
