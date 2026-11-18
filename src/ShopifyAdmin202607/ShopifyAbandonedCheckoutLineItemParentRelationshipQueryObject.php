<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The line relationship between two line items in an abandoned checkout.
 */
class ShopifyAbandonedCheckoutLineItemParentRelationshipQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemParentRelationship";

    /**
     * The parent line item of the current line item.
     */
    public function selectParent(?ShopifyAbandonedCheckoutLineItemParentRelationshipParentArgumentsObject $argsObject = null): ShopifyAbandonedCheckoutLineItemQueryObject
    {
        $object = new ShopifyAbandonedCheckoutLineItemQueryObject("parent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
