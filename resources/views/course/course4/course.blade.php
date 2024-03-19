@extends('layout.course')

@section('instruction')
<h2 class="center m-2">Tugas</h2>
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
</p>



@endsection


@section('code box')

@include('partials.compiler')

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success!!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Kode anda berhasil!!!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="/course-5"><button type="button" class="btn btn-secondary bg-danger">NEXT</button></a>
        </div>
      </div>
    </div>
  </div>




<script>


    $(document).ready(function () {
        $('form').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    $('#output').val(JSON.stringify(response.output)) ;

                    if (response.output === "Kecepatan: 24 km/jam") {
                        $('#successModal').modal('show');
                    }
                }
            });
        });
    });
    
</script>
@endsection