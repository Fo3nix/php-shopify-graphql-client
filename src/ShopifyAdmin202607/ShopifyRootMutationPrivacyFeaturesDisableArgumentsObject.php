<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationPrivacyFeaturesDisableArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["featuresToDisable"];

    protected $featuresToDisable;

    /**
     * The list of privacy features to disable.
     */
    public function setFeaturesToDisable(array $featuresToDisable): static
    {
        $this->featuresToDisable = array_map(function ($value) {
            return new RawObject($value);
        }, $featuresToDisable);

        return $this;
    }
}
