<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Team\TeamListResource;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // 

        
        return TeamListResource::collection(Team::all());

        
    }
}
