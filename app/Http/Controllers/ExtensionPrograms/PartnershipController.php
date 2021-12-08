<?php

namespace App\Http\Controllers\ExtensionPrograms;

use App\Models\Partnership;
use Illuminate\Http\Request;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\DB;
use App\Models\Maintenance\College;
use App\Models\PartnershipDocument;
use App\Http\Controllers\Controller;
use App\Models\Maintenance\Department;
use Illuminate\Support\Facades\Storage;
use App\Models\FormBuilder\ExtensionProgramForm;
use App\Models\FormBuilder\ExtensionProgramField;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Partnership::class);

        $partnerships = Partnership::where('user_id', auth()->id())->orderBy('updated_at', 'desc')->get();
        return view('extension-programs.partnership.index', compact('partnerships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Partnership::class);

        if(ExtensionProgramForm::where('id', 5)->pluck('is_active')->first() == 0)
            return view('inactive');
        $partnershipFields = DB::select("CALL get_extension_program_fields_by_form_id('5')");

        $colleges = College::all();
        return view('extension-programs.partnership.create', compact('partnershipFields', 'colleges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Partnership::class);

        $request->validate([
            'moa_code' => 'required',
            'collab_nature' => 'required',
            'other_collab_nature' => 'required_if:collab_nature,138',
            'partnership_type' => 'required',
            'other_partnership_type' => 'required_if:partnership_type,149',
            'deliverable' => 'required',
            'other_deliverable' => 'required_if:deliverable, 157',
            // 'name_of_partner' => '',
            'title_of_partnership' => 'required',
            'beneficiaries' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'level' => 'required',
            // 'name_of_contact_person' => '',
            // 'address_of_contact_person' => '',
            // 'telephone_number' => '',
            'college_id' => 'required',
            // 'department_id' => 'required',
            // 'description' => 'required',
        ]);

        if(ExtensionProgramForm::where('id', 5)->pluck('is_active')->first() == 0)
            return view('inactive');
        $input = $request->except(['_token', '_method', 'document', 'other_collab_nature', 'other_partnership_type', 'other_deliverable']);

        $partnership = Partnership::create($input);
        $partnership->update(['user_id' => auth()->id()]);
        $partnership->update([
            'other_collab_nature' => $request->input('other_collab_nature'),
            'other_partnership_type' => $request->input('other_partnership_type'),
            'other_deliverable' => $request->input('other_deliverable'),
        ]);


        
        if($request->has('document')){
            
            $documents = $request->input('document');
            foreach($documents as $document){
                $temporaryFile = TemporaryFile::where('folder', $document)->first();
                if($temporaryFile){
                    $temporaryPath = "documents/tmp/".$document."/".$temporaryFile->filename;
                    $info = pathinfo(storage_path().'/documents/tmp/'.$document."/".$temporaryFile->filename);
                    $ext = $info['extension'];
                    $fileName = 'Partnership-'.$request->input('description').'-'.now()->timestamp.uniqid().'.'.$ext;
                    $newPath = "documents/".$fileName;
                    Storage::move($temporaryPath, $newPath);
                    Storage::deleteDirectory("documents/tmp/".$document);
                    $temporaryFile->delete();

                    PartnershipDocument::create([
                        'partnership_id' => $partnership->id,
                        'filename' => $fileName,
                    ]);
                }
            }
        }

        return redirect()->route('partnership.index')->with('partnership_success', 'Your Accomplishment in Partnership/ Linkages/ Network has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Partnership $partnership)
    {
        $this->authorize('view', Partnership::class);

        if(ExtensionProgramForm::where('id', 5)->pluck('is_active')->first() == 0)
            return view('inactive');
        $partnershipFields = DB::select("CALL get_extension_program_fields_by_form_id('5')");

        $documents = PartnershipDocument::where('partnership_id', $partnership->id)->get()->toArray();
    
        $values = $partnership->toArray();
        
        return view('extension-programs.partnership.show', compact('partnership', 'partnershipFields', 'documents', 'values'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partnership $partnership)
    {
        $this->authorize('update', Partnership::class);

        if(ExtensionProgramForm::where('id', 5)->pluck('is_active')->first() == 0)
            return view('inactive');
        $partnershipFields = DB::select("CALL get_extension_program_fields_by_form_id('5')");

        $collegeAndDepartment = Department::join('colleges', 'colleges.id', 'departments.college_id')
                ->where('colleges.id', $partnership->college_id)
                ->select('colleges.name AS college_name', 'departments.name AS department_name')
                ->first();

        $values = $partnership->toArray();

        $colleges = College::all();

        $documents = PartnershipDocument::where('partnership_id', $partnership->id)->get()->toArray();

        return view('extension-programs.partnership.edit', compact('partnership', 'partnershipFields', 'documents', 'values', 'colleges', 'collegeAndDepartment'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partnership $partnership)
    {
        $this->authorize('update', Partnership::class);

        $request->validate([
            'moa_code' => 'required',
            'collab_nature' => 'required',
            'other_collab_nature' => 'required_if:collab_nature,138',
            'partnership_type' => 'required',
            'other_partnership_type' => 'required_if:partnership_type,149',
            'deliverable' => 'required',
            'other_deliverable' => 'required_if:deliverable, 157',
            // 'name_of_partner' => '',
            'title_of_partnership' => 'required',
            'beneficiaries' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'level' => 'required',
            // 'name_of_contact_person' => '',
            // 'address_of_contact_person' => '',
            // 'telephone_number' => '',
            'college_id' => 'required',
            // 'department_id' => 'required',
            // 'description' => 'required',
        ]);

        if(ExtensionProgramForm::where('id', 5)->pluck('is_active')->first() == 0)
            return view('inactive');
        
        $input = $request->except(['_token', '_method', 'document', 'other_collab_nature', 'other_partnership_type', 'other_deliverable']);

        $partnership->update($input);
        $partnership->update([
            'other_collab_nature' => $request->input('other_collab_nature'),
            'other_partnership_type' => $request->input('other_partnership_type'),
            'other_deliverable' => $request->input('other_deliverable'),
        ]);

        if($request->has('document')){
            
            $documents = $request->input('document');
            foreach($documents as $document){
                $temporaryFile = TemporaryFile::where('folder', $document)->first();
                if($temporaryFile){
                    $temporaryPath = "documents/tmp/".$document."/".$temporaryFile->filename;
                    $info = pathinfo(storage_path().'/documents/tmp/'.$document."/".$temporaryFile->filename);
                    $ext = $info['extension'];
                    $fileName = 'Partnership-'.$request->input('description').'-'.now()->timestamp.uniqid().'.'.$ext;
                    $newPath = "documents/".$fileName;
                    Storage::move($temporaryPath, $newPath);
                    Storage::deleteDirectory("documents/tmp/".$document);
                    $temporaryFile->delete();

                    PartnershipDocument::create([
                        'partnership_id' => $partnership->id,
                        'filename' => $fileName,
                    ]);
                }
            }
        }

        return redirect()->route('partnership.index')->with('partnership_success', 'Your accomplishment in Partnership/ Linkages/ Network has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partnership $partnership)
    {
        $this->authorize('delete', Partnership::class);

        if(ExtensionProgramForm::where('id', 5)->pluck('is_active')->first() == 0)
            return view('inactive');
        PartnershipDocument::where('partnership_id', $partnership->id)->delete();
        $partnership->delete();
        return redirect()->route('partnership.index')->with('partnership_success', 'Your accomplishment in Partnership/ Linkages/ Network has been deleted.');
    }

    public function removeDoc($filename){
        $this->authorize('delete', Partnership::class);

        if(ExtensionProgramForm::where('id', 5)->pluck('is_active')->first() == 0)
            return view('inactive');
        PartnershipDocument::where('filename', $filename)->delete();
        return true;
    }
}