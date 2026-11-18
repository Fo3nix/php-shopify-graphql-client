<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents a checkout and accounts configuration interface.
 */
class ShopifyCheckoutAndAccountsConfigurationInterfaceInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationInterface";

    /**
     * The branding configuration.
     */
    public function selectBranding(?ShopifyCheckoutAndAccountsConfigurationInterfaceBrandingArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingQueryObject
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

    public function onCheckoutAndAccountsConfiguration(): ShopifyCheckoutAndAccountsConfigurationQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCheckoutAndAccountsConfigurationOverride(): ShopifyCheckoutAndAccountsConfigurationOverrideQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationOverrideQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
