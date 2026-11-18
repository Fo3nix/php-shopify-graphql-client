<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The reason for the dispute provided by the cardholder's bank.
 */
class ShopifyShopifyPaymentsDisputeReasonEnumObject extends EnumObject
{
    /**
     * The cardholder claims that they didn’t authorize the payment.
     */
    const FRAUDULENT = "FRAUDULENT";
    /**
     * The dispute is uncategorized, so you should contact the customer for additional details to find out why the payment was disputed.
     */
    const GENERAL = "GENERAL";
    /**
     * The customer doesn’t recognize the payment appearing on their card statement.
     */
    const UNRECOGNIZED = "UNRECOGNIZED";
    /**
     * The customer claims they were charged multiple times for the same product or service.
     */
    const DUPLICATE = "DUPLICATE";
    /**
     * The customer claims that you continued to charge them after a subscription was canceled.
     */
    const SUBSCRIPTION_CANCELLED = "SUBSCRIPTION_CANCELLED";
    /**
     * The product or service was received but was defective, damaged, or not as described.
     */
    const PRODUCT_UNACCEPTABLE = "PRODUCT_UNACCEPTABLE";
    /**
     * The customer claims they did not receive the products or services purchased.
     */
    const PRODUCT_NOT_RECEIVED = "PRODUCT_NOT_RECEIVED";
    /**
     * The customer claims that the purchased product was returned or the transaction was otherwise canceled, but you haven't yet provided a refund or credit.
     */
    const CREDIT_NOT_PROCESSED = "CREDIT_NOT_PROCESSED";
    /**
     * The customer account associated with the purchase is incorrect.
     */
    const INCORRECT_ACCOUNT_DETAILS = "INCORRECT_ACCOUNT_DETAILS";
    /**
     * The customer's bank account has insufficient funds.
     */
    const INSUFFICIENT_FUNDS = "INSUFFICIENT_FUNDS";
    /**
     * The customer's bank can't process the charge.
     */
    const BANK_CANNOT_PROCESS = "BANK_CANNOT_PROCESS";
    /**
     * The customer's bank can't proceed with the debit since it hasn't been authorized.
     */
    const DEBIT_NOT_AUTHORIZED = "DEBIT_NOT_AUTHORIZED";
    /**
     * The customer initiated the dispute. Contact the customer for additional details on why the payment was disputed.
     */
    const CUSTOMER_INITIATED = "CUSTOMER_INITIATED";
    /**
     * The card issuer believes the disputed transaction doesn't conform to the network rules. These disputes occur when transactions don't meet card network requirements and may incur additional network fees if escalated for resolution.
     */
    const NONCOMPLIANT = "NONCOMPLIANT";
}
