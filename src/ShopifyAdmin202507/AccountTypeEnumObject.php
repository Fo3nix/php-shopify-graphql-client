<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AccountTypeEnumObject extends EnumObject
{
    const REGULAR = "REGULAR";
    const RESTRICTED = "RESTRICTED";
    const INVITED = "INVITED";
    const REQUESTED = "REQUESTED";
    const COLLABORATOR = "COLLABORATOR";
    const COLLABORATOR_TEAM_MEMBER = "COLLABORATOR_TEAM_MEMBER";
    const SAML = "SAML";
    const INVITED_STORE_OWNER = "INVITED_STORE_OWNER";
}
