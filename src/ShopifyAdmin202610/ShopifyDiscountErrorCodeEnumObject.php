<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DiscountUserError`.
 */
class ShopifyDiscountErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value should be equal to the value allowed.
     */
    const EQUAL_TO = "EQUAL_TO";
    /**
     * The input value should be greater than the minimum allowed value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The input value should be greater than or equal to the minimum value allowed.
     */
    const GREATER_THAN_OR_EQUAL_TO = "GREATER_THAN_OR_EQUAL_TO";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value should be less than or equal to the maximum value allowed.
     */
    const LESS_THAN_OR_EQUAL_TO = "LESS_THAN_OR_EQUAL_TO";
    /**
     * The input value should be less than the maximum value allowed.
     */
    const LESS_THAN = "LESS_THAN";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Too many arguments provided.
     */
    const TOO_MANY_ARGUMENTS = "TOO_MANY_ARGUMENTS";
    /**
     * Missing a required argument.
     */
    const MISSING_ARGUMENT = "MISSING_ARGUMENT";
    /**
     * The active period overlaps with other automatic discounts. At any given time, only 25 automatic discounts can be active.
     */
    const ACTIVE_PERIOD_OVERLAP = "ACTIVE_PERIOD_OVERLAP";
    /**
     * The end date should be after the start date.
     */
    const END_DATE_BEFORE_START_DATE = "END_DATE_BEFORE_START_DATE";
    /**
     * The value exceeded the maximum allowed value.
     */
    const EXCEEDED_MAX = "EXCEEDED_MAX";
    /**
     * Specify a minimum subtotal or a quantity, but not both.
     */
    const MINIMUM_SUBTOTAL_AND_QUANTITY_RANGE_BOTH_PRESENT = "MINIMUM_SUBTOTAL_AND_QUANTITY_RANGE_BOTH_PRESENT";
    /**
     * The value is outside of the allowed range.
     */
    const VALUE_OUTSIDE_RANGE = "VALUE_OUTSIDE_RANGE";
    /**
     * The attribute selection contains conflicting settings.
     */
    const CONFLICT = "CONFLICT";
    /**
     * The value is already present through another selection.
     */
    const IMPLICIT_DUPLICATE = "IMPLICIT_DUPLICATE";
    /**
     * The input value is already present.
     */
    const DUPLICATE = "DUPLICATE";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The `combinesWith` settings are invalid for the discount class.
     */
    const INVALID_COMBINES_WITH_FOR_DISCOUNT_CLASS = "INVALID_COMBINES_WITH_FOR_DISCOUNT_CLASS";
    /**
     * The discountClass is invalid for the price rule.
     */
    const INVALID_DISCOUNT_CLASS_FOR_PRICE_RULE = "INVALID_DISCOUNT_CLASS_FOR_PRICE_RULE";
    /**
     * Discounts and condition types are not compatible with each other.
     */
    const DISCOUNT_NOT_COMPATIBLE_WITH_CONDITION_TYPES = "DISCOUNT_NOT_COMPATIBLE_WITH_CONDITION_TYPES";
    /**
     * The active period overlaps with too many other app-provided discounts. There's a limit on the number of app discounts that can be active at any given time.
     */
    const MAX_APP_DISCOUNTS = "MAX_APP_DISCOUNTS";
    /**
     * A discount cannot have both appliesOnOneTimePurchase and appliesOnSubscription set to false.
     */
    const APPLIES_ON_NOTHING = "APPLIES_ON_NOTHING";
    /**
     * Recurring cycle limit must be a valid integer greater than or equal to 0.
     */
    const RECURRING_CYCLE_LIMIT_NOT_A_VALID_INTEGER = "RECURRING_CYCLE_LIMIT_NOT_A_VALID_INTEGER";
    /**
     * Recurring cycle limit must be 1 when discount does not apply to subscription items.
     */
    const MULTIPLE_RECURRING_CYCLE_LIMIT_FOR_NON_SUBSCRIPTION_ITEMS = "MULTIPLE_RECURRING_CYCLE_LIMIT_FOR_NON_SUBSCRIPTION_ITEMS";
    /**
     * Either function ID or function handle must be provided.
     */
    const MISSING_FUNCTION_IDENTIFIER = "MISSING_FUNCTION_IDENTIFIER";
    /**
     * Only one of function ID or function handle is allowed.
     */
    const MULTIPLE_FUNCTION_IDENTIFIERS = "MULTIPLE_FUNCTION_IDENTIFIERS";
    /**
     * The tag title exceeds the maximum length of 255 characters.
     */
    const INVALID_TAG_LENGTH = "INVALID_TAG_LENGTH";
    /**
     * The number of tags exceeds the maximum of 5.
     */
    const TOO_MANY_TAGS = "TOO_MANY_TAGS";
    /**
     * The number of tags in `productDiscountsWithTagsOnSameCartLine` exceeds the maximum of 10.
     */
    const TOO_MANY_PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE = "TOO_MANY_PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE";
    /**
     * The `productDiscountsWithTagsOnSameCartLine` field is only valid for discounts with the PRODUCT discount class.
     */
    const INVALID_PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE_FOR_DISCOUNT_CLASS = "INVALID_PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE_FOR_DISCOUNT_CLASS";
    /**
     * The `productDiscountsWithTagsOnSameCartLine` field can only be specified when `productDiscounts` is true.
     */
    const INVALID_PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE_WITHOUT_PRODUCT_DISCOUNTS = "INVALID_PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE_WITHOUT_PRODUCT_DISCOUNTS";
    /**
     * The `productDiscounts` field can't be set to false when `productDiscountsWithTagsOnSameCartLine` tags exist on the discount.
     */
    const INVALID_PRODUCT_DISCOUNTS_FALSE_WITH_EXISTING_TAGS_ON_SAME_CART_LINE = "INVALID_PRODUCT_DISCOUNTS_FALSE_WITH_EXISTING_TAGS_ON_SAME_CART_LINE";
    /**
     * The shop's plan does not allow setting `productDiscountsWithTagsOnSameCartLine`.
     */
    const PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE_NOT_ENTITLED = "PRODUCT_DISCOUNTS_WITH_TAGS_ON_SAME_CART_LINE_NOT_ENTITLED";
}
