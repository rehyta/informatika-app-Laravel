<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instruction;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instruction::create([
            'course_id' => 1,
            'soal'=>'',
            'jawaban'=>''
        ]);

        Instruction::create([
            'course_id' => 2,
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
            'jawaban'=>''
        ]);

        Instruction::create([
            'course_id' => 3,
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
            'jawaban'=>''
        ]);

        Instruction::create([
            'course_id' => 4,
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
            'jawaban'=>''
        ]);

        Instruction::create([
            'course_id' => 5,
            'soal'=>'
                <p> Andi mendapat nilai 73 dalam ujiannya. Sementara, 
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
            'jawaban'=>''
        ]);
    }
}
