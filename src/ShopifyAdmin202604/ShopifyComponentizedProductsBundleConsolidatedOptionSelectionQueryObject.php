<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An option selection for a bundle consolidated option.
 */
class ShopifyComponentizedProductsBundleConsolidatedOptionSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ComponentizedProductsBundleConsolidatedOptionSelection";

    /**
     * The component values that are included in the consolidated option selection.
     */
    public function selectComponents(?ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponentsArgumentsObject $argsObject = null): ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponentQueryObject
    {
        $object = new ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponentQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The value of the consolidated option on the bundle parent.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
