<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationConsentPolicyUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["consentPolicies"];

    protected $consentPolicies;

    /**
     * The consent policies to update or create. If the country and region matches an existing consent policy, then the consent policy is updated. Otherwise, a new consent policy is created.
     */
    public function setConsentPolicies(array $consentPolicies): static
    {
        $this->consentPolicies = $consentPolicies;

        return $this;
    }
}
