<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to update a validation.
 */
class ShopifyValidationUpdateInputInputObject extends InputObject
{
    protected $enable;
    protected $blockOnFailure;
    protected $metafields;
    protected $title;

    /**
     * Whether the validation should be live on the merchant checkout.
     */
    public function setEnable($enable): static
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Whether the validation should block on failures other than expected violations.
     */
    public function setBlockOnFailure($blockOnFailure): static
    {
        $this->blockOnFailure = $blockOnFailure;

        return $this;
    }

    /**
     * Additional metafields to associate to the validation.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The title of the validation.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}
