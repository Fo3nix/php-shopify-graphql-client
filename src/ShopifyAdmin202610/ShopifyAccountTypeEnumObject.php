<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible account types that a staff member can have.
 */
class ShopifyAccountTypeEnumObject extends EnumObject
{
    /**
     * The account can access the Shopify admin.
     */
    const REGULAR = "REGULAR";
    /**
     * The account cannot access the Shopify admin.
     */
    const RESTRICTED = "RESTRICTED";
    /**
     * The user has not yet accepted the invitation to create an account.
     */
    const INVITED = "INVITED";
    /**
     * The admin has not yet accepted the request to create a collaborator account.
     */
    const REQUESTED = "REQUESTED";
    /**
     * The account of a partner who collaborates with the merchant.
     */
    const COLLABORATOR = "COLLABORATOR";
    /**
     * The account of a partner collaborator team member.
     */
    const COLLABORATOR_TEAM_MEMBER = "COLLABORATOR_TEAM_MEMBER";
    /**
     * The account can be signed into via a SAML provider.
     */
    const SAML = "SAML";
    /**
     * The user has not yet accepted the invitation to become the store owner.
     */
    const INVITED_STORE_OWNER = "INVITED_STORE_OWNER";
}
