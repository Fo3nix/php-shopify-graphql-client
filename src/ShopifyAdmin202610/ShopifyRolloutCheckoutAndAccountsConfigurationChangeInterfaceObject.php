<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A rollout treatment change that applies to a checkout and accounts configuration.
 */
class ShopifyRolloutCheckoutAndAccountsConfigurationChangeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "RolloutCheckoutAndAccountsConfigurationChange";

    /**
     * The configuration that the change applies to. Returns `null` when the configuration has been deleted or the caller can't read it.
     */
    public function selectCheckoutAndAccountsConfiguration(?ShopifyRolloutCheckoutAndAccountsConfigurationChangeCheckoutAndAccountsConfigurationArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationQueryObject("checkoutAndAccountsConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally unique ID for this change, not the resource it affects.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onRolloutCheckoutAndAccountsConfigurationPublishChange(): ShopifyRolloutCheckoutAndAccountsConfigurationPublishChangeQueryObject
    {
        $object = new ShopifyRolloutCheckoutAndAccountsConfigurationPublishChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
