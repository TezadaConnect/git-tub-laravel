<?php

namespace App\Http\Controllers\Inventions;

use App\Models\Invention;
use Illuminate\Http\Request;
use App\Models\TemporaryFile;
use App\Models\InventionDocument;
use Illuminate\Support\Facades\DB;
use App\Models\Maintenance\College;
use App\Http\Controllers\Controller;
use App\Models\Maintenance\Department;
use Illuminate\Support\Facades\Storage;
use App\Models\FormBuilder\InventionForm;
use App\Models\FormBuilder\InventionField;

class InventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Invention::class);

        $inventions = Invention::where('user_id', auth()->id())->join('dropdown_options', 'dropdown_options.id', 'inventions.status')
        ->select('inventions.*', 'dropdown_options.name as status_name')->orderBy('inventions.updated_at', 'desc')->get();


        return view('inventions.index', compact('inventions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Invention::class);
        if(InventionForm::where('id', 1)->pluck('is_active')->first() == 0)
            return view('inactive');

        $inventionFields = DB::select("CALL get_invention_fields_by_form_id(1)");

        $colleges = College::all();
        return view('inventions.create', compact('inventionFields', 'colleges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Invention::class);

        if(InventionForm::where('id', 1)->pluck('is_active')->first() == 0)
            return view('inactive');

        $request->validate([
            'classification' => 'required',
            'nature' => 'required',
            'title' => 'required',
            // 'collaborator' => '',
            'funding_agency' => 'required_if:funding_type, 49',
            'currency_funding_amount' => 'required',
            // 'funding_amount' => 'numeric',
            'funding_type' => 'required',
            'status' => 'required',
            'start_date' => 'required_unless:status, 55|date',
            'end_date' => 'required_if:status, 54|date|after_or_equal:start_date',
            'utilization' => 'required_if:classification, 46',
            'copyright_number' => 'required',
            'issue_date' => 'date|after_or_equal:end_date',
            'college_id' => 'required',
            // 'department_id' => 'required',
            // 'description' => 'required',
        ]);

        $funding_amount = $request->input('funding_amount');    

        $funding_amount = str_replace( ',' , '', $funding_amount);

        $input = $request->except(['_token', '_method', 'document', 'funding_amount']);

        $iicw = Invention::create($input);
        $iicw->update(['user_id' => auth()->id(), 'funding_amount' => $funding_amount]);

        if($request->has('document')){
            
            $documents = $request->input('document');
            foreach($documents as $document){
                $temporaryFile = TemporaryFile::where('folder', $document)->first();
                if($temporaryFile){
                    $temporaryPath = "documents/tmp/".$document."/".$temporaryFile->filename;
                    $info = pathinfo(storage_path().'/documents/tmp/'.$document."/".$temporaryFile->filename);
                    $ext = $info['extension'];
                    $fileName = 'IICW-'.$request->input('description').'-'.now()->timestamp.uniqid().'.'.$ext;
                    $newPath = "documents/".$fileName;
                    Storage::move($temporaryPath, $newPath);
                    Storage::deleteDirectory("documents/tmp/".$document);
                    $temporaryFile->delete();

                    InventionDocument::create([
                        'invention_id' => $iicw->id,
                        'filename' => $fileName,
                    ]);
                }
            }
        }

        return redirect()->route('invention-innovation-creative.index')->with('edit_iicw_success', 'Your Accomplishment in Invention, Innovation, and Creative Works has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Invention $invention_innovation_creative)
    {
        $this->authorize('view', Invention::class);

        // dd($fields);
        if(InventionForm::where('id', 1)->pluck('is_active')->first() == 0)
            return view('inactive');

        $inventionFields = DB::select("CALL get_invention_fields_by_form_id(1)");
        
        $values = $invention_innovation_creative->toArray();

        $documents = InventionDocument::where('id', $invention_innovation_creative->id)->get()->toArray();

        return view('inventions.show', compact('invention_innovation_creative','inventionFields', 'values', 'documents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Invention $invention_innovation_creative)
    {
        $this->authorize('update', Invention::class);
        if(InventionForm::where('id', 1)->pluck('is_active')->first() == 0)
            return view('inactive');

        $inventionFields = DB::select("CALL get_invention_fields_by_form_id(1)");

        $inventionDocuments = InventionDocument::where('invention_id', $invention_innovation_creative->id)->get()->toArray();
        
        $colleges = College::all();

        $collegeOfDepartment = DB::select("CALL get_college_and_department_by_department_id(".$invention_innovation_creative->department_id.")");

        $value = $invention_innovation_creative;
        $value->toArray();
        $value = collect($invention_innovation_creative);
        $value = $value->toArray();

        return view('inventions.edit', compact('value', 'inventionFields', 'inventionDocuments', 'colleges', 'collegeOfDepartment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invention $invention_innovation_creative)
    {
        $this->authorize('update', Invention::class);

        if(InventionForm::where('id', 1)->pluck('is_active')->first() == 0)
            return view('inactive');

        $request->validate([
            'classification' => 'required',
            'nature' => 'required',
            'title' => 'required',
            // 'collaborator' => '',
            'funding_agency' => 'required_if:funding_type, 49',
            'currency_funding_amount' => 'required',
            // 'funding_amount' => 'numeric',
            'funding_type' => 'required',
            'status' => 'required',
            'start_date' => 'required_unless:status, 55|date',
            'end_date' => 'required_if:status, 54|date|after_or_equal:start_date',
            'utilization' => 'required_if:classification, 46',
            'copyright_number' => 'required',
            'issue_date' => 'date|after_or_equal:end_date',
            'college_id' => 'required',
            // 'department_id' => 'required',
            // 'description' => 'required',
        ]);
        $funding_amount = $request->input('funding_amount');    

        $funding_amount = str_replace( ',' , '', $funding_amount);


        $input = $request->except(['_token', '_method', 'document', 'funding_amount']);

        $invention_innovation_creative->update($input);
        $invention_innovation_creative->update(['funding_amount' => $funding_amount]);

        if($request->has('document')){
            
            $documents = $request->input('document');
            foreach($documents as $document){
                $temporaryFile = TemporaryFile::where('folder', $document)->first();
                if($temporaryFile){
                    $temporaryPath = "documents/tmp/".$document."/".$temporaryFile->filename;
                    $info = pathinfo(storage_path().'/documents/tmp/'.$document."/".$temporaryFile->filename);
                    $ext = $info['extension'];
                    $fileName = 'IICW-'.$request->input('description').'-'.now()->timestamp.uniqid().'.'.$ext;
                    $newPath = "documents/".$fileName;
                    Storage::move($temporaryPath, $newPath);
                    Storage::deleteDirectory("documents/tmp/".$document);
                    $temporaryFile->delete();

                    InventionDocument::create([
                        'invention_id' => $invention_innovation_creative->id,
                        'filename' => $fileName,
                    ]);
                }
            }
        }

        return redirect()->route('invention-innovation-creative.index')->with('edit_iicw_success', 'Your Accomplishment in Invention, Innovation, and Creative Works has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invention $invention_innovation_creative)
    {
        $this->authorize('delete', Invention::class);
        if(InventionForm::where('id', 1)->pluck('is_active')->first() == 0)
            return view('inactive');


        $invention_innovation_creative->delete();
        InventionDocument::where('invention_id', $invention_innovation_creative->id)->delete();
        return redirect()->route('invention-innovation-creative.index')->with('edit_iicw_success', 'Your Accomplishment in Invention, Innovation, and Creative Works has been deleted.');
    }

    public function removeDoc($filename){
        $this->authorize('delete', Invention::class);

        if(InventionForm::where('id', 1)->pluck('is_active')->first() == 0)
            return view('inactive');
            
        InventionDocument::where('filename', $filename)->delete();
        // Storage::delete('documents/'.$filename);
        return true;
    }
}
