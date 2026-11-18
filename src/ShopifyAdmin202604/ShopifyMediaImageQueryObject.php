<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `MediaImage` object represents an image hosted on Shopify's
 * [content delivery network (CDN)](https://shopify.dev/docs/storefronts/themes/best-practices/performance/platform#shopify-cdn).
 * Shopify CDN is a content system that serves as the primary way to store,
 * manage, and deliver visual content for products, variants, and other resources across the Shopify platform.
 *
 * The `MediaImage` object provides information to:
 *
 * - Store and display product and variant images across online stores, admin interfaces, and mobile apps.
 * - Retrieve visual branding elements, including logos, banners, favicons, and background images in checkout flows.
 * - Retrieve signed URLs for secure, time-limited access to original image files.
 *
 * Each `MediaImage` object provides both the processed image data (with automatic optimization and CDN delivery)
 * and access to the original source file. The image processing is handled asynchronously, so images
 * might not be immediately available after upload. The
 * [`status`](https://shopify.dev/docs/api/admin-graphql/latest/objects/mediaimage#field-MediaImage.fields.status)
 * field indicates when processing is complete and the image is ready for use.
 *
 * The `MediaImage` object implements the [`Media`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Media)
 * interface alongside other media types, like videos and 3D models.
 *
 * Learn about
 * managing media for [products](https://shopify.dev/docs/apps/build/online-store/product-media),
 * [product variants](https://shopify.dev/docs/apps/build/online-store/product-variant-media), and
 * [asynchronous media management](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components#asynchronous-media-management).
 */
class ShopifyMediaImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaImage";

    /**
     * A word or phrase to share the nature or contents of a media.
     */
    public function selectAlt(): static
    {
        $this->selectField("alt");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Any errors that have occurred on the file.
     */
    public function selectFileErrors(?ShopifyMediaImageFileErrorsArgumentsObject $argsObject = null): ShopifyFileErrorQueryObject
    {
        $object = new ShopifyFileErrorQueryObject("fileErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the file.
     */
    public function selectFileStatus(): static
    {
        $this->selectField("fileStatus");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The image for the media. Returns `null` until `status` is `READY`.
     */
    public function selectImage(?ShopifyMediaImageImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The media content type.
     */
    public function selectMediaContentType(): static
    {
        $this->selectField("mediaContentType");

        return $this;
    }

    /**
     * Any errors which have occurred on the media.
     */
    public function selectMediaErrors(?ShopifyMediaImageMediaErrorsArgumentsObject $argsObject = null): ShopifyMediaErrorQueryObject
    {
        $object = new ShopifyMediaErrorQueryObject("mediaErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The warnings attached to the media.
     */
    public function selectMediaWarnings(?ShopifyMediaImageMediaWarningsArgumentsObject $argsObject = null): ShopifyMediaWarningQueryObject
    {
        $object = new ShopifyMediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @deprecated No longer supported. Use metaobjects instead.
     */
    public function selectMetafield(ShopifyMediaImageMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @deprecated No longer supported. Use metaobjects instead.
     */
    public function selectMetafields(?ShopifyMediaImageMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The MIME type of the image.
     */
    public function selectMimeType(): static
    {
        $this->selectField("mimeType");

        return $this;
    }

    /**
     * The original source of the image.
     */
    public function selectOriginalSource(?ShopifyMediaImageOriginalSourceArgumentsObject $argsObject = null): ShopifyMediaImageOriginalSourceQueryObject
    {
        $object = new ShopifyMediaImageOriginalSourceQueryObject("originalSource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The preview image for the media.
     */
    public function selectPreview(?ShopifyMediaImagePreviewArgumentsObject $argsObject = null): ShopifyMediaPreviewImageQueryObject
    {
        $object = new ShopifyMediaPreviewImageQueryObject("preview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Current status of the media.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyMediaImageTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
