<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the channels where a product is published.
 */
class ShopifyProductPublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPublication";

    /**
     * The channel where the product was or is published.
     */
    public function selectChannel(?ShopifyProductPublicationChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the publication is published or not.
     */
    public function selectIsPublished(): static
    {
        $this->selectField("isPublished");

        return $this;
    }

    /**
     * The product that was or is going to be published on the channel.
     */
    public function selectProduct(?ShopifyProductPublicationProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date that the product was or is going to be published on the channel.
     */
    public function selectPublishDate(): static
    {
        $this->selectField("publishDate");

        return $this;
    }
}
