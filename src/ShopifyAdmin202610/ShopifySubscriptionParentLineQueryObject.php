<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Subscription Parent Line.
 */
class ShopifySubscriptionParentLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionParentLine";

    /**
     * The app that bundled this parent line.
     */
    public function selectBundledBy(?ShopifySubscriptionParentLineBundledByArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("bundledBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The direct component lines of the bundle parent line.
     */
    public function selectComponents(?ShopifySubscriptionParentLineComponentsArgumentsObject $argsObject = null): ShopifySubscriptionLineQueryObject
    {
        $object = new ShopifySubscriptionLineQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of custom attributes associated to the parent line item.
     */
    public function selectCustomAttributes(?ShopifySubscriptionParentLineCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Presentment title of the item associated with the subscription parent line.
     */
    public function selectPresentmentTitle(): static
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    /**
     * The product ID associated with the subscription parent line.
     */
    public function selectProductId(): static
    {
        $this->selectField("productId");

        return $this;
    }

    /**
     * The quantity of the unit selected for the subscription parent line.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The source type of the subscription parent line.
     */
    public function selectSourceType(): static
    {
        $this->selectField("sourceType");

        return $this;
    }

    /**
     * Product title of the item associated with the subscription parent line.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The product variant ID associated with the subscription parent line.
     */
    public function selectVariantId(): static
    {
        $this->selectField("variantId");

        return $this;
    }
}
