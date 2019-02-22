<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Question;
use App\Models\Reponse;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Exception;

class QuestionsController extends Controller
{

    /**
     * Display a listing of the questions.
     *
     * @return Illuminate\View\View
     */


    public function index()
    { 

       
        $questions = Question::paginate(25);

        return view('questions.index', compact('questions'));

 }


    public function getCookie(Request $request){
      $value = $request->cookie('aymen');
      echo $value;
   }

    public function repondre()
    {
        $questions = Question::paginate();
        $reponses = Reponse::get();

        return view('questions.repondre', compact('questions','reponses'));
    }

    /**
     * Show the form for creating a new question.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
          

        return view('questions.create');
   

    }

    /**
     * Store a new question in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $question=Question::create($data);
//print_r($data); die;
            return redirect()->route('reponses.reponse.create',$question->id)
                             ->with('success_message', 'Question was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified question.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);

        return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified question.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        

        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified question in the storage.
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
            
            $question = Question::findOrFail($id);
            $question->update($data);

            return redirect()->route('questions.question.index')
                             ->with('success_message', 'Question was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified question from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $question = Question::findOrFail($id);
            $question->delete();

            return redirect()->route('questions.question.index')
                             ->with('success_message', 'Question was successfully deleted!');

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
            'enonce' => 'required|string|min:1|max:191',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
