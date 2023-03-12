<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\BlockDataTable;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = ['title' => 'required|string|max:200', 'description' => 'required|string'];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\BlockDataTable $dataTable
     *
     * @return mixed
     */
    public function index(BlockDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.block.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.block', $this->formVariables('block', null));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Block::class, $request);
    }

    /**
     * @param \App\Models\Block $block
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Block $block)
    {
        return view('admin.show', ['object' => $block]);
    }

    /**
     * @param \App\Models\Block $block
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Block $block)
    {
        return view('admin.forms.block', $this->formVariables('block', $block));
    }

    /**
     * @param \App\Models\Block $block
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Block $block, Request $request)
    {
        return $this->saveFlashRedirect($block, $request);
    }

    /**
     * @param \App\Models\Block $block
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Block $block)
    {
        return $this->destroyFlashRedirect($block);
    }
}
