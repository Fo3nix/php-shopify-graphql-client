<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebhookSubscriptionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyWebhookSubscriptionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
