<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Kategori
        
        // Ambil ID kategori untuk dipakai di post
        $techId = DB::table('categories')->where('slug', 'technology')->value('id');
        $healthId = DB::table('categories')->where('slug', 'health')->value('id');

        // Asumsi Profile ID 1 (Dito) ada
        $profileId = 1;

        // 2. Buat Post Dummy
        // Pastikan ID Kategori sudah diambil sebelumnya di seeder
        // $catResearch = ... (Category: Biomedical Research)
        // $catTech = ... (Category: Technology & Health)
        // $catLiteracy = ... (Category: Literacy & Education)

        $posts = [
            // BERITA 1: Fokus pada Spesialisasi Utama (NiBTM & Kanker)
            // Referensi: Disertasi PhD beliau tentang CAR-T Cells dan buku "The Art of Onconomics 5.0"
            [
                'profile_id' => $profileId, // ID Dokter Dito
                'category_id' => 1, // Misal: Biomedical Research
                'title' => 'Masa Depan Pengobatan Kanker: Mengenal Nanoimmunobiotechnomedicine (NiBTM)',
                'slug' => 'masa-depan-pengobatan-kanker-nibtm',
                'excerpt' => 'Bagaimana integrasi nanoteknologi dan imunoterapi membuka harapan baru bagi pasien kanker yang resisten terhadap kemoterapi konvensional.',
                'body' => '
                    <p>Dalam dunia kedokteran modern, kita sedang beralih dari pengobatan "satu ukuran untuk semua" menuju <i>Precision Medicine</i>. Salah satu terobosan terbesar saat ini adalah <strong>Nanoimmunobiotechnomedicine (NiBTM)</strong>.</p>
                    
                    <h4>Apa itu NiBTM?</h4>
                    <p>NiBTM adalah konvergensi ilmu yang menggabungkan nanoteknologi, imunologi, bioteknologi, dan kedokteran klinis. Sebagai peneliti yang mendalami <i>Cell Therapy</i> dan <i>Regeneration Medicine</i>, saya melihat potensi besar dalam penggunaan sel CAR-T yang dimodifikasi.</p>
                    
                    <p>Penelitian terbaru menunjukkan bahwa memanipulasi lingkungan mikro tumor menggunakan partikel nano dapat meningkatkan efektivitas sel imun dalam menyerang sel kanker tanpa merusak jaringan sehat. Ini adalah lompatan besar dibandingkan kemoterapi tradisional.</p>
                    
                    <blockquote>"Kanker bukan lagi vonis mati, melainkan tantangan rekayasa seluler yang bisa kita pecahkan dengan teknologi nano." - Dr. Dito Anurogo</blockquote>
                    
                    <p>Melalui pendekatan ini, kita berharap dapat menciptakan terapi yang lebih personal, minim efek samping, dan memiliki tingkat keberhasilan yang lebih tinggi bagi pasien di Indonesia.</p>
                ',
                'image' => 'posts/nibtm-cancer-research.jpg',
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(2),
            ],

            // BERITA 2: Fokus pada Digital Health & AI
            // Referensi: Sertifikasi "Artificial Intelligence Professional" dan buku "Digital Health Made Easy"
            [
                'profile_id' => $profileId,
                'category_id' => 2, // Misal: Technology & Digital Health
                'title' => 'Revolusi Kesehatan 5.0: Peran AI dalam Telemedicine',
                'slug' => 'revolusi-kesehatan-5-0-ai-telemedicine',
                'excerpt' => 'Kecerdasan buatan bukan untuk menggantikan dokter, melainkan untuk meningkatkan akurasi diagnosis dan jangkauan layanan kesehatan di daerah terpencil.',
                'body' => '
                    <p>Era <i>Health 5.0</i> telah tiba. Bukan lagi sekadar digitalisasi rekam medis, tetapi bagaimana <strong>Artificial Intelligence (AI)</strong> dan <i>Machine Learning</i> menjadi asisten cerdas bagi tenaga medis.</p>
                    
                    <h4>AI Sebagai "Second Opinion"</h4>
                    <p>Dengan algoritma pembelajaran mendalam (<i>Deep Learning</i>), AI kini mampu menganalisis citra radiologi atau patologi anatomi dengan kecepatan dan akurasi yang menakjubkan. Hal ini sangat membantu dokter dalam mendeteksi anomali yang mungkin terlewatkan oleh mata manusia.</p>
                    
                    <p>Namun, tantangan terbesar di Indonesia adalah infrastruktur. Telemedicine yang didukung AI harus bisa menjangkau pelosok nusantara. Inilah mengapa literasi digital bagi tenaga kesehatan menjadi sangat krusial.</p>
                    
                    <p>Integrasi antara <i>wearable devices</i> (seperti jam tangan pintar) dengan sistem pemantauan dokter secara <i>real-time</i> akan menjadi standar baru dalam perawatan pasien penyakit kronis di masa depan.</p>
                ',
                'image' => 'posts/ai-digital-health.jpg',
                'status' => 'published',
                'published_at' => Carbon::now()->subWeeks(1),
            ],

            // BERITA 3: Fokus pada Literasi & Kesehatan Mental
            // Referensi: Peran sebagai "National Ambassador of Literacy" dan sertifikasi "Therapeutic Writing"
            [
                'profile_id' => $profileId,
                'category_id' => 3, // Misal: Literacy & Mental Health
                'title' => 'Therapeutic Writing: Menyembuhkan Luka Batin Lewat Tulisan',
                'slug' => 'therapeutic-writing-menyembuhkan-luka-batin',
                'excerpt' => 'Menulis bukan hanya hobi, tapi metode terapi psikologis yang ampuh untuk meredakan kecemasan dan menata ulang emosi.',
                'body' => '
                    <p>Sebagai pendiri <i>Sahabat Literasi Indonesia</i>, saya sering ditanya: "Mengapa dokter peduli pada literasi?" Jawabannya sederhana: <strong>Membaca dan menulis adalah obat.</strong></p>
                    
                    <h4>Apa itu Therapeutic Writing?</h4>
                    <p><i>Therapeutic Writing</i> adalah bentuk terapi ekspresif di mana seseorang menggunakan tulisan untuk memproses pengalaman traumatis atau emosi yang kompleks. Berbeda dengan menulis jurnal biasa, metode ini terarah dan reflektif.</p>
                    
                    <ul>
                        <li>Meningkatkan kesadaran diri (Self-awareness).</li>
                        <li>Menurunkan tingkat hormon kortisol (stres).</li>
                        <li>Membantu memetakan masalah yang tampak rumit.</li>
                    </ul>
                    
                    <p>Dalam praktik <i>Hematopsychiatry</i>, kesehatan mental sangat mempengaruhi kondisi fisik. Dengan rutin menulis, kita melatih otak untuk lebih resilien terhadap tekanan. Mari mulai menulis, untuk jiwa yang lebih sehat.</p>
                ',
                'image' => 'posts/therapeutic-writing.jpg',
                'status' => 'published',
                'published_at' => Carbon::now()->subMonth(1),
            ],
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert(array_merge($post, [
                'created_at' => now(), 'updated_at' => now()
            ]));
        }
    }
}