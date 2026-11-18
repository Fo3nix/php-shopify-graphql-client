<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rollout treatment change that sets a catalog to draft for the buyers the treatment serves, without changing the catalog's native status. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutCatalogDraftChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutCatalogDraftChange";

    /**
     * The catalog that the change applies to. Returns `null` when the catalog has been deleted or the caller can't read it.
     */
    public function selectCatalog(?ShopifyRolloutCatalogDraftChangeCatalogArgumentsObject $argsObject = null): ShopifyCatalogInterfaceObject
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
}
