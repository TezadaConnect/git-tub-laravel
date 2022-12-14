<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Maintenance\GenerateColumn;

class GenerateColumn2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GenerateColumn::insert([
            'name' => 'Research Classification*',
            'table_id' => 49,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1
        ]);
        GenerateColumn::insert([
            'name' => 'Category**',
            'table_id' => 49,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'University Research Agenda***',
            'table_id' => 49,
            'report_column' => 'agenda',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Discipline****',
            'table_id' => 49,
            'report_column' => 'discipline',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Research',
            'table_id' => 49,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Researcher/s (Surname,First Name,M.I.)',
            'table_id' => 49,
            'report_column' => 'researchers',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Involvement****',
            'table_id' => 49,
            'report_column' => 'nature_of_involvement',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Research*****',
            'table_id' => 49,
            'report_column' => 'research_type',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Keywords (at least five (5) keywords)',
            'table_id' => 49,
            'report_column' => 'keywords',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Funding******',
            'table_id' => 49,
            'report_column' => 'funding_type',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Funding',
            'table_id' => 49,
            'report_column' => 'funding_amount',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Funding Agency',
            'table_id' => 49,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 11,
        ]);
        GenerateColumn::insert([
            'name' => 'Actual Date Started (mm/dd/yyyy)',
            'table_id' => 49,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 12,
        ]);
        GenerateColumn::insert([
            'name' => 'Target Date of Completion (mm/dd/yyyy)',
            'table_id' => 49,
            'report_column' => 'target_date',
            'is_active' => 1,
            'order' => 13,
        ]);
        GenerateColumn::insert([
            'name' => 'Status (Ongoing/Completed)',
            'table_id' => 49,
            'report_column' => 'status',
            'is_active' => 1,
            'order' => 14,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Completed',
            'table_id' => 49,
            'report_column' => 'completion_date',
            'is_active' => 1,
            'order' => 15,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 49,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 16,
        ]);

        //Research Publication
        GenerateColumn::insert([
            'name' => 'Research Classification*',
            'table_id' => 50,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1
        ]);
        GenerateColumn::insert([
            'name' => 'Category**',
            'table_id' => 50,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'University Research Agenda***',
            'table_id' => 50,
            'report_column' => 'agenda',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Research',
            'table_id' => 50,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Researcher/s (Surname,First Name,M.I.)',
            'table_id' => 50,
            'report_column' => 'researchers',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Involvement****',
            'table_id' => 50,
            'report_column' => 'nature_of_involvement',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Research*****',
            'table_id' => 50,
            'report_column' => 'research_type',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Keywords (at least five (5) keywords)',
            'table_id' => 50,
            'report_column' => 'keywords',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Funding******',
            'table_id' => 50,
            'report_column' => 'funding_type',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Funding',
            'table_id' => 50,
            'report_column' => 'funding_amount',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Funding Agency',
            'table_id' => 50,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 11,
        ]);
        GenerateColumn::insert([
            'name' => 'Actual Date Started (mm/dd/yyyy)',
            'table_id' => 50,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 12,
        ]);
        GenerateColumn::insert([
            'name' => 'Target Date of Completion (mm/dd/yyyy)',
            'table_id' => 50,
            'report_column' => 'target_date',
            'is_active' => 1,
            'order' => 13,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Completed',
            'table_id' => 50,
            'report_column' => 'completion_date',
            'is_active' => 1,
            'order' => 15,
        ]);
        GenerateColumn::insert([
            'name' => 'Journal Name',
            'table_id' => 50,
            'report_column' => 'journal_name',
            'is_active' => 1,
            'order' => 16,
        ]);
        GenerateColumn::insert([
            'name' => 'Page Number',
            'table_id' => 50,
            'report_column' => 'page',
            'is_active' => 1,
            'order' => 17,
        ]);
        GenerateColumn::insert([
            'name' => 'Volume No.',
            'table_id' => 50,
            'report_column' => 'volume',
            'is_active' => 1,
            'order' => 18,
        ]);
        GenerateColumn::insert([
            'name' => 'Issue No.',
            'table_id' => 50,
            'report_column' => 'issue',
            'is_active' => 1,
            'order' => 19,
        ]);
        GenerateColumn::insert([
            'name' => 'Indexing Platform',
            'table_id' => 50,
            'report_column' => 'indexing_platform',
            'is_active' => 1,
            'order' => 20,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Published',
            'table_id' => 50,
            'report_column' => 'publish_date',
            'is_active' => 1,
            'order' => 21,
        ]);
        GenerateColumn::insert([
            'name' => 'Publisher',
            'table_id' => 50,
            'report_column' => 'publisher',
            'is_active' => 1,
            'order' => 22,
        ]);
        GenerateColumn::insert([
            'name' => 'Editor',
            'table_id' => 50,
            'report_column' => 'editor',
            'is_active' => 1,
            'order' => 23,
        ]);
        GenerateColumn::insert([
            'name' => 'ISSN/ISBN',
            'table_id' => 50,
            'report_column' => 'issn',
            'is_active' => 1,
            'order' => 24,
        ]);
        GenerateColumn::insert([
            'name' => 'Level of Publication',
            'table_id' => 50,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 25,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 50,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 26,
        ]);

        //Research Presentation
        GenerateColumn::insert([
            'name' => 'Research Classification*',
            'table_id' => 51,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1
        ]);
        GenerateColumn::insert([
            'name' => 'Category**',
            'table_id' => 51,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'University Research Agenda***',
            'table_id' => 51,
            'report_column' => 'agenda',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Research',
            'table_id' => 51,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Researcher/s (Surname,First Name,M.I.)',
            'table_id' => 51,
            'report_column' => 'researchers',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Involvement****',
            'table_id' => 51,
            'report_column' => 'nature_of_involvement',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Research*****',
            'table_id' => 51,
            'report_column' => 'research_type',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Keywords (at least five (5) keywords)',
            'table_id' => 51,
            'report_column' => 'keywords',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Funding******',
            'table_id' => 51,
            'report_column' => 'funding_type',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Funding',
            'table_id' => 51,
            'report_column' => 'funding_amount',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Funding Agency',
            'table_id' => 51,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 11,
        ]);
        GenerateColumn::insert([
            'name' => 'Actual Date Started (mm/dd/yyyy)',
            'table_id' => 51,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 12,
        ]);
        GenerateColumn::insert([
            'name' => 'Target Date of Completion (mm/dd/yyyy)',
            'table_id' => 51,
            'report_column' => 'target_date',
            'is_active' => 1,
            'order' => 13,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Completed',
            'table_id' => 51,
            'report_column' => 'completion_date',
            'is_active' => 1,
            'order' => 15,
        ]);
        GenerateColumn::insert([
            'name' => 'Conference Title',
            'table_id' => 51,
            'report_column' => 'conference_title',
            'is_active' => 1,
            'order' => 16,
        ]);
        GenerateColumn::insert([
            'name' => 'Organizer',
            'table_id' => 51,
            'report_column' => 'organizer',
            'is_active' => 1,
            'order' => 17,
        ]);
        GenerateColumn::insert([
            'name' => 'Venue',
            'table_id' => 51,
            'report_column' => 'venue',
            'is_active' => 1,
            'order' => 18,
        ]);
        GenerateColumn::insert([
            'name' => 'Date of Presentation',
            'table_id' => 51,
            'report_column' => 'date_presented',
            'is_active' => 1,
            'order' => 19,
        ]);
        GenerateColumn::insert([
            'name' => 'Level',
            'table_id' => 51,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 20,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 51,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 21,
        ]);

        //ResearchCitation
        GenerateColumn::insert([
            'name' => 'Research Classification*',
            'table_id' => 52,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1
        ]);
        GenerateColumn::insert([
            'name' => 'Category**',
            'table_id' => 52,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'University Research Agenda***',
            'table_id' => 52,
            'report_column' => 'agenda',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Research',
            'table_id' => 52,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Researcher/s (Surname,First Name,M.I.)',
            'table_id' => 52,
            'report_column' => 'researchers',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Involvement****',
            'table_id' => 52,
            'report_column' => 'nature_of_involvement',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Research*****',
            'table_id' => 52,
            'report_column' => 'research_type',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Keywords (at least five (5) keywords)',
            'table_id' => 52,
            'report_column' => 'keywords',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Funding******',
            'table_id' => 52,
            'report_column' => 'funding_type',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Funding',
            'table_id' => 52,
            'report_column' => 'funding_amount',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Funding Agency',
            'table_id' => 52,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 11,
        ]);
        GenerateColumn::insert([
            'name' => 'Actual Date Started (mm/dd/yyyy)',
            'table_id' => 52,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 12,
        ]);
        GenerateColumn::insert([
            'name' => 'Target Date of Completion (mm/dd/yyyy)',
            'table_id' => 52,
            'report_column' => 'target_date',
            'is_active' => 1,
            'order' => 13,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Completed',
            'table_id' => 52,
            'report_column' => 'completion_date',
            'is_active' => 1,
            'order' => 15,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Research/ Article Cited',
            'table_id' => 52,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 16,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Article Where Your Research has been cited',
            'table_id' => 52,
            'report_column' => 'article_title',
            'is_active' => 1,
            'order' => 17,
        ]);
        GenerateColumn::insert([
            'name' => 'Author/s Who Cited Your Research',
            'table_id' => 52,
            'report_column' => 'article_author',
            'is_active' => 1,
            'order' => 18,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of the Journal/ Books Where Your Article has been cited',
            'table_id' => 52,
            'report_column' => 'journal_title',
            'is_active' => 1,
            'order' => 19,
        ]);
        GenerateColumn::insert([
            'name' => 'Volume No. of the Journal/Book Where Your Article has been cited',
            'table_id' => 52,
            'report_column' => 'volume',
            'is_active' => 1,
            'order' => 20,
        ]);
        GenerateColumn::insert([
            'name' => 'Issue No. of the Journal/Book Where Your Article has been cited',
            'table_id' => 52,
            'report_column' => 'issue',
            'is_active' => 1,
            'order' => 21,
        ]);
        GenerateColumn::insert([
            'name' => 'Page No. of the Journal/Book Where Your Article has been cited',
            'table_id' => 52,
            'report_column' => 'page',
            'is_active' => 1,
            'order' => 22,
        ]);
        GenerateColumn::insert([
            'name' => 'Year of Publication of the Journal/Book Where Your Article has been cited',
            'table_id' => 52,
            'report_column' => 'year',
            'is_active' => 1,
            'order' => 23,
        ]);
        GenerateColumn::insert([
            'name' => 'Name of Publisher of the Journal/Book Where Your Article has been cited',
            'table_id' => 52,
            'report_column' => 'journal_publisher',
            'is_active' => 1,
            'order' => 24,
        ]);
        GenerateColumn::insert([
            'name' => 'Indexing Platform of the Journal Where Your Article has been cited',
            'table_id' => 52,
            'report_column' => 'indexing_platform',
            'is_active' => 1,
            'order' => 25,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 52,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 26,
        ]);

        //Research Utilization
        GenerateColumn::insert([
            'name' => 'Research Classification*',
            'table_id' => 53,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1
        ]);
        GenerateColumn::insert([
            'name' => 'Category**',
            'table_id' => 53,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'University Research Agenda***',
            'table_id' => 53,
            'report_column' => 'agenda',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Research',
            'table_id' => 53,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Researcher/s (Surname,First Name,M.I.)',
            'table_id' => 53,
            'report_column' => 'researchers',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Involvement****',
            'table_id' => 53,
            'report_column' => 'nature_of_involvement',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Research*****',
            'table_id' => 53,
            'report_column' => 'research_type',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Keywords (at least five (5) keywords)',
            'table_id' => 53,
            'report_column' => 'keywords',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Funding******',
            'table_id' => 53,
            'report_column' => 'funding_type',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Funding',
            'table_id' => 53,
            'report_column' => 'funding_amount',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Funding Agency',
            'table_id' => 53,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 11,
        ]);
        GenerateColumn::insert([
            'name' => 'Actual Date Started (mm/dd/yyyy)',
            'table_id' => 53,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 12,
        ]);
        GenerateColumn::insert([
            'name' => 'Target Date of Completion (mm/dd/yyyy)',
            'table_id' => 53,
            'report_column' => 'target_date',
            'is_active' => 1,
            'order' => 13,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Completed',
            'table_id' => 53,
            'report_column' => 'completion_date',
            'is_active' => 1,
            'order' => 14,
        ]);
        GenerateColumn::insert([
            'name' => 'Agency/Organization that utilized the research output',
            'table_id' => 53,
            'report_column' => 'organization',
            'is_active' => 1,
            'order' => 15,
        ]);
        GenerateColumn::insert([
            'name' => 'Brief Description of Research Utilization',
            'table_id' => 53,
            'report_column' => 'utilization_description',
            'is_active' => 1,
            'order' => 16,
        ]);
        GenerateColumn::insert([
            'name' => 'Level of Utilization *******',
            'table_id' => 53,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 17,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 53,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 18,
        ]);

        //Copyrighted Research Output
        GenerateColumn::insert([
            'name' => 'Research Classification*',
            'table_id' => 54,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1
        ]);
        GenerateColumn::insert([
            'name' => 'Category**',
            'table_id' => 54,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'University Research Agenda***',
            'table_id' => 54,
            'report_column' => 'agenda',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Research',
            'table_id' => 54,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Researcher/s (Surname,First Name,M.I.)',
            'table_id' => 54,
            'report_column' => 'researchers',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Involvement****',
            'table_id' => 54,
            'report_column' => 'nature_of_involvement',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Research*****',
            'table_id' => 54,
            'report_column' => 'research_type',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Keywords (at least five (5) keywords)',
            'table_id' => 54,
            'report_column' => 'keywords',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Funding******',
            'table_id' => 54,
            'report_column' => 'funding_type',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Funding',
            'table_id' => 54,
            'report_column' => 'funding_amount',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Funding Agency',
            'table_id' => 54,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 11,
        ]);
        GenerateColumn::insert([
            'name' => 'Actual Date Started (mm/dd/yyyy)',
            'table_id' => 54,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 12,
        ]);
        GenerateColumn::insert([
            'name' => 'Target Date of Completion (mm/dd/yyyy)',
            'table_id' => 54,
            'report_column' => 'target_date',
            'is_active' => 1,
            'order' => 13,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Completed',
            'table_id' => 54,
            'report_column' => 'completion_date',
            'is_active' => 1,
            'order' => 15,
        ]);
        GenerateColumn::insert([
            'name' => 'Copyright Number (ISSN/ISBN)',
            'table_id' => 54,
            'report_column' => 'copyright_number',
            'is_active' => 1,
            'order' => 16,
        ]);
        GenerateColumn::insert([
            'name' => 'Copyright Agency',
            'table_id' => 54,
            'report_column' => 'copyright_agency',
            'is_active' => 1,
            'order' => 17,
        ]);
        GenerateColumn::insert([
            'name' => 'Year the research copyrighted',
            'table_id' => 54,
            'report_column' => 'copyright_year',
            'is_active' => 1,
            'order' => 18,
        ]);
        GenerateColumn::insert([
            'name' => 'Level *******',
            'table_id' => 54,
            'report_column' => 'copyright_level',
            'is_active' => 1,
            'order' => 19,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 54,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 20,
        ]);

        //inventions
        GenerateColumn::insert([
            'name' => 'Title of Invention, Innovation, & Creative Works',
            'table_id' => 56,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Classification *',
            'table_id' => 56,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'Name of Collaborator/s',
            'table_id' => 56,
            'report_column' => 'collaborator',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'From (mm/dd/yyyy)',
            'table_id' => 56,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'To (mm/dd/yyyy)',
            'table_id' => 56,
            'report_column' => 'end_date',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Inventions',
            'table_id' => 56,
            'report_column' => 'nature',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Status **',
            'table_id' => 56,
            'report_column' => 'status',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Funding Agency',
            'table_id' => 56,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Funding ***',
            'table_id' => 56,
            'report_column' => 'funding_type',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Fund',
            'table_id' => 56,
            'report_column' => 'funding_amount',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 56,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 11,
        ]);

        // ExpertServiceRendered
        GenerateColumn::insert([
            'name' => 'Classification of Expert services Rendered as a Consultant/Expert *',
            'table_id' => 58,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Expert Services Rendered',
            'table_id' => 58,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Category of Expert Services',
            'table_id' => 58,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Partner Agency',
            'table_id' => 58,
            'report_column' => 'partner_agency',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Venue',
            'table_id' => 58,
            'report_column' => 'venue',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'From (mm/dd/yyyy)',
            'table_id' => 58,
            'report_column' => 'from',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'To (mm/dd/yyyy)',
            'table_id' => 58,
            'report_column' => 'to',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Level**',
            'table_id' => 58,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 58,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        // Expert Service in Conferences
        GenerateColumn::insert([
            'name' => 'Nature of services rendered in conferences, workshops, and/or training courses for professionals *',
            'table_id' =>  59,
            'report_column' => 'nature',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Conference, Workshop, and Training',
            'table_id' =>  59,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'Partner Agency',
            'table_id' =>  59,
            'report_column' => 'partner_agency',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Venue',
            'table_id' =>  59,
            'report_column' => 'venue',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'From',
            'table_id' =>  59,
            'report_column' => 'from',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'To',
            'table_id' =>  59,
            'report_column' => 'to',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Level **',
            'table_id' =>  59,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' =>  59,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 8,
        ]);

         // Academic
        GenerateColumn::insert([
            'name' => 'External Services Rendered in Academic Journals/ Books Publication/ Newsletter/ Creative Works*',
            'table_id' => 60,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Services Rendered **',
            'table_id' => 60,
            'report_column' => 'nature',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'Publication/ Audio Visual Production ',
            'table_id' => 60,
            'report_column' => 'publication_or_audio_visual',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Indexing (If any) ***',
            'table_id' => 60,
            'report_column' => 'indexing',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Copyright No. (ISSN No. /E-ISSN/ ISBN)',
            'table_id' => 60,
            'report_column' => 'copyright_no',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Level ****',
            'table_id' => 60,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 60,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 7,
        ]);

        //Extension Program
        GenerateColumn::insert([
            'name' => 'Title of Extension Program',
            'table_id' => 61,
            'report_column' => 'title_of_extension_program',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Extension Project',
            'table_id' => 61,
            'report_column' => 'title_of_extension_project',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Title of Extension Activity',
            'table_id' => 61,
            'report_column' => 'title_of_extension_activity',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Involvement*',
            'table_id' => 61,
            'report_column' => 'nature_of_involvement',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Source of Fund**',
            'table_id' => 61,
            'report_column' => 'funding_agency',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Amount of Fund',
            'table_id' => 61,
            'report_column' => 'amount_of_funding',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Classification of Extension Activity***',
            'table_id' => 61,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Partnership Levels****',
            'table_id' => 61,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'From (mm/dd/yyyy)',
            'table_id' => 61,
            'report_column' => 'from',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'To (mm/dd/yyyy)',
            'table_id' => 61,
            'report_column' => 'to',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Status*****',
            'table_id' => 61,
            'report_column' => 'status',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Place/Venue',
            'table_id' => 61,
            'report_column' => 'place_or_venue',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'No. of Trainees',
            'table_id' => 61,
            'report_column' => 'no_of_trainees_or_beneficiaries',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Classification of Trainees',
            'table_id' => 61,
            'report_column' => 'classification_of_trainees_or_beneficiaries',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Quality - Poor',
            'table_id' => 61,
            'report_column' => 'quality_poor',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Quality - Fair',
            'table_id' => 61,
            'report_column' => 'quality_fair',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Quality - Satisfactory',
            'table_id' => 61,
            'report_column' => 'quality_satisfactory',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Quality - Very Satisfactory',
            'table_id' => 61,
            'report_column' => 'quality_very_satisfactory',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Quality - Outstanding',
            'table_id' => 61,
            'report_column' => 'quality_outstanding',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Timeliness - Poor',
            'table_id' => 61,
            'report_column' => 'timeliness_poor',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Timeliness - Fair',
            'table_id' => 61,
            'report_column' => 'timeliness_fair',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Timeliness - Satisfactory',
            'table_id' => 61,
            'report_column' => 'timeliness_satisfactory',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Timeliness - Very Satisfactory',
            'table_id' => 61,
            'report_column' => 'timeliness_very_satisfactory',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Timeliness - Outstanding',
            'table_id' => 61,
            'report_column' => 'timeliness_outstanding',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Number of Hours',
            'table_id' => 61,
            'report_column' => 'total_no_of_hours',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 61,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        //Partnerships
        GenerateColumn::insert([
            'name' => 'Title',
            'table_id' => 62,
            'report_column' => 'title_of_partnership',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Type of Partner Institution *',
            'table_id' => 62,
            'report_column' => 'partnership_type',
            'is_active' => 1,
            'order' => 1,
        ]);
        // GenerateColumn::insert([
        //     'name' => 'Name of Organization',
        //     'table_id' => 29,
        //     'report_column' => 'name_of_partner',
        //     'is_active' => 1,
        //     'order' => 1,
        // ]);

        GenerateColumn::insert([
            'name' => 'Nature of Collaboration **',
            'table_id' => 62,
            'report_column' => 'collab_nature',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Deliverable/Desired Output***',
            'table_id' => 62,
            'report_column' => 'deliverable',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Target Beneficiaries ****',
            'table_id' => 62,
            'report_column' => 'beneficiaries',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Level *****',
            'table_id' => 62,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'From (mm/dd/yyyy)',
            'table_id' => 62,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'To (mm/dd/yyyy)',
            'table_id' => 62,
            'report_column' => 'end_date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Name of Contact Person',
            'table_id' => 62,
            'report_column' => 'name_of_contact_person',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Tel. No. of Contact Person',
            'table_id' => 62,
            'report_column' => 'telephone_number',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Address of Contact Person',
            'table_id' => 62,
            'report_column' => 'address_of_contact_person',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 62,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        //Faculty involvement in inter-country mobility
        GenerateColumn::insert([
            'name' => 'Classification of Persons Involved (Faculty, Admin, Students)',
            'table_id' => 63,
            'report_column' => 'classification_of_person',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Types (Inbound/Outbound)',
            'table_id' => 63,
            'report_column' => 'type',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Engagement*',
            'table_id' => 63,
            'report_column' => 'nature_of_engagement',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Classification of Mobility **',
            'table_id' => 63,
            'report_column' => 'classification_of_mobility',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Host Institution/ Organization/ Agency',
            'table_id' => 63,
            'report_column' => 'host_name',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Address of Host Institution/ Organization/ Agency',
            'table_id' => 63,
            'report_column' => 'host_address',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Collaborating Country and Institution/Organization/Agency',
            'table_id' => 63,
            'report_column' => 'collaborating_country',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Inter-Country Mobility',
            'table_id' => 63,
            'report_column' => 'mobility_description',
            'is_active' => 0,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'From (mm/dd/yyyy)',
            'table_id' => 63,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'To (mm/dd/yyyy)',
            'table_id' => 63,
            'report_column' => 'end_date',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 63,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 11,
        ]);

        //Faculty involvement in intra-country mobility
        GenerateColumn::insert([
            'name' => 'Classification of Persons Involved (Faculty, Admin, Students)',
            'table_id' => 64,
            'report_column' => 'classification_of_person',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Types (Inbound/Outbound)',
            'table_id' => 64,
            'report_column' => 'type',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature of Engagement*',
            'table_id' => 64,
            'report_column' => 'nature_of_engagement',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Classification of Mobility **',
            'table_id' => 64,
            'report_column' => 'classification_of_mobility',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Host Institution/ Organization/ Agency',
            'table_id' => 64,
            'report_column' => 'host_name',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Address of Host Institution/ Organization/ Agency',
            'table_id' => 64,
            'report_column' => 'host_address',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Collaborating Country and Institution/Organization/Agency',
            'table_id' => 64,
            'report_column' => 'collaborating_country',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Inter-Country Mobility',
            'table_id' => 64,
            'report_column' => 'mobility_description',
            'is_active' => 0,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'From (mm/dd/yyyy)',
            'table_id' => 64,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'To (mm/dd/yyyy)',
            'table_id' => 64,
            'report_column' => 'end_date',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 64,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 11,
        ]);

        //viable projects
        //Viable Demonstration PRoject
        GenerateColumn::insert([
            'name' => 'Name of Viable Demonstration Projects',
            'table_id' => 77,
            'report_column' => 'name',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Revenues',
            'table_id' => 77,
            'report_column' => 'revenue',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Cost',
            'table_id' => 77,
            'report_column' => 'cost',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Started (mm/dd/yyyy)',
            'table_id' => 77,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Internal Rate of Return',
            'table_id' => 77,
            'report_column' => 'rate_of_return',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents Submitted',
            'table_id' => 77,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        //Awards/Recognitions rec by Office
        GenerateColumn::insert([
            'name' => 'Name of Award',
            'table_id' => 36,
            'report_column' => 'name_of_award',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Certifying Body',
            'table_id' => 36,
            'report_column' => 'certifying_body',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Place',
            'table_id' => 36,
            'report_column' => 'place',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Date (mm/dd/yyyy)',
            'table_id' => 36,
            'report_column' => 'date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Level',
            'table_id' => 36,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents Submitted',
            'table_id' => 36,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        //Community Relation and Outreach Program
        GenerateColumn::insert([
            'name' => 'Title of the Program',
            'table_id' => 79,
            'report_column' => 'title_of_the_program',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Place',
            'table_id' => 79,
            'report_column' => 'place',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Date (mm/dd/yyyy)',
            'table_id' => 79,
            'report_column' => 'date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Level*',
            'table_id' => 79,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents Submitted',
            'table_id' => 79,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        //IM, Reference/book
        GenerateColumn::insert([
            'name' => 'Category',
            'table_id' => 66,
            'report_column' => 'category',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Level',
            'table_id' => 66,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 2,
        ]);
        GenerateColumn::insert([
            'name' => 'Title',
            'table_id' => 66,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 3,
        ]);
        GenerateColumn::insert([
            'name' => 'Author/s/Compiler/s',
            'table_id' => 66,
            'report_column' => 'authors_compilers',
            'is_active' => 1,
            'order' => 4,
        ]);
        GenerateColumn::insert([
            'name' => 'Editor Name',
            'table_id' => 66,
            'report_column' => 'editor_name',
            'is_active' => 1,
            'order' => 5,
        ]);
        GenerateColumn::insert([
            'name' => 'Editor Profession',
            'table_id' => 66,
            'report_column' => 'editor_profession',
            'is_active' => 1,
            'order' => 6,
        ]);
        GenerateColumn::insert([
            'name' => 'Volume No.',
            'table_id' => 66,
            'report_column' => 'volume_no',
            'is_active' => 1,
            'order' => 7,
        ]);
        GenerateColumn::insert([
            'name' => 'Issue No.',
            'table_id' => 66,
            'report_column' => 'issue_no',
            'is_active' => 1,
            'order' => 8,
        ]);
        GenerateColumn::insert([
            'name' => 'Date of Publication',
            'table_id' => 66,
            'report_column' => 'date_published',
            'is_active' => 1,
            'order' => 9,
        ]);
        GenerateColumn::insert([
            'name' => 'Copyright Registration',
            'table_id' => 66,
            'report_column' => 'copyright_regi_no',
            'is_active' => 1,
            'order' => 10,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Started',
            'table_id' => 66,
            'report_column' => 'date_started',
            'is_active' => 1,
            'order' => 11,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Completed',
            'table_id' => 66,
            'report_column' => 'date_completed',
            'is_active' => 1,
            'order' => 12,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 66,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 13,
        ]);

        //syllabi
        GenerateColumn::insert([
            'name' => 'Course Code',
            'table_id' => 67,
            'report_column' => 'course_code',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Course Title',
            'table_id' => 67,
            'report_column' => 'course_title',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Assigned Task',
            'table_id' => 67,
            'report_column' => 'assigned_task',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Date Developed/Revised/Reviewed/Enhanced',
            'table_id' => 67,
            'report_column' => 'date_finished',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents',
            'table_id' => 67,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        ////Student Awards and Recognition
        GenerateColumn::insert([
            'name' => 'Student Name',
            'table_id' => 73,
            'report_column' => 'name_of_student',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Name of Award',
            'table_id' => 73,
            'report_column' => 'name_of_award',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Certifying Body',
            'table_id' => 73,
            'report_column' => 'certifying_body',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Place',
            'table_id' => 73,
            'report_column' => 'place',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Date',
            'table_id' => 73,
            'report_column' => 'date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Level',
            'table_id' => 73,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents Submitted',
            'table_id' => 73,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

        // Student trainings and seminars
        GenerateColumn::insert([
            'name' => 'Title',
            'table_id' => 74,
            'report_column' => 'title',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'No. of Student Attendees',
            'table_id' => 74,
            'report_column' => 'no_of_students',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Classification*',
            'table_id' => 74,
            'report_column' => 'classification',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Nature**',
            'table_id' => 74,
            'report_column' => 'nature',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Budget',
            'table_id' => 74,
            'report_column' => 'budget',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Source of Fund***',
            'table_id' => 74,
            'report_column' => 'source_of_fund',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Organizer',
            'table_id' => 74,
            'report_column' => 'organization',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Level',
            'table_id' => 74,
            'report_column' => 'level',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Venue',
            'table_id' => 74,
            'report_column' => 'venue',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'From',
            'table_id' => 74,
            'report_column' => 'start_date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'To',
            'table_id' => 74,
            'report_column' => 'end_date',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Total No. of Hours.',
            'table_id' => 74,
            'report_column' => 'total_hours',
            'is_active' => 1,
            'order' => 1,
        ]);
        GenerateColumn::insert([
            'name' => 'Description of Supporting Documents Submitted',
            'table_id' => 74,
            'report_column' => 'description',
            'is_active' => 1,
            'order' => 1,
        ]);

    }
}
