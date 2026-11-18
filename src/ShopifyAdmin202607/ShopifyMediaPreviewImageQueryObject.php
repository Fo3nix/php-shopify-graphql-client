<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the preview image for a media.
 */
class ShopifyMediaPreviewImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaPreviewImage";

    /**
     * The preview image for the media. Returns `null` until `status` is `READY`.
     */
    public function selectImage(?ShopifyMediaPreviewImageImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Current status of the preview image.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
