@extends('layout.materi')

@section('page title')

<div class="container md-4 m-3">
    <div class="opening">
        <h2 style="font-size: 32px">Operator dan Aritmatika</h2>
        <p>Kita sudah belajar bagaimana membuat variable. Sekarang, bagaimana cara menerapkannya itu dalam <a href="#operator">variable,</a> dan <a href="#aritmatika">aritmatika</a>?
        </p>
    </div>
@endsection
@section('materi')
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
    
    <form action="/course-4/livecode">
        <p>Bagaimana jika kita mencobanya? klik tombol <b>Next</b> untuk lanjut ke bagian berikutnya</p>
        <div class="d-grid gap-2 d-md-flex">
            <button class="btn btn-primary me-md-2 bg-danger" id="nextSection" type="submit">NEXT</button>
        </div>
    </form>
</div>

@endsection