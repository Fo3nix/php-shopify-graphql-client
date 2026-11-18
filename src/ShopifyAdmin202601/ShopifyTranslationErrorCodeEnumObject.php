<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `TranslationUserError`.
 */
class ShopifyTranslationErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Resource does not exist.
     */
    const RESOURCE_NOT_FOUND = "RESOURCE_NOT_FOUND";
    /**
     * Resource is not translatable.
     */
    const RESOURCE_NOT_TRANSLATABLE = "RESOURCE_NOT_TRANSLATABLE";
    /**
     * Too many translation keys for the resource.
     */
    const TOO_MANY_KEYS_FOR_RESOURCE = "TOO_MANY_KEYS_FOR_RESOURCE";
    /**
     * Translation key is invalid.
     */
    const INVALID_KEY_FOR_MODEL = "INVALID_KEY_FOR_MODEL";
    /**
     * Translation value is invalid.
     */
    const FAILS_RESOURCE_VALIDATION = "FAILS_RESOURCE_VALIDATION";
    /**
     * Translatable content is invalid.
     */
    const INVALID_TRANSLATABLE_CONTENT = "INVALID_TRANSLATABLE_CONTENT";
    /**
     * Market localizable content is invalid.
     */
    const INVALID_MARKET_LOCALIZABLE_CONTENT = "INVALID_MARKET_LOCALIZABLE_CONTENT";
    /**
     * Locale is invalid for the shop.
     */
    const INVALID_LOCALE_FOR_SHOP = "INVALID_LOCALE_FOR_SHOP";
    /**
     * Locale language code is invalid.
     */
    const INVALID_CODE = "INVALID_CODE";
    /**
     * Locale code format is invalid.
     */
    const INVALID_FORMAT = "INVALID_FORMAT";
    /**
     * The shop isn't allowed to operate on market custom content.
     */
    const MARKET_CUSTOM_CONTENT_NOT_ALLOWED = "MARKET_CUSTOM_CONTENT_NOT_ALLOWED";
    /**
     * The market corresponding to the `marketId` argument doesn't exist.
     */
    const MARKET_DOES_NOT_EXIST = "MARKET_DOES_NOT_EXIST";
    /**
     * The market override locale creation failed.
     */
    const MARKET_LOCALE_CREATION_FAILED = "MARKET_LOCALE_CREATION_FAILED";
    /**
     * The specified resource can't be customized for a market.
     */
    const RESOURCE_NOT_MARKET_CUSTOMIZABLE = "RESOURCE_NOT_MARKET_CUSTOMIZABLE";
    /**
     * The handle is already taken for this resource.
     */
    const INVALID_VALUE_FOR_HANDLE_TRANSLATION = "INVALID_VALUE_FOR_HANDLE_TRANSLATION";
}
