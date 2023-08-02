<?php

namespace App\Docs\Models;

/**
 * @OA\Schema(
 *     title="Pokemon",
 *     description="Pokemon model",
 *     @OA\Xml(
 *         name="Pokemon"
 *     )
 * )
 */
class Pokemon
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
     *      description="Name of the new Pokemon",
     *      example="A nice Pokemon"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="Power",
     *      description="Power of the new Pokemon",
     *      example="This is new Pokemon's Power"
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
     *     title="moves",
     *     description="List of moves move's model"
     * )
     *
     * @var \App\Docs\Models\Move[]
     */
    private $move;

    /**
     * @OA\Property(
     *     title="type",
     *     description="type type's model"
     * )
     *
     * @var \App\Docs\Models\Type[]
     */
    private $type;
}