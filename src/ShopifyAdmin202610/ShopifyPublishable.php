<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourcePublicationV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPublicationConnection;

/**
 * Represents a resource that can be published to a channel.
 * A publishable resource can be either a Product or Collection.
 */
interface ShopifyPublishable
{
    
    /**
     * The number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, without
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     *
     * @return ShopifyCount
     */
    public function getAvailablePublicationsCount(): ?ShopifyCount;

    
    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     *
     * @return int
     */
    public function getPublicationCount(): ?int;

    
    /**
     * Whether the resource is published to a specific channel.
     *
     * @return bool
     */
    public function getPublishedOnChannel(): ?bool;

    
    /**
     * Whether the resource is published to a
     * [channel](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel).
     * For example, the resource might be published to the online store channel.
     *
     * @return bool
     */
    public function getPublishedOnCurrentChannel(): ?bool;

    
    /**
     * Whether the resource is published to the app's
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * For example, the resource might be published to the app's online store channel.
     *
     * @return bool
     */
    public function getPublishedOnCurrentPublication(): ?bool;

    
    /**
     * Whether the resource is published to a specified
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * @return bool
     */
    public function getPublishedOnPublication(): ?bool;

    
    /**
     * The list of resources that are published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * @return ShopifyResourcePublicationConnection
     */
    public function getResourcePublications(): ?ShopifyResourcePublicationConnection;

    
    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     *
     * @return ShopifyCount
     */
    public function getResourcePublicationsCount(): ?ShopifyCount;

    
    /**
     * The list of resources that are either published or staged to be published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * By default, only publications to `APP` catalog types are returned.
     * For `Product` and `ProductVariant`, use the `catalogType` argument to retrieve
     * publications for other catalog types, such as `COMPANY_LOCATION` (B2B) or `MARKET`.
     * `Collection` only supports publications to `APP` catalog types.
     *
     * @return ShopifyResourcePublicationV2Connection
     */
    public function getResourcePublicationsV2(): ?ShopifyResourcePublicationV2Connection;

    
    /**
     * The list of channels that the resource is not published to.
     *
     * @return ShopifyChannelConnection
     */
    public function getUnpublishedChannels(): ?ShopifyChannelConnection;

    
    /**
     * The list of [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that the resource isn't published to.
     *
     * @return ShopifyPublicationConnection
     */
    public function getUnpublishedPublications(): ?ShopifyPublicationConnection;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
