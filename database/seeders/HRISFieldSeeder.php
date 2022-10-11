<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Maintenance\HRISField;

class HRISFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HRISField::truncate();
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Education Level',
            'name' => 'level',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Degree/Program',
            'name' => 'degree',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Major',
            'name' => 'major',
            'placeholder' => null,
            'size' => 'col-md-6',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Minor',
            'name' => 'minor',
            'placeholder' => null,
            'size' => 'col-md-6',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Education Discipline',
            'name' => 'education_discipline',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Name of School',
            'name' => 'school_name',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Program Accreditation Level/ World Ranking/ COE or COD',
            'name' => 'program_level',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Is Graduated?',
            'name' => 'is_graduated',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 14,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Is Currently Enrolled?',
            'name' => 'is_enrolled',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 14,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Type of Support',
            'name' => 'support_type',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Name of Sponsor/Agency/Organization',
            'name' => 'sponsor_name',
            'placeholder' => null,
            'size' => 'col-md-8',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Amount',
            'name' => 'amount',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'From',
            'name' => 'from',
            'placeholder' => 'Type the Start Year',
            'size' => 'col-md-4',
            'field_type_id' => 2,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'To',
            'name' => 'to',
            'placeholder' => 'Type the End Year, if currently enrolled, type "present"',
            'size' => 'col-md-6',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Status',
            'name' => 'status',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Number of Units Earned',
            'name' => 'units_earned',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 2,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Number of Units Currently Enrolled',
            'name' => 'units_enrolled',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 2,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Honors Received',
            'name' => 'honors',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Department to commit the accomplishment',
            'name' => 'department_id',
            'placeholder' => "",
            'size' => 'col-md-6',
            'field_type_id' => 13,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'College/Campus/Branch/Office to commit the accomplishment',
            'name' => 'college_id',
            'placeholder' => null,
            'size' => 'col-md-6',
            'field_type_id' => 12,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Description of Supporting Documents',
            'name' => 'description',
            'placeholder' => "",
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 1,
            'label' => 'Document Upload',
            'name' => 'document',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        //Seminars/Webinars
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Title',
            'name' => 'title',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Classification',
            'name' => 'classification',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Nature',
            'name' => 'nature',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Type',
            'name' => 'type',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Source of Fund',
            'name' => 'fund_source',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Budget',
            'name' => 'budget',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 11,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Organizer',
            'name' => 'organizer',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Level',
            'name' => 'level',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Venue',
            'name' => 'venue',
            'placeholder' => null,
            'size' => 'col-md-8',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'From',
            'name' => 'from',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 4,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'To',
            'name' => 'to',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 4,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Total No. of Hours',
            'name' => 'total_hours',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 11,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Department to commit the accomplishment',
            'name' => 'department_id',
            'placeholder' => "",
            'size' => 'col-md-6',
            'field_type_id' => 13,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'College/Campus/Branch/Office to commit the accomplishment',
            'name' => 'college_id',
            'placeholder' => null,
            'size' => 'col-md-6',
            'field_type_id' => 12,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Description of Supporting Documents',
            'name' => 'description',
            'placeholder' => "",
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 4,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Special Order (if applicable)',
            'name' => 'documentSO',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Certificate of Participation/ Attendance/ Completion',
            'name' => 'documentCert',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 4,
            'label' => 'Compiled Photos in 1 PDF Document (optional - can include proof of registration/invitation/programme/etc.)',
            'name' => 'documentPic',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        //Trainings
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Title',
            'name' => 'title',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Classification',
            'name' => 'classification',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Nature',
            'name' => 'nature',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Budget',
            'name' => 'budget',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Source of Fund',
            'name' => 'fund_source',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Organizer',
            'name' => 'organizer',
            'placeholder' => null,
            'size' => 'col-md-8',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Level',
            'name' => 'level',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Venue',
            'name' => 'venue',
            'placeholder' => null,
            'size' => 'col-md-8',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'From',
            'name' => 'from',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'To',
            'name' => 'to',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Total No. of Hours',
            'name' => 'total_hours',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 2,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Department to commit the accomplishment',
            'name' => 'department_id',
            'placeholder' => "",
            'size' => 'col-md-6',
            'field_type_id' => 13,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'College/Campus/Branch/Office to commit the accomplishment',
            'name' => 'college_id',
            'placeholder' => null,
            'size' => 'col-md-6',
            'field_type_id' => 12,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Description of Supporting Documents',
            'name' => 'description',
            'placeholder' => "",
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 4,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Special Order (if applicable)',
            'name' => 'documentSO',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Certificate of Participation/ Attendance/ Completion',
            'name' => 'documentCert',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 5,
            'label' => 'Compiled Photos in 1 PDF Document (optional - can include proof of registration/invitation/programme/etc.)',
            'name' => 'documentPic',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);


        //outstanding awards
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Name of Award/Achievement ',
            'name' => 'award',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Classification',
            'name' => 'classification',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Award Giving Body',
            'name' => 'awarded_by',
            'placeholder' => null,
            'size' => 'col-md-8',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Level',
            'name' => 'level',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Venue',
            'name' => 'venue',
            'placeholder' => null,
            'size' => 'col-md-8',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'From',
            'name' => 'from',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 4,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'To',
            'name' => 'to',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 4,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Department to commit the accomplishment',
            'name' => 'department_id',
            'placeholder' => "",
            'size' => 'col-md-6',
            'field_type_id' => 13,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'College/Campus/Branch/Office to commit the accomplishment',
            'name' => 'college_id',
            'placeholder' => null,
            'size' => 'col-md-6',
            'field_type_id' => 12,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Description of Supporting Documents',
            'name' => 'description',
            'placeholder' => "",
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 2,
            'label' => 'Document Upload',
            'name' => 'document',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        //Officership
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'Name of the Organization',
            'name' => 'organization',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'Classification',
            'name' => 'classification',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'Position',
            'name' => 'position',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'Level',
            'name' => 'level',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 5,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => "Organization's Address",
            'name' => 'organization_address',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'From',
            'name' => 'from',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 4,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'To',
            'name' => 'to',
            'placeholder' => null,
            'size' => 'col-md-4',
            'field_type_id' => 4,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'Department to commit the accomplishment',
            'name' => 'department_id',
            'placeholder' => "",
            'size' => 'col-md-6',
            'field_type_id' => 13,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'College/Campus/Branch/Office to commit the accomplishment',
            'name' => 'college_id',
            'placeholder' => null,
            'size' => 'col-md-6',
            'field_type_id' => 12,
            'dropdown_id' => null,
            'required' => 1,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);

        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'Description of Supporting Documents',
            'name' => 'description',
            'placeholder' => "",
            'size' => 'col-md-12',
            'field_type_id' => 1,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
        HRISField::insert([
            'h_r_i_s_form_id' => 3,
            'label' => 'Document Upload',
            'name' => 'document',
            'placeholder' => null,
            'size' => 'col-md-12',
            'field_type_id' => 9,
            'dropdown_id' => null,
            'required' => 0,
            'visibility' => 1,
            'order' => 1,
            'is_active' => 1,
        ]);
    }
}
