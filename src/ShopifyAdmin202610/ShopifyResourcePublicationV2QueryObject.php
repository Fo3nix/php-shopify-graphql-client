<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A resource publication represents information about the publication of a resource.
 * Unlike `ResourcePublication`, an instance of `ResourcePublicationV2` can't be unpublished. It must either be published or scheduled to be published.
 *
 * See [ResourcePublication](/api/admin-graphql/latest/objects/ResourcePublication) for more context.
 */
class ShopifyResourcePublicationV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationV2";

    /**
     * Whether the resource publication is published. If true, then the resource publication is published to the publication.
     * If false, then the resource publication is staged to be published to the publication.
     */
    public function selectIsPublished(): static
    {
        $this->selectField("isPublished");

        return $this;
    }

    /**
     * The publication the resource publication is published to.
     */
    public function selectPublication(?ShopifyResourcePublicationV2PublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
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
     */
    public function selectPublishDate(): static
    {
        $this->selectField("publishDate");

        return $this;
    }

    /**
     * The resource published to the publication.
     */
    public function selectPublishable(?ShopifyResourcePublicationV2PublishableArgumentsObject $argsObject = null): ShopifyPublishableInterfaceObject
    {
        $object = new ShopifyPublishableInterfaceObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
