<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WebhookSubscriptionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionConnection";

    public function selectEdges(WebhookSubscriptionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new WebhookSubscriptionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(WebhookSubscriptionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new WebhookSubscriptionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(WebhookSubscriptionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
