<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an image resource.
 */
class ShopifyImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "Image";

    /**
     * A word or phrase to share the nature or contents of an image.
     */
    public function selectAltText(): static
    {
        $this->selectField("altText");

        return $this;
    }

    /**
     * The original height of the image in pixels. Returns `null` if the image isn't hosted by Shopify.
     */
    public function selectHeight(): static
    {
        $this->selectField("height");

        return $this;
    }

    /**
     * A unique ID for the image.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyImageMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyImageMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The location of the original image as a URL.
     *
     * If there are any existing transformations in the original source URL, they will remain and not be stripped.
     *
     * @deprecated Use `url` instead.
     */
    public function selectOriginalSrc(): static
    {
        $this->selectField("originalSrc");

        return $this;
    }

    /**
     * The location of the image as a URL.
     *
     * @deprecated Use `url` instead.
     */
    public function selectSrc(): static
    {
        $this->selectField("src");

        return $this;
    }

    /**
     * The ThumbHash of the image.
     *
     * Useful to display placeholder images while the original image is loading.
     */
    public function selectThumbhash(): static
    {
        $this->selectField("thumbhash");

        return $this;
    }

    /**
     * The location of the transformed image as a URL.
     *
     * All transformation arguments are considered "best-effort". If they can be applied to an image, they will be.
     * Otherwise any transformations which an image type doesn't support will be ignored.
     *
     * @deprecated Use `url(transform:)` instead
     */
    public function selectTransformedSrc(): static
    {
        $this->selectField("transformedSrc");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyImageTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The location of the image as a URL.
     *
     * If no transform options are specified, then the original image will be preserved including any pre-applied transforms.
     *
     * All transformation options are considered "best-effort". Any transformation that the original image type doesn't support will be ignored.
     *
     * If you need multiple variations of the same image, then you can use [GraphQL aliases](https://graphql.org/learn/queries/#aliases).
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }

    /**
     * The original width of the image in pixels. Returns `null` if the image isn't hosted by Shopify.
     */
    public function selectWidth(): static
    {
        $this->selectField("width");

        return $this;
    }
}
