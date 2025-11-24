<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardConfiguration";

    public function selectIssueLimit(ShopifyGiftCardConfigurationIssueLimitArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("issueLimit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPurchaseLimit(ShopifyGiftCardConfigurationPurchaseLimitArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("purchaseLimit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
