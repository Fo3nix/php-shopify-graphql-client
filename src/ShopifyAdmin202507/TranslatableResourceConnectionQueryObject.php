<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TranslatableResourceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResourceConnection";

    public function selectEdges(TranslatableResourceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TranslatableResourceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(TranslatableResourceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new TranslatableResourceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(TranslatableResourceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
