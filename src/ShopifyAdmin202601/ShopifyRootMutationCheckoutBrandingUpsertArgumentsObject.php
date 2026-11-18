<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCheckoutBrandingUpsertArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["checkoutProfileId"];

    protected $checkoutProfileId;
    protected $checkoutBrandingInput;

    /**
     * A globally-unique identifier.
     */
    public function setCheckoutProfileId($checkoutProfileId): static
    {
        $this->checkoutProfileId = $checkoutProfileId;

        return $this;
    }

    /**
     * The input fields to use to upsert the checkout branding settings (pass null to reset them to default).
     */
    public function setCheckoutBrandingInput(ShopifyCheckoutBrandingInputInputObject $shopifyCheckoutBrandingInputInputObject): static
    {
        $this->checkoutBrandingInput = $shopifyCheckoutBrandingInputInputObject;

        return $this;
    }
}
