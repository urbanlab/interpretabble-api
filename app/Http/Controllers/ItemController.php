<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;


class ItemController extends Controller
{

    // List All items
    public function listItems()
    {
        $items = Item::all();
        $media_url = array();

        // gets the api absolute url to media
        // TODO create a service or middleware
        foreach($items as $item){
            foreach($item->medias as $media){
                array_push($media_url,asset('/medias').'/'.$media );
            }
            $item->medias = $media_url;
            $media_url = array();
        }
        return $items;
    }

    // List a single item
    public function listItem($id)
    {
        $item = Item::find($id);
        $media_url = array();
        // gets the api absolute url to media
        // TODO create a service or middleware
        foreach($item->medias as $medias){
            echo asset('/').$medias;
            array_push($media_url,asset('/medias').'/'.$medias );
        }
        $item->medias = $media_url;

        return $item;
    }

    // Create a new item
    public function createItem(Request $request)
    {

        $media_path = array();

        // Gets every element from the form-data and stores to db
        $item = Item::create([
            'name' => $request->input('name'),
            'medias' => 'media_path',
            'card_id' => $request->input('card_id')
        ]);
        // Gets any file trough the form-data  
        // TODO Check file size and mime type (png/jpeg < 2mb)
        // TODO Compress if image 
        foreach($request->files as $file)
        {
            array_push($media_path, $item->id.'/'.$file->getClientOriginalName());
            
            //Move Uploaded File
            $destinationPath = 'medias/'.$item->id;
            $file->move($destinationPath,$file->getClientOriginalName());
        }
        // Fetch and update item in db
        $updateItem = Item::find($item->id);
        $updateItem->update([
            'medias' => $media_path
        ]);
        $updateItem->save();

        return response()->json($updateItem, 201);
    }


    // Update a single item based on his id
    public function updateItem($id, Request $request)
    {

        $item = Item::findOrFail($id);
        $item->update($request->all());
        $item->save();
        return response()->json($item, 201);
    }

    
    // Delete a single item based on his id
    public function deleteItem($id)
    {
       $item = Item::findOrFail($id);
       $item->delete();
        return $item->name.' has been deleted';
    }
}
