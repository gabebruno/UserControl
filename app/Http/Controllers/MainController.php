<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainController extends Controller
{

    protected $userService;
    protected $adminService;
    protected $request;
    protected $user;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->userService = (new UserController($request));
        $this->adminService = (new AdminController($request));
        $this->user = auth()->user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->adminService->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        return $this->adminService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id = null)
    {

        $naoPermitido = [
          'error' => 'Unauthorized Access - Admins Section'
        ];
        if($id != null)
        {
            return ($this->user->permission == 2) ?  ($this->adminService->show($id)) : (response()->json($naoPermitido));
        }
        else
        {
            return $this->userService->show($id);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id = null)
    {

        $naoPermitido = [
            'error' => 'Unauthorized Access - Admins Section'
        ];
        if($id == null)
        {
            return $this->userService->update($request);

        }
        else if($this->user->id == $id)
        {
            return $this->userService->update($request);
        }
        else
        {
            return ($this->user->permission == 2) ?  $this->adminService->update($request, $id) : response()->json($naoPermitido);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        return $this->adminService->destroy($id);
    }
}
