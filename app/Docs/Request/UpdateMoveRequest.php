<?php

namespace App\Docs\Request;

/**
 * @OA\Schema(
 *      title="Update Move request",
 *      description="Update Move request body data",
 *      type="object",
 *      required={"name"}
 * )
 */

class UpdateMoveRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the update Move",
     *      example="A nice Move"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="key",
     *      description="Key of the update Move",
     *      example="a-nice-move"
     * )
     *
     * @var string
     */
    public $key;

    /**
     * @OA\Property(
     *      title="power",
     *      description="Power of the update Move",
     *      example="85"
     * )
     *
     * @var decimal
     */
    public $power;

    /**
     * @OA\Property(
     *      title="type_id",
     *      description="Type's id of the update Move",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $type_id;
}