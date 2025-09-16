<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WebhookSubscriptionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(WebhookSubscriptionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new WebhookSubscriptionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
