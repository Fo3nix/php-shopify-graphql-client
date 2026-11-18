<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A checkout and account configuration packages branding settings, UI extensions, and overrides for a shop's checkout.
 */
class ShopifyCheckoutAndAccountsConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfiguration";

    /**
     * The branding configuration.
     */
    public function selectBranding(?ShopifyCheckoutAndAccountsConfigurationBrandingArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingQueryObject
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
     * Whether the configuration is published or not.
     */
    public function selectIsPublished(): static
    {
        $this->selectField("isPublished");

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
     * The list of overrides for the configuration.
     */
    public function selectOverrides(?ShopifyCheckoutAndAccountsConfigurationOverridesArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationOverrideQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationOverrideQueryObject("overrides");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
