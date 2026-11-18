<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The business type of a Shopify Payments account.
 */
class ShopifyShopifyPaymentsBusinessTypeEnumObject extends EnumObject
{
    /**
     * The business type is a corporation.
     */
    const CORPORATION = "CORPORATION";
    /**
     * The business type is a government.
     */
    const GOVERNMENT = "GOVERNMENT";
    /**
     * The business type is an incorporated partnership.
     */
    const INCORPORATED_PARTNERSHIP = "INCORPORATED_PARTNERSHIP";
    /**
     * The business is an individual.
     */
    const INDIVIDUAL = "INDIVIDUAL";
    /**
     * The business type is a Limited Liability Company.
     */
    const LLC = "LLC";
    /**
     * The business type is a non profit.
     */
    const NON_PROFIT = "NON_PROFIT";
    /**
     * The business type is a non profit (incorporated).
     */
    const NON_PROFIT_INCORPORATED = "NON_PROFIT_INCORPORATED";
    /**
     * The business type is a non profit (unincorporated).
     */
    const NON_PROFIT_UNINCORPORATED = "NON_PROFIT_UNINCORPORATED";
    /**
     * The business type is a non profit (unincorporated_association).
     */
    const NON_PROFIT_UNINCORPORATED_ASSOCIATION = "NON_PROFIT_UNINCORPORATED_ASSOCIATION";
    /**
     * The business type is a non profit (registered charity).
     */
    const NON_PROFIT_REGISTERED_CHARITY = "NON_PROFIT_REGISTERED_CHARITY";
    /**
     * The business type is a partnership.
     */
    const PARTNERSHIP = "PARTNERSHIP";
    /**
     * The business type is a private corporation.
     */
    const PRIVATE_CORPORATION = "PRIVATE_CORPORATION";
    /**
     * The business type is a public company.
     */
    const PUBLIC_COMPANY = "PUBLIC_COMPANY";
    /**
     * The business type is a public corporation.
     */
    const PUBLIC_CORPORATION = "PUBLIC_CORPORATION";
    /**
     * The business type is a sole proprietorship.
     */
    const SOLE_PROP = "SOLE_PROP";
    /**
     * The business type is an unincorporated partnership.
     */
    const UNINCORPORATED_PARTNERSHIP = "UNINCORPORATED_PARTNERSHIP";
    /**
     * The business type is a private multi member LLC.
     */
    const PRIVATE_MULTI_MEMBER_LLC = "PRIVATE_MULTI_MEMBER_LLC";
    /**
     * The business type is a private single member LLC.
     */
    const PRIVATE_SINGLE_MEMBER_LLC = "PRIVATE_SINGLE_MEMBER_LLC";
    /**
     * The business type is a private unincorporated association.
     */
    const PRIVATE_UNINCORPORATED_ASSOCIATION = "PRIVATE_UNINCORPORATED_ASSOCIATION";
    /**
     * The business type is a private partnership.
     */
    const PRIVATE_PARTNERSHIP = "PRIVATE_PARTNERSHIP";
    /**
     * The business type is a public partnership.
     */
    const PUBLIC_PARTNERSHIP = "PUBLIC_PARTNERSHIP";
    /**
     * The business type is a free zone establishment.
     */
    const FREE_ZONE_ESTABLISHMENT = "FREE_ZONE_ESTABLISHMENT";
    /**
     * The business type is a free zone LLC.
     */
    const FREE_ZONE_LLC = "FREE_ZONE_LLC";
    /**
     * The business type is a sole establishment.
     */
    const SOLE_ESTABLISHMENT = "SOLE_ESTABLISHMENT";
    /**
     * The business type is not set. This is usually because onboarding is incomplete.
     */
    const NOT_SET = "NOT_SET";
}
