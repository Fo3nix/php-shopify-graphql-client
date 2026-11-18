<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MenuDeleteUserError`.
 */
class ShopifyMenuDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Menu does not exist.
     */
    const MENU_DOES_NOT_EXIST = "MENU_DOES_NOT_EXIST";
    /**
     * Default menu cannot be deleted.
     */
    const UNABLE_TO_DELETE_DEFAULT_MENU = "UNABLE_TO_DELETE_DEFAULT_MENU";
}
