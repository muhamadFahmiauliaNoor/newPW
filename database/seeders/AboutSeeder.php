<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\About::create([
            'title' => 'Sekolah Tinggi Teknologi Cipasung',
            'content' => 'Didirikan atas prakarsa Drs. KH. Abdul Chobir, MT. dibawah Yayasan Pesantren Cipasung, Tasikmalaya.
Sekolah Tinggi Teknologi Cipasung (STT Cipasung) merupakan lembaga pendidikan tinggi formal di bawah Yayasan Pondok Pesantren Cipasung. Pesantren Cipasung didirikan tahun 1931 oleh almarhum KH. Ruhiat, terletak di Desa Cipakat Kecamatan Singaparna Kabupaten Tasikmalaya, sekitar 100 km dari Kota Bandung. 

Dalam Perkembangan selanjutnya setelah KH. Ruhiat wafat (1931-1977), perjuangan beliau diteruskan oleh KH. Moh. Ilyas Ruhiat (1977-2007), yang pernah menjabat sebagai Rais Aam PBNU (1994-1999), KH Dudung Abdul Halim, MA. (2007-2012), dan sekarang dilanjutkan oleh KH. Drs. A. Bunyamin Ruhiat, M.S.I.

STT Cipasung didirikan pada tahun 1997, melengkapi lembaga-lembaga pendidikan yang sudah ada di lingkungan Pondok Pesantren Cipasung, mulai dari Paud, TK, MI, SMPI, MTs, SMAI, MAN, dan IAIC.

Pemrakarsa utama berdirinya Sekolah Tinggi Teknologi Cipasung adalah Drs. H. Abdul Chobir, MT atas anjuran Pimpinan Pondok Pesantren Cipasung pada masa itu, yaitu KH. Moh. Ilyas Ruhiat. Pendirian kampus ini, juga atas bantuan dan arahan dari tim Institut Teknologi Bandung, serta dorongan dari Prof. Dr. Ginanjar Kartasasmita dan Ir. Fadel Muhammad ketika melakukan kunjungan ke Pondok Pesantren Cipasung.',
        ]);
    }
}
