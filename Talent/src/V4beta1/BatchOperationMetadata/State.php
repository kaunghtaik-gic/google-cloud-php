<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/batch.proto

namespace Google\Cloud\Talent\V4beta1\BatchOperationMetadata;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.talent.v4beta1.BatchOperationMetadata.State</code>
 */
class State
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The batch operation is being prepared for processing.
     *
     * Generated from protobuf enum <code>INITIALIZING = 1;</code>
     */
    const INITIALIZING = 1;
    /**
     * The batch operation is actively being processed.
     *
     * Generated from protobuf enum <code>PROCESSING = 2;</code>
     */
    const PROCESSING = 2;
    /**
     * The batch operation is processed, and at least one item has been
     * successfully processed.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 3;</code>
     */
    const SUCCEEDED = 3;
    /**
     * The batch operation is done and no item has been successfully processed.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * The batch operation is in the process of cancelling after
     * [google.longrunning.Operations.CancelOperation][google.longrunning.Operations.CancelOperation]
     * is called.
     *
     * Generated from protobuf enum <code>CANCELLING = 5;</code>
     */
    const CANCELLING = 5;
    /**
     * The batch operation is done after
     * [google.longrunning.Operations.CancelOperation][google.longrunning.Operations.CancelOperation]
     * is called. Any items processed before cancelling are returned in the
     * response.
     *
     * Generated from protobuf enum <code>CANCELLED = 6;</code>
     */
    const CANCELLED = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::INITIALIZING => 'INITIALIZING',
        self::PROCESSING => 'PROCESSING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::CANCELLING => 'CANCELLING',
        self::CANCELLED => 'CANCELLED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Talent\V4beta1\BatchOperationMetadata_State::class);

