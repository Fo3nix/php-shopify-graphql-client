<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResourcePublicationV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationV2";

    public function selectIsPublished()
    {
        $this->selectField("isPublished");

        return $this;
    }

    public function selectPublication(ResourcePublicationV2PublicationArgumentsObject $argsObject = null)
    {
        $object = new PublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishDate()
    {
        $this->selectField("publishDate");

        return $this;
    }
}
