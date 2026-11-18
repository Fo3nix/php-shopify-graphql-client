<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the publication status and settings for a collection across different sales channels. This tracks where collections are published, when they were published, and any channel-specific configuration.
 *
 * For example, a "Holiday Gifts" collection might be published to the online store and Facebook Shop but not to the POS channel, with different publication dates for each channel based on marketing strategy.
 *
 * Use `CollectionPublication` to:
 * - Track collection visibility across multiple sales channels
 * - Manage channel-specific collection settings and availability
 * - Monitor publication history and timing for collections
 * - Control where collections appear in customer-facing channels
 * - Implement channel-specific collection management workflows
 *
 * Each publication record includes the channel information, publication status, and timing details. This enables merchants to control collection visibility strategically across their sales channels.
 *
 * Collections can have different publication settings per channel, allowing for targeted marketing and inventory management. For instance, wholesale collections might only be published to B2B channels while retail collections appear in consumer-facing channels.
 *
 * The publication system integrates with Shopify's broader channel management, ensuring collections appear consistently across the merchant's sales ecosystem while respecting channel-specific rules and permissions.
 *
 * Learn more about [sales channel management](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
 */
class ShopifyCollectionPublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublication";

    /**
     * The channel where the collection will be published.
     *
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(?ShopifyCollectionPublicationChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The collection to be published on the publication.
     */
    public function selectCollection(?ShopifyCollectionPublicationCollectionArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collection");
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
     * The publication where the collection will be published.
     */
    public function selectPublication(?ShopifyCollectionPublicationPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date that the publication was or is going to be published.
     */
    public function selectPublishDate(): static
    {
        $this->selectField("publishDate");

        return $this;
    }
}
