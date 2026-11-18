<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A product attribute that customers can choose from, such as "Size", "Color", or "Material". [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects use options to define the different variations available for purchase. Each option has a name and a set of possible values that combine to create [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects.
 *
 * The option includes its display position, associated values, and optional [`LinkedMetafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LinkedMetafield) for structured data. Options support translations for international selling and track which [`ProductOptionValue`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue) objects that variants actively use versus unused values that exist without associated variants.
 */
class ShopifyProductOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOption";

    /**
     * The date and time when the product option was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

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
     * The metafield identifier linked to this option.
     */
    public function selectLinkedMetafield(?ShopifyProductOptionLinkedMetafieldArgumentsObject $argsObject = null): ShopifyLinkedMetafieldQueryObject
    {
        $object = new ShopifyLinkedMetafieldQueryObject("linkedMetafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product option’s name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * Similar to values, option_values returns all the corresponding option value objects to the product option, including values not assigned to any variants.
     */
    public function selectOptionValues(?ShopifyProductOptionOptionValuesArgumentsObject $argsObject = null): ShopifyProductOptionValueQueryObject
    {
        $object = new ShopifyProductOptionValueQueryObject("optionValues");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product option's position.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyProductOptionTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The corresponding value to the product option name.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
