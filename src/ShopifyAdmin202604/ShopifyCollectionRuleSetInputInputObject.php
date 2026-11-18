<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a rule set of the collection.
 */
class ShopifyCollectionRuleSetInputInputObject extends InputObject
{
    const REQUIRED = ["appliedDisjunctively"];

    protected $appliedDisjunctively;
    protected $rules;

    /**
     * Whether products must match any or all of the rules to be included in the collection.
     * If true, then products must match at least one of the rules to be included in the collection.
     * If false, then products must match all of the rules to be included in the collection.
     */
    public function setAppliedDisjunctively($appliedDisjunctively): static
    {
        $this->appliedDisjunctively = $appliedDisjunctively;

        return $this;
    }

    /**
     * The rules used to assign products to the collection.
     */
    public function setRules(array $rules): static
    {
        $this->rules = $rules;

        return $this;
    }
}
