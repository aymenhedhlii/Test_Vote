<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ReponsesController extends Controller
{

    /**
     * Display a listing of the reponses.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $reponses = Reponse::with('question')->paginate(25);

        return view('reponses.index', compact('reponses'));
    }

    /**
     * Show the form for creating a new reponse.
     *
     * @return Illuminate\View\View
     */
    public function create($id=null)
    {
        $questions = Question::pluck('enonce','id')->all();
        
        return view('reponses.create', compact('questions','id'));
    }

    /**
     * Store a new reponse in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);

            Reponse::create($data);


            return redirect()->route('reponses.reponse.create', $data['question_id'])
                             ->with('success_message', 'Reponse was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified reponse.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $reponse = Reponse::with('question')->findOrFail($id);

        return view('reponses.show', compact('reponse'));
    }

    /**
     * Show the form for editing the specified reponse.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $reponse = Reponse::findOrFail($id);
        $questions = Question::pluck('enonce','id')->all();

        return view('reponses.edit', compact('reponse','questions'));
    }

    /**
     * Update the specified reponse in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $reponse = Reponse::findOrFail($id);
            $reponse->update($data);

            return redirect()->route('reponses.reponse.index')
                             ->with('success_message', 'Reponse was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified reponse from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $reponse = Reponse::findOrFail($id);
            $reponse->delete();

            return redirect()->route('reponses.reponse.index')
                             ->with('success_message', 'Reponse was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'reponse' => 'required|string|min:1|max:191',
            'correct' => 'boolean',
            'question_id' => 'required',
     
        ];

        
        $data = $request->validate($rules);


        $data['correct'] = $request->has('correct');


        return $data;
    }

}
