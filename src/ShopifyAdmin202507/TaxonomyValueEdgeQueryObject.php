<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyValueEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(TaxonomyValueEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
