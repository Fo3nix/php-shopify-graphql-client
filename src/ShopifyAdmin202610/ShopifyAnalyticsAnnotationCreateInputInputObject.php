<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating an [analytics annotation](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsAnnotation).
 */
class ShopifyAnalyticsAnnotationCreateInputInputObject extends InputObject
{
    const REQUIRED = ["startedAt", "type", "title"];

    protected $startedAt;
    protected $endedAt;
    protected $type;
    protected $title;
    protected $description;

    /**
     * The date and time when the annotation started.
     */
    public function setStartedAt($startedAt): static
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * The date and time when the annotation ended. Omit for point-in-time annotations. Set to `null` for open-ended annotations.
     */
    public function setEndedAt($endedAt): static
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    /**
     * A supported type for an app-created annotation. Refer to the list of [supported types](https://shopify.dev/docs/api/shopifyql/latest/syntax/annotate#annotation-categories-and-types).
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * The title of the annotation, displayed on the chart marker. The maximum length is 75 characters.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * A plain-text description that provides additional context. The maximum length is 150 characters.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }
}
