<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['kategori' => 'Pendidikan'],
            ['kategori' => 'Novel'],
            ['kategori' => 'Komik']
        ]);
        DB::table('buku')->insert([

            [
                'judul' => 'Building The Business',
                'id_kategori' => '1',
                'pengarang' => 'Jessica Marie Jones',
                'tahun_terbit' => '2014',
                'image' => 'buildingthebusiness.jpeg',
                'viewed' => '565'
            ],
            [
                'judul' => 'Arsitektur Modern V2',
                'id_kategori' => '1',
                'pengarang' => 'Arya Basuki',
                'tahun_terbit' => '2016',
                'image' => 'arsitekturmodern.jpeg',
                'viewed' => '123'
            ],

            [
                'judul' => 'Photography Essentials',
                'id_kategori' => '1',
                'pengarang' => 'Pierre Markus',
                'tahun_terbit' => '2015',
                'image' => 'photography.jpeg',
                'viewed' => '10'
            ],
            [
                'judul' => 'Psikologi Pendidikan',
                'id_kategori' => '1',
                'pengarang' => 'Dr. Skata',
                'tahun_terbit' => '2008',
                'image' => 'psikologi.jpeg',
                'viewed' => '26'
            ],
            [
                'judul' => 'Perencanaan Anggaran Pendidikan',
                'id_kategori' => '1',
                'pengarang' => 'Dr. Skata',
                'tahun_terbit' => '2005',
                'image' => 'perencanaan.jpeg',
                'viewed' => '17'
            ],
            [
                'judul' => 'pendidikan di indonesia',
                'id_kategori' => '1',
                'pengarang' => 'Cucu Sutarsyah',
                'tahun_terbit' => '2016',
                'image' => 'pendidikan.jpeg',
                'viewed' => '18'
            ],
            [
                'judul' => 'Sejarah 1 Indonesia',
                'id_kategori' => '1',
                'pengarang' => 'Prof,Dr.S.Nasution,M.A',
                'tahun_terbit' => '2016',
                'image' => 'sejarah.jpeg',
                'viewed' => '14'
            ],
            [
                'judul' => 'Algoritma Pemograman',
                'id_kategori' => '1',
                'pengarang' => 'Ladya',
                'tahun_terbit' => '2018',
                'image' => 'algoritma.jpeg',
                'viewed' => '30'
            ],
            [
                'judul' => 'Pendidikan Islam',
                'id_kategori' => '1',
                'pengarang' => 'Mokhsin Kaliki',
                'tahun_terbit' => '2015',
                'image' => 'islam.jpeg',
                'viewed' => '20'
            ],
            [
                'judul' => 'Pendidikan Karakter',
                'id_kategori' => '1',
                'pengarang' => 'Dr. Heri Gunawan',
                'tahun_terbit' => '2018',
                'image' => 'pendidikankarakter.jpeg',
                'viewed' => '14'
            ],
            [
                'judul' => 'Statistika dengan Program Komputer',
                'id_kategori' => '1',
                'pengarang' => 'Deep Publish',
                'tahun_terbit' => '2014',
                'image' => 'statistikadenganprogramkomputer.jpg',
                'viewed' => '14'
            ],
            [
                'judul' => 'PHP Komplet',
                'id_kategori' => '1',
                'penerbit' => 'Elex Media Komputindo',
                'tahun_terbit' => '2017',
                'image' => 'phpkomplet.jpg',
                'viewed' => '25'
            ],
            [
                'judul' => 'Bintang',
                'id_kategori' => '2',
                'penerbit' => 'Tere Liye',
                'tahun_terbit' => '2014',
                'image' => 'bintang.jpg',
                'viewed' => '30'
            ],
            [
                'judul' => 'A Place Called Perfect',
                'id_kategori' => '2',
                'penerbit' => 'Helena Duggan',
                'tahun_terbit' => '2015',
                'image' => 'aplacecalledperfect.jpg',
                'viewed' => '15'
            ],
            [
                'judul' => 'The Miraculous',
                'id_kategori' => '2',
                'penerbit' => 'Jess Redlan',
                'tahun_terbit' => '2018',
                'image' => 'miraculous.jpg',
                'viewed' => '16'
            ],
            [
                'judul' => 'Harry Potter',
                'id_kategori' => '2',
                'penerbit' => 'J.K Rowling',
                'tahun_terbit' => '2016',
                'image' => 'harrypotter.jpg',
                'viewed' => '24'
            ],
            [
                'judul' => 'The Miraculous',
                'id_kategori' => '2',
                'penerbit' => 'Jess Redlan',
                'tahun_terbit' => '2018',
                'image' => 'miraculous.jpg',
                'viewed' => '30'
            ],
            [
                'judul' => 'Bumi',
                'id_kategori' => '2',
                'pengarang' => 'Tere Liye',
                'tahun_terbit' => '2018',
                'image' => 'bumi.jpg',
                'viewed' => '30'
            ],
            [
                'judul' => 'The Lying Game',
                'id_kategori' => '2',
                'pengarang' => 'THNKPWTE',
                'tahun_terbit' => '2019',
                'image' => 'lyinggame.jpg',
                'viewed' => '24'
            ],
            [
                'judul' => 'Balance Unlimited',
                'id_kategori' => '3',
                'pengarang' => ' Yasutaka Tsutsui',
                'tahun_terbit' => '2018',
                'image' => 'balanceunlimited.jpg',
                'viewed' => '26'
            ],
            [
                'judul' => 'Blue Lock',
                'id_kategori' => '3',
                'pengarang' => 'Yusuke Nomura',
                'tahun_terbit' => '2022',
                'image' => 'bluelock.jpg',
                'viewed' => '30'
            ],
            [
                'judul' => 'Haikyu!',
                'id_kategori' => '3',
                'pengarang' => 'Furudate',
                'tahun_terbit' => '2019',
                'image' => 'haikyu.jpg',
                'viewed' => '30'
            ],
            [
                'judul' => 'Horimiya',
                'id_kategori' => '3',
                'pengarang' => ' Daisuke Hagiwara ',
                'tahun_terbit' => '2017',
                'image' => 'horimiya.jpg',
                'viewed' => '30'
            ],
            [
                'judul' => 'Kimetsu No Yaiba',
                'id_kategori' => '3',
                'pengarang' => 'Koyoharu Gotōge.',
                'tahun_terbit' => '2016',
                'image' => 'kimetsu.jpg',
                'viewed' => '26'
            ],
            [
                'judul' => 'Your Lie In April',
                'id_kategori' => '3',
                'pengarang' => 'Naoshi Arakawa',
                'tahun_terbit' => '2016',
                'image' => 'yourlieinapril.jpg',
                'viewed' => '21'
            ],
            [
                'judul' => 'Attack On Titan',
                'id_kategori' => '3',
                'pengarang' => 'Hajime Isayama',
                'tahun_terbit' => '2016',
                'image' => 'attack.png',
                'viewed' => '30'
            ],
            [
                'judul' => 'One Piece',
                'id_kategori' => '3',
                'pengarang' => ' Eiichiro Oda',
                'tahun_terbit' => '1997',
                'image' => 'onepiece.jpg',
                'viewed' => '18'
            ],
            [
                'judul' => 'Banan Fish',
                'id_kategori' => '3',
                'pengarang' => 'Akimi Yoshida',
                'tahun_terbit' => '2015',
                'image' => 'bananafish.jpg',
                'viewed' => '16'
            ],
            [
                'judul' => 'Kimi No Nawa',
                'id_kategori' => '3',
                'pengarang' => 'Makoto Shinkai',
                'tahun_terbit' => '2016',
                'image' => 'kiminonawa.jpg',
                'viewed' => '30'
            ],
















        ]);
    }
}
