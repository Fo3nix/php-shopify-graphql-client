<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyCategoryEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyTaxonomyCategoryEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
