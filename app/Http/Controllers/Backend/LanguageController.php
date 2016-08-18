<?php

namespace SundaySim\Http\Controllers\Backend;

use SundaySim\Language;
use Illuminate\Http\Request;
use SundaySim\Http\Requests;

class LanguageController extends Controller
{
    protected $language;

    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = $this->language->orderBy('position', 'desc')->paginate(10);

        return view('backend.language.index', compact('language'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Language $language)
    {
        return view('backend.language.form', compact('language'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreLanguageRequest $request)
    {
        $this->language->create(
            $request->only('lang_name', 'status', 'is_default', 'position')
        );

        return redirect(route('backend.language.index'))->with('status', 'Language has been created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = $this->language->findOrFail($id);

        return view('backend.language.form', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateLangguageRequest $request, $id)
    {
        $post = $this->language->findOrFail($id);

        $post->fill($request->only('name', 'status', 'is_default', 'position'))->save();

        return redirect(route('backend.language.edit', $post->id))->with('status', 'Language has been updated.');
    }

    public function confirm($id)
    {
        $language = $this->language->findOrFail($id);

        return view('backend.language.confirm', compact('language'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->language->findOrFail($id);

        $post->delete();

        return redirect(route('backend.language.index'))->with('status', 'Language has been deleted.');
    }
    
    protected function getPageTemplates()
    {
        $templates = config('cms.templates');

        return ['' => ''] + array_combine(array_keys($templates), array_keys($templates));
    }

    
}
