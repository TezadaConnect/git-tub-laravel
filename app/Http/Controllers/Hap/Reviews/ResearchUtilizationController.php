<?php

namespace App\Http\Controllers\Hap\Reviews;

use App\Models\Document;
use App\Models\Department;
use App\Models\Submission;
use App\Models\FundingType;
use App\Models\RejectReason;
use App\Models\ResearchType;
use Illuminate\Http\Request;
use App\Models\IndexPlatform;
use App\Models\ResearchClass;
use App\Models\TemporaryFile;
use App\Models\ResearchAgenda;
use App\Models\ResearchInvolve;
use App\Models\ResearchCategory;
use App\Models\ResearchUtilization;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ResearchUtilizationController extends Controller
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
    public function show(ResearchUtilization $researchutilization)
    {
        $submission = Submission::where('submissions.form_id', $researchutilization->id)
                    ->where('submissions.form_name', 'researchutilization')
                    ->join('users', 'users.id', '=', 'submissions.user_id')
                    ->select('submissions.status', 'users.first_name', 'users.last_name', 'users.middle_name')->get();
        
        //getting reason
        $reason = 'reason';
        if($submission[0]->status == 3){
            $reason = RejectReason::where('form_id', $researchutilization->id)
                    ->where('form_name', 'researchutilization')->first();
            
            if(is_null($reason)){
                $reason = 'Your submission was rejected';
            }
        }

        $department = Department::find($researchutilization->department_id);
        $researchclass = ResearchClass::find($researchutilization->research_class_id);
        $researchcategory = ResearchCategory::find($researchutilization->research_category_id);
        $researchagenda = ResearchAgenda::find($researchutilization->research_agenda_id);
        $researchinvolve = ResearchInvolve::find($researchutilization->research_involve_id);
        $researchtype = ResearchType::find($researchutilization->research_type_id);
        $fundingtype = FundingType::find($researchutilization->funding_type_id);
        $indexplatform = IndexPlatform::find($researchutilization->index_platform_id);
        $documents = Document::where('submission_id' ,$researchutilization->id)
                        ->where('submission_type', 'researchutilization')
                        ->where('deleted_at', NULL)->get();


        return view('hap.review.researchutilization.show', [
            'submission' => $submission[0],
            'research' => $researchutilization,
            'department' => $department,
            'researchclass' => $researchclass,
            'researchcategory' => $researchcategory,
            'researchagenda' => $researchagenda,
            'researchinvolve' => $researchinvolve,
            'researchtype' => $researchtype,
            'fundingtype' => $fundingtype,
            'indexplatform' => $indexplatform,
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
    public function edit(ResearchUtilization $researchutilization)
    {
        $submission = Submission::where('submissions.form_id', $researchutilization->id)
                    ->where('submissions.form_name', 'researchutilization')
                    ->join('users', 'users.id', '=', 'submissions.user_id')
                    ->select('submissions.status', 'users.first_name', 'users.last_name', 'users.middle_name')->get();

        if($submission[0]->status != 1){
            return redirect()->route('hap.review.researchutilization.show', $researchutilization->id)->with('error', 'Edit Submission cannot be accessed');
        }
        
        $departments = Department::orderBy('name')->get();
        $researchclasses = ResearchClass::all();
        $researchcategories = ResearchCategory::all();
        $researchagendas = ResearchAgenda::all();
        $researchinvolves = ResearchInvolve::all();
        $researchtypes = ResearchType::all();
        $fundingtypes = FundingType::all();
        $indexplatforms = IndexPlatform::all();
        $documents = Document::where('submission_id' ,$researchutilization->id)
                        ->where('submission_type', 'researchutilization')
                        ->where('deleted_at', NULL)->get();

        return view('hap.review.researchutilization.edit', [
            'submission' => $submission[0],
            'researchutilization' => $researchutilization,
            'departments' => $departments,
            'researchclasses' => $researchclasses,
            'researchcategories' => $researchcategories,
            'researchagendas' => $researchagendas,
            'researchinvolves' => $researchinvolves,
            'researchtypes' => $researchtypes,
            'fundingtypes' => $fundingtypes,
            'indexplatforms' => $indexplatforms,
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
    public function update(Request $request, ResearchUtilization $researchutilization)
    {
        $request->validate([
            'department' => 'required',
            'researchclass' => 'required',
            'researchcategory' => 'required',
            'researchagenda' => 'required',
            'title' => 'required',
            'researchers' => 'required',
            'researchinvolve' => 'required',
            'researchtype' => 'required',
            'keywords' => 'required',
            'fundingtype' => 'required',
            'fundingamount' => 'numeric',
            'fundingagency' => 'required',
            'datestarted' => 'required',
            'datetargeted' => 'required',
            'datecompleted' => 'required',
            'indexplatform' => 'required',
            'document' => 'required',
            'documentdescription' => 'required',
        ]);

        $researchutilization->update([
            'department_id' => $request->input('department'),
            'research_class_id' => $request->input('researchclass'),
            'research_category_id' => $request->input('researchcategory'),
            'research_agenda_id'  => $request->input('researchagenda'),
            'title'  => $request->input('title'),
            'researchers'  => $request->input('researchers'),
            'research_involve_id'  => $request->input('researchinvolve'),
            'research_type_id'  => $request->input('researchtype'),
            'keywords' => $request->input('keywords'),
            'funding_type_id' => $request->input('fundingtype'),
            'funding_amount' => $request->input('fundingamount'),
            'funding_agency' => $request->input('fundingagency'),
            'date_started' => $request->input('datestarted'),
            'date_targeted' => $request->input('datetargeted'),
            'date_completed' => $request->input('datecompleted') ?? null,
            'organization' => $request->input('organization'),
            'brief_description' => $request->input('briefdescription'),
            'index_platform_id' => $request->input('indexplatform'),
            'document_description' => $request->input('documentdescription') ?? null,
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
                        'submission_id' => $researchutilization->id,
                        'submission_type' => 'researchutilization'
                    ]);
                }
            }
        }

        Submission::where('form_name', 'researchutilization')
                ->where('form_id', $researchutilization->id)
                ->update(['status' => 1]);

        return redirect()->route('hap.review.researchutilization.show', $researchutilization->id)->with('success', 'Form updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResearchUtilization $researchutilization)
    {
        Document::where('submission_id' ,$researchutilization->id)
                ->where('submission_type', 'researchutilization')
                ->where('deleted_at', NULL)->delete();
        Submission::where('form_id', $researchutilization->id)->where('form_name', 'researchutilization')->delete();
        $researchutilization->delete();
        return redirect()->route('hap.review.index')->with('success_submission', 'Submission deleted successfully.');
    }

    public function removeFileInEdit(ResearchUtilization $researchutilization, Request $request){
        Document::where('filename', $request->input('filename'))->delete();
        Storage::delete('documents/'.$request->input('filename'));
        return redirect()->route('hap.review.researchutilization.edit', $researchutilization)->with('success', 'Document deleted successfully.');
    }
}