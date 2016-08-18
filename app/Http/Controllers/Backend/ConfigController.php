<?php

namespace SundaySim\Http\Controllers\Backend;

use SundaySim\Config;
use Illuminate\Http\Request;
use SundaySim\Http\Requests;

class ConfigController extends Controller
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = $this->config->orderBy('id', 'desc')->paginate(10);

        return view('backend.config.index', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Config $config)
    {
        return view('backend.config.form', compact('config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreConfigRequest $request)
    {
        $this->config->create(
            $request->only('pageTitle', 'footerContent', 'address', 'phone', 'fax', 'email', 'map')
        );

        return redirect(route('backend.config.index'))->with('status', 'Config has been created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $config = $this->config->findOrFail($id);

        return view('backend.config.form', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateConfigRequest $request, $id)
    {
        $config = $this->config->findOrFail($id);

        $config->fill($request->only('pageTitle', 'footerContent', 'address', 'phone', 'fax', 'email', 'map'))->save();

        return redirect(route('backend.config.index'))->with('status', 'Config has been updated.');
    }

    public function confirm($id)
    {
        $config = $this->config->findOrFail($id);

        return view('backend.config.confirm', compact('config'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->config->findOrFail($id);

        $post->delete();

        return redirect(route('backend.config.index'))->with('status', 'Config has been deleted.');
    }
    
    protected function getPageTemplates()
    {
        $templates = config('cms.templates');

        return ['' => ''] + array_combine(array_keys($templates), array_keys($templates));
    }

    
}
