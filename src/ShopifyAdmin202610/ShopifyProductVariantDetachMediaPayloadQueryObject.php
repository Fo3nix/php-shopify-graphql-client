<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantDetachMedia` mutation.
 */
class ShopifyProductVariantDetachMediaPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantDetachMediaPayload";

    /**
     * The product associated with the variants and media.
     */
    public function selectProduct(?ShopifyProductVariantDetachMediaPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product variants that were updated.
     */
    public function selectProductVariants(?ShopifyProductVariantDetachMediaPayloadProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
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
    public function selectUserErrors(?ShopifyProductVariantDetachMediaPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMediaUserErrorQueryObject
    {
        $object = new ShopifyMediaUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
