<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Single or multiple line item products, product variants or collections required for the price rule to be applicable, can also be provided in combination.
 */
class ShopifyPriceRuleLineItemPrerequisitesQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleLineItemPrerequisites";

    /**
     * The collections required for the price rule to be applicable.
     */
    public function selectCollections(?ShopifyPriceRuleLineItemPrerequisitesCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product variants required for the price rule to be applicable.
     */
    public function selectProductVariants(?ShopifyPriceRuleLineItemPrerequisitesProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The products required for the price rule to be applicable.
     */
    public function selectProducts(?ShopifyPriceRuleLineItemPrerequisitesProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
