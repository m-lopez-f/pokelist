<?php

namespace App\Http\Controllers;

use App\Http\Resources\MoveResource;
use App\Http\Resources\PokemonResource;
use App\Models\Move;
use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MoveController extends Controller
{
    /**
     * @OA\Get(
     *      path="/moves",
     *      operationId="getMovesList",
     *      tags={"Moves"},
     *      summary="Get list of Moves",
     *      description="Returns list of Moves",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/MoveResource")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index()
    {
        return new MoveResource(Move::get());
    }

    /**
     * @OA\Post(
     *      path="/moves",
     *      operationId="storeMoves",
     *      tags={"Moves"},
     *      summary="Store new Move",
     *      description="Returns Move data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreMoveRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Move")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function store(Request $request)
    {
        $move = Move::create($request->all());
        return (new MoveResource($move))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *      path="/moves/{id}",
     *      operationId="getMovesById",
     *      tags={"Moves"},
     *      summary="Get Move information",
     *      description="Returns Move data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Move id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Move")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function show(Move $move)
    {
        return new MoveResource($move);
    }

    /**
     * @OA\Put(
     *      path="/moves/{id}",
     *      operationId="updateMove",
     *      tags={"Moves"},
     *      summary="Update existing Move",
     *      description="Returns updated Move data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Move id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateMoveRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Move")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function update(Request $request, Move $move)
    {
        $move->update($request->all());

        return (new MoveResource($move))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *      path="/moves/{id}",
     *      operationId="deleteMove",
     *      tags={"Moves"},
     *      summary="Delete existing Move",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Move id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function destroy(Move $move)
    {
        $move->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @OA\Get(
     *      path="/moves/{id}/pokemons",
     *      operationId="gePokemonsSameMove",
     *      tags={"Moves"},
     *      summary="Get Pokemons Same Move information",
     *      description="Returns  Pokemons Same Move data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Move id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Pokemon")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function sameMove(Move $move)
    {
        $pokemons = Pokemon::whereHas('move', function (Builder $query) use ($move) {
            $query->where('move_id', $move->id);
        })->get();
        return new PokemonResource($pokemons);
    }

}
