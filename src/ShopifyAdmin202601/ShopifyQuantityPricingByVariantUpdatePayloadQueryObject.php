<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `quantityPricingByVariantUpdate` mutation.
 */
class ShopifyQuantityPricingByVariantUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityPricingByVariantUpdatePayload";

    /**
     * The variants for which quantity pricing was created successfully in the price list.
     */
    public function selectProductVariants(?ShopifyQuantityPricingByVariantUpdatePayloadProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
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
    public function selectUserErrors(?ShopifyQuantityPricingByVariantUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyQuantityPricingByVariantUserErrorQueryObject
    {
        $object = new ShopifyQuantityPricingByVariantUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
