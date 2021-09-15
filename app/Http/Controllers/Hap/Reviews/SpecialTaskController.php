<?php

namespace App\Http\Controllers\Hap\Reviews;

use App\Models\Document;
use App\Models\Department;
use App\Models\Submission;
use App\Models\SpecialTask;
use App\Models\RejectReason;
use Illuminate\Http\Request;
use App\Models\TemporaryFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SpecialTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SpecialTask $specialtask)
    {
        $submission = Submission::where('submissions.form_id', $specialtask->id)
                    ->where('submissions.form_name', 'specialtask')
                    ->join('users', 'users.id', '=', 'submissions.user_id')
                    ->select('submissions.status', 'users.first_name', 'users.last_name', 'users.middle_name')->get();

        //getting reason
        $reason = 'reason';
        if($submission[0]->status == 3){
            $reason = RejectReason::where('form_id', $specialtask->id)
                    ->where('form_name', 'specialtask')->first();
            
            if(is_null($reason)){
                $reason = 'Your submission was rejected';
            }
        }

        $header = 'Special Tasks';
        $route = 'specialtask';
        $department = Department::find($specialtask->department_id);
        $documents = Document::where('submission_id', $specialtask->id)
                        ->where('submission_type', 'specialtask')
                        ->where('deleted_at', NULL)
                        ->get();
        return view('hap.review.specialtask.show', [
            'submission' => $submission[0],
            'specialtask' => $specialtask,
            'header' => $header,
            'route' => $route,
            'department' => $department,
            'documents' => $documents,
            'reason' => $reason,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecialTask $specialtask)
    {
        $submission = Submission::where('submissions.form_id', $specialtask->id)
                    ->where('submissions.form_name', 'specialtask')
                    ->join('users', 'users.id', '=', 'submissions.user_id')
                    ->select('submissions.status', 'users.first_name', 'users.last_name', 'users.middle_name')->get();

        if($submission[0]->status != 1){
            return redirect()->route('hap.review.specialtask.show', $specialtask->id)->with('error', 'Edit Submission cannot be accessed');
        }

        $header = 'III. Special Tasks > Edit';
        $route = 'specialtask';
        $departments = Department::all();
        $documents = Document::where('submission_id', $specialtask->id)
                        ->where('submission_type', 'specialtask')
                        ->where('deleted_at', NULL)
                        ->get();

        return view('hap.review.specialtask.edit', [
            'submission' => $submission[0],
            'specialtask' => $specialtask,
            'header' => $header,
            'route' => $route,
            'departments' => $departments,
            'documents' => $documents
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecialTask $specialtask)
    {
        $request->validate([
            'department' => 'required',
            'output' => 'required',
            'target' => 'required',
            'actual' => 'required',
            'documentdescription' => 'required',
        ]);

        $specialtask->update([
            'department_id' => $request->input('department'),
            'output' => $request->input('output'),
            'target' => $request->input('target'),
            'actual' => $request->input('actual'),
            'accomplishment' => $request->input('accomplishment') ?? null,
            'status' => $request->input('status')  ?? null,
            'remarks' => $request->input('remarks')  ?? null,
            'document_description'  => $request->input('documentdescription') 
        ]);

        if($request->has('document')){
            
            $documents = $request->input('document');
            foreach($documents as $document){
                $temporaryFile = TemporaryFile::where('folder', $document)->first();
                if($temporaryFile){
                    $temporaryPath = "documents/tmp/".$document."/".$temporaryFile->filename;
                    $newPath = "documents/".$temporaryFile->filename;
                    $fileName = $temporaryFile->filename;
                    Storage::move($temporaryPath, $newPath);
                    Storage::deleteDirectory("documents/tmp/".$document);
                    $temporaryFile->delete();

                    Document::create([
                        'filename' => $fileName,
                        'submission_id' => $specialtask->id,
                        'submission_type' => 'specialtask'
                    ]);
                }
            }
        }

        Submission::where('form_name', 'specialtask')
                ->where('form_id', $specialtask->id)
                ->update(['status' => 1]);

        return redirect()->route('hap.review.specialtask.show', $specialtask)->with('success', 'Form updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialTask $specialtask)
    {
        Document::where('submission_id' ,$specialtask->id)
                ->where('submission_type', 'specialtask')
                ->where('deleted_at', NULL)->delete();
        Submission::where('form_id', $specialtask->id)->where('form_name', 'specialtask')->delete();
        $specialtask->delete();
        return redirect()->route('hap.review.index')->with('success_submission', 'Submission deleted successfully.');
    }

    public function removeFileInEdit(SpecialTask $specialtask, Request $request){
        Document::where('filename', $request->input('filename'))->delete();
        Storage::delete('documents/'.$request->input('filename'));
        return redirect()->route('hap.review.specialtask.edit', $specialtask)->with('success', 'Document deleted successfully.');
    }
}