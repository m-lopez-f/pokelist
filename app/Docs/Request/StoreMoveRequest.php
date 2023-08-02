<?php

namespace App\Docs\Request;

/**
 * @OA\Schema(
 *      title="Store Move request",
 *      description="Store Move request body data",
 *      type="object",
 *      required={"name"}
 * )
 */

class StoreMoveRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the new Move",
     *      example="A nice Move"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="key",
     *      description="Key of the new Move",
     *      example="a-nice-move"
     * )
     *
     * @var string
     */
    public $key;

    /**
     * @OA\Property(
     *      title="power",
     *      description="Power of the new Move",
     *      example="85"
     * )
     *
     * @var decimal
     */
    public $power;

    /**
     * @OA\Property(
     *      title="type_id",
     *      description="Type's id of the new Move",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $type_id;
}