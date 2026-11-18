<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A checkout and account configuration override modifies a parent configuration for specific markets.
 */
class ShopifyCheckoutAndAccountsConfigurationOverrideQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationOverride";

    /**
     * The branding configuration.
     */
    public function selectBranding(?ShopifyCheckoutAndAccountsConfigurationOverrideBrandingArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingQueryObject("branding");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the configuration was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The date and time when the configuration was last edited.
     */
    public function selectEditedAt(): static
    {
        $this->selectField("editedAt");

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
     * The configuration name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The date and time when the configuration was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
