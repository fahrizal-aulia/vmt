<?php

namespace App\Http\Controllers\Instructor;

use Session;

use App\exercise;
use App\scenario_action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ExerciseController extends Controller
{
    public function index() {
        $exercise = exercise::get();
        return view('instructor.exercises.index', ['exercise' => $exercise]);
    }

    public function viewExercise($id) {
        $viewExercise = exercise::where('id_exercise', $id)->get();
        $listScenarioAction = scenario_action::where('id_exercise', $id)->get();
        return view('instructor.exercises.viewExercise', ['viewExercise' => $viewExercise, 'listScenarioAction' => $listScenarioAction]);
    }

    public function createExercise() {
        return view('instructor.exercises.create');
    }

    public function storeExercise(Request $request) {
        $id = exercise::max('id_exercise');
        $id = $id+1;

        exercise::create([
            'id_exercise'   => $id,
            'project_name' => $request['project_name']
        ]);

        return redirect('instructor/exercises')->with('success','Exercise created successfully!');
    }

    public function editExercise($id) {
        $editExercise = exercise::where('id_exercise',$id)->get();
        return view('instructor.exercises.updateExercise', ['editExercise' => $editExercise]);
    }

    public function updateExercise(Request $request) {
        $exercise = exercise::where('id_exercise', $request->id_exercise)->first();

        $exercise->deskripsi = $request['deskripsi'];
        $exercise->sejarah_pemakaian = $request['sejarah_pemakaian'];
        $exercise->sejarah_produksi = $request['sejarah_produksi'];
        $exercise->spesifikasi = $request['spesifikasi'];
        $exercise->kinerja = $request['kinerja'];
        $exercise->persenjataan = $request['persenjataan'];
        $exercise->media_type = $request['media_type'];

        if ($request['media_type'] == 'Youtube') {
            $exercise->media_name = $request['media_link'];
        } else {
            if ($request->hasFile('media_upload')) {
            $file = $request->file('media_upload');
            $filename =  $file->getClientOriginalName();
            // $path = $file->storeAs('C:\laragon\www', $filename);
            $path = 'C:/laragon/www/test_upload' . $filename;
            $file->move('C:/laragon/www/test_upload', $filename);
            $exercise->media_name = $filename;
            }
        }

        $exercise->save();

        return redirect('instructor/scenarios')->with('info', 'Exercise updated successfully!');
    }
    public function updateactionExercise(Request $request) {
        foreach ($request->actions as $key => $action) {
            $scenarioAction = scenario_action::find($action['id']);

            $scenarioAction->actions_name = $action['actions_name'];
            $scenarioAction->type = $action['type'];

            if ($action['type'] == 'Youtube') {
                $scenarioAction->media_name = $action['media_link'];
            } else {
                if ($request->hasFile('actions.' . $key . '.media_upload')) {
                    $file = $request->file('actions.' . $key . '.media_upload');
                    $filename = $file->getClientOriginalName();
                    // $path = $file->storeAs('C:\laragon\www', $filename);
                    $path = 'C:/laragon/www/test_upload' . $filename;
                    $file->move('C:/laragon/www/test_upload', $filename);
                    $scenarioAction->media_name = $filename;
                }
            }

            $scenarioAction->save();
        }

        return redirect('instructor/scenarios')->with('info', 'Action updated successfully!');
    }




    public function deleteExercise($id) {
        exercise::destroy($id);

        return redirect()->back()->with('error','Exercise is deleted!');
    }
}