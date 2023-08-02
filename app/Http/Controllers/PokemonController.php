<?php

namespace App\Http\Controllers;

use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @OA\PathItem(path="/api/pokemons")
 */

class PokemonController extends Controller
{
     /**
     * @OA\Get(
     *      path="/pokemons",
     *      operationId="getPokemonList",
     *      tags={"Pokemons"},
     *      summary="Get list of Pokemons",
     *      description="Returns list of Pokemons",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/PokemonResource")
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
        return new PokemonResource(Pokemon::get());
    }

    /**
     * @OA\Post(
     *      path="/pokemons",
     *      operationId="storePokemon",
     *      tags={"Pokemons"},
     *      summary="Store new Pokemon",
     *      description="Returns Pokemon data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StorePokemonRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
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
    public function store(Request $request)
    {
        $pokemon = Pokemon::create($request->all());

        $moves = $request->input('moves', []);
        $type = $request->input('type', []);

        if (count($moves) > 4) {
            return response()
                ->setStatusCode(Response::HTTP_BAD_REQUEST);
        }
        $pokemon->moves()->sync($moves);
        $pokemon->type()->sync($type);

        return (new PokemonResource($pokemon))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *      path="/pokemons/{id}",
     *      operationId="getPokemonById",
     *      tags={"Pokemons"},
     *      summary="Get Pokemon information",
     *      description="Returns Pokemon data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Pokemon id",
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
    public function show(Pokemon $pokemon)
    {
        return new PokemonResource($pokemon);
    }

    /**
     * @OA\Put(
     *      path="/pokemons/{id}",
     *      operationId="updatePokemon",
     *      tags={"Pokemons"},
     *      summary="Update existing Pokemon",
     *      description="Returns updated Pokemon data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Pokemon id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdatePokemonRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
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
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $pokemon->update($request->all());


        return (new PokemonResource($pokemon))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *      path="/pokemons/{id}",
     *      operationId="deletePokemon",
     *      tags={"Pokemons"},
     *      summary="Delete existing Pokemon",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Pokemon id",
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
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @OA\Get(
     *      path="/pokemons/{id}/moves",
     *      operationId="getPokemonMovesById",
     *      tags={"Pokemons"},
     *      summary="Get Pokemon Moves information",
     *      description="Returns Pokemon Moves data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Pokemon id",
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
    public function moves(Pokemon $pokemon)
    {
        return new PokemonResource($pokemon->moves);
    }
}
