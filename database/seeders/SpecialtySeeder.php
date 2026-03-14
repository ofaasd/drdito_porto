<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialtySeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        // Asumsi Profile ID = 1 (Dito Anurogo)
        $profileId = 1; 

        $specialties = [
            [
                'name' => 'Nanoimmunobiotechnomedicine (NiBTM)',
                'description' => 'An integrative field combining nanotechnology, immunology, biotechnology, and medicine to develop advanced therapeutic strategies and diagnostic tools.'
            ],
            [
                'name' => 'Nanotechnology',
                'description' => 'Application of nanomaterials in medicine, focusing on drug delivery systems, tissue engineering, and molecular diagnostics.'
            ],
            [
                'name' => 'Biomedical Research',
                'description' => 'Advanced research involving Stem Cells, Exosomes, Immunotherapy, and Cell & Gene Therapy to treat complex diseases.'
            ],
            [
                'name' => 'Immunology and Molecular Medicine',
                'description' => 'Study of immune system functions and molecular mechanisms of diseases to develop targeted medical interventions.'
            ],
            [
                'name' => 'Hematopsychiatry and Medicopomology',
                'description' => 'Interdisciplinary study linking blood biomarkers with psychiatric conditions (Hematopsychiatry) and the medicinal benefits of fruits (Medicopomology).'
            ],
            [
                'name' => 'Medical Practice and Medicine',
                'description' => 'Clinical practice involving patient diagnosis, treatment planning, and holistic healthcare management.'
            ],
            [
                'name' => 'Health Community Development',
                'description' => 'Designing and implementing programs to improve public health outcomes and empower local communities.'
            ],
            [
                'name' => 'Online Health Consultation',
                'description' => 'Providing remote medical advice and tele-consultations to increase healthcare accessibility via digital platforms.'
            ],
            [
                'name' => 'Creative Thinking and Scientific Writing',
                'description' => 'Expertise in structuring scientific papers, grant proposals, and fostering innovative approaches to research problems.'
            ],
            [
                'name' => 'Speed Reading and Comprehensive Understanding',
                'description' => 'Advanced cognitive skills for rapidly processing and synthesizing large volumes of medical literature and scientific data.'
            ],
            [
                'name' => 'Journalism and Digital Literacy',
                'description' => 'Communicating complex medical science to the public through journalism and promoting digital literacy in health information.'
            ],
            [
                'name' => 'Leadership and Organizational Empowerment',
                'description' => 'Strategic leadership in academic and medical organizations, focusing on team building and capacity development.'
            ],
            [
                'name' => 'Community Development',
                'description' => 'General initiatives aimed at strengthening community resilience, education, and social welfare.'
            ],
            [
                'name' => 'Special Needs Children Advocacy',
                'description' => 'Advocating for the rights, inclusivity, and specialized healthcare requirements of children with special needs.'
            ],
            [
                'name' => 'Optogenetics, Digital Health (including Telemedicine)',
                'description' => 'Utilizing light to control cells in living tissue (Optogenetics) and leveraging digital technologies to enhance healthcare delivery.'
            ],
            [
                'name' => 'Disaster Management and Medical Emergency Response',
                'description' => 'Planning and executing medical responses during natural disasters and health emergencies.'
            ],
            [
                'name' => 'Traditional Indonesian Herbal Medicine',
                'description' => 'Research and application of Jamu and ethnopharmacology, integrating traditional wisdom with modern scientific validation.'
            ],
            [
                'name' => 'Philately and Numismatics',
                'description' => 'Preservation of history and culture through the collection and study of postage stamps and ancient currency.'
            ],
        ];

        foreach ($specialties as $specialty) {
            DB::table('specialties')->insert([
                'profile_id' => $profileId,
                'name' => $specialty['name'],
                'description' => $specialty['description'],
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}