@extends('layout.materi')

@section('page title')
<div class="opening">
    <h2 style="font-size: 32px">Kondisi</h2>
    <p>Kita sudah belajar bagaimana mengoperasikan variable. Sekarang, bagaimana cara menerapkannya itu dalam kondisi tertentu?
    </p>
</div>
@endsection
@section('materi')

    <div style="font-size: 16px">
    <p>
        Ketika kita dihadapkan dengan pengambilan suatu keputusan, tentunya kita harus evaluasi terlebih dahulu pilihan-pilihan yang ada menyesuaikan kondisi.
        di dalam bahasa pemrograman, pengambilan keputusan juga bisa menggunakan penerapan konsep <i>if-else.</i> konsep ini berlaku pada hampir
        semua bahasa pemrograman.</p>
    <p>
        Untuk itu pada bagian kondisi, kita akan mempelajari percabangan yang terdiri atas 3 bagian, yaitu :</p>
    <p>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><b style="font-size: 20px">IF</b>
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
        </li>
        <li class="list-group-item"><b style="font-size: 20px">IF-ELSE</b>
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
        </li>
        <li class="list-group-item"><b style="font-size: 20px">IF...ELSE IF...ELSE</b>
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
            
            </p>
        </li>
    </ul>
    </div>

    <div class="contoh"></div>

    <div class="tugas"></div>

    <form action="/course-5/livecode">
        <p>Bagaimana jika kita mencobanya? klik tombol <b>Next</b> untuk lanjut ke bagian berikutnya</p>
        <div class="d-grid gap-2 d-md-flex">
            <button class="btn btn-primary me-md-2 bg-danger" id="nextSection" type="submit">NEXT</button>
        </div>
    </form>
</div>

@endsection