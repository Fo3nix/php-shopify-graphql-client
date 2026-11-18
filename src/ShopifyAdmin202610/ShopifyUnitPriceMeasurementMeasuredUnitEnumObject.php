<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid units of measurement for a unit price measurement.
 */
class ShopifyUnitPriceMeasurementMeasuredUnitEnumObject extends EnumObject
{
    /**
     * 1000 milliliters equals 1 liter.
     */
    const ML = "ML";
    /**
     * 100 centiliters equals 1 liter.
     */
    const CL = "CL";
    /**
     * Metric system unit of volume.
     */
    const L = "L";
    /**
     * 1 cubic meter equals 1000 liters.
     */
    const M3 = "M3";
    /**
     * Imperial system unit of volume (U.S. customary unit).
     */
    const FLOZ = "FLOZ";
    /**
     * 1 pint equals 16 fluid ounces (U.S. customary unit).
     */
    const PT = "PT";
    /**
     * 1 quart equals 32 fluid ounces (U.S. customary unit).
     */
    const QT = "QT";
    /**
     * 1 gallon equals 128 fluid ounces (U.S. customary unit).
     */
    const GAL = "GAL";
    /**
     * 1000 milligrams equals 1 gram.
     */
    const MG = "MG";
    /**
     * Metric system unit of weight.
     */
    const G = "G";
    /**
     * 1 kilogram equals 1000 grams.
     */
    const KG = "KG";
    /**
     * 16 ounces equals 1 pound.
     */
    const OZ = "OZ";
    /**
     * Imperial system unit of weight.
     */
    const LB = "LB";
    /**
     * 1000 millimeters equals 1 meter.
     */
    const MM = "MM";
    /**
     * 100 centimeters equals 1 meter.
     */
    const CM = "CM";
    /**
     * Metric system unit of length.
     */
    const M = "M";
    /**
     * Imperial system unit of length.
     */
    const IN = "IN";
    /**
     * 1 foot equals 12 inches.
     */
    const FT = "FT";
    /**
     * 1 yard equals 36 inches.
     */
    const YD = "YD";
    /**
     * Metric system unit of area.
     */
    const M2 = "M2";
    /**
     * Imperial system unit of area.
     */
    const FT2 = "FT2";
    /**
     * 1 item, a unit of count.
     */
    const ITEM = "ITEM";
    /**
     * The unit of measurement is unknown. Upgrade to the latest version of the API to resolve this unit.
     */
    const UNKNOWN = "UNKNOWN";
}
