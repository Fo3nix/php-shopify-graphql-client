<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of resources that are market localizable.
 */
class ShopifyMarketLocalizableResourceTypeEnumObject extends EnumObject
{
    /**
     * A metafield. Market localizable fields: `value`.
     */
    const METAFIELD = "METAFIELD";
    /**
     * A Metaobject. Market Localizable fields are determined by the Metaobject type.
     */
    const METAOBJECT = "METAOBJECT";
}
