<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MarketingActivityUserError`.
 */
class ShopifyMarketingActivityUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * Marketing activity does not exist.
     */
    const MARKETING_ACTIVITY_DOES_NOT_EXIST = "MARKETING_ACTIVITY_DOES_NOT_EXIST";
    /**
     * A marketing activity with the same remote ID already exists.
     */
    const MARKETING_ACTIVITY_WITH_REMOTE_ID_ALREADY_EXISTS = "MARKETING_ACTIVITY_WITH_REMOTE_ID_ALREADY_EXISTS";
    /**
     * A marketing activity with the same UTM campaign, medium, and source already exists.
     */
    const MARKETING_ACTIVITY_WITH_UTM_CAMPAIGN_ALREADY_EXISTS = "MARKETING_ACTIVITY_WITH_UTM_CAMPAIGN_ALREADY_EXISTS";
    /**
     * A marketing activity with the same URL parameter value already exists.
     */
    const MARKETING_ACTIVITY_WITH_URL_PARAMETER_VALUE_ALREADY_EXISTS = "MARKETING_ACTIVITY_WITH_URL_PARAMETER_VALUE_ALREADY_EXISTS";
    /**
     * Marketing activity is not valid, the associated marketing event does not exist.
     */
    const MARKETING_EVENT_DOES_NOT_EXIST = "MARKETING_EVENT_DOES_NOT_EXIST";
    /**
     * All currency codes provided in the input need to match.
     */
    const CURRENCY_CODE_MISMATCH_INPUT = "CURRENCY_CODE_MISMATCH_INPUT";
    /**
     * The currency codes provided need to match the referenced marketing activity's currency code.
     */
    const MARKETING_ACTIVITY_CURRENCY_CODE_MISMATCH = "MARKETING_ACTIVITY_CURRENCY_CODE_MISMATCH";
    /**
     * The job to delete all external activities failed to enqueue.
     */
    const DELETE_JOB_FAILED_TO_ENQUEUE = "DELETE_JOB_FAILED_TO_ENQUEUE";
    /**
     * Non-hierarchical marketing activities must have UTM parameters or a URL parameter value.
     */
    const NON_HIERARCHIAL_REQUIRES_UTM_URL_PARAMETER = "NON_HIERARCHIAL_REQUIRES_UTM_URL_PARAMETER";
    /**
     * A mutation can not be ran because a job to delete all external activities has been enqueued, which happens either from calling the marketingActivitiesDeleteAllExternal mutation or as a result of an app uninstall.
     */
    const DELETE_JOB_ENQUEUED = "DELETE_JOB_ENQUEUED";
    /**
     * The marketing activity must be an external activity.
     */
    const ACTIVITY_NOT_EXTERNAL = "ACTIVITY_NOT_EXTERNAL";
    /**
     * The channel handle value cannot be modified.
     */
    const IMMUTABLE_CHANNEL_HANDLE = "IMMUTABLE_CHANNEL_HANDLE";
    /**
     * The URL parameter value cannot be modified.
     */
    const IMMUTABLE_URL_PARAMETER = "IMMUTABLE_URL_PARAMETER";
    /**
     * The UTM parameters cannot be modified.
     */
    const IMMUTABLE_UTM_PARAMETERS = "IMMUTABLE_UTM_PARAMETERS";
    /**
     * The parent activity cannot be modified.
     */
    const IMMUTABLE_PARENT_ID = "IMMUTABLE_PARENT_ID";
    /**
     * The hierarchy level cannot be modified.
     */
    const IMMUTABLE_HIERARCHY_LEVEL = "IMMUTABLE_HIERARCHY_LEVEL";
    /**
     * The remote ID does not correspond to an existing activity.
     */
    const INVALID_REMOTE_ID = "INVALID_REMOTE_ID";
    /**
     * The channel handle is not recognized.
     */
    const INVALID_CHANNEL_HANDLE = "INVALID_CHANNEL_HANDLE";
    /**
     * Either the marketing activity ID or remote ID must be provided for the activity to be deleted.
     */
    const INVALID_DELETE_ACTIVITY_EXTERNAL_ARGUMENTS = "INVALID_DELETE_ACTIVITY_EXTERNAL_ARGUMENTS";
    /**
     * Either the channel_handle or delete_engagements_for_all_channels must be provided when deleting a marketing engagement.
     */
    const INVALID_DELETE_ENGAGEMENTS_ARGUMENTS = "INVALID_DELETE_ENGAGEMENTS_ARGUMENTS";
    /**
     * Either the marketing activity ID, remote ID, or UTM must be provided.
     */
    const INVALID_MARKETING_ACTIVITY_EXTERNAL_ARGUMENTS = "INVALID_MARKETING_ACTIVITY_EXTERNAL_ARGUMENTS";
    /**
     * For activity level engagement, either the marketing activity ID or remote ID must be provided. For channel level engagement, the channel handle must be provided.
     */
    const INVALID_MARKETING_ENGAGEMENT_ARGUMENTS = "INVALID_MARKETING_ENGAGEMENT_ARGUMENTS";
    /**
     * No identifier found. For activity level engagement, either the marketing activity ID or remote ID must be provided. For channel level engagement, the channel handle must be provided.
     */
    const INVALID_MARKETING_ENGAGEMENT_ARGUMENT_MISSING = "INVALID_MARKETING_ENGAGEMENT_ARGUMENT_MISSING";
    /**
     * This activity has child activities and thus cannot be deleted. Child activities must be deleted before a parent activity.
     */
    const CANNOT_DELETE_ACTIVITY_WITH_CHILD_EVENTS = "CANNOT_DELETE_ACTIVITY_WITH_CHILD_EVENTS";
    /**
     * The activity's tactic can not be updated to STOREFRONT_APP. This type of tactic can only be specified when creating a new activity.
     */
    const CANNOT_UPDATE_TACTIC_TO_STOREFRONT_APP = "CANNOT_UPDATE_TACTIC_TO_STOREFRONT_APP";
    /**
     * The activity's tactic can not be updated from STOREFRONT_APP.
     */
    const CANNOT_UPDATE_TACTIC_IF_ORIGINALLY_STOREFRONT_APP = "CANNOT_UPDATE_TACTIC_IF_ORIGINALLY_STOREFRONT_APP";
}
