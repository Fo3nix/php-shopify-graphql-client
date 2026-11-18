<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The role of the theme.
 */
class ShopifyThemeRoleEnumObject extends EnumObject
{
    /**
     * The currently published theme. There can only be one main theme at any time.
     */
    const MAIN = "MAIN";
    /**
     * The theme is currently not published. It can be transitioned to the main role if it is published by the merchant.
     */
    const UNPUBLISHED = "UNPUBLISHED";
    /**
     * The theme is installed as a trial from the Shopify Theme Store. It can be customized using the theme editor, but access to the code editor and the ability to publish the theme are restricted until it is purchased.
     */
    const DEMO = "DEMO";
    /**
     * The theme is automatically created by the CLI for previewing purposes when in a development session.
     */
    const DEVELOPMENT = "DEVELOPMENT";
    /**
     * The theme is archived if a merchant changes their plan and exceeds the maximum number of themes allowed. Archived themes can be downloaded by merchant, but can not be customized or published until the plan is upgraded.
     */
    const ARCHIVED = "ARCHIVED";
    /**
     * The theme is locked if it is identified as unlicensed. Customization and publishing are restricted until the merchant resolves the licensing issue.
     */
    const LOCKED = "LOCKED";
}
