<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A change that a rollout treatment makes while it's served. Changes describe what the treatment does, not the current state of the affected resource. Use inline fragments on the concrete types to read type-specific fields.
 */
class ShopifyRolloutChangeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "RolloutChange";

    /**
     * A globally unique ID for this change, not the resource it affects.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onRolloutCatalogActivateChange(): ShopifyRolloutCatalogActivateChangeQueryObject
    {
        $object = new ShopifyRolloutCatalogActivateChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRolloutCatalogDraftChange(): ShopifyRolloutCatalogDraftChangeQueryObject
    {
        $object = new ShopifyRolloutCatalogDraftChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRolloutCheckoutAndAccountsConfigurationPublishChange(): ShopifyRolloutCheckoutAndAccountsConfigurationPublishChangeQueryObject
    {
        $object = new ShopifyRolloutCheckoutAndAccountsConfigurationPublishChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRolloutDiscountActivateChange(): ShopifyRolloutDiscountActivateChangeQueryObject
    {
        $object = new ShopifyRolloutDiscountActivateChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRolloutDiscountExpireChange(): ShopifyRolloutDiscountExpireChangeQueryObject
    {
        $object = new ShopifyRolloutDiscountExpireChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRolloutThemePublishChange(): ShopifyRolloutThemePublishChangeQueryObject
    {
        $object = new ShopifyRolloutThemePublishChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
