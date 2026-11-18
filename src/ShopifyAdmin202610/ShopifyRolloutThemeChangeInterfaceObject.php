<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A rollout treatment change that applies to a theme. The concrete type identifies the operation applied to the buyers the treatment serves.
 */
class ShopifyRolloutThemeChangeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "RolloutThemeChange";

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
    public function selectTheme(?ShopifyRolloutThemeChangeThemeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("theme");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onRolloutThemePublishChange(): ShopifyRolloutThemePublishChangeQueryObject
    {
        $object = new ShopifyRolloutThemePublishChangeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
