<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Move",
 *     description="Move model",
 *     @OA\Xml(
 *         name="Move"
 *     )
 * )
 */
class Move
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the new Move",
     *      example="A nice Move"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="Power",
     *      description="Power of the new Move",
     *      example="This is new Move's Power"
     * )
     *
     * @var string
     */
    public $power;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @OA\Property(
     *     title="type",
     *     description="Move type's model"
     * )
     *
     * @var \App\Docs\Models\Type
     */
    private $type;
}