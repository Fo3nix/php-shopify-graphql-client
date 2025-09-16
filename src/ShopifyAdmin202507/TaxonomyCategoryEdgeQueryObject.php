<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyCategoryEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(TaxonomyCategoryEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
