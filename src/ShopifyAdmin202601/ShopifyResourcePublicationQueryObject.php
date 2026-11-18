<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A resource publication represents information about the publication of a resource.
 * An instance of `ResourcePublication`, unlike `ResourcePublicationV2`, can be neither published or scheduled to be published.
 *
 * See [ResourcePublicationV2](/api/admin-graphql/latest/objects/ResourcePublicationV2) for more context.
 */
class ShopifyResourcePublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublication";

    /**
     * The channel the resource publication is published to.
     *
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(?ShopifyResourcePublicationChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the resource publication is published. Also returns true if the resource publication is scheduled to be published.
     * If false, then the resource publication is neither published nor scheduled to be published.
     */
    public function selectIsPublished(): static
    {
        $this->selectField("isPublished");

        return $this;
    }

    /**
     * The publication the resource publication is published to.
     */
    public function selectPublication(?ShopifyResourcePublicationPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date that the resource publication was or is going to be published to the publication.
     * If the product isn't published, then this field returns an epoch timestamp.
     */
    public function selectPublishDate(): static
    {
        $this->selectField("publishDate");

        return $this;
    }

    /**
     * The resource published to the publication.
     */
    public function selectPublishable(?ShopifyResourcePublicationPublishableArgumentsObject $argsObject = null): ShopifyPublishableInterfaceObject
    {
        $object = new ShopifyPublishableInterfaceObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
