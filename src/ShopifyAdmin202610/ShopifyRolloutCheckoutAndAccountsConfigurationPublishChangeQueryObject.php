<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rollout treatment change that publishes a checkout and accounts configuration for the buyers the treatment serves, without changing the shop's globally published configuration. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutCheckoutAndAccountsConfigurationPublishChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutCheckoutAndAccountsConfigurationPublishChange";

    /**
     * The configuration that the change applies to. Returns `null` when the configuration has been deleted or the caller can't read it.
     */
    public function selectCheckoutAndAccountsConfiguration(?ShopifyRolloutCheckoutAndAccountsConfigurationPublishChangeCheckoutAndAccountsConfigurationArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationQueryObject
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
}
