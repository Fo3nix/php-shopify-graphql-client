<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Provides attributes for visual representation.
 */
class ShopifyMetaobjectThumbnailQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectThumbnail";

    /**
     * The file to be used for visual representation of this metaobject.
     */
    public function selectFile(?ShopifyMetaobjectThumbnailFileArgumentsObject $argsObject = null): ShopifyFileInterfaceObject
    {
        $object = new ShopifyFileInterfaceObject("file");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The hexadecimal color code to be used for representing this metaobject.
     */
    public function selectHex(): static
    {
        $this->selectField("hex");

        return $this;
    }
}
