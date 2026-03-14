<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CvSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // 1. Insert Profile Utama
        $profileId = DB::table('profiles')->insertGetId([
            'full_name' => 'Dito Anurogo',
            'titles' => 'M.D., M.Sc., Ph.D.',
            'summary' => 'Academic researcher and medical doctor with extensive experience in cell therapy, biomedicine, and literacy advocacy.',
            'specialties' => 'Nanoimmunobiotechnomedicine (NIBTM), Nanotechnology, Biomedical Research, Stem Cells, Immunotherapy, Hematopsychiatry, Scientific Writing',
            'email' => null, // Tidak ada di CV
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 2. Insert Educations
        $educations = [
            ['institution' => 'Taipei Medical University', 'degree' => 'Ph.D.', 'field_of_study' => 'International PhD Program in Cell Therapy and Regeneration Medicine', 'location' => 'Taipei, Taiwan', 'start_year' => '2020', 'end_year' => '2024'],
            ['institution' => 'Universitas Gadjah Mada', 'degree' => 'M.Sc.', 'field_of_study' => 'Basic Medicine and Biomedical Sciences', 'location' => 'Yogyakarta, Indonesia', 'start_year' => '2015', 'end_year' => '2017'],
            ['institution' => 'Universitas Islam Sultan Agung', 'degree' => 'M.D.', 'field_of_study' => 'Faculty of Medicine', 'location' => 'Semarang, Indonesia', 'start_year' => '2002', 'end_year' => '2009'],
        ];

        foreach ($educations as $edu) {
            DB::table('educations')->insert(array_merge($edu, ['profile_id' => $profileId, 'created_at' => $now, 'updated_at' => $now]));
        }

        // 3. Insert Experiences
        $experiences = [
            ['position' => 'Lecturer', 'company' => 'Universitas Muhammadiyah Makassar', 'location' => 'South Sulawesi', 'start_date' => 'February 2018', 'end_date' => null, 'is_current' => true],
            ['position' => 'Researcher, Scientist', 'company' => 'Yayasan Inovasi Molekuler Indonesia (IMI)', 'location' => 'Malang', 'start_date' => '2025', 'end_date' => null, 'is_current' => true],
            ['position' => 'Regular Columnist', 'company' => 'AyoSehat (Indonesian Ministry of Health)', 'location' => 'Online', 'start_date' => 'Nov 2023', 'end_date' => null, 'is_current' => true],
            ['position' => 'Columnist', 'company' => 'Antara, The Indonesian News Agency', 'location' => 'Indonesia', 'start_date' => '2016', 'end_date' => 'Present', 'is_current' => true],
            ['position' => 'Researcher', 'company' => 'Center for Islamic Bioethics and Islamic Medical Laws (Biohuki)', 'location' => 'Yogyakarta', 'start_date' => 'August 2017', 'end_date' => 'February 2018', 'is_current' => false],
            ['position' => 'Online Doctor', 'company' => 'Detik.com', 'location' => 'Online', 'start_date' => 'August 2011', 'end_date' => 'October 2017', 'is_current' => false],
            ['position' => 'Reporter', 'company' => 'EFKAGAMA Magazine', 'location' => 'Yogyakarta', 'start_date' => 'July 2014', 'end_date' => 'August 2015', 'is_current' => false],
            // ... (Tambahkan pengalaman lain sesuai kebutuhan)
        ];

        foreach ($experiences as $exp) {
            DB::table('experiences')->insert(array_merge($exp, ['profile_id' => $profileId, 'created_at' => $now, 'updated_at' => $now]));
        }

        // 4. Insert Publications (Sample Data - sebagian dari daftar panjang)
        $publications = [
            ['title' => 'The art of nanoimmunobiotechnomedicine in depression management', 'category' => 'Journal', 'year' => '2025', 'publisher_or_journal' => 'Advanced Pharmaceutical Bulletin', 'link' => 'https://doi.org/10.34172/apb.025.42757'],
            ['title' => 'The art of onconomics 5.0', 'category' => 'Book', 'year' => '2024', 'publisher_or_journal' => 'BOHR Publishers', 'link' => 'https://www.bohrpub.com'],
            ['title' => 'Communication 6.0: The art of effective communication in healthcare practice', 'category' => 'Book', 'year' => '2024', 'publisher_or_journal' => 'CAHAYA HARAPAN', 'link' => null],
            ['title' => 'Integrative Bioinformatics and Statistical Approaches for Identifying Prognostic Biomarkers... in Breast Cancer', 'category' => 'Journal', 'year' => '2025', 'publisher_or_journal' => 'EIGEN MATHEMATICS JOURNAL', 'link' => 'https://doi.org/10.29303/emj.v8i1.277'],
            // ... Tambahkan publikasi lainnya dari CV
        ];

        foreach ($publications as $pub) {
            DB::table('publications')->insert(array_merge($pub, ['profile_id' => $profileId, 'created_at' => $now, 'updated_at' => $now]));
        }

        // 5. Insert Certifications (Sample Data - list ini sangat panjang di CV)
        $certifications = [
            'Master Trainer of Advanced Biomedical and Health Professional (MTABHP)',
            'Diploma in Modern Applied Psychology',
            'Certified Business Operations Associate (CBOA)',
            'Certified Excellent Teacher',
            'Certified Excellent Trainer Professional (CETP)',
            'Certified Great Leadership',
            'Certified Public Speaking Professional',
            'Internationally Accredited CPD Diploma in Nutrition',
            'Certified Hypnotherapy for Counseling Practitioner (CHCP)',
            'Certified NLP for Excellent Teaching (CNET)',
            // ... Masukkan 50+ sertifikasi lainnya jika diperlukan
        ];

        foreach ($certifications as $certName) {
            DB::table('certifications')->insert([
                'profile_id' => $profileId,
                'name' => $certName,
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }

        // 6. Insert Awards
        $awards = [
            ['title' => 'Peace Ambassador', 'issuer' => 'World Wide Peace Organization', 'year' => '2022', 'description' => 'In recognition of contributions to peacebuilding initiatives.'],
            ['title' => 'National Ambassador of Literacy', 'issuer' => 'Ministry of Education and Culture', 'year' => '2019', 'description' => null],
            ['title' => 'The Most Inspiring Student', 'issuer' => 'Gadjah Mada Awards', 'year' => '2015', 'description' => null],
            ['title' => 'First Winner', 'issuer' => 'World Young Doctors Organization Essay Contest', 'year' => '2013', 'description' => null],
        ];

        foreach ($awards as $award) {
            DB::table('awards')->insert(array_merge($award, ['profile_id' => $profileId, 'created_at' => $now, 'updated_at' => $now]));
        }

        // 7. Organizations
        $organizations = [
            ['role' => 'Chairman of the Health Commission', 'organization_name' => 'Overseas Indonesian Students Association Alliance (OISAA)', 'period' => '2024'],
            ['role' => 'Founder and CEO', 'organization_name' => 'Sahabat Literasi Indonesia', 'period' => 'Present'],
            ['role' => 'Member', 'organization_name' => 'Ikatan Dokter Indonesia (IDI)', 'period' => 'Present'],
            ['role' => 'Member', 'organization_name' => 'International Indonesian Scientists Association (I-4)', 'period' => 'Present'],
        ];

        foreach ($organizations as $org) {
            DB::table('organizations')->insert(array_merge($org, ['profile_id' => $profileId, 'created_at' => $now, 'updated_at' => $now]));
        }
    }
}