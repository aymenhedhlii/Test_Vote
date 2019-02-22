<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;
use App\Models\ReponseAbonnes;
use App\Http\Controllers\Controller;
use Exception;

class ReponseAbonnesController extends Controller
{

    /**
     * Display a listing of the reponse abonnes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    { if(auth()->user()->isAdmin == 1){
        $reponseAbonnesObjects = ReponseAbonnes::with('user','question')->paginate(25);

        return view('reponse_abonnes.index', compact('reponseAbonnesObjects'));}
        else 

         $reponseAbonnesObjects = ReponseAbonnes::with('user','question')->where('user_id', auth()->user()->id)->paginate(25);

        return view('reponse_abonnes.index', compact('reponseAbonnesObjects'));
        
    }

    /**
     * Show the form for creating a new reponse abonnes.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
    $users = User::pluck('id','id')->all();

$reponseabs = ReponseAbonnes::orderBy('id', 'DESC')->where('user_id',auth()->user()->id)->pluck('question_id')->toArray();

$questions = Question::orderBy('id', 'DESC')->wherenotIn('id', $reponseabs)->pluck('enonce','id')->take(1)->toArray();
$reponses=[];
if(count($questions)>0){
$id=key($questions);

$reponses = Reponse::where('question_id',$id)->get()->toArray();
     }   
        return view('reponse_abonnes.create', compact('reponses','questions'));
    }

    /**
     * Store a new reponse abonnes in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
           
            $data = $this->getData($request);
            $data['reponse_id']=$_POST['reponse_id'];

            ReponseAbonnes::create($data);

            return redirect()->route('reponse_abonnes.reponse_abonnes.create')
                             ->with('success_message', 'Reponse Abonnes was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified reponse abonnes.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $reponseAbonnes = ReponseAbonnes::with('user','question')->findOrFail($id);

        return view('reponse_abonnes.show', compact('reponseAbonnes'));
    }

    /**
     * Show the form for editing the specified reponse abonnes.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $reponseAbonnes = ReponseAbonnes::findOrFail($id);
        $users = User::pluck('id','id')->all();
$questions = Question::pluck('enonce','id')->all();

        return view('reponse_abonnes.edit', compact('reponseAbonnes','users','questions'));
    }

    /**
     * Update the specified reponse abonnes in the storage.
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
            
            $reponseAbonnes = ReponseAbonnes::findOrFail($id);
            $reponseAbonnes->update($data);

            return redirect()->route('reponse_abonnes.reponse_abonnes.index')
                             ->with('success_message', 'Reponse Abonnes was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified reponse abonnes from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $reponseAbonnes = ReponseAbonnes::findOrFail($id);
            $reponseAbonnes->delete();

            return redirect()->route('reponse_abonnes.reponse_abonnes.index')
                             ->with('success_message', 'Reponse Abonnes was successfully deleted!');

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
            'user_id' => 'required',
            'question_id' => 'required',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
