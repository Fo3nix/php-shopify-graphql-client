<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductCategoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductCategory";

    public function selectProductTaxonomyNode(ShopifyProductCategoryProductTaxonomyNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductTaxonomyNodeQueryObject("productTaxonomyNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
