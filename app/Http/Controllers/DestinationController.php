<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $destinations = Destination::all();
            return response()->json([
                'data' => $destinations,
                'status' => true,
            ], 200); 
        } catch (\Exception $e) {
            return response()->json(['status' => false,'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $destination = new Destination();
            $destination['title'] = $request->title;
            $destination['description'] = $request->description;
            $destination['localisation'] = $request->localisation;
            $$destination['video'] = $request['video'];
            foreach ($request->file('pictures') as $file) {
                $filePath = $file->store('pictures'); 
                $fileUrl = asset('storage/' . $filePath);
                $$destination['pictures'] .= $fileUrl .",";
            }
            $destination->save();
            return response()->json([
                'data' => $destination,
                'status' => true,
            ], 200); 
        } catch (\Exception $e) {
            return response()->json(['status' => false,'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $destination = Destination::find($id);
            return response()->json([
                'data' => $destination,
                'status' => true,
            ], 200); 
        } catch (\Exception $e) {
            return response()->json(['status' => false,'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $destination = Destination::find($id);
            $destination['title'] = $request->title ? $request->title : $destination['title'] ;
            $destination['description'] = $request->description ? $request->description : $destination['description'] ;
            $destination['localisation'] = $request->localisation ? $request->localisation : $destination['localisation'] ;
            $destination['video'] = $request->video ? $request->video : $destination['video'] ;
            $destination->save();
            return response()->json([
                'data' => $destination,
                'status' => true,
            ], 200); 
        } catch (\Exception $e) {
            return response()->json(['status' => false,'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $destination = Destination::find($id)->delete();
            return response()->json([
                'status' => true,
            ], 200); 
        } catch (\Exception $e) {
            return response()->json(['status' => false,'error' => $e->getMessage()], 500);
        }
    }
}
