<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a theme file.
 */
class ShopifyOnlineStoreThemeFileQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFile";

    /**
     * The body of the theme file.
     */
    public function selectBody(?ShopifyOnlineStoreThemeFileBodyArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileBodyUnionObject
    {
        $object = new ShopifyOnlineStoreThemeFileBodyUnionObject("body");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The md5 digest of the theme file for data integrity.
     */
    public function selectChecksumMd5(): static
    {
        $this->selectField("checksumMd5");

        return $this;
    }

    /**
     * The content type of the theme file.
     */
    public function selectContentType(): static
    {
        $this->selectField("contentType");

        return $this;
    }

    /**
     * The date and time when the theme file was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The unique identifier of the theme file.
     */
    public function selectFilename(): static
    {
        $this->selectField("filename");

        return $this;
    }

    /**
     * The size of the theme file in bytes.
     */
    public function selectSize(): static
    {
        $this->selectField("size");

        return $this;
    }

    /**
     * The date and time when the theme file was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
