<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebhookSubscriptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscription";

    public function selectApiVersion(ShopifyWebhookSubscriptionApiVersionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyApiVersionQueryObject("apiVersion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `uri` instead.
     */
    public function selectCallbackUrl()
    {
        $this->selectField("callbackUrl");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * @deprecated Use `uri` instead.
     */
    public function selectEndpoint(ShopifyWebhookSubscriptionEndpointArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebhookSubscriptionEndpointUnionObject("endpoint");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFilter()
    {
        $this->selectField("filter");

        return $this;
    }

    public function selectFormat()
    {
        $this->selectField("format");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIncludeFields()
    {
        $this->selectField("includeFields");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectMetafieldNamespaces()
    {
        $this->selectField("metafieldNamespaces");

        return $this;
    }

    public function selectMetafields(ShopifyWebhookSubscriptionMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebhookSubscriptionMetafieldIdentifierQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectTopic()
    {
        $this->selectField("topic");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectUri()
    {
        $this->selectField("uri");

        return $this;
    }
}
