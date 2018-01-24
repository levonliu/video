<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagRequest;
use App\Model\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tag::get();

        return view( 'admin.tag.index', compact( 'data' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.tag.create' );
    }

    /**
     * 保存新增的标签
     *
     * @param TagRequest $request
     * @param Tag        $model
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store( TagRequest $request, Tag $model )
    {
        $model->create( $request->all() );

        return redirect( '/admin/tag' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        Tag::destroy( $id );

        $this->success('删除成功');
    }
}
