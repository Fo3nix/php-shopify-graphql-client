<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents a resource that can be published to a channel.
 * A publishable resource can be either a Product or Collection.
 */
class ShopifyPublishableInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "Publishable";

    /**
     * The number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, without
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     */
    public function selectAvailablePublicationsCount(?ShopifyPublishableAvailablePublicationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("availablePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     *
     * @deprecated Use `resourcePublicationsCount` instead.
     */
    public function selectPublicationCount(): static
    {
        $this->selectField("publicationCount");

        return $this;
    }

    /**
     * Whether the resource is published to a specific channel.
     *
     * @deprecated Use `publishedOnPublication` instead.
     */
    public function selectPublishedOnChannel(): static
    {
        $this->selectField("publishedOnChannel");

        return $this;
    }

    /**
     * Whether the resource is published to a
     * [channel](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel).
     * For example, the resource might be published to the online store channel.
     *
     * @deprecated Use `publishedOnCurrentPublication` instead.
     */
    public function selectPublishedOnCurrentChannel(): static
    {
        $this->selectField("publishedOnCurrentChannel");

        return $this;
    }

    /**
     * Whether the resource is published to the app's
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * For example, the resource might be published to the app's online store channel.
     *
     * @deprecated Use `publishedOnPublication` instead.
     */
    public function selectPublishedOnCurrentPublication(): static
    {
        $this->selectField("publishedOnCurrentPublication");

        return $this;
    }

    /**
     * Whether the resource is published to a specified
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     */
    public function selectPublishedOnPublication(): static
    {
        $this->selectField("publishedOnPublication");

        return $this;
    }

    /**
     * The list of resources that are published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     */
    public function selectResourcePublications(?ShopifyPublishableResourcePublicationsArgumentsObject $argsObject = null): ShopifyResourcePublicationConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("resourcePublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     */
    public function selectResourcePublicationsCount(?ShopifyPublishableResourcePublicationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("resourcePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of resources that are either published or staged to be published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * By default, only publications to `APP` catalog types are returned.
     * For `Product` and `ProductVariant`, use the `catalogType` argument to retrieve
     * publications for other catalog types, such as `COMPANY_LOCATION` (B2B) or `MARKET`.
     * `Collection` only supports publications to `APP` catalog types.
     */
    public function selectResourcePublicationsV2(?ShopifyPublishableResourcePublicationsV2ArgumentsObject $argsObject = null): ShopifyResourcePublicationV2ConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationV2ConnectionQueryObject("resourcePublicationsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of channels that the resource is not published to.
     *
     * @deprecated Use `unpublishedPublications` instead.
     */
    public function selectUnpublishedChannels(?ShopifyPublishableUnpublishedChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
    {
        $object = new ShopifyChannelConnectionQueryObject("unpublishedChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that the resource isn't published to.
     */
    public function selectUnpublishedPublications(?ShopifyPublishableUnpublishedPublicationsArgumentsObject $argsObject = null): ShopifyPublicationConnectionQueryObject
    {
        $object = new ShopifyPublicationConnectionQueryObject("unpublishedPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onCollection(): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
