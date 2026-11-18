<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping line removed during an order edit.
 */
class ShopifyOrderStagedChangeRemoveShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeRemoveShippingLine";

    /**
     * The removed shipping line.
     */
    public function selectShippingLine(?ShopifyOrderStagedChangeRemoveShippingLineShippingLineArgumentsObject $argsObject = null): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
