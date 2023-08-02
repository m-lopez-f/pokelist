<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Http\Requests\StoreTrainerRequest;
use App\Http\Requests\UpdateTrainerRequest;
use App\Http\Resources\TrainerResource;
use Symfony\Component\HttpFoundation\Response;

class TrainerController extends Controller
{
    /**
     * @OA\Get(
     *      path="/trainers",
     *      operationId="getTrainerList",
     *      tags={"Trainers"},
     *      summary="Get list of Trainers",
     *      description="Returns list of Trainers",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/TrainerResource")
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
        return new TrainerResource(Trainer::get());
    }

    /**
     * @OA\Post(
     *      path="/trainers",
     *      operationId="storeTrainer",
     *      tags={"Trainers"},
     *      summary="Store new Trainer",
     *      description="Returns Trainer data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreTrainerRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Trainer")
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

    public function store(StoreTrainerRequest $request)
    {
        $trainer = Trainer::create($request->all());

        $pokemons = $request->input('pokemons', []);

        if (count($pokemons) > 4) {
            return response()
                ->setStatusCode(Response::HTTP_BAD_REQUEST);
        }
        $trainer->pokemons()->sync($pokemons);

        return (new TrainerResource($trainer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *      path="/trainers/{id}",
     *      operationId="getTrainerById",
     *      tags={"Trainers"},
     *      summary="Get Trainer information",
     *      description="Returns Trainer data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Trainer id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Trainer")
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
    public function show(Trainer $trainer)
    {
        return new TrainerResource($trainer);
    }

    /**
     * @OA\Put(
     *      path="/trainers/{id}",
     *      operationId="updateTrainer",
     *      tags={"Trainers"},
     *      summary="Update existing Trainer",
     *      description="Returns updated Trainer data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Trainer id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateTrainerRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Trainer")
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
    public function update(UpdateTrainerRequest $request, Trainer $trainer)
    {
        $trainer->update($request->all());
        $pokemons = $request->input('pokemons', []);

        if (count($pokemons) > 4) {
            return response()
                ->setStatusCode(Response::HTTP_BAD_REQUEST);
        }
        $trainer->pokemons()->sync($pokemons);
        return (new TrainerResource($trainer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *      path="/trainers/{id}",
     *      operationId="deleteTrainer",
     *      tags={"Trainers"},
     *      summary="Delete existing Trainer",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Trainer id",
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
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
