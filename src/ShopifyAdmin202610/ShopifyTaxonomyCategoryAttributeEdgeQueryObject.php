<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyCategoryAttributeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryAttributeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyTaxonomyCategoryAttributeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryAttributeUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
