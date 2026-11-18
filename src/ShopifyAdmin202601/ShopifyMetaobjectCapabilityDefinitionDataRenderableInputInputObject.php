<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields of the renderable capability for SEO aliases.
 */
class ShopifyMetaobjectCapabilityDefinitionDataRenderableInputInputObject extends InputObject
{
    protected $metaTitleKey;
    protected $metaDescriptionKey;

    /**
     * The metaobject field used as an alias for the SEO page title.
     */
    public function setMetaTitleKey($metaTitleKey): static
    {
        $this->metaTitleKey = $metaTitleKey;

        return $this;
    }

    /**
     * The metaobject field used as an alias for the SEO page description.
     */
    public function setMetaDescriptionKey($metaDescriptionKey): static
    {
        $this->metaDescriptionKey = $metaDescriptionKey;

        return $this;
    }
}
