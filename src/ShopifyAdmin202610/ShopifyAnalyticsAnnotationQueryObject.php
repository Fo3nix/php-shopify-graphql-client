<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An annotation for a notable event on a shop's analytics timeline.
 */
class ShopifyAnalyticsAnnotationQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsAnnotation";

    /**
     * The date and time when the annotation was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The app that created the annotation. Returns `null` if the annotation wasn't created by an app.
     */
    public function selectCreatedByApp(?ShopifyAnalyticsAnnotationCreatedByAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("createdByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A plain-text description that provides additional context about the annotation. The maximum length is 150 characters for app-created annotations.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The date and time when the annotation ended. Returns `null` if the annotation is open-ended.
     */
    public function selectEndedAt(): static
    {
        $this->selectField("endedAt");

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
     * Identifies who or what created this annotation.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
    }

    /**
     * The date and time when the annotation started.
     */
    public function selectStartedAt(): static
    {
        $this->selectField("startedAt");

        return $this;
    }

    /**
     * The title of the annotation. The maximum length is 75 characters for app-created annotations.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The type of event represented by the annotation. Refer to the list of [supported types](https://shopify.dev/docs/api/shopifyql/latest/syntax/annotate#annotation-categories-and-types).
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The date and time when the annotation was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
