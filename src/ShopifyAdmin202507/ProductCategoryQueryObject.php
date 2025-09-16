<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductCategoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductCategory";

    public function selectProductTaxonomyNode(ProductCategoryProductTaxonomyNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductTaxonomyNodeQueryObject("productTaxonomyNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
