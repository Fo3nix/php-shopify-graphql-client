<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shop's privacy policy settings.
 */
class ShopifyPrivacyPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "PrivacyPolicy";

    /**
     * Whether the policy is auto managed.
     */
    public function selectAutoManaged(): static
    {
        $this->selectField("autoManaged");

        return $this;
    }

    /**
     * Policy template supported locales.
     */
    public function selectSupportedLocales(): static
    {
        $this->selectField("supportedLocales");

        return $this;
    }
}
