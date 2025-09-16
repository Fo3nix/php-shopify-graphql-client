<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyCategoryAttributeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryAttributeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(TaxonomyCategoryAttributeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryAttributeUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
