<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebhookSubscriptionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionConnection";

    public function selectEdges(ShopifyWebhookSubscriptionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebhookSubscriptionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyWebhookSubscriptionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyWebhookSubscriptionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
