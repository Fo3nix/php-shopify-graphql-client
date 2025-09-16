<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppInstallationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallationConnection";

    public function selectEdges(AppInstallationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AppInstallationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AppInstallationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AppInstallationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AppInstallationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
