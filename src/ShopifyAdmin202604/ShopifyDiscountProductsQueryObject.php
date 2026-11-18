<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A list of products and product variants that the discount can have as a prerequisite or a list of products and product variants to which the discount can be applied.
 */
class ShopifyDiscountProductsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountProducts";

    /**
     * The list of product variants that the discount can have as a prerequisite or the list of product variants to which the discount can be applied.
     */
    public function selectProductVariants(?ShopifyDiscountProductsProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of products that the discount can have as a prerequisite or the list of products to which the discount can be applied.
     */
    public function selectProducts(?ShopifyDiscountProductsProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
