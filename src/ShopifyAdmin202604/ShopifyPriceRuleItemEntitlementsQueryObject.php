<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The items to which this price rule applies. This may be multiple products, product variants, collections or combinations of the aforementioned.
 */
class ShopifyPriceRuleItemEntitlementsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleItemEntitlements";

    /**
     * The collections to which the price rule applies.
     */
    public function selectCollections(?ShopifyPriceRuleItemEntitlementsCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product variants to which the price rule applies.
     */
    public function selectProductVariants(?ShopifyPriceRuleItemEntitlementsProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The products to which the price rule applies.
     */
    public function selectProducts(?ShopifyPriceRuleItemEntitlementsProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the price rule applies to all line items.
     */
    public function selectTargetAllLineItems(): static
    {
        $this->selectField("targetAllLineItems");

        return $this;
    }
}
