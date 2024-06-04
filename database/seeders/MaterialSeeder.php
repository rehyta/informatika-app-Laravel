<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'course_id' => 1,
            'title' => 'Perkenalan bahasa pemrograman',
            'prompt' => "kita akan mengenali apa itu bahasa pemrograman",
            'soal'=>'',
            'slug'=> 'perkenalan-bahasa-pemrograman',
            'content' => '<div style="font-size: 16px">
            <p>Di era ini, pemrograman sudah menjadi kebutuhan dasar di dunia industri. Di zaman yang apa-apa sudah serba otomatis, pemrograman adalah keterampilan yang sangat berharga. </p>
            <p>Tenang saja, ngoding tidak serumit yang kamu lihat di TV atau media <i>maenstream,</i> semua orang bisa ngoding kok...</p>
            
            <p>Sekarang, kita akan belajar melalui konsep-konsep dasar pemrograman dan memberikan pengalaman praktis dalam menulis kode.</p>
            <p>tapi jangan buru-buru, sebelum mulai praktik buat ngoding, kita harus tau dulu, <b>apa sih pemrograman itu?</b></p>
            </div>
            <div class="splash text-center m-3">                          
                <img src="https://source.unsplash.com/grayscale-photo-of-man-using-laptop-coding-4m7gmLNr3M0/640x426" class="img-fluid rounded-start" alt="...">
            </div>
            <div style="font-size: 16px">
                <p>Pemrograman komputer adalah proses merancang, menulis, dan menguji serangkaian instruksi yang dimengerti oleh komputer.
                    Tujuan utamanya adalah untuk <u>mengarahkan</u> komputer agar melakukan tugas tertentu. pemrograman melibatkan pengembangan
                    algoritma, penggunaan bahasa pemrograman, serta pemahaman tentang logika dan struktur data untuk menciptakan perangkat 
                    lunak (software) yang dapat menjalankan fungsi tertentu sesuai kebutuhan pengguna.
                </p>
            </div>
            <div style="font-size: 16px">
                <h5 class="isi">Kenapa sih kita harus belajar pemrograman?</h5>
                <p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Keterampilan masa depan,</b> Pemrograman adalah salah satu
                                        keterampilan paling penting dalam era ekonomi digital saat ini. banyak pekerjaan dan industri bergantung pada pemrograman.
                                        sehingga orang yang memiliki pemahaman tentang bahasa pemrograman cenderung memiliki peluang karir yang lebih baik.</li>
                                        <li class="list-group-item"><b>Kemampuan memecahkan masalah,</b>dalam mempelajarai pemrograman, kita secara tidak langsung
                                        sekaligus melatih pemikiran kritis dan kemampuan pemecahan masalah. hal ini tidak cuma berguna dalam dunia teknologi, tapi juga diterapkan dalam berbagai aspek kehidupan
                                        sehari-hari.</li>
                                        <li class="list-group-item"><b>Pengembangan keterampilan Logika,</b> pemrograman melibatkan penggunaan logika untuk merancang algoritmanya. hal ini membantu
                                        dalam mengembangkan pemikiran analitis dan logika. tujuan ini juga bisa diintegrasikan dalam berbagai mata pelajaran seperti matematika dan sains. 
                                        secara tidak langsung, ini dapat memperkaya pengalaman belajar dalam berbagai bidang.</li>
                                        <li class="list-group-item"><b>Pemahaman Teknologi,</b> saat ini pemahaman tentang bagaimana teknologi bekerja adalah keterampilan yang sangat dibutuhkan. 
                                        ini membantu agar dapat menjadi pengguna yang cerdas dan sadar teknologi</li>
                                    </ul>
                                </p>
            </div>
            <div style="font-size: 16px">
                <h5 class="judul">Apa aja sih jenis bahasa dalam pemrograman itu?</h5>
                <p> umumnya, bahasa pemrograman itu terbagi atas dua kelompok berdasarkan tingkat pemahaman oleh mesin dan manusia. semakin mudah dibaca mesin, semakin tinggi tingkatnya.
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>
                                <b>Bahasa pemrograman tingkat tinggi</b> <br>
                                Tingkat abstraksi dalam bahasa pemrograman ini tinggi. Maksudnya, bahasa ini lebih dekat dengan bahasa manusia sehingga mudah dibaca dari sudut pandang manusia. 
                                hal ini karena bahasa ini mendukung programmer (orang yang membuat program) 
                                agar bisa fokus pada logika dalam algoritma daripada detail detail yang rumit. <br>
                                contohnya bahasanya adalah Python, JavaScript, R.
                            </p>
                        </li>
            
                        <li class="list-group-item">
                            <p>
                                <b>Bahasa pemrograman tingkat rendah</b> <br>
                                Artinya, programmer lebih butuh banyak detail teknis. bahasa pemrograman ini lebih dekat dengan bahsa mesin.
                                program yang ditulis dalam bahasa tingkat rendah biasanya memiliki kinerja yang lebih efisien karena dapat 
                                mengoptimalkan penggunaan sumber daya secara langsung. <br>
                                contoh bahasanya adalah C, C++, Assembly. <br>
                            </p>
                        </li>
                    </ul>
                </p>
            </div>
            <div style="font-size: 16px">
                <h5 class="closing">Apakah sulit belajar pemrograman itu?</h5>
                <p>
                    Belajar apapun, tentu akan sulit jika hanya sekedar membaca tanpa memahami artinya. supaya bisa lebih mudah mempelajari pemrograman, 
                    pertama-tama tetapkan tujuan yang jelas dan realistis. kenapa anda belajar hal ini? tuntutan sekolah atau keinginan sendiri? kemudian, bisa dimulai dengan
                    memahami konsep-konsep dasar seperti variable, tipe data dan stuktur kontrol. jangan cuma belajar dari satu sumber. bisa gunakan sumber lain agar pengetahuan semakin luas.
                    selalu rutin berlatih dan terlibat dalam proyek-proyek kecil untuk mengaplikasikan konsep yang telah dipelajari. jangan takut melakukan kesalahan, karena dalam dunia pemrograman,
                    justru orang yang bisa menulis program tanpa salah dalam satu kali percobaan itu sangat langka (nyaris mustahil. kalau ada, mungkin dia adalah dewa, haha...). tetap terbuka 
                    terhadap teknologi baru dan jaga keseimbangan antara jam belajar dan istirahat. belajar pemrograman adalah perjalanan berkelanjutan, nikmati saja setiap langkahnya
                </p>
            </div>
            <div style="font-size: 16px">
                <h5 class="judul">Kenapa disini kita belajar pemrograman menggunakan C++?</h5>
                <p>
                    Belajar pemrograman dasar menggunakan C++ memiliki berbagai keuntungan signifikan. Memahami C++ memberikan dasar yang kuat untuk memahami 
                    konsep pemrograman berorientasi objek, dan kemudian memudahkan migrasi ke bahasa yang lain. kesempatan karir di industri teknologi dan 
                    pengembangan perangkat lunak juga meningkat dengan penguasaan C++. selain itu, C++ banyak digunakan dalam pengembangan game, sistem operasi, 
                    dan aplikasi berkinerja tinggi. oleh karena itu, belajar C++ dapat membuka pintu untuk berbagai peluang pengembangan dan mendukung kemajuan karir di dunia pemrograman.
                </p>
            </div>',
        ]);



        Material::create([
            'course_id' => 2,
            'title' => 'Struktur Data C++',
            'prompt' => "kita akan mempelajari bagaimana struktur dasar C++",
            'soal'=>'
                <p> Seperti program "hello world",
                    <div class="contohbox border m-3" style="border-radius: 15px">
                        <div class="box m-1 bg-light" >
                            <pre>
                                #include <iostream>
                                    using namespace std;
                                    
                                    int main() {
                                        cout << "Hello World!";
                                        return 0;
                                    }
                            </pre>
                        </div>
                    </div>
                    Buatlah program di kotak input dengan code yang akan menghasilkan output :
                    <div class="contohbox border m-3" style="border-radius: 15px">
                        <div class="box m-1 bg-light" >
                            <pre>
                                saya sedang belajar informatika
                                saya belajar dasar pemrograman
                            </pre>
                        </div>
                    </div>
                    setelah menulis kode, klik tombol <b>RUN</b> yang ada diatas kotak input untuk 
                    menjalankan kode anda dan lihatlah hasil yang muncul di kotak output
                </p>
             ',
            'slug' => 'struktur-data-c++',
            'content' => '<div style="font-size: 16px">
                <p>Pada dasarnya, semua bahasa pemrograman itu sama saja. ada variable, operasi, loop, dll. namun, aturan penulisan (syntax) setiap bahasa
                    pemrograman itu berbeda.
                </p>
                </div>
                <div style="font-size: 16px">
                    <p>
                        Dalam pemrograman C++, ada 3 unsur paling dasar dan sederhana yang terdiri dari : <br>
                        <br>1. Bagian Include <br>
                        <br>
                        2. Bagian Namespace <br>
                        <br>
                        3. Bagian fungsi <br> 
                    </p> 
                    <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                        <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                        <div class="box m-5 bg-light" >
                            <pre>
                                #include < iostream >
                                
                                using namespace std;
                                            
                                int main(){
                                    cout << "Hello world!" << endl;
                                    return 0;
                                }
                            </pre>
                        </div>
                    </div>
                    <p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b> Bagian Include</b> Bagian ini mendefinisikan <i>library</i> apa saja yang akan digunakan dalam program. 
                            pada contoh diatas, kita menggunakan library <mark>iostream</mark> (baris ke 1). library ini berisi fungsi-fungsi <mark> cout dan cin </mark> yang akan berguna
                            untuk melakukan input dan output.</li>
                            <li class="list-group-item"><b> Bagian Namespace</b> Bagian ini sebenarnya tidak wajib. Pada contoh diatas, kita menggunakan <mark> namespace std </mark> karena fungsi-fungsi <i>iostream</i> dibungkus dalam namespace std <br>
                            apabila kita tidak menggunakan namespace std, maka untuk menggunakan fungsi <mark> cout dan cin </mark> yang tersedia dalam <i>iostream</i> harus diawali dengan <mark> std:: </mark><br>
                            <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                                <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        #include < iostream >
                                            
                                        int main(){
                                        std::cout << "Hello world!" << endl;
                                        return 0;
                                        }
                                    </pre>
                                </div>
                            </div>
                            <br>
                            Jika tidak mau menggunakan <mark>std::</mark> terus menerus, maka gunakanlah <mark>std</mark> di <i>namespace</i></li>
                            <li class="list-group-item"><b>Bagian fungsi</b> Bagian ini adalah bagian utama yang bersifat wajib. ini adalah bagian terpenting. disinilah kita akan menulis kode program.
                            <br> pada contoh diatas, kita menggunakan fungsi <u>main.</u>
                            fungsi <mark>main()</mark> adalah fungsi yang akan dieksekusi pertama saat program dibuka. selain fungsi <mark>main()</mark> kita bisa membuat fungsi lain.<br>
                            <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                                <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        #include < iostream >
                                            using namespace std;
                                            
                                            int main(){
                                            cout << "Hello world!" << endl;
                                            return 0;
                                            }
                                            
                                            void hai(){
                                            cout << "Hello apa kabar?" << endl;
                                            }
                                    </pre>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </p>
                </div>
                
                <div class="mt-3" style="font-size: 16px"> 
                    <h2 style="font-size: 20">PENULISAN STATEMENT DAN KONDISI</h2>
                    <p>Statement dan kondisi adalah kumpulan kode yang ditulis dalam bagian fungsi</p>
                    <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                        <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                        <div class="box m-5 bg-light" >
                            <pre>
                                #include < iostream >
                                    using namespace std;
                                    
                                    int main(){
                                    cout << "Hello world!" << endl;
                                    cout << "Hari ini saya belajar c++" << endl;
                                    cout << "Belajar C++ itu mudah";
                                    return 0;
                                    }
                            </pre>
                        </div>
                    </div>
                </div>
                
                <div class="mt-3" style="font-size: 16px"> 
                    <h2 style="font-size: 20">PENULISAN KOMENTAR</h2>
                    <p>Komentar adalah bagian kode yang akan diabaikan dalam eksekusi. Ada dua cara menulis komentar dalam C++ : <br>
                    1. menggunakan garis miring double (//) ini digunakan untuk memberikan komentar yang cuma sebaris</p>
                    <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                        <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                        <div class="box m-5 bg-light" >
                            <pre>
                                #include < iostream >
                                    using namespace std;
                                    //ini adalah komentar satu baris
                                    int main(){
                                    cout << "Hello world!" << endl;
                                    return 0;
                                    }
                            </pre>
                        </div>
                    </div>
                    2. menggunakan garis miring bintang (/**/) ini digunakan untuk memberikan komentar yang lebih dari sebaris</p>
                    <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                        <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                        <div class="box m-5 bg-light" >
                            <pre>
                                #include < iostream >
                                    using namespace std;
                
                                    /*saya membuat komentar yang lebih dari sebaris
                                    setelah ini, saya akan membuat program sederhana 
                                    menggunakan cout di dalam library iostream*/
                
                                    int main(){
                                    cout << "Hello world!" << endl;
                                    return 0;
                                    }
                            </pre>
                        </div>
                    </div>
                </div>'
        ]);



        Material::create([
            'course_id' => 3,
            'title' => 'Variable dan Tipe Data',
            'prompt' => "kita akan mempelajari bagaimana membuat variable menyesuaikan tipe data dalam bahasa pemrograman",
            'soal'=>'
                <p> Buatlah program dengan variable ketentuan seperti :
                    <div class="contohbox border" style="border-radius: 15px">
                        <div class="box m-5 bg-light" >
                            <pre>
                                nama : Suwarno
                                pekerjaan : petani
                                lama bekerja : 12 tahun
                            </pre>
                        </div>
                    </div>
                    Buatlah output menjadi :
                    <div class="contohbox border" style="border-radius: 15px">
                        <div class="box m-5 bg-light" >
                            <pre>
                                "Nama beliau Pak Suwarno. 
                                Beliau bekerja sebagai petani selama 12 tahun."
                            </pre>
                        </div>
                    </div>
                </p>',
            'slug' => 'variable-dan-tipe-data',
            'content' => '<div class="container md-4 m-3">
            <div class="opening">
                <h2 style="font-size: 32px">Variable dan Tipe Data</h2>
                <p>Kita sudah belajar bagaimana menampilkan output. sekarang, bagaimana kalau kita mulai belajar
                    tentang pemberian <a href="#variable">variable,</a> dan <a href="#tipeData">Tipe Data</a> pada program?
                </p>
            </div>
        
        
            <div id="variable" style="font-size: 16px">
                <h2 style="font-size: 32px">Variable</h2>
                <p>jika diibaratkan sesuatu, Variable bisa diibaratkan seperti suatu "wadah" yang menyimpan data. coba bayangkan sebuah keranjang buah.
                    kemudian, bayangkan di dalam keranjang itu adalah berbagai jenis buah. dalam perumpaan ini, keranjang adalah variable dan buah-buahan adalah data. <br>
                    jika dituliskan dalam data, contoh tersebut bisa dibuat seperti ini : <br>
                    <div class="contohbox border p-0" style="border-radius: 15px">
                        <div class="box bg-light" >
                            <pre>
            
                                keranjang = apel, jeruk, pisang, melon
                            </pre>
                        </div>
                    </div>
                    namun dalam bahasa C++, ada aturan yang mengharuskan adanya penulisan <a href="#tipeData">Tipe Data</a> pada program. Jadi, aturan penulisan variable dalam C++ itu adalah
                    <br>
                    <div class="contohbox border p-0" style="border-radius: 15px">
                        <div class="box bg-light" >
                            <pre>
                                
                                TipeData NamaVariable = Data ;
                            </pre>
                        </div>
                    </div>
                    <div class="m-3 p-3 bg-info bg-opacity-10 border border-info">
                        <p>jangan lupa selalu mengakhiri statement dengan titik koma (;)</p>
                    </div>
                </p>
            </div>
            
            <div id="tipeData" style="font-size: 16px">
                <h2 style="font-size: 32px">Tipe Data</h2>
                <p>jika diibaratkan sesuatu, Variable bisa diibaratkan seperti suatu "wadah" yang menyimpan data. coba bayangkan sebuah keranjang buah.
                    kemudian, bayangkan di dalam keranjang itu adalah berbagai jenis buah. dalam perumpaan ini, keranjang adalah variable dan buah-buahan adalah data. <br>
                    jika dituliskan dalam data, contoh tersebut bisa dibuat seperti ini : <br>
                    <div class="contohbox border p-0" style="border-radius: 15px">
                        <div class="box bg-light" >
                            <pre>
            
                                keranjang = apel, jeruk, pisang, melon
                            </pre>
                        </div>
                    </div>
                    namun dalam bahasa C++, ada aturan yang mengharuskan adanya penulisan <a href="#tipeData">Tipe Data</a> lebih dulu, lalu diikuti nama variablenya. Jadi, aturan penulisan variable dalam C++ itu adalah :
                    <br>
                    <div class="contohbox border p-0" style="border-radius: 15px">
                        <div class="box bg-light" >
                            <pre>
                                
                                TipeData NamaVariable = Data ;
                            </pre>
                        </div>
                    </div>
                    <p>macam-macam tipe data yang umum digunakan bisa kita lihat pada tabel berikut. <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Nama tipe data</th>
                                <th scope="col">Ukuran dalam Memori</th>
                                <th scope="col">Rentang Nilai</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Char</td>
                                <td>1 byte</td>
                                <td>-127 sampai 127 atau 0 sampai 255</td>
                            </tr>
                            <tr>
                                <td>int</td>
                                <td>4 bytes</td>
                                <td>-2147483648 sampai 2147483647</td>
                            </tr>
                            <tr>
                                <td>float</td>
                                <td>4 bytes</td>
                                <td>+/- 3.4e +/- 38 (~7 digits)</td>
                            </tr>
                            <tr>
                                <td>double</td>
                                <td>8 bytes</td>
                                <td>+/- 1.7e +/- 308 (~15 digits)</td>
                            </tr>
                            <tr>
                                <td>boolean</td>
                                <td>4 bytes</td>
                                <td><mark>true</mark> or <mark>false</mark></td>
                            </tr>
            
                            </tbody>
                        </table>
                    </p>
                    <div class="m-3 p-3 bg-info bg-opacity-10 border border-info">
                        <p>kita bisa menggunakan tipe data <i>auto</i> sebagai placeholder untuk tipe data yang belum jelas</p>
                    </div>
                    <div class="m-3 p-3 bg-info bg-opacity-10 border border-info">
                        <p>jangan lupa selalu mengakhiri statement dengan titik koma (;)</p>
                    </div>
                </p>
            </div>
            
            <div class="contoh">
            
                    <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                        <h5 class="mx-5 my-2">Contohnya jika memasukkan program :</h5>
                        <div class="box m-5 bg-light" >
                            <pre>
                                #include <iostream>
            
                                    using namespace std;
                                    
                                    int main(){
                                    
                                    // deklarasi tipe data variabel
                                    string nama = "Bu Rudi";
                                    int umur = 43;
                                    
                                    
                                    // --- proses output ---
                                    cout << "Halo" << nama << " Selamat ulang tahun yang ke-";
                                    cout << umur << endl;
                                    
                                    return 0;
                                    
                                    }
                            </pre>
                        </div>
                    </div>
                    <p>maka akan muncul output : </p>
                    <pre> Halo Bu Rudi Selamat ulang tahun yang ke-43</pre>
                    <p>ini dikarenakan variable nama menyimpan data berupa string "Bu Rudi" dan variable umur menyimpan data berupa interger (int) berupa angka 43 </p>
                </div>
            </div>'
        ]);



        Material::create([
            'course_id' => 4,
            'title' => 'Operator dan Aritmatika',
            'prompt' => "kita akan mempelajari bagaimana penggunaan operator dan aritmatika dalam bahasa pemrograman",
            'soal'=>'
                <p> Seperti program dengan ketentuan :
                    <div class="contohbox border" style="border-radius: 15px">
                        <div class="box m-5 bg-light" >
                            <p>
                                jarak rumah ke sekolah = 12 KM <br>
                                waktu tempuh = 30 menit
                            </p>
                        </div>
                    </div>
                    Buatlah program dengan hasil output berupa kecepatannya!
                    <div class="contohbox border" style="border-radius: 15px">
                        <div class="box m-5 bg-light" >
                            <p>
                                #include _______________
                                #include <string>  // Untuk menggunakan std::string
                                using namespace std;
                                
                                int main() {
                                    ___ jarak = ___;
                                    ___ waktu = ___;
                                
                                    // Menampilkan informasi
                                    cout << "Kecepatan: " << _______________ << " km/jam" << endl;
                                
                                    return 0;
                                }
                                
                            </p>
                        </div>
                    </div>
                </p>',
            'slug' => 'operator-dan-aritmatika',
            'content' =>'
                    <div class="container md-4 m-3">
                    <div class="opening">
                        <h2 style="font-size: 32px">Operator dan Aritmatika</h2>
                        <p>Kita sudah belajar bagaimana membuat variable. Sekarang, bagaimana cara menerapkannya itu dalam <a href="#operator">variable,</a> dan <a href="#aritmatika">aritmatika</a>?
                        </p>
                    </div>
                        <div id="opeator" style="font-size:16px">
                    <h2 style="font-size: 20px">OPERATOR</h2>
                    <p>
                        <b>apa sih operator itu?</b>
                        <br>
                        Operator itu sebuah simbol. simbol yang digunakan untuk mempermudah operasi tertentu. <br>
                        misal : <br>
                        <div class="contohbox border" style="border-radius: 15px">
                            <div class="box m-5 bg-light" >
                                <pre>
                                    x > y
                                </pre>
                            </div>
                        </div>
                        Operator bisa digunakan untuk membandingkan dua nilai variable. misalnya: <br>
                        <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                            <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                            <div class="box m-5 bg-light" >
                                <pre>
                                    #include <iostream>
                                        using namespace std;
                                        
                                        int main(){
                                            int a = 4, b = 3;
                                            bool hasil;
                                        
                                            cout << "a = " << a << endl;
                                            cout << "b = " << b << endl;
                                        
                                            // menggunakan operator pembanding
                                            hasil = a > b;
                                            cout << "a > b = " << hasil << endl;
                                        
                                            hasil = a < b;
                                            cout << "a < b = " << hasil << endl;
                                        
                                        
                                            return 0;
                                        }
                                </pre>
                            </div>
                        </div>
                        maka output yang dikeluarkan akan seperti ini : <br>
                        <div class="contohbox border" style="border-radius: 15px">
                            <div class="box m-5 bg-light" >
                                <pre>
                                    a = 4
                                    b = 3
                                    a > b = 1
                                    a < b = 0
                    
                                </pre>
                            </div>
                        </div> 
                        nilai 1 yang dihasilkan dari <mark>a > b = 1</mark> artinya bahwa <mark>a > b </mark> bernilai true (1). 
                        sementara <mark>a < b = 0</mark> bernilai false (0) <br>
                        simbol yang digunakan dalam operasi ini bisa menggunakan : <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Simbol</th>
                                <th scope="col">Nama Operator</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>></td>
                                <td>Lebih besar</td>
                            </tr>
                            <tr>
                                <td><</td>
                                <td>Lebih kecil</td>
                            </tr>
                            <tr>
                                <td>==</td>
                                <td>Sama dengan</td>
                            </tr>
                            <tr>
                                <td>!=</td>
                                <td>Tidak sama dengan</td>
                            </tr>
                            <tr>
                                <td>>=</td>
                                <td>Lebih besar Sama dengan</td>
                            </tr>
                            <tr>
                                <td><=</td>
                                <td>Lebih kecil Sama dengan</td>
                            </tr>
                            </tbody>
                        </table>

                        Selain untuk perbandingan, operator juga bisa digunakan untuk menerapkan konsep logika matematika. <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Simbol</th>
                                <th scope="col">Nama Operator</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>&&</td>
                                <td>Logika AND</td>
                            </tr>
                            <tr>
                                <td>||</td>
                                <td>Logika OR</td>
                            </tr>
                            <tr>
                                <td>!</td>
                                <td>Negasi/Kebalikan</td>
                            </tr>
                            </tbody>
                        </table>
                        Misalnya seperti ini : <br>
                        <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                            <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                            <div class="box m-5 bg-light" >
                                <pre>
                                    #include <iostream>
                                        using namespace std;
                                        
                                        int main(){
                                            int a = 1; // true
                                            int b = 0; // false
                                            bool hasil;
                                        
                                            cout << "a = " << a << endl;
                                            cout << "b = " << b << endl;
                                        
                                            // logika AND
                                            hasil = a && b;
                                            cout << "a && b = " << hasil << endl;
                                        
                                            // logika OR
                                            hasil = a || b;
                                            cout << "a || b = " << hasil << endl;
                                        
                                            // logika NOT
                                            cout << "!a = " << !a << endl;
                                        
                                            return 0;
                                        }
                                </pre>
                            </div>
                        </div>
                        hasilnya akan menjadi : <br>
                        <div class="contohbox border" style="border-radius: 15px">
                            <div class="box m-5 bg-light" >
                                <pre>
                                    a = 1
                                    b = 0
                                    a && b = 1
                                    a || b = 1
                                    !a = 0
                                </pre>
                            </div>
                        </div>
                        nilai 1 dihasilkan oleh pernyataan bersifat <mark>true</mark> dan 0 dikeluarkan oleh pernyataan bersifat <mark>false</mark>
                    </p>
                </div>



                <div id="aritmatika" style="font-size: 16px">
                <p>
                    <b>Bagaimana sih menggunakan aritmatika dengan variable?</b>
                    Dalam program C++, operasi aritmatika bisa digunakan dengan menggunakan simbol : <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Simbol</th>
                            <th scope="col">Nama Operator</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>+</td>
                            <td>Penjumlahan</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Pengurangan</td>
                        </tr>
                        <tr>
                            <td>*</td>
                            <td>perkalian</td>
                        </tr>
                        <tr>
                            <td>/</td>
                            <td>Pembagian</td>
                        </tr>
                        <tr>
                            <td>%</td>
                            <td>Sisa Bagi</td>
                        </tr>
                        </tbody>
                    </table>
                    Bagaimana cara pakainya? 
                    <div class="contohbox bg-secondary p-1" style="border-radius: 15px">
                        <h5 class="mx-5 my-2">Contohnya seperti ini :</h5>
                        <div class="box m-5 bg-light" >
                            <pre>
                                #include <iostream>
                                    using namespace std;
                                    
                                    int main(){
                                    
                                        int a, b, c;
                                        a = 3;
                                        b = 4;
                                    
                                        // menggunakan operator penjumlahan
                                        c = a + b;
                                    
                                        cout << "Hasil a + b = " << c << endl;
                                    
                                        return 0;
                                    }
                            </pre>
                        </div>
                    </div>
                    maka hasilnya :
                    <div class="contohbox border" style="border-radius: 15px">
                        <div class="box m-5 bg-light" >
                            <pre>
                                Hasil a + b =7
                            </pre>
                        </div>
                    </div>
                    <div class="m-3 p-3 bg-info bg-opacity-10 border border-info">
                        <p>Dalam kode, apabila menggunakan tanda petik ("") saat menulis data, sistem akan membacanya sebagai nilai string.
                            <br>
                            misal :
                            <div class="contohbox border" style="border-radius: 15px">
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        a = 4 + 4;
                                        b = "4" + "2";
                                        c = "4" + 1 + 2
                                    </pre>
                                </div>
                            </div>
                            hasilnya akan seperti : 
                            <div class="contohbox border" style="border-radius: 15px">
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        a = 8
                                        b = 42
                                        c = 43
                                    </pre>
                                </div>
                            </div>
                        </p>
                    </div>
                </p>
                </div>





                    <div class="contoh">
                        <p>Apabila kita menggunakan int, artinya tipe data akan dibaca secara interger</p>
                        <pre>
                            #include < iostream>
                                using namespace std;
                                
                                int main() {
                                    int A = 2;
                                    int B = 3;
                                    C = A + B;

                                    cout << C;

                                    return 0;
                                }
                        </pre>
                        <p>outputnya adalah :
                            <pre>
                                5
                            </pre>
                        </p>
                        <p>namun, apabila pakai tipe data char, data akan dibaca char</p>
                        <pre>
                            #include < iostream>
                                using namespace std;
                                
                                int main() {
                                    char A = 2;
                                    char B = 3;
                                    C = A+B;

                                    cout << A;

                                    return 0;
                                }
                        </pre>
                        <p>outputnya adalah :
                            <pre> 
                                23 
                            </pre>
                        </p>
                        <p>berbeda kan?</p>
                    </div>

                    <div class="tugas">
                        <p>buatlah variable A, B, C dan variable D yang berisi variable ABC.</p>
                    </div>
                </div>'
        ]);



        Material::create([
            'course_id' => 5,
            'title' => 'Kondisi dan Percabangan',
            'prompt' => "kita akan mempelajari bagaimana menerapkan kondisi dan percabangan dalam program",
            'soal'=>'<p> Andi mendapat nilai 73 dalam ujiannya. Sementara, 
                    Syarat kelulusan adalah nilai yang diperoleh Andi harus lebih besar atau sama dengan 60.

                    Buatlah program sederhana dalam bahasa pemrograman C++ untuk membantu Andi menentukan apakah 
                    dia lulus atau tidak. Program harus menampilkan pesan "Anda lulus!" jika nilai lebih besar atau 
                    sama dengan nilai KKM, atau pesan "Anda tidak lulus." jika nilai kurang dari KKM.
                    <div class="contohbox border" style="border-radius: 15px">
                        <div class="box m-5 bg-light" >
                            <pre>
                                #include <iostream>
                                    using _______________;
                                    
                                    int main() {
                                        // Deklarasi variabel
                                        ___ nilaiUjian = _______________
                                    
                                        // Menentukan apakah Andi lulus atau tidak
                                        if (nilaiUjian _______________) {
                                            cout << "Anda lulus!" << endl;
                                        } _______________ {
                                            cout << "Anda tidak lulus.";
                                        }
                                    
                                        return 0;
                                    }
                                    
                            </pre>
                        </div>
                    </div>
                </p>',
            'slug' => 'kondisi-dan-percabangan-opening',
            'content' =>' <p> Ketika kita dihadapkan dengan pengambilan suatu keputusan, tentunya kita harus evaluasi terlebih dahulu pilihan-pilihan yang ada menyesuaikan kondisi.
            di dalam bahasa pemrograman, pengambilan keputusan juga bisa menggunakan penerapan konsep <i>if-else.</i> konsep ini berlaku pada hampir
            semua bahasa pemrograman.</p>
            <b style="font-size: 20px">IF</b>
                        <p>
                            <br>
                            IF bisa dianologikan seperti "jika memenuhi kondisi, lakukan A. jika tidak, tidak ada apa-apa". coba perhatikan
                            contoh dibawah ini :
                            <br>
                            <div class="contohbox border" style="border-radius: 15px">
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        #include <iostream>
                                            using namespace std;
                                            
                                            int main() {
                                                int i = 7;
                                                if (i = 7){
                                                cout << "ini adalah angka tujuh";
                                                return 0;
                                                }
                                            }
                                    </pre>
                                </div>
                            </div>
                            <br>
                            Jika dijalankan, program itu akan menghasilkan output :
                            <div class="contohbox border" style="border-radius: 15px">
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        ini adalah angka tujuh
                                    </pre>
                                </div>
                            </div>
                        </p>
                                    
                        <p>IF-ELSE bisa dianologikan dengan "jika memenuhi kondisi, lakukan A. jika tidak, lakukan B"
                        <br>
                        Jika di buat dalam kode C++, kondisi ini bisa dibuat menjadi : <br>
                        <div class="contohbox border" style="border-radius: 15px">
                            <div class="box m-5 bg-light" >
                                <pre>
                                    #include <iostream>
                                        using namespace std;
                                        
                                        int main() {
                                            int i = 5;
                                            
                                            if (i == 7){
                                                cout << "ini adalah angka tujuh";
                                            }else{
                                                cout<< "ini bukan angka lima";
                                            }
                                            return 0;
                                        }
                                </pre>
                            </div>
                        </div>
                        <br>
                        Jika dijalankan, program itu akan menghasilkan output :
                        <div class="contohbox border" style="border-radius: 15px">
                            <div class="box m-5 bg-light" >
                                <pre>
                                    ini bukan angka lima
                                </pre>
                            </div>
                        </div>
                    </p>
                    <b style="font-size: 20px">IF...ELSE IF...ELSE</b>
                    <p>
                        Penerapan konstruksi ini, dapat direpresentasikan seperti "jika sesuatu 
                        memenuhi kondisi, lakukan A. jika tidak, lakukan pengecekan. apabila sesuati 
                        dengan kondisi B, lakukan B. jika tidak sama sekali, lakukan C"
                        <br>
                        jika dibuat dalam bentuk kode C++, kondisi ini bisa dibuat menjadi :
                        <br>
                        <p>
                            IF-ELSE bisa dianologikan dengan "jika memenuhi kondisi, lakukan A. jika tidak, lakukan B"
                            <br>
                            Jika di buat dalam kode C++, kondisi ini bisa dibuat menjadi : <br>
                            <div class="contohbox border" style="border-radius: 15px">
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        #include <iostream>
                                            using namespace std;
                                            
                                            int main() {
                                                int i = 5;
                                                
                                                if (i == 3){
                                                    cout << "ini adalah angka tujuh";
                                                }else if (i > 5){
                                                    cout<< "angka ini lebih besar dari lima";
                                                }else{
                                                    cout<<"angka ini lebih kecil dari lima";
                                                }
                                                return 0;
                                            }
                                    </pre>
                                </div>
                            </div>
                            <br>
                            Jika dijalankan, program itu akan menghasilkan output :
                            <div class="contohbox border" style="border-radius: 15px">
                                <div class="box m-5 bg-light" >
                                    <pre>
                                        angka ini lebih kecil dari lima
                                    </pre>
                                </div>
                            </div>
                    
                    </p>'
        ]);
    }
}
