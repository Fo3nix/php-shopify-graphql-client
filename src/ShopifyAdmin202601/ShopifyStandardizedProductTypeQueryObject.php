<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStandardizedProductTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardizedProductType";

    public function selectProductTaxonomyNode(ShopifyStandardizedProductTypeProductTaxonomyNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductTaxonomyNodeQueryObject("productTaxonomyNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
