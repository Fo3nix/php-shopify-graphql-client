<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `Collection` object represents a group of [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
 * that merchants can organize to make their stores easier to browse and help customers find related products.
 * Collections serve as the primary way to categorize and display products across
 * [online stores](https://shopify.dev/docs/apps/build/online-store),
 * [sales channels](https://shopify.dev/docs/apps/build/sales-channels), and marketing campaigns.
 *
 * The `Collection` object provides information to:
 *
 * - Organize products by category, season, or promotion.
 * - Automate product grouping using rules (for example, by tag, type, or price).
 * - Configure product sorting and display order (for example, alphabetical, best-selling, price, or manual).
 * - Manage collection visibility and publication across sales channels.
 * - Add rich descriptions, images, and metadata to enhance discovery.
 *
 * > Note:
 * > Collections are unpublished by default. To make them available to customers,
 * use the [`publishablePublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publishablePublish)
 * mutation after creation.
 *
 * Collections can be displayed in a store with Shopify's theme system through [Liquid templates](https://shopify.dev/docs/storefronts/themes/architecture/templates/collection)
 * and can be customized with [template suffixes](https://shopify.dev/docs/storefronts/themes/architecture/templates/alternate-templates)
 * for unique layouts. They also support advanced features like translated content, resource feedback,
 * and contextual publication for location-based catalogs.
 *
 * Learn about [using metafields with collection conditions](https://shopify.dev/docs/apps/build/custom-data/metafields/use-metafield-capabilities).
 */
class ShopifyCollectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "Collection";

    /**
     * Collection duplicate operations involving this collection, either as a source (copying products from this collection to another) or a target (copying products to this collection from another).
     */
    public function selectActiveOperations(?ShopifyCollectionActiveOperationsArgumentsObject $argsObject = null): ShopifyCollectionOperationsQueryObject
    {
        $object = new ShopifyCollectionOperationsQueryObject("activeOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, without
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     */
    public function selectAvailablePublicationsCount(?ShopifyCollectionAvailablePublicationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("availablePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the collection was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A single-line, text-only description of the collection, stripped of any HTML tags and formatting that were included in the description.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The description of the collection, including any HTML tags and formatting. This content is typically displayed to customers, such as on an online store, depending on the theme.
     */
    public function selectDescriptionHtml(): static
    {
        $this->selectField("descriptionHtml");

        return $this;
    }

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyCollectionEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Information about the collection that's provided through resource feedback.
     */
    public function selectFeedback(?ShopifyCollectionFeedbackArgumentsObject $argsObject = null): ShopifyResourceFeedbackQueryObject
    {
        $object = new ShopifyResourceFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique string that identifies the collection. If a handle isn't specified when a collection is created, it's automatically generated from the collection's original title, and typically includes words from the title separated by hyphens. For example, a collection that was created with the title `Summer Catalog 2022` might have the handle `summer-catalog-2022`.
     *
     * If the title is changed, the handle doesn't automatically change.
     *
     * The handle can be used in themes by the Liquid templating language to refer to the collection, but using the ID is preferred because it never changes.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * Whether the collection includes the specified product.
     */
    public function selectHasProduct(): static
    {
        $this->selectField("hasProduct");

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
     * The image associated with the collection.
     */
    public function selectImage(?ShopifyCollectionImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyCollectionMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyCollectionMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyCollectionMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The products that are included in the collection.
     */
    public function selectProducts(?ShopifyCollectionProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of products in the collection.
     */
    public function selectProductsCount(?ShopifyCollectionProductsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productsCount");
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
     * The channels where the collection is published.
     *
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectPublications(?ShopifyCollectionPublicationsArgumentsObject $argsObject = null): ShopifyCollectionPublicationConnectionQueryObject
    {
        $object = new ShopifyCollectionPublicationConnectionQueryObject("publications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectResourcePublications(?ShopifyCollectionResourcePublicationsArgumentsObject $argsObject = null): ShopifyResourcePublicationConnectionQueryObject
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
    public function selectResourcePublicationsCount(?ShopifyCollectionResourcePublicationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
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
    public function selectResourcePublicationsV2(?ShopifyCollectionResourcePublicationsV2ArgumentsObject $argsObject = null): ShopifyResourcePublicationV2ConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationV2ConnectionQueryObject("resourcePublicationsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Specifies the rules that determine whether a product is included.
     *
     * @deprecated Use `sources` instead.
     */
    public function selectRuleSet(?ShopifyCollectionRuleSetArgumentsObject $argsObject = null): ShopifyCollectionRuleSetQueryObject
    {
        $object = new ShopifyCollectionRuleSetQueryObject("ruleSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * If the default SEO fields for page title and description have been modified, contains the modified information.
     */
    public function selectSeo(?ShopifyCollectionSeoArgumentsObject $argsObject = null): ShopifySEOQueryObject
    {
        $object = new ShopifySEOQueryObject("seo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order in which the products in the collection are displayed by default in the Shopify admin and in sales channels, such as an online store.
     */
    public function selectSortOrder(): static
    {
        $this->selectField("sortOrder");

        return $this;
    }

    /**
     * The sources that provide products for this collection. Each source represents a way products are included in the collection, such as through conditions and rules.
     */
    public function selectSources(?ShopifyCollectionSourcesArgumentsObject $argsObject = null): ShopifyCollectionSourceInterfaceObject
    {
        $object = new ShopifyCollectionSourceInterfaceObject("sources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Storefront GraphQL API ID of the `Collection`.
     *
     * As of the `2022-04` version release, the Storefront GraphQL API will no longer return Base64 encoded IDs to match the behavior of the Admin GraphQL API. Therefore, you can safely use the `id` field's value instead.
     *
     * @deprecated Use `id` instead.
     */
    public function selectStorefrontId(): static
    {
        $this->selectField("storefrontId");

        return $this;
    }

    /**
     * Whether this collection is eligible to be referenced as a sub-collection from
     * another collection's source. Returns one state per role (inclusion / exclusion).
     *
     * Use this to filter ineligible targets up front and surface the reason.
     */
    public function selectSubCollectionEligibility(?ShopifyCollectionSubCollectionEligibilityArgumentsObject $argsObject = null): ShopifyCollectionSubCollectionEligibilityQueryObject
    {
        $object = new ShopifyCollectionSubCollectionEligibilityQueryObject("subCollectionEligibility");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The suffix of the Liquid template being used to show the collection in an online store. For example, if the value is `custom`, then the collection is using the `collection.custom.liquid` template. If the value is `null`, then the collection is using the default `collection.liquid` template.
     */
    public function selectTemplateSuffix(): static
    {
        $this->selectField("templateSuffix");

        return $this;
    }

    /**
     * The name of the collection. It's displayed in the Shopify admin and is typically displayed in sales channels, such as an online store.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyCollectionTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of channels that the resource is not published to.
     *
     * @deprecated Use `unpublishedPublications` instead.
     */
    public function selectUnpublishedChannels(?ShopifyCollectionUnpublishedChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
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
    public function selectUnpublishedPublications(?ShopifyCollectionUnpublishedPublicationsArgumentsObject $argsObject = null): ShopifyPublicationConnectionQueryObject
    {
        $object = new ShopifyPublicationConnectionQueryObject("unpublishedPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the collection was last modified.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
