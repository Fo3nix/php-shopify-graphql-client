<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A rollout treatment change that applies to a catalog. The concrete type identifies the operation applied to the buyers the treatment serves.
 */
class ShopifyRolloutCatalogChangeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "RolloutCatalogChange";

    /**
     * The catalog that the change applies to. Returns `null` when the catalog has been deleted or the caller can't read it.
     */
    public function selectCatalog(?ShopifyRolloutCatalogChangeCatalogArgumentsObject $argsObject = null): ShopifyCatalogInterfaceObject
    {
        $object = new ShopifyCatalogInterfaceObject("catalog");
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
}
