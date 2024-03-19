@extends('layout.course')

@section ('page title')

<h2>Tugas Praktek</h2>
<p>Silahkan ikuti instruksi</p>

@endsection

@section('instruction')
<h2 class="center m-2">Tugas</h2>
<p> 
    Bapak membeli motor pada tanggal 1 juni 2023. Bapak berganti oli setiap 40 hari sekali.  
    tanggal berapa motor terakhir ganti oli di bulan desember?
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
          <a href="/"><button type="button" class="btn btn-secondary bg-danger">NEXT</button></a>
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

                    if (response.output === "Tanggal terakhir penggantian oli di bulan Desember: 9 Desember 2022") {
                        $('#successModal').modal('show');
                    }
                }
            });
        });
    });
    
</script>
@endsection