<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An option on the bundle parent product that is consolidated from multiple different components.
 */
class ShopifyComponentizedProductsBundleConsolidatedOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ComponentizedProductsBundleConsolidatedOption";

    /**
     * The name of the consolidated option.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The selections of the consolidated option.
     */
    public function selectSelections(?ShopifyComponentizedProductsBundleConsolidatedOptionSelectionsArgumentsObject $argsObject = null): ShopifyComponentizedProductsBundleConsolidatedOptionSelectionQueryObject
    {
        $object = new ShopifyComponentizedProductsBundleConsolidatedOptionSelectionQueryObject("selections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
