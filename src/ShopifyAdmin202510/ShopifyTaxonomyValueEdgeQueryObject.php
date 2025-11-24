<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyValueEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyTaxonomyValueEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
