<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A specific value for a [`ProductOption`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption), such as "Red" or "Blue" for a "Color" option. Each value can be assigned to [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects to create different versions of a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product).
 *
 * The value tracks whether any variants currently use it through the [`hasVariants`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue#field-hasVariants) field. Values can include visual representations through swatches that display colors or images. When linked to a [`Metafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield), the [`linkedMetafieldValue`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue#field-linkedMetafieldValue) provides additional structured data for the option value.
 */
class ShopifyProductOptionValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionValue";

    /**
     * Whether the product option value has any linked variants.
     */
    public function selectHasVariants(): static
    {
        $this->selectField("hasVariants");

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
     * The value of the linked metafield.
     */
    public function selectLinkedMetafieldValue(): static
    {
        $this->selectField("linkedMetafieldValue");

        return $this;
    }

    /**
     * The name of the product option value.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The swatch associated with the product option value.
     */
    public function selectSwatch(?ShopifyProductOptionValueSwatchArgumentsObject $argsObject = null): ShopifyProductOptionValueSwatchQueryObject
    {
        $object = new ShopifyProductOptionValueSwatchQueryObject("swatch");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyProductOptionValueTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
