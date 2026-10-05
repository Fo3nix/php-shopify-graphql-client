<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonedCheckoutLineItemParentRelationshipQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemParentRelationship";

    public function selectParent(ShopifyAbandonedCheckoutLineItemParentRelationshipParentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutLineItemQueryObject("parent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
