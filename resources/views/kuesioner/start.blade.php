@extends('layout.main')

@section('container')

<div class="row justify-content-center mt-5 bg-secondary">
    <div class="col lg-5">


        <main class="kuesioner p-4 m-4 bg-light" style="border-radius: 15px">
            <h1 class="h3 mb-3 fw-normal text-center">Mini Quiz</h1>
            <form action="/kuesioner" method="post">
            
                @csrf
                <div class="quiz m-3" id="quiz1">
                    <h5>1. mana yang akan mengeluarkan output tanpa error?</h5>
                    <div class="options">
                        <label><input type="radio" name="q1" value="a"> A. 
                             <pre  class="border">
                                #include < iostream >
                                    using namespace std;
                                    
                                    int main() {
                                        cout << Hello World!;
                                        return 0;
                                    }
                             </pre>
                        </label>
                        <label><input type="radio" name="q1" value="b"> B.
                            <pre class="border">
                               #include < iostream >
                                   using namespace std;
                                   
                                   int main() {
                                       cout >> "Hello World!";
                                       return 0;
                                   }
                            </pre>
                       </label>
                       <label><input type="radio" name="q1" value="c"> C.
                        <pre class="border">
                           #include < iostream >
                               
                               int main() {
                                   std::cout << "Hello World!";
                                   return 0;
                               }
                        </pre>
                        </label>
                        <label><input type="radio" name="q1" value="d"> D.
                            <pre class="border">
                               #include < iostream >
                                   using namespace std;
                                   
                                   int main() {
                                       std::cout << "Hello World!";
                                       return 0;
                                   }
                            </pre>
                       </label>
                    </div>
                </div>

                <div class="quiz m-3" id="quiz2">
                    <h5>2. Mana yang bisa mengeluarkan output tanpa eror?</h5>
                    <div class="options">
                        <label><input type="radio" name="q1" value="a"> A. 
                             <pre  class="border">
                                #include < iostream >
                                    using namespace std;
                                    
                                    int main() {
                                        cout << Saya sedang belajar pemrograman dasar;
                                        return 0;
                                    }
                             </pre>
                        </label>
                        <label><input type="radio" name="q1" value="b"> B.
                            <pre class="border">
                               #include < iostream >
                                   using namespace std;
                                   
                                   int main() {
                                       cout << "Saya sedang belajar pemrograman dasar";
                                       return 0;
                                   }
                            </pre>
                       </label>
                       <label><input type="radio" name="q1" value="c"> C.
                        <pre class="border">
                            #include < iostream >
                            using namespace std;
                            
                            int main() {
                                cout >> "Saya sedang belajar pemrograman dasar";
                                return 0;
                            }
                        </pre>
                        </label>
                        <label><input type="radio" name="q1" value="d"> D.
                            <pre class="border">
                                #include < iostream >
                                using namespace std;
                                
                                int main() {
                                    cout >> "Saya sedang belajar pemrograman dasar":
                                    return 0;
                                }
                            </pre>
                       </label>
                    </div>
                </div>

                <div class="quiz m-3 p-3" id="quiz3">
                                                
                        <h5>
                            3. Output apa yang akan dikeluarkan dari kode dibawah?

                            <pre  class="border m-3 p-2">
                                #include < iostream >
                                    using namespace std;
                                    
                                    int main() {
                                        cout << "Hello World!";
                                        return 0;
                                    }
                                </pre>
                           
                        </h5>
                    <div class="options">
                        <label class="col"><input type="radio" name="q1" value="a"> A. </label>
                        <label class="col"><input type="radio" name="q1" value="b"> B.</label>
                        <label class="col"><input type="radio" name="q1" value="c"> C.</label>
                        <label class="col"><input type="radio" name="q1" value="D"> D.</label>
                    </div>
                </div>

                <div class="quiz m-3 p-3" id="quiz4">
                                                
                    <h5>
                        4. Output apa yang akan dikeluarkan dari kode dibawah?

                        <pre  class="border m-3 p-2">
                            #include < iostream >
                                using namespace std;
                                
                                int main() {
                                    cout << "Hello World!";
                                    return 0;
                                }
                            </pre>
                       
                    </h5>
                    <div class="options">
                        <label class="col"><input type="radio" name="q1" value="a"> A. </label>
                        <label class="col"><input type="radio" name="q1" value="b"> B.</label>
                        <label class="col"><input type="radio" name="q1" value="c"> C.</label>
                        <label class="col"><input type="radio" name="q1" value="D"> D.</label>
                    </div>
                </div>

                <div class="quiz" id="quiz5">
                    <h5>5. temukan berapa banyak mengisi oli dengan ketentuan:</h5>
                    <p>Banyaknya oli adalah... <br>
                    B adalah... <br>
                    </p>
                    @include('partials.compiler')
                </div>
            
            </form>
        </main>
    </div>
</div>