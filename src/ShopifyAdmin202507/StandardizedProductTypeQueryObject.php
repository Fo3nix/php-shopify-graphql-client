<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StandardizedProductTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardizedProductType";

    public function selectProductTaxonomyNode(StandardizedProductTypeProductTaxonomyNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductTaxonomyNodeQueryObject("productTaxonomyNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
