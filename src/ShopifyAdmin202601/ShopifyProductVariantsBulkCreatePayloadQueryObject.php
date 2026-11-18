<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantsBulkCreate` mutation.
 */
class ShopifyProductVariantsBulkCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantsBulkCreatePayload";

    /**
     * The updated product object.
     */
    public function selectProduct(?ShopifyProductVariantsBulkCreatePayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The newly created variants.
     */
    public function selectProductVariants(?ShopifyProductVariantsBulkCreatePayloadProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
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
    public function selectUserErrors(?ShopifyProductVariantsBulkCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductVariantsBulkCreateUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
