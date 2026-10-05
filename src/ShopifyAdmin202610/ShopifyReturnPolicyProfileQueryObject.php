<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnPolicyProfileQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPolicyProfile";

    public function selectDefault()
    {
        $this->selectField("default");

        return $this;
    }

    public function selectEditRules(ShopifyReturnPolicyProfileEditRulesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnPoliciesEditRulesQueryObject("editRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMarkets(ShopifyReturnPolicyProfileMarketsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectReturnRules(ShopifyReturnPolicyProfileReturnRulesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnPoliciesReturnRulesQueryObject("returnRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
