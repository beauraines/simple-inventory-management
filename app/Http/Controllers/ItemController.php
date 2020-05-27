<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ItemRequest $request)
    {
        $items = Item::query();
        $errors = [];

        $this->processRequestWiths($request, $items, Item::class, $errors);
        $this->processRequestScopes($request, $items, Item::class, $errors);
        $this->processRequestQueryFields($request, $items, Item::class, $errors);

        if (!empty($errors)) {
            return api()->validation('There were errors in your Request', $errors);
        }

        // TODO improve the message when there are scopes with parameters or no withs
        $message = 'Successfully pulled '.implode(', ', array_keys($request->get('scope') ?? [])).' items with '.$request->get('with');

        return api()->response(200, $message, $items->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
    }
}
