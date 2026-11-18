<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DisputeEvidenceUpdateUserError`.
 */
class ShopifyDisputeEvidenceUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Dispute evidence could not be found.
     */
    const DISPUTE_EVIDENCE_NOT_FOUND = "DISPUTE_EVIDENCE_NOT_FOUND";
    /**
     * Evidence already accepted.
     */
    const EVIDENCE_ALREADY_ACCEPTED = "EVIDENCE_ALREADY_ACCEPTED";
    /**
     * Evidence past due date.
     */
    const EVIDENCE_PAST_DUE_DATE = "EVIDENCE_PAST_DUE_DATE";
    /**
     * The provider is reviewing the dispute.
     */
    const EVIDENCE_UNDER_REVIEW = "EVIDENCE_UNDER_REVIEW";
    /**
     * Combined files size is too large.
     */
    const FILES_SIZE_EXCEEDED_LIMIT = "FILES_SIZE_EXCEEDED_LIMIT";
    /**
     * File upload failed. Please try again.
     */
    const FILE_NOT_FOUND = "FILE_NOT_FOUND";
    /**
     * Individual file size is too large.
     */
    const TOO_LARGE = "TOO_LARGE";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
}
