<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class GiftCardConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardConfiguration";

    public function selectIssueLimit(GiftCardConfigurationIssueLimitArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("issueLimit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPurchaseLimit(GiftCardConfigurationPurchaseLimitArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("purchaseLimit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
