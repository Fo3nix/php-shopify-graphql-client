<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rollout treatment change that publishes a theme for the buyers the treatment serves, without changing the shop's globally published theme. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutThemePublishChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutThemePublishChange";

    /**
     * A globally unique ID for this change, not the resource it affects.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The theme that the change applies to. Returns `null` when the theme has been deleted or the caller can't read it.
     */
    public function selectTheme(?ShopifyRolloutThemePublishChangeThemeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("theme");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
