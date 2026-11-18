<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A return policy profile.
 */
class ShopifyReturnPolicyProfileQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPolicyProfile";

    /**
     * Whether this return policy profile is the default profile for the shop.
     */
    public function selectDefault(): static
    {
        $this->selectField("default");

        return $this;
    }

    /**
     * The rules that apply to buyer-initiated edit and cancellation requests under this policy. When null, edit rules are disabled and customers can request cancellations without restrictions.
     */
    public function selectEditRules(?ShopifyReturnPolicyProfileEditRulesArgumentsObject $argsObject = null): ShopifyReturnPoliciesEditRulesQueryObject
    {
        $object = new ShopifyReturnPoliciesEditRulesQueryObject("editRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The markets that this return policy profile applies to.
     */
    public function selectMarkets(?ShopifyReturnPolicyProfileMarketsArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the return policy profile. This is a merchant-defined value that identifies the profile. The default profile has a null name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The rules that apply to returns under this policy. When null, return rules are disabled and customers can return items without restrictions.
     */
    public function selectReturnRules(?ShopifyReturnPolicyProfileReturnRulesArgumentsObject $argsObject = null): ShopifyReturnPoliciesReturnRulesQueryObject
    {
        $object = new ShopifyReturnPoliciesReturnRulesQueryObject("returnRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time when the return policy profile was last updated. This is an aggregated value based on the profile, its default promise, and all overrides.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
