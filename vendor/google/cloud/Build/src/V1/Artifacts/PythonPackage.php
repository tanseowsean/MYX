<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\Artifacts;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Python package to upload to Artifact Registry upon successful completion
 * of all build steps. A package can encapsulate multiple objects to be
 * uploaded to a single repository.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.Artifacts.PythonPackage</code>
 */
class PythonPackage extends \Google\Protobuf\Internal\Message
{
    /**
     * Artifact Registry repository, in the form
     * "https://$REGION-python.pkg.dev/$PROJECT/$REPOSITORY"
     * Files in the workspace matching any path pattern will be uploaded to
     * Artifact Registry with this location as a prefix.
     *
     * Generated from protobuf field <code>string repository = 1;</code>
     */
    private $repository = '';
    /**
     * Path globs used to match files in the build's workspace. For Python/
     * Twine, this is usually `dist/&#42;`, and sometimes additionally an `.asc`
     * file.
     *
     * Generated from protobuf field <code>repeated string paths = 2;</code>
     */
    private $paths;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $repository
     *           Artifact Registry repository, in the form
     *           "https://$REGION-python.pkg.dev/$PROJECT/$REPOSITORY"
     *           Files in the workspace matching any path pattern will be uploaded to
     *           Artifact Registry with this location as a prefix.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $paths
     *           Path globs used to match files in the build's workspace. For Python/
     *           Twine, this is usually `dist/&#42;`, and sometimes additionally an `.asc`
     *           file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Artifact Registry repository, in the form
     * "https://$REGION-python.pkg.dev/$PROJECT/$REPOSITORY"
     * Files in the workspace matching any path pattern will be uploaded to
     * Artifact Registry with this location as a prefix.
     *
     * Generated from protobuf field <code>string repository = 1;</code>
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Artifact Registry repository, in the form
     * "https://$REGION-python.pkg.dev/$PROJECT/$REPOSITORY"
     * Files in the workspace matching any path pattern will be uploaded to
     * Artifact Registry with this location as a prefix.
     *
     * Generated from protobuf field <code>string repository = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository = $var;

        return $this;
    }

    /**
     * Path globs used to match files in the build's workspace. For Python/
     * Twine, this is usually `dist/&#42;`, and sometimes additionally an `.asc`
     * file.
     *
     * Generated from protobuf field <code>repeated string paths = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Path globs used to match files in the build's workspace. For Python/
     * Twine, this is usually `dist/&#42;`, and sometimes additionally an `.asc`
     * file.
     *
     * Generated from protobuf field <code>repeated string paths = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->paths = $arr;

        return $this;
    }

}


