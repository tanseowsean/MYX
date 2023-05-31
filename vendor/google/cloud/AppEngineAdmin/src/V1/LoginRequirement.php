<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Cloud\AppEngine\V1;

use UnexpectedValueException;

/**
 * Methods to restrict access to a URL based on login status.
 *
 * Protobuf type <code>google.appengine.v1.LoginRequirement</code>
 */
class LoginRequirement
{
    /**
     * Not specified. `LOGIN_OPTIONAL` is assumed.
     *
     * Generated from protobuf enum <code>LOGIN_UNSPECIFIED = 0;</code>
     */
    const LOGIN_UNSPECIFIED = 0;
    /**
     * Does not require that the user is signed in.
     *
     * Generated from protobuf enum <code>LOGIN_OPTIONAL = 1;</code>
     */
    const LOGIN_OPTIONAL = 1;
    /**
     * If the user is not signed in, the `auth_fail_action` is taken.
     * In addition, if the user is not an administrator for the
     * application, they are given an error message regardless of
     * `auth_fail_action`. If the user is an administrator, the handler
     * proceeds.
     *
     * Generated from protobuf enum <code>LOGIN_ADMIN = 2;</code>
     */
    const LOGIN_ADMIN = 2;
    /**
     * If the user has signed in, the handler proceeds normally. Otherwise, the
     * auth_fail_action is taken.
     *
     * Generated from protobuf enum <code>LOGIN_REQUIRED = 3;</code>
     */
    const LOGIN_REQUIRED = 3;

    private static $valueToName = [
        self::LOGIN_UNSPECIFIED => 'LOGIN_UNSPECIFIED',
        self::LOGIN_OPTIONAL => 'LOGIN_OPTIONAL',
        self::LOGIN_ADMIN => 'LOGIN_ADMIN',
        self::LOGIN_REQUIRED => 'LOGIN_REQUIRED',
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
