<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppInstallationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallationConnection";

    public function selectEdges(ShopifyAppInstallationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppInstallationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAppInstallationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppInstallationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAppInstallationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
